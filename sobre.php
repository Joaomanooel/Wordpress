<!DOCTYPE html>
<html>
<head>
	<title>Danki Code - Tema</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
</head>
<body>

	<section class="topo">
		<div class="center">
			<header>
				<div class="logo"><img src="images/logo/logo.png" /></div><!--logo-->
			</header>
			<ul class="menu-desktop">
				<li><a href="">Home</a></li>
				<li><a href="">Sobre</a></li>
				<li><a href="">Contato</a></li>
			</ul>
			<div class="menu-mobile">
			<i class="fas fa-align-right"></i>
				<ul>
					<li><a href="">Home</a></li>
					<li><a href="">Sobre</a></li>
					<li><a href="">Contato</a></li>
				</ul>
			</div><!--menu-mobile-->
			<div class="clear"></div>
		</div><!--center-->
	</section><!--topo-->

	<section class="sobre-equipe">
		<div class="center">
			<div class="w50 equipe-sobre-texto">
				<h2>Uma equipe estrategica para um trabalho incrivel</h2>
				<p> É chegada uma nova era, o tempo de recomeçar a rever conceitos e valores. O ser humano é extremamente dependente dos seus semelhantes, pois nenhuma pessoa consegue viver sem depender de ninguém. O calçado, a camisa, o alimento, tudo de que necessitamos teve o trabalho e a mão de obra de uma outra pessoa que muitas vezes nem conhecemos, mas, de certa forma, essa pessoa nos favoreceu...</p>
			</div><!--Texto-da-Imagem-->
			<div class="w50">
				<img src="images/sobre/equipe.png">
			</div>
			<div class="clear"></div><!--Imagem-do-Texto-->
		</div>
	</section>
	<section class="sobre-imagens">
		<div class="center">
			<div class="img-sobre">
				<img src="images/sobre/sobre-inf.png">
			</div>
			<div class="img-sobre">
				<img src="images/sobre/sobre-inf.png">
			</div>
			<div class="img-sobre">
				<img src="images/sobre/sobre-inf.png">
			</div>
			<div class="img-sobre">
				<img src="images/sobre/sobre-inf.png">
			</div>
		</div>
	</section><!--Imagens-sobre-->

	<footer>
	<section class="metodologia">
		<div class="center">
			<h2>Conheça nossa Metodologia</h2>
			<p>O que acha de fazermos o que mais gostamos de fazer? Conversar!<br />Entre em contato por e-mail ou telefone.</p>
			<a href="/contato">Entrar Contato</a>
		</div>
	</section>
		<div class="center">
			<div class="col-footer">
				<h2>Suporte</h2>
				<a href="">Contato</a>
				<a href="">FAQ</a>
			</div>
			<div class="col-footer">
				<h2>Suporte</h2>
				<a href="">Contato</a>
				<a href="">FAQ</a>
			</div>
			<div class="col-footer">
				<h2>Suporte</h2>
				<a href="">Contato</a>
				<a href="">FAQ</a>
			</div>
			<div style="width: 40%;text-align: right;" class="col-footer">
				<img src="images/footer/foter.png" />
			</div>
		</div>
	</footer><!--Final-da-pagina-->

	<script src="js/jquery.js"></script>
	
	<script>
	//Menu responsivo.
	$('.menu-mobile i').click(function(){
		$('.menu-mobile').find('ul').slideToggle();
	})
	</script>
</body>
</html>