<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
       
        return view('index');
    }

    public function about()
    {
        $name = "LY Ly";
        $names = array("hoang",'ly', 'quan', 'huy', 'thanh');
        return view('about' , [
            'name' => $name,
            'names' => $names
        ]);
    }
}
