@extends('layout.site')

@section('conteudo')
    <div class="text-center">
        <h2>Preencha os dados abaixo para realizar a querry manualmente</h2>

        <form method="post" action="{{route('manualQuerryResults')}}">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">Qual será o endpoint? (https://dbpedia.org/sparql)</label>
                <input type="text" class="form-control" name="endpoint" aria-describedby="emailHelp" placeholder="Enter endpoint    ">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Digite sua Querry (select * where { ?s ?p ?o. }  LIMIT 15)</label>
                <input type="text" class="form-control" name="querrymanual" placeholder="querry">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
@endsection
