    @extends('layouts.master')

    @section('title')

    @endsection

    @push('head')

        <link href='/css/passwordgenerator/passwordgenerator.css' type='text/css' rel='stylesheet'>
    @endpush

    @section('content')
        @include('modules.nav')
        <div class='container'>
            <h1>Password Generator</h1>
            <form class='form' method='GET' action='/passwordgenerator'>


                <label for='input1'>Number of Words</label><br>

                <input type='text' id='input1' name='input1' value="{{old('input1','1')}}"/>
                <p class='detail'>* Required field</p>
                @include('modules.error-field', ['field' => 'input1'])
                <br>
                <label>OPTIONS</label>
                <br>
                <label for='number'> <input type='checkbox' name='number' {{ ($number) ? 'checked' : '' }} /> Include a
                    Number</label>
                <br>
                <label for='symbol'>Add a Symbol</label><br>
                <select class='dropdown' name='symbol'>
                    <option name='symbol' value=''></option>
                    <option name='symbol' value='!'>!</option>
                    <option name='symbol' value='@'>@</option>
                    <option name='symbol' value='#'>#</option>
                    <option name='symbol' value='$'>$</option>
                    <option name='symbol' value='%'>%</option>
                    <option name='symbol' value='^'>^</option>
                    <option name='symbol' value='&'>&</option>
                    <option name='symbol' value='*'>*</option>
                    <option name='symbol' value='?'>?</option>
                    <option name='symbol' value='|'>|</option>
                </select>
                <br>

                <button type='submit' value='generatepassword' class='button'>Generate Password</button>
            </form>
            @if($input1 == 1)
                <p>Please add a number to the required field to generate your code.</p>
            @elseif($number && $symbol)
                {{$combo}}
            @else
                <p>Your Generated Code is </p>

                <div id='answer'>{{$result}}</div>


            @endif

        </div>



    @endsection
