<!DOCTYPE html>	
<html lang="es">
<head>
	<meta charset="UTF-8">
	<?php include 'inc/head.php'; ?>
	<title>Curso Nro 2 de Bootstrap</title>
</head>

<body>

<?php include 'inc/header.php';?>

	<div class="workshop-list">		
		<article id="w1" class="workshop workshop-left">

			<div class="container">
				<div class="row">
					<div class="col-xs-8 main-info">
						<h3>TITULO DE WORKSHOP NUMERO 1</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa <a href="#">Pepe Rios</a>qui officia deserunt mollit anim id est laborum.</p>
						<a href="detail.php " class="btn btn-custom">ME APUNTO</a>
						<a href="detail.php " class="more-info-link">Quiero mas información</a>
					</div>
					<div class="col-xs-3 col-xs-offset-1">
						<h3 class="hightlighted"><strong>W21</strong>13/14 de abril</h3>
						<h3 class="hightlighted">29 plazas</h3>
						<h3 class="hightlighted">$99</h3>					
					</div>
				</div>
			</div>

		</article>
		<article id="w2" class="workshop workshop-right">

			<div class="container">
				<div class="row">
					<div class="col-xs-3 date-info ">
						<h3 class="hightlighted"><strong>W21</strong>13/14 de abril</h3>
						<h3 class="hightlighted">29 plazas</h3>
						<h3 class="hightlighted">$99</h3>
					</div>
					<div class="col-xs-8 col-xs-offset-1 main-info">
						<h3>TITULO WORKSHOP NUMERO 2</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<a href="detail.php " class="more-info-link">Quiero mas información</a>
						<a href="detail.php " class="btn btn-custom">ME APUNTO</a>
						
					</div>
				</div>
			</div>

		</article>
	</div>


<?php include 'inc/footer.php';?>
</body>
<?php include 'inc/foot.php'; ?>
</html>


