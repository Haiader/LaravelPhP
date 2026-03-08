<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class app extends Controller
{
    /**
     * Show the calculator page.
     */
    public function index(): View
    {
        return view('calculator');
    }

    /**
     * Handle the calculation and return the result.
     */
    public function calculate(Request $request): View
    {
        $request->validate([
            'num1'      => ['required', 'numeric'],
            'num2'      => ['required', 'numeric'],
            'operation' => ['required', 'in:add,subtract,multiply,divide'],
        ]);

        $num1      = (float) $request->input('num1');
        $num2      = (float) $request->input('num2');
        $operation = $request->input('operation');

        $result = match ($operation) {
            'add'      => $num1 + $num2,
            'subtract' => $num1 - $num2,
            'multiply' => $num1 * $num2,
            'divide'   => $num2 !== 0.0
                            ? $num1 / $num2
                            : 'Cannot divide by zero',
        };

        return view('calculator', compact('result'));
    }
}
