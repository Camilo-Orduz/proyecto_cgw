<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front</title>
    <link rel="stylesheet" href="{{ url('libs/css/css/style-log.css') }}">
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
        <h3 id="title">Login</h3>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="text"  class="form-control"  placeholder="email@ejemplo.com">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="inputPassword" placeholder="**********">
        </div>
      </div>
      <button type="button" class="btn btn-outline-success">Entrar</button>
      </form>
      </div>
      </div>
    </div>
</body>
</html>