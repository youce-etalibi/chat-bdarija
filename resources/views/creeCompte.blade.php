@extends('tamplate')
@section('title-document') Cree un compte @endsection
@section('content-app')
    <div class="app">
        <div class="parentImages">
            <img src="./webImg/create.jpg" alt="Chat Bdarija">
        </div>
        <div class="parentFormLogin">
            <form action="{{ route('welcome.cree-compte.store') }}" class="formCree" method="POST">
                @csrf
                <div class="parentImgLogin">
                    <img src="./chatBdaija-logo.png" alt="Chat Bdarija">
                </div>
                <div class="parentInputs">
                    <table>
                        <tr>
                            <td>
                                <label for="nom">Nom</label>
                                <input type="text" name="nom" id="nom"  placeholder="Nom" class="inputLogin" value="{{ old('nom') }}">
                                @error('nom')
                                    <span class="p-Error">{{$message}}</span>
                                @enderror
                            </td>
                            <td>
                                <label for="prenom">Prenom</label>
                                <input type="text" name="prenom" id="prenom"   placeholder="Prenom" class="inputLogin" value="{{ old('prenom') }}">
                                @error('prenom')
                                    <span class="p-Error">{{$message}}</span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="nom_utilisateur">Nom d'utilisateur</label>
                                <input type="text" name="nom_utilisateur" id="nom-utilisateur"  placeholder="Nom d'utilisateur" class="inputLogin" value="{{ old('nom_utilisateur') }}">
                                @error('nom_utilisateur')
                                    <span class="p-Error">{{$message}}</span>
                                @enderror
                            </td>
                            <td>
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email"  placeholder="Email" class="inputLogin" value="{{ old('email') }}">
                                @error('email')
                                    <span class="p-Error">{{$message}}</span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="date-naissance">Date de naissance</label>
                                <input type="date" name="date_naissance" id="date-naissance"  placeholder="Date de naissance" class="inputLogin dateInput"  value="{{ old('date_naissance') }}">
                                @error('date_naissance')
                                    <span class="p-Error">{{$message}}</span>
                                @enderror
                            </td>
                            <td>
                                <label for="localisation">Localisation</label>
                                <input type="text" name="localisation" id="localisation"  placeholder="Localisation" class="inputLogin" value="{{ old('localisation') }}">
                                @error('localisation')
                                    <span class="p-Error">{{$message}}</span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="mot-de-pass">Mot de pass</label>
                                <input type="password" name="mot_de_pass" id="mot-de-pass"  placeholder="Mot de pass" class="inputLogin">
                                @error('mot_de_pass')
                                    <span class="p-Error">{{$message}}</span>
                                @enderror
                            </td>
                            <td>
                                <label for="mot-de-pass-confirme">Confirmer le mot de passe</label>
                                <input type="password" name="mot-de-pass-confirme" id="mot-de-pass-confirme"  placeholder="Confirmer le mot de passe" class="inputLogin">
                                @error('mot-de-pass-confirme')
                                    <span class="p-Error">{{$message}}</span>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" class="" value="Crée d'un compte" id="LoginSubmit">
                            </td>
                        </tr>
                    </table>
                </div>
            </form>
        </div>
    </div>
@endsection
