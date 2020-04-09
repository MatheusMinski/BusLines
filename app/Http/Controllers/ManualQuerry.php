<?php

namespace App\Http\Controllers;

use BorderCloud\SPARQL\SparqlClient;
use Illuminate\Http\Request;

class ManualQuerry extends Controller
{
    public function manualQuerryResult(Request $req)
    {
        $dados = $req->all();

        require_once ('../vendor/autoload.php');

        $endpoint = $dados['endpoint'];
        $sc = new SparqlClient();
        $sc->setEndpointRead($endpoint);
        //$sc->setMethodHTTPRead("GET");
        //$q = "select ?p ?o  where { <http://dbpedia.org/resource/Federal_University_of_Pernambuco> ?p ?o. }  LIMIT 15";
        //$q = "select * where { ?s ?p ?o. }  LIMIT 15";
        $q = $dados['querrymanual'];
        $rows = $sc->query($q, 'rows');
        $err = $sc->getErrors();
        if ($err) {
            print_r($err);
            throw new Exception(print_r($err, true));
        }

        return view('manual_querry_results', compact('rows'));

    }

    public function manualQuerryView()
    {
        return view('manual_querry_form');
    }
}
