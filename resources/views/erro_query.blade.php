@extends('layout.site')

@section('conteudo')

<h1>Houve algum erro com a query, tente novamente.</h1>

@foreach ($err as $variable)
    <th style="text-align: center">{{$variable}}<th>
@endforeach

@endsection
