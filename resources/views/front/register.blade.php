<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front</title>
    <link rel="stylesheet" href="{{ url('libs/css/css/register.css') }}">
    <link rel="stylesheet" href="{{ url('libs/libs/bootstrap-5.0.2-dist/css/bootstrap.css') }}">
</head>
<body>
  <header class="cabeza">
    <nav class="navbar navbar-light bg-light" style="background-color:#f0f7da!important;">
        <div class="container-fluid" >
          <a class="navbar-brand" href="{{url('/')}}">
            <img src="{{url ('img/img/logo_golden.png') }}" alt="" width="30" height="24" class="d-inline-block align-text-top">
            Confecciones Golden
          </a>
          <ul class="nav justify-content-end">
        </ul>
        </div>
      </nav>
</header> <br><br>
      <div class="login-info">
        <form>
        <div class="input-holder">
        <h3 id="title">Registrar</h3>
        <label for="exampleDataList" class="form-label">Tipo de documento</label> 
            <select class="form-select" aria-label="Tipo de documento">
                <option selected>ID</option>
                <option value="1">CC</option>
                <option value="2">TI</option>
                <option value="3">CDE</option> 
</select>
                <br><label for="exampleDataList" class="form-label">ID</label> 
                <input class="form-control" type="number" placeholder="Número de cédula" aria-label="default input example"><br>
                <label for="exampleDataList" class="form-label">Nombres</label> 
                <input class="form-control" type="text" placeholder="Nombres" aria-label="default input example"><br>
                <label for="exampleDataList" class="form-label">Apellidos</label> 
                <input class="form-control" type="text" placeholder="Apellidos" aria-label="default input example"><br>
                <label for="exampleDataList" class="form-label">Telefono</label> 
                <input class="form-control" type="number" placeholder="Apellidos" aria-label="default input example"><br>
                <label for="exampleDataList" class="form-label">Correo</label> 
                <input class="form-control" type="email" placeholder="Apellidos" aria-label="default input example"><br> <br>
      <button type="button" class="btn btn-outline-success">Registrar</button>
      </div>
      </form>
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
      <a class="text-dark" href="{{url('/')}}" style="color:white!important;">ConfeccionesGolden.com</a>
    </div>
    <!-- Copyright -->
  </footer>
</body>
</html>