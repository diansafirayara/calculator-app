<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    // CalculatorController.php

public function index()
{
    return view('calculator.index');
    /*return view('calculator.index');*/
}

public function calculate(Request $request)
{
    $number1 = $request->input('number1');
    $number2 = $request->input('number2');
    $operator = $request->input('operator');

    switch ($operator) {
        case '+':
            $result = $number1 + $number2;
            break;
        case '-':
            $result = $number1 - $number2;
            break;
        case '*':
            $result = $number1 * $number2;
            break;
        case '/':
            $result = $number1 / $number2;
            break;
        default:
            $result = "Invalid operator";
    }

    /*return view('calculator.index')->with('result', $result);*/
    return view('calculator.index')->with('result', $result);
}

}
