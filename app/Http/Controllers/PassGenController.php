<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use TwentySeven\Password\Generator;

    class PassGenController extends Controller
    {


        public function xkcd(Request $request)
        {
            $this->validate($request, [
                'input1' => 'numeric|max:8',

            ]);

            $input1 = $request->input('input1', '1');
            $number = $request->has('number');
            $symbol = $request->input('symbol');
            $string = Generator::generateEn($input1, '');
            $randNum = rand(1, 1000);
            $combo = $symbol . $string . $randNum;


            if ($request->has('number')) {
                $result = $randNum . $string;
            } elseif ($symbol) {
                $result = $string . $symbol;
            } else {
                $result = $string;
            }


            return view('Project-3.xkcd')->with([
                'input1' => $input1,
                'number' => $request->has('number'),
                'symbol' => $symbol,
                'result' => $result,
                'combo' => $combo,
            ]);


        }
    }