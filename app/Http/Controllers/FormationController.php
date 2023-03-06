<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function formation()
    {
        return view('Formation');
    }

    public function type_formation()
    {
        return view('Type');
    }
}

