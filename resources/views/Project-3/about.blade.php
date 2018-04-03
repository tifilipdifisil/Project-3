    @extends('layouts.master')

    @section('title')
        About
    @endsection

    @push('head')
        {{-- css for about page --}}
        <link href='/css/project3/about.css' type='text/css' rel='stylesheet'>
    @endpush

    @section('content')
        @include('modules.nav')
    @endsection