<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TwentySeven\Password\Generator;

class PassGenController extends Controller
{
    public function xkcd(Request $request)
    {


        $input1 = $request->input('input1', null);
        $number = $request->has('number');
        $symbol = $request->input('symbol');

        echo Generator::generateEn('6');


        dump($request->all());

        return view('Project-3.xkcd')->with([
            'input1' => $input1,
            'number' => $request->has('number'),
            'symbol'=>$symbol,
        ]);
    }


}


