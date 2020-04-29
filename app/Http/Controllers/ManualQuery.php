<?php

namespace App\Http\Controllers;

use BorderCloud\SPARQL\SparqlClient;
use Illuminate\Http\Request;

class ManualQuery extends Controller
{
    public function manualQueryResult(Request $req)
    {
        $dados = $req->all();

        require_once ('../vendor/autoload.php');

        $endpoint = $dados['endpoint'];
        $sc = new SparqlClient();
        $sc->setEndpointRead($endpoint);
        $q = $dados['querymanual'];
        $rows = $sc->query($q, 'rows');
        $err = $sc->getErrors();
        if ($err) {
            return view('erro_query', compact('err'));
            //throw new Exception(print_r($err, true));
        }

        return view('manual_query_results', compact('rows'));

    }

    public function manualQueryView()
    {
        return view('manual_query_form');
    }
}
