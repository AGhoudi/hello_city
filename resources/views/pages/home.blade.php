@extends('base')

@section('title')
Hello City
@endsection

@section('content')
        <h1>Hello from France!</h1>

        <p>It's currently {{date('H:i:s')}}.</p>
@endsection
