<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tests;

class testsController extends Controller
{
    public function index()
    {
        return view('tests.tests');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'card_name' =>'required',
            'card_no' =>'required|numeric|min:16',
            'exp_month' =>'required|numeric|min:2',
            'exp_year' =>'required|numeric|min:4',
            'cvv' =>'required|numeric|min:3'
        ]);

        $test = new tests;
        $test->card_name = $request['card_name'];
        $test->card_no = $request['card_no'];
        $test->exp_month = $request['exp_month'];
        $test->exp_year = $request['exp_year'];
        $test->cvv = $request['cvv'];
        $test->save();

        return redirect('test');
    }
}
