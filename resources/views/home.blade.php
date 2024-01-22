@extends('tamplate')
@section('title-document') Home @endsection
@section('content-app')
    <div class="app">
        <x-navbar :compte="$compte"/>
        <x-sidebar :compte="$compte"/>
        <x-postContent :compte="$compte" :posts="$posts"/>
        <x-publishedContent :posts="$posts"/>

    </div>
@endsection
