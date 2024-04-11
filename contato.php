<!DOCTYPE html>
<html>
<head>
	<title>Danki Code - Tema</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
	<link href="./src/css/style.css" rel="stylesheet">
</head>
<body>

	<section class="topo">
		<div class="center">
			<header>
				<div class="logo"><img src="./src/images/logo.png" /></div><!--logo-->
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

	<section class="contato">
		<div class="center">
			<div class="w50 contato-infor">
				<h2>A mais importante, <br>primeira conversa.</h2>
				<br>
				<p><b>Telefone:</b>(21) 971314671</p>
				<p><b>Telefone:</b>(21) 971314671</p>
				<p><b>Telefone:</b>(21) 971314671</p>
				
				<div class="mapa-cotainer">
					<div id="mapa"></div>
				</div><!--mapa-->
			</div>
			<div class="w50 contato-form">
				<form>
					<input placeholder="Nome" type="text" name="">
					<input placeholder="Email" type="text" name="">
					<input placeholder="Telefone" type="text" name="">
					<select>
						<option>Geral</option>
						<option>Suporte</option>
						<option>TI</option>
					</select>
					<textarea placeholder="Mensagem"></textarea>
					<input type="submit" name="Enviar">
				</form>
			</div>
			<div class="clear"></div>
		</div><!--centralizar-->
	</section><!--contato-->

	<footer style="padding: 60px 0;">
	
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
				<img src="./src/images/foter.png" />
			</div>
		</div>
	</footer>

	<script src="./src/js/jquery.js"></script>
	<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4'></script>
	<script src="./src/js/map.js"></script>
	<script>
	//Menu responsivo.
	$('.menu-mobile i').click(function(){
		$('.menu-mobile').find('ul').slideToggle();
	})
	</script>
</body>
</html>