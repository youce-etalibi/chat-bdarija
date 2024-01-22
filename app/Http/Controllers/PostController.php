<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;

class PostController extends Controller
{
    public function store(PostRequest $request){

        // dd($request->id);

        if ($request->hasFile('images')) {
            $images = $request->file('images')->store('postsIMG', 'public');
        }else{
            $images = '';
        }
        Post::create([
            "body" => $request->body,
            "images" => $images,
            "account_id" => $request->id,
        ]);

        return redirect()->route('welcome.home')->with('succesPost', 'Votre post a ete bien publie.');

    }
}
