<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BorderCloud\SPARQL\SparqlClient;

class Welcome extends Controller
{
    public function index(){
        require_once ('../vendor/autoload.php');

        $endpoint = "http://lod.unicentro.br/sparql/http://lod.unicentro.br/Smart/Guarapuava/";
        $sc = new SparqlClient();
        $sc->setEndpointRead($endpoint);
        $q = "prefix gtfs: <http://vocab.gtfs.org/terms#>
                prefix time: <http://www.w3.org/2006/time#>
                prefix SC: <http://lod.unicentro.br/SmartGuarapuava/RotasOnibus/>

                select ?Agencia ?Rota where {?nome gtfs:shortName ?Rota . ?teste2 rdf:type gtfs:Agency; foaf:name ?Agencia . }";
        $rows = $sc->query($q, 'rows');
        $err = $sc->getErrors();
        if ($err) {
            print_r($err);
            throw new Exception(print_r($err, true));
        }

        require_once ('../vendor/autoload.php');

        $endpoint2 = "http://lod.unicentro.br/sparql/http://lod.unicentro.br/Smart/Guarapuava/";
        $sc2 = new SparqlClient();
        $sc2 ->setEndpointRead($endpoint2);
        $q2 = "prefix gtfs: <http://vocab.gtfs.org/terms#>
prefix time: <http://www.w3.org/2006/time#>
prefix SC: <http://lod.unicentro.br/SmartGuarapuava/RotasOnibus/>

select ?Ponto ?Imagens where {?teste rdf:type gtfs:Stop; foaf:name ?Ponto . ?recurso rdf:type gtfs:Stop; foaf:depiction ?Imagens . }";

        $rows2 = $sc2->query($q2, 'rows');
        $err2 = $sc2 ->getErrors();
        if ($err2) {
            print_r($err2);
            throw new Exception(print_r($err2, true));
        }

        return view('index', compact('rows', 'rows2'));
    }

}
