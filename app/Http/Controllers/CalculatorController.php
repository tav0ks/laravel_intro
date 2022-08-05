<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function calculatorPage()
    {
        return view('calculator');
    }

    public function sum(Request $request)
    {
        $requestData = $request->all();
        return $requestData['a'] + $requestData['b'];
    }
}
