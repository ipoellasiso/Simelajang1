<?php

namespace App\Http\Controllers;

use App\Models\controluser;
use Illuminate\Http\Request;

class UserControlController extends Controller
{
    function index()
    {
        $data = controluser::class::all();
        return view ('user_control.index', compact(['data']));
    }
}
