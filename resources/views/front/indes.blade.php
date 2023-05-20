<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front</title>
    <link rel="stylesheet" href="{{ url('libs/css/css/styles.css') }}">
    <link rel="stylesheet" href="{{ url('libs/libs/bootstrap-5.0.2-dist/css/bootstrap.css') }}">
</head>
<body>
<!--Header-->
    <header class="cabeza">
        <nav class="navbar navbar-light bg-light "style="background-color:#f0f7da!important;">
            <div class="container-fluid" >
              <a class="navbar-brand" href="#">
                <img src="{{url ('img/img/logo_golden.png') }}" alt="" width="30" height="24" class="d-inline-block align-text-top">
                Confecciones Golden
              </a>
              <ul class="nav justify-content-end">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#" style="color:black ;">¿Como está mi pedido?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#" style="color:black ;">Entrar</a>
                  </li>
            </ul>
            </div>
          </nav>
    </header> <br><br>
    <!--3 Imagenes-->
    <div class="texto-simple">¿Quienes somos?</div>
    <div class="ajuste">
    <div class="row" class="contenedor-img" class="imagenes-triple"">
        <div class="col-md-4"><img src="{{url('img/img/maquina.jpg') }}" class="img-fluid rounded" alt="choza fea" class="hover-img"></div>
        <div class="col-md-4"><img src="{{url('img/img/ropa-deportiva-3.jpg') }}" class="img-fluid rounded" alt="choza fea" class="hover-img"></div>
        <div class="col-md-4"><img src="{{url('img/img/uniforme-2.jpg') }}" class="img-fluid rounded" alt="choza fea" class="hover-img"></div>
    </div>
  </div>
<!-- Parte productos (Uniformes)-->
        <div class="texto-simple" style="padding: 30px;">Productos</div>
      <div class="contenedor-qsomos">
      <div class="row" class="justify-content-end">
        <div class="col-md-4" class="text-align-center"><h2>Uniformes</h2>
        <ul>
          <li>Uniforme con falda</li>
          <li>Uniforme con pantalon de drill</li>
          <li>Sacos escolares</li>
        </ul>
      </div>
        <div class="col-md-5"><img src="{{url ('img/img/Uniforme-qsomos.jpeg') }}" class="img-fluid rounded" alt="Uniforme Dama"></div>
      </div>
      </div>
<!-- Parte de abajo productos (Ropa deportiva)-->
      <div class="ropa-deportiva">
      <div class="row" class="justify-content-end">
        <div class="col-md-5"><img src="{{url ('img/img/ropa-deportiva-4.jpg') }}" class="img-fluid rounded" alt="Uniforme Dama"></div>
        <div class="col-md-4" class="text-align-center"><h2>Ropa deportiva</h2>
          <ul>
            <li>Sudaderas</li>
            <li>Chaquetas</li>
            <li>Pantalones</li>
            <li>Camisetas</li>
          </ul>
        </div>
      </div>
      </div>
<!--Footer-->
<div class="footer">
  <footer class="bg-light text-center text-lg-start" style="background-color:#2d6073!important; color:white;!Important">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase">Contactanos</h5>
  
          <p>
            Barrio las lomas <br>
            348 93845767 <br>
            Carrera 3 #23-87 sur
          </p>
        </div>
        <!--Grid column-->
  
        <!--Grid column-->
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase">¿Quienes somos?</h5>
  
          <p>
            La empresa confecciones golden se dedica a la creación y venta
            de ropa deportiva y uniformes colegiales a la medida. 
          </p>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Copyright:
      <a class="text-dark" href="#" style="color:white!important;">ConfeccionesGolden.com</a>
    </div>
    <!-- Copyright -->
  </footer>
</div>
</body>
</html>