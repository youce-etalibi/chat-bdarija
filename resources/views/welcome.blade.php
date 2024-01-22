@extends('tamplate')
@section('title-document') Welcom @endsection
@section('content-app')
    @if(session()->has('success'))
    <div class="flashbagParent">
        <x-flashbag message="{{ session('success') }}"/>
    </div>
    @endif
    <div class="app">
        <div class="parentImages">
            <img src="./chatBdaija-logo.png" alt="Chat Bdarija">
        </div>
        <div class="parentText">
            <div class="parentLinks">
            <h1>ca se passe maintenant</h1>
            <h4>inscrivez-vous.</h4>
                    <a href="https://accounts.google.com/v3/signin/identifier?authuser=0&continue=https%3A%2F%2Fmyaccount.google.com%2F%3Ftab%3Dkk&ec=GAlAwAE&hl=ar&service=accountsettings&flowName=GlifWebSignIn&flowEntry=AddSession&dsh=S1930377043%3A1704367861763117&theme=glif" target='_blanka' class="a-link-socialmedia"><div><i class='bx bxl-google'></i>  S'inscrire avec Google</div></a>
                    <br>
                    <a href="https://appleid.apple.com/sign-in" target='_blanka' class="a-link-socialmedia"><div><i class='bx bxs-cloud'></i>  S'iscrire avec Appel</div></a>
                    <br>
                    <a href="{{ route('welcome.login') }}" class="a-link-socialmedia"><i class='bx bxs-user'></i>  Se connecter</a>
                    <br>
                <table>
                    <tr>
                        <td><div class="divhr"></div></td>
                        <td class="Ortd">Or</td>
                        <td><div class="divhr"></div></td>
                    </tr>
                </table>
                <a href="{{ route('welcome.cree-compte') }}" class="a-link-socialmedia-cree"><i class='bx bx-plus-circle'></i> Crée d'un compte</a>
            </div>
        </div>
    </div>
@endsection
