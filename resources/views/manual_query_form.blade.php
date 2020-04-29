@extends('layout.site')

@section('conteudo')
    <div class="text-center">
        <h2>Preencha os dados abaixo para realizar a query manualmente</h2>

        <form method="post" action="{{route('manualQueryResults')}} "style="margin: auto">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">Qual será o endpoint? (https://dbpedia.org/sparql)</label>
                <input style="width: 80%; margin: auto" type="text" class="form-control" name="endpoint" aria-describedby="emailHelp" placeholder="Digitar endpoint">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Digite sua Query (select * where { ?s ?p ?o. }  LIMIT 15)</label>
                <input style="height: 200px; width: 80%; margin: auto" type="text" class="form-control" name="querymanual" placeholder="query">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
@endsection
