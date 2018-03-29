@extends('layouts.master')

@section('title')

@endsection

@push('head')
    {{-- Page specific CSS includes should be defined here; this .css file does not exist yet, but we can create it --}}
    <link href='/css/passwordgenerator/passwordgenerator.css' type='text/css' rel='stylesheet'>
@endpush

@section('content')

    <h1>Password Generator</h1>
    <form class='form' method='GET' action='/passwordgenerator'>
        <label>Number of Words</label><br>
        <p class='detail'>* Required field</p>
        <input type="text" id="input1" name='input1' value="{{old('input1')}}"/>
        @include('modules.error-field', ['field' => 'input1'])
        <br>
        <label>OPTIONS</label>
        <br>
        <label> <input type='checkbox' name='number' {{ ($number) ? 'checked' : '' }} /> Include a Number</label>
        <br>
        <label>Add a Symbol</label><br>
        <select class='dropdown' name='symbol'>
            <option value=''></option>
            <option value='!'>!</option>
            <option value='@'>@</option>
            <option value='#'>#</option>
            <option value='$'>$</option>
            <option value='%'>%</option>
            <option value='^'>^</option>
            <option value='&'>&</option>
            <option value='*'>*</option>
            <option value='?'>?</option>
            <option value='|'>|</option>
        </select>
        <br>

            <button type='submit' value='passwordgenerator' class='button'>Generate Password</button>
    </form>
{{$input1}}
    {{$number}}
    {{$symbol}}


@endsection