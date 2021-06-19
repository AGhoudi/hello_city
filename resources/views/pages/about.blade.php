@extends('base')

@section('title', 'About Us | ' . config('app.name'))

@section('content')
        <img src="{{ asset('images/link1986.png') }}" alt="link1986-avatar">

        <p>Built with &hearts; by Link1986.</p>

        <p><a href="/">Revenir à la page d'accueil</a></p>
@endsection
