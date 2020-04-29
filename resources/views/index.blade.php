@extends('layout.site')

@section('conteudo')
<div class="text-center">
    <h2>Seja bem vindo!</h2>
    <h4>Esse site tem como objetivo divulgar os dados das rotas públicas de ônibus de algumas universidades.</h4>
    <h4>Utilizando o menu superior podemos acessar essas informações, vá em frente!</h4>

    <div class="text-center">
        <h2 style="padding-top: 7vh">Rotas Disponíveis neste site:</h2>

        <div id="table-container" class="row" style="text-align: center; width: 80%; margin: auto; font-size: small; padding-top: 5vh">
            <table class="table" style="text-align: center; width: 50%; margin: auto">
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

        <h2 style="padding-top: 7vh">Pontos Disponíveis neste site:</h2>

        <div id="table-container" class="row" style="text-align: center; width: 80%; margin: auto; font-size: small; padding-top: 5vh">
            <table class="table" style="text-align: center; width: 50%; margin: auto">
                <thead>
                <tr>
                    @foreach ($rows2["result"]["variables"] as $variable)
                        <th style="text-align: center">{{$variable}}<th>
                    @endforeach
                </tr>
                </thead>
                <tbody>

                @foreach ($rows2["result"]["rows"] as $row)
                    <tr>
                        @foreach ($rows2["result"]["variables"] as $variable)
                            <td>{{$row[$variable]}}<td>
                        @endforeach
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>

</div>

@endsection


