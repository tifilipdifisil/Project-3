    @extends('layouts.master')

    @push('head')
        {{-- CSS for the Welcome page --}}
        <link href='/css/welcome/welcome.css' type='text/css' rel='stylesheet'>
    @endpush
    @section('title')
        Project-3
    @endsection

    @section('content')
        <h1>--Project 3--</h1>
        <p>DWA-15 Spring 2018 Project-3 Password generator Created By Philippe Xantus</p>
        @include('modules.nav')

    @endsection