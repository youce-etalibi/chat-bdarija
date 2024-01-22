@extends('tamplate')
@section('title-document') Login @endsection
@section('content-app')
    @if(session()->has('succesCreate'))
        <div class="flashbagParent">
            <x-flashbag message="Votre compte bien edite"/>
        </div>
    @endif
    @if(session()->has('successLogout'))
        <div class="flashbagParent">
            <x-flashbag message="Bien deconnecter"/>
        </div>
    @endif
    @error('incorrect')
        <div class="flashbagParent">
            <div class="flashbag-error">
                <p><i class='bx bx-error-circle'></i> {{$message}}</p>
            </div>
        </div>
    @enderror
    <div class="app">

        <div class="parentImages">
            <img src="./webImg/login.jpg" alt="Chat Bdarija">
        </div>
        <div class="parentFormLogin">
            <form action=" {{ route('welcome.login.store') }} " class="formLogin" method="POST">
                @csrf
                <div class="parentImgLogin">
                    <img src="./chatBdaija-logo.png" alt="Chat Bdarija">
                </div>
                <div class="parentInputs">
                    <label for="email">Email</label><br>
                    <input type="text" name="email" id="email" placeholder="Entre votre email" class="inputLogin" value="{{old('email')}}"> <br>
                    @error('email')
                        <span class="p-Error">{{$message}}</span>
                        <br>
                    @enderror
                    <label for="password">Password</label><br>
                    <input type="password" name="password" id="password" placeholder="Entre votre password" class="inputLogin">
                    <br>
                    @error('password')
                    <span class="p-Error">{{$message}}</span>
                    <br>
                    @enderror

                    <input type="submit" value="Se connecter" id="LoginSubmit">
                    <p><a href=""> Mot de pass oublie ? </a>🤔 </p>
                </div>
            </form>
        </div>
    </div>
@endsection
