@extends('layouts.base', ['title' => 'About Us | Hello City'])

@section('content')
        <img src="{{ asset('images/link1986.png') }}" alt="link1986-avatar" class="my-12 rounded-full shadow-md">

        <h2 class="mb-5 text-gray-700">Built with <span class="text-pink-500">&hearts;</span> by Link1986.</h2>

        <p><a href="/" class="text-indigo-500 hover:text-indigo-600 underline">Revenir à la page d'accueil</a></p>
@endsection
