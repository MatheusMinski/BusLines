<?php

namespace App\Http\Controllers;

use BorderCloud\SPARQL\SparqlClient;
use Illuminate\Http\Request;

class Cedeteg extends Controller
{
    public function pontosCedeteg()
    {
        return view('cedeteg_route');
    }
}
