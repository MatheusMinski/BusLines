@extends('layout.site')

@section('conteudo')
    <div class="text-center">
        <h2>Pontos de ônibus que fazem parte da linha
            Santa Cruz e Campo Real, clique no mais próximo de você!</h2>

        <div class="container my-4">

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4">

                    <label>Saída Fonte</label>
                    <a href="{{route('querySantaCruz', ['nomePonto' => "\"SAÍDA FONTE\""])}}" ><img src="https://i.imgur.com/lnWRBGE.jpg" class="img-fluid mb-4" alt="Saída Fonte"></a>

                    <label>Faculdade Campo Real</label>
                    <a href="{{route('querySantaCruz', ['nomePonto' => "\"FACULDADE CAMPO REAL\""])}}" ><img src="https://i.imgur.com/AnYJQRU.jpg" class="img-fluid mb-4" alt="Faculdade Campo Real"></a>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                    <label>Unicentro (Chegada)</label>
                    <a href="{{route('querySantaCruz', ['nomePonto' => "\"UNICENTRO (CHEGADA)\""])}}" ><img src="https://i.imgur.com/8mlSE15.jpg" class="img-fluid mb-4" alt="Unicentro (Chegada)"></a>

                    <label>Unicentro (Saída)</label>
                    <a href="{{route('querySantaCruz', ['nomePonto' => "\"UNICENTRO (SAÍDA)\""])}}" ><img src="https://i.imgur.com/8mlSE15.jpg" class="img-fluid mb-4" alt="Unicentro (Saída)"></a>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                    <label>Condomínio Ouro Branco</label>
                    <a href="{{route('querySantaCruz', ['nomePonto' => "\"CONDOMÍNIO OURO BRANCO\""])}}" ><img src="https://i.imgur.com/77xi0t3.jpg" class="img-fluid mb-4" alt="Condomínio Ouro Branco"></a>

                    <label>SESC</label>
                    <a href="{{route('querySantaCruz', ['nomePonto' => "\"SESC\""])}}" ><img src="https://i.imgur.com/MTpsM8E.jpg" class="img-fluid mb-4" alt="SESC"></a>

                    <label>Chegada Fonte</label>
                    <a href="{{route('queryCedeteg', ['nomePonto' => "\"CHEGADA FONTE\""])}}" ><img src="https://i.imgur.com/lnWRBGE.jpg" class="img-fluid mb-4" alt="Saída Fonte"></a>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </div>
    </div>
@endsection
