<?php

namespace App\Http\Controllers;

use App\Models\Compte;
use App\Models\Post;
use App\Models\PostLikes;

use Illuminate\Http\Request;

use App\Http\Requests\CreeCompteRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\PasswordChangeRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;



class CompteController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function showLogin(){
        return view('login');
    }
    public function storeLogin(LoginRequest $request){
        $credentials = ["email" => $request->email, "password" => $request->password];
        if(Auth::attempt($credentials)){
            if(auth()->user()->deleted_at){
                auth()->logout();
                return back()->withErrors([
                    'incorrect' => 'Votre compte est supprime.'
                ]);
            }
            $request->session()->regenerate();
            return redirect()->route('welcome.home')->with('successConnect', 'Bien Connecter');
        } else {
            return back()->withErrors([
                'incorrect' => 'Email ou mot de passe incorrect'
            ]);
        }
    }


    public function logout(){
        Session::flush();
        Auth::logout();
        return to_route('welcome.login')->with('successLogout', 'Bien deconnecter');
    }
    public function showCreeCompt(){
        return view('creeCompte');
    }
    public function storeCreeCompt(CreeCompteRequest $request){
        Compte::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'nom_utilisateur' => $request->nom_utilisateur,
            'email' => $request->email,
            'date_naissance' => $request->date_naissance,
            'localisation' => $request->localisation,
            'password' => Hash::make($request->mot_de_pass),
            'bio' =>  '',
        ]);
        return redirect()->route('welcome.login')->with('succesCreate', 'Votre compte a ete bien cree.');
    }
    public function show()
    {
        $compte = Compte::find(Auth::id());
        $posts = Post::with('compte')->get()->reverse();
        return view('home', compact('compte', 'posts'));
    }
    public function likePost(Request $request, Post $post)
    {
        $user = auth()->user();
        if ($post->likes()->where('compte_id', $user->id)->exists()) {
            $post->likes()->detach($user->id);
            $post->decrement('likes');
            return redirect()->back()->with('success', 'Like removed successfully.');
        }
        $post->likes()->attach($user->id);
        $post->increment('likes');
        return redirect()->back()->with('success', 'Post liked successfully.');
    }
    public function showProfile(){
        $profile =Compte::find(Auth::user()->id);
        return view('profile', compact('profile'));
    }
    public function settings()
    {
        $profile = Compte::find(Auth::user()->id);
        $posts = Post::where('account_id', Auth::user()->id)->with('compte')->get()->reverse();
        return view('settings', compact('profile', 'posts'));
    }
    public function infoStore(Request $request, Compte $compte){
        $this->validate($request, [
            'nom' => 'required|string|max:50',
            'prenom' => 'required|string|max:50',
            'nom_utilisateur' => 'required|max:50',
            'email' => 'required|email|max:200',
            'date_naissance' => 'required|date',
            'localisation' => 'required|max:100',
            'image' => 'image|mimes:jpeg,png,jpg,svg|max:10480',
            'cover' => 'image|mimes:jpeg,png,jpg,svg|max:10480',
        ]);
        $compte->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'nom_utilisateur' => $request->nom_utilisateur,
            'date_naissance' => $request->date_naissance,
            'localisation' => $request->localisation,
            'bio' => $request->bio,
        ]);
        if ($request->hasFile('image')) {
            $compte->image = $request->file('image')->store('/profiles', 'public');
        }
        if ($request->hasFile('cover')) {
            $compte->cover = $request->file('cover')->store('/covers', 'public');
        }
        $compte->save();
        return redirect()->route('settings')->with('success', 'Votre compte a ete bien modifie.');
    }
    public function ChangeImage(Request $request, Compte $compte){
        if ($request->hasFile('ImageChange')) {
            $compte->image = $request->file('ImageChange')->store('/profiles', 'public');
        }
        $compte->save();
        return redirect()->route('settings')->with('success', 'Votre Image bien Change.');
    }
    public function download($compte)
    {
        $compte = Compte::findOrFail($compte);
        $filePath = storage_path('app/public/' . $compte->image);
        return response()->download($filePath, 'downloaded_image.jpg');
    }
    public function ChangePassword(PasswordChangeRequest $request, Compte $compte){
        if (!Hash::check($request->passwordAcuel, $compte->password)) {
            return redirect()->back()->withErrors([
                'MotDePassIncorrect' => 'Le mot de passe actuel est incorrect.',
            ]);
        } else {
            $compte->password = Hash::make($request->password);
            $compte->save();
            return redirect()->route('settings')->with('success', 'Votre mot de passe a ete bien change.');
        }
    }
    public function supprimeCompte(Request $request, Compte $compte){
        // dd($compte);
        PostLikes::where('compte_id', $compte->id)->delete();
        Post::where('account_id', $compte->id)->delete();
        Session::flush();
        Auth::logout();
        $compte->delete();
        return redirect()->route('welcome.')->with('success','Bien supprime.');
    }
}
