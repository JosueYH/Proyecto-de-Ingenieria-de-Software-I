<!doctype html>
<html lang="en">
  <head>
  	<title>Login-Administrador</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="{{asset('plugins/iniciosesion/css/style.css')}}">

	</head>
	<body class="img js-fullheight" style="background-image: url({{asset('plugins/iniciosesion/images/bg.jpg')}})">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
                    <!--h2 class="heading-section">Login #10</h2-->
                    <h2 class="heading-section">Sistema de Conciliación Prejudicial</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Ingrese con sus Credenciales</h3>

                <!--<form action="#" class="signin-form">-->
                <form action="{{route('login')}}" method="post" class="signin-form">
                    @csrf  <!--Token de formulario-->
		      		<div class="form-group">
		      			<input type="text" class="form-control" placeholder="Email" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" placeholder="Contraseña" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                </div>

	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Recordarme
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
						</label>
					</div>
                </div>

                <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">INICIAR SESIÓN</button>
                </div>

            	<div class="mt-4">
					<div class="d-flex justify-content-center links">
                        <!--No tienes una Cuenta? <a href="#" class="ml-2">Registrarse</a>-->
						No tienes una Cuenta? <a href="{{route('register')}}" class="ml-2">Registrarse</a>

					</div>
                </div>

              </form>

			</div>
			</div>
		</div>
	</section>

  <script src="{{asset('plugins/iniciosesion/js/jquery.min.js')}}"></script>
  <script src="{{asset('plugins/iniciosesion/js/popper.js')}}"></script>
  <script src="{{asset('plugins/iniciosesion/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('plugins/iniciosesion/js/main.js')}}"></script>

	</body>
</html>

