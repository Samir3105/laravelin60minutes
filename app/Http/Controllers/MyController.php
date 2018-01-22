<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function myFunction(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|min:2'
        ]);
        $name = $request->name;

        if (!is_numeric($name))
        {
            return view('data', compact('name'));
        }
        else
        {
            echo 'Try again';
            return view('formular');
        }

    }
}
