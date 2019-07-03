@extends ('layouts.admin')
@section ('contenido')
    
    
    <div class="row">
        <div class="col-lg-4">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <center>
            <img src="{{asset('img/credito3.JPG')}}" alt="Generic placeholder image" width="140" height="140">
            </center>
            <center><h3>creditos por periodo</h3></center><center><a href="{{url('reporte-pdf')}}"><button class="btn btn-success">Entrar</button></a></center>
        </div>
        </div>

        <div class="col-lg-4">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <center>
            <img src="{{asset('img/credito4.JPG')}}" alt="Generic placeholder image" width="140" height="140">
            </center>
            <center><h3>estados de credito por periodo</h3></center><center><a href="{{url('reporte1-pdf')}}"><button class="btn btn-success">Entrar</button></a></center>
        </div>
        </div>

        <div class="col-lg-4">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <center>
            <img src="{{asset('img/credito5.JPG')}}" alt="Generic placeholder image" width="140" height="140">
            </center>
            <center><h3>tipos de creditos mas solicitados</h3></center><center><a href="{{url('reporte2-pdf')}}"><button class="btn btn-success">Entrar</button></a></center>
        </div>
        </div>

        <div class="col-lg-4">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <center>
            <img src="{{asset('img/ahorro1.JPG')}}" alt="Generic placeholder image" width="140" height="140">
            </center>
            <center><h3>tipos de ahorros mas solicitados</h3></center><center><a href="{{url('reporte3-pdf')}}"><button class="btn btn-success">Entrar</button></a></center>
        </div>
        </div>


        <div class="col-lg-4">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <center>
            <img src="{{asset('img/credito6.JPG')}}" alt="Generic placeholder image" width="140" height="140">
            </center>
            <center><h3>utilidades obtenidas por credito</h3></center><br><center><a href="{{url('reporte4-pdf')}}"><button class="btn btn-success">Entrar</button></a></center>
        </div>
        </div>

         <div class="col-lg-4">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <center>
            <img src="{{asset('img/credito7.PNG')}}" alt="Generic placeholder image" width="140" height="140">
            </center>
            <center><h3>mayor numero de transacciones segun rubro</h3></center><br><center><a href="{{url('reporte5-pdf')}}"><button class="btn btn-success">Entrar</button></a></center>
        </div>
        </div>
    </div>

@endsection