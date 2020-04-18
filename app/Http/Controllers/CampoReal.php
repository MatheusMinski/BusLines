<?php

namespace App\Http\Controllers;

use BorderCloud\SPARQL\SparqlClient;
use Illuminate\Http\Request;

class CampoReal extends Controller
{
    /*public function querryCampoReal()
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
        return view('campo_real_route', compact('rows'));
    }*/
}
