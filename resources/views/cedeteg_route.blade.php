@extends('layout.site')

@section('conteudo')
    <div class="text-center" style="padding-top: 5vh">
        <h2>Pontos de ônibus que fazem parte da linha
            CEDETEG, clique no mais próximo de você! </h2>

        <div class="container my-4">


            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4">

                    <label>Saída Fonte</label>
                    <a href="{{route('queryCedeteg', ['nomePonto' => "\"SAÍDA FONTE\""])}}" ><img src="https://i.imgur.com/lnWRBGE.jpg" class="img-fluid mb-4" alt="Saída Fonte"></a>

                    <label>Hiper Supermercado</label>
                    <a href="{{route('queryCedeteg', ['nomePonto' => "\"HIPER SUPERMERCADO\""])}}" ><img src="https://i.imgur.com/LgwOYOC.jpg" class="img-fluid mb-4" alt="Hiper Supermercado"></a>

                    <label>Armazém São Paulo</label>
                    <a href="{{route('queryCedeteg', ['nomePonto' => "\"ARMAZÉN SÃO PAULO\""])}}" ><img src="https://i.imgur.com/cYxi04o.jpg" class="img-fluid mb-4" alt="Armazém São Paulo"></a>



                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                    <label>Fisioterapia</label>
                    <a href="{{route('queryCedeteg', ['nomePonto' => "\"CEDETEG: FISIOTERAPIA\""])}}" ><img src="https://i.imgur.com/PcIjPaZ.jpg" class="img-fluid mb-4" alt="Fisioterapia"></a>

                    <label>Avenida Principal (IDA)</label>
                    <a href="{{route('queryCedeteg', ['nomePonto' => "\"CEDETEG: AV. PRINCIPAL (IDA)\""])}}" ><img src="https://i.imgur.com/fkwIYaI.jpg" class="img-fluid mb-4" alt="Avenida Principal"></a>

                    <label>Avenida Principal (Volta)</label>
                    <a href="{{route('queryCedeteg', ['nomePonto' => "\"CEDETEG: AV. PRINCIPAL (VOLTA)\""])}}" ><img src="https://i.imgur.com/fkwIYaI.jpg" class="img-fluid mb-4" alt="Avenida Principal"></a>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                    <label>Veterinária/Agronomia</label>
                    <a href="{{route('queryCedeteg', ['nomePonto' => "\"CEDETEG: VETERINÁRIA\""])}}" ><img src="https://i.imgur.com/Rldi8gx.jpg" class="img-fluid mb-4" alt="Veterinária/Agronomia"></a>

                    <label>Antiga Perdigão</label>
                    <a href="{{route('queryCedeteg', ['nomePonto' => "\"ANTIGA PERDIGÃO\""])}}" ><img src="https://i.imgur.com/sXkxWZJ.jpg" class="img-fluid mb-4" alt="Antiga Perdigão"></a>

                    <label>Chegada Fonte</label>
                    <a href="{{route('queryCedeteg', ['nomePonto' => "\"CHEGADA FONTE\""])}}" ><img src="https://i.imgur.com/lnWRBGE.jpg" class="img-fluid mb-4" alt="Saída Fonte"></a>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </div>


    </div>
@endsection
