@extends('tamplate')
@section('title-document') Profile @endsection
@section('content-app')
    <div class="parentProfile">
        <a href="{{ route('welcome.home') }}" class="btnBack"><i class='bx bx-arrow-back'></i></a>
        <div class="parentInfoProfile">
            <img src="{{ asset($profile->image) }}" alt="Profile" class="imgProfileProfile" width="40px">
            <h4>{{ $profile->prenom }} {{ $profile->nom }}</h4>
            <h6>{{ $profile->nom_utilisateur }}</h6>
        </div>
    </div>
@endsection
