<!DOCTYPE HTML>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Awesome Chuck</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="jumbotron">
		  <h1>¡Alabemos a Chuck Norris!</h1>
		  <div class="alert alert-info">
			<?php echo getChuck(); ?>
		  </div>
		  <p><a class="btn btn-primary btn-lg" href="#" role="button">Aprende algo nuevo</a></p>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
	<script>
		$(document).ready(function(){
			$('.btn-primary').click(function(e){
				e.preventDefault();
				location.reload();
			});
		});
	</script>
</body>
</html>
<?php
function getChuck() {
	$index = rand(0, 14);
	$chucks = array(
	'La gente usa pijamas de Superman, Superman usa pijamas de Chuck Norris.',
	'Las lagrimas de Chuck Norris curan el Cancer, es una lastima que el nunca haya llorado.',
	'Chuck Norris no duerme, vigila.',
	'Si puedes ver a Chuck Norris, él puede verte. Si no puedes ver a Chuck Norris, puede que estés a sólo unos segundos de la muerte.',
	'Chuck Norris no caza, porque la palabra caza implica la probabilidad de fracasar. Chuck Norris sale a matar.',
	'Chuck Norris ha contado hasta el número infinito... dos veces.',
	'El camino más rápido para llegar al corazón de un hombre es el puño de Chuck Norris.',
	'Chuck Norris no lee libros. Los mira fijamente hasta que consigue la información que quiere.',
	'No hay mentón tras la barba de Chuck Norris. Tan sólo hay otro puño.',
	'Chuck Norris tiene dos velocidades: Caminar y Matar.',
	'En un salón corriente hay unos 1242 objetos que Chuck Norris podría usar para matarte, incluido al mismo salón.',
	'Chuck Norris perdió la virginidad antes que su padre.',
	'Chuck Norris puede dividir entre cero.',
	'Chuck Norris puede quemar una hormiga con una lupa... de noche.',
	'Chuck Norris pidió un Big Mac en un Burger King y le hicieron uno.'
	);
	return $chucks[$index];
}