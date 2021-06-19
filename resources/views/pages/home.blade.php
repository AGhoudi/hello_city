@extends('base')

@section('title')

@section('content')
        <img src="{{ asset('images/France.png') }}" alt="France-flag" />

        <h1>Hello from France!</h1>

        <p>It's currently {{date('H:i:s')}}.</p>
@endsection
