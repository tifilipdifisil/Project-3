    @extends('layouts.master')

    @section('title')
        About
    @endsection

    @push('head')
        {{-- css for about page --}}
        <link href='/css/project3/about.css' type='text/css' rel='stylesheet'>
    @endpush
    @include('modules.nav')
    @section('content')

        <h3>Password Generator</h3>
        <p>Will generate a random phrase of common words up to 8 characters. Additional features are: a random number
             and a special character can be added.
        </p>


    @endsection