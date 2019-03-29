<!DOCTYPE html>
<html>
<head>
	<title>Iterrabyte</title>
</head>
<body>
	<fieldset>
		<h1>Bienvenido a Iterrabyte</h1>
		<hr>
		<legend>Formulario de inscripción</legend>


		<form action ="{{ action('Controller@insert')}}" method="post">
			{{ csrf_field() }}

				  <p>Nombre: <input type="text" name="name" placeholder="Ingrese su nombre"
				                  minlength="5" maxlength="40" required></p>

				  <p>Apellido: <input type="text" name="lastname" placeholder="Ingrese su Apellido"
				                  minlength="5" maxlength="40" required></p>

				  <p>Edad: <input type="number" name="age" placeholder="Ingrese su edad" required=""></p>

				  <p>Correo Electrónico: <input type="email" name="email" placeholder = "Ingrese su correo" required></p>
			
				  <p>Password: <input type="password" name="password" placeholder="Contraseña"
				                  minlength="11" required></p>

				  <p><input type="submit" name="submit" value ="Registrar"></p>
			
		</form>
	</fieldset>
		

</body>
</html>
