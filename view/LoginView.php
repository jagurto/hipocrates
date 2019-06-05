<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		
		<title>Login</title>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md text-center">
					<h1>Bienvenido al Centro Medico Hipocrates</h1>
					<br>
				</div>
			</div>
			<div class="row">
				<div class="col-md">
				</div>
				<div class="col-md-4 text-center">
					<form action="<?php echo $helper->url("Home","login"); ?>" method="post" class="col-lg" align="center">
						Rut: <input type="text" name="rut" class="form-control"/>
						Contraseña: <input type="password" name="pass" class="form-control"/> <br>
						<input type="submit" value="Ingresar" class="btn btn-success"/>
					</form>
				</div>
				<div class="col-md">
				</div>
			</div>
		</div>
		<br>
		<div class="container">
			<div class="row">
				<div class="col-md">
				</div>
				<div class="col-md-4 text-center">
					<form action="<?php echo $helper->url("Home","crearUsuario"); ?>" method="post" class="col-lg" align="center">
						<input type="submit" value="Crear Usuario" class="btn btn-info"/>
					</form>
					<br>
					<form action="<?php echo $helper->url("Home","olvidoContrasena"); ?>" method="post" class="col-lg" align="center">
						<input type="submit" value="Recuperar Contraseña" class="btn btn-warning"/>
					</form>
				</div>
				<div class="col-md">
				</div>
			</div>
		</div>
		<br>
		<?php if (isset($msg)) { ?>
			<div class="container">
				<div class="row">
					<div class="col-md">
					</div>
					<div class="col-md-6">
						<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
							<h4><?php echo $msg ?></h4>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
					</div>
					<div class="col-md">
					</div>
				</div>
			</div>
		<?php } ?>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>