@extends ('layouts.admin1')
@section ('contenido')
    
    
    <div class="row">
        <div class="col-lg-4">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <center>
            <img src="{{asset('img/empresa.JPG')}}" alt="Generic placeholder image" width="140" height="140">
            </center>
            <center><h3>transacciones de personas juridicas</h3></center><center><a href="{{url('generate-pdf')}}"><button class="btn btn-success">Entrar</button></a></center>
        </div>
        </div>

        <div class="col-lg-4">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <center>
            <img src="{{asset('img/credito1.JPG')}}" alt="Generic placeholder image" width="140" height="140">
            </center>
            <center><h3>creditos con monto mayor de $5715</h3></center><center><a href="{{url('generate2-pdf')}}"><button class="btn btn-success">Entrar</button></a></center>
        </div>
        </div>

        <div class="col-lg-4">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <center>
            <img src="{{asset('img/credito2.JPG')}}" alt="Generic placeholder image" width="140" height="140">
            </center>
            <center><h3>10 Directivos con mayor numero de transacciones</h3></center><center><a href="{{url('generate1-pdf')}}"><button class="btn btn-success">Entrar</button></a></center>
        </div>
        </div>

        <div class="col-lg-4">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <center>
            <img src="{{asset('img/ahorro.JPG')}}" alt="Generic placeholder image" width="140" height="140">
            </center>
            <center><h3>Ahorros menores a $1000</h3></center><center><a href="{{url('generate3-pdf')}}"><button class="btn btn-success">Entrar</button></a></center>
        </div>
        </div>


        <div class="col-lg-4">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <center>
            <img src="{{asset('img/deudor.JPG')}}" alt="Generic placeholder image" width="140" height="140">
            </center>
            <center><h3>socios con saldo deudor</h3></center><br><center><a href="{{url('generate4-pdf')}}"><button class="btn btn-success">Entrar</button></a></center>
        </div>
        </div>
    </div>

@endsection