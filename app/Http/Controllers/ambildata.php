<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ambildata;
use Illuminate\support\Facades\Http;

class ambildataController extends Controller
{
    //
    public function store(){
        $api_url = "http://127.0.0.1:8000/api/opd";;

       

        print_r($response);
        die;
    }
}
