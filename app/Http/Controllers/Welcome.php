<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BorderCloud\SPARQL\SparqlClient;

class Welcome extends Controller
{
    public function index(){
        return view('index');
    }
}
