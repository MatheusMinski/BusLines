@extends('layout.site')

@section('conteudo')
    <div class="text-center">
        <h2>Linhas e horários para a Campo Real:</h2>

        <div id="table-container" class="row" style="text-align: center; width: 80%; margin: auto; font-size: small">
            <table class="table" style="text-align: center">
                <thead>
                <tr>
                    @foreach ($rows["result"]["variables"] as $variable)
                        <th style="text-align: center">{{$variable}}<th>
                    @endforeach
                </tr>
                </thead>
                <tbody>

                @foreach ($rows["result"]["rows"] as $row)
                    <tr>
                        @foreach ($rows["result"]["variables"] as $variable)
                            <td>{{$row[$variable]}}<td>
                        @endforeach
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>

    </div>
@endsection
