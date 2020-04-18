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

    public function querryCedeteg($nomePonto){

        require_once ('../vendor/autoload.php');

        $endpoint = "http://lod.unicentro.br/sparql/http://lod.unicentro.br/Smart/Guarapuava/";
        $sc = new SparqlClient();
        $sc->setEndpointRead($endpoint);
        $q = "prefix gtfs: <http://vocab.gtfs.org/terms#>
              prefix time: <http://www.w3.org/2006/time#>
              prefix SC: <http://lod.unicentro.br/SmartGuarapuava/RotasOnibus/>
              select ?Nome ?Hora where { ?recurso foaf:name ".$nomePonto."; SC:hasTime ?teste . ?teste gtfs:departureTime ?Hora . ?recurso2 gtfs:stop ?recurso . ?recurso2 gtfs:shortName ?Nome .  filter(?Nome = \"CEDETEG\")}
                order by (?Hora)";


        $rows = $sc->query($q, 'rows');
        $err = $sc->getErrors();
        if ($err) {
            print_r($err);
            throw new Exception(print_r($err, true));
        }

        return view('manual_querry_results', compact('rows'));
    }
}
