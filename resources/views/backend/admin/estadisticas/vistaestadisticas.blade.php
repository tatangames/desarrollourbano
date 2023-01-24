@extends('backend.menus.superior')

@section('content-admin-css')
    <link href="{{ asset('css/adminlte.min.css') }}" type="text/css" rel="stylesheet" />
    <link href="{{ asset('css/toastr.min.css') }}" type="text/css" rel="stylesheet" />

@stop

<div id="divcontenedor" style="display: none">

    <section class="content-header">
        <div class="container-fluid">
            <div class="col-sm-12">
                <h1>Estadísticas</h1>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $expediente }}</h3>

                            <p>Expediente pendiente de resolución</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-ios-paper"></i>
                        </div>
                        <a class="small-box-footer"><i class="icon ion-pie-graph"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>${{ $totalMonto }}</h3>

                            <p>Ingresos totales del presente año</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-ios-briefcase"></i>
                        </div>
                        <a class="small-box-footer"><i class="icon ion-pie-graph"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $resSinEntregar }}</h3>

                            <p>Resoluciones sin entregar</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-ios-paper"></i>
                        </div>
                        <a class="small-box-footer"><i class="icon ion-pie-graph"></i></a>
                    </div>
                </div>

            </div>

        </div>
    </section>


</div>

@extends('backend.menus.footerjs')
@section('archivos-js')

    <script src="{{ asset('js/toastr.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/axios.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('js/alertaPersonalizada.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            document.getElementById("divcontenedor").style.display = "block";
        });
    </script>

    <script>

        function verExpediente(){
            window.location.href="{{ url('/admin/expediente/lista') }}";
        }

    </script>


@endsection
