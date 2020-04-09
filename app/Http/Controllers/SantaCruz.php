<?php

namespace App\Http\Controllers;

use BorderCloud\SPARQL\SparqlClient;
use Illuminate\Http\Request;

class SantaCruz extends Controller
{
    public function querrySantaCruz()
    {
        require_once ('../vendor/autoload.php');

        $endpoint = "https://dbpedia.org/sparql";
        $sc = new SparqlClient();
        $sc->setEndpointRead($endpoint);
        //$sc->setMethodHTTPRead("GET");
        //$q = "select ?p ?o  where { <http://dbpedia.org/resource/Federal_University_of_Pernambuco> ?p ?o. }  LIMIT 15";
        $q = "select * where { ?s ?p ?o. }  LIMIT 15";
        $rows = $sc->query($q, 'rows');
        $err = $sc->getErrors();
        if ($err) {
            print_r($err);
            throw new Exception(print_r($err, true));
        }

        return view('santa_cruz_route', compact('rows'));

    }
}
