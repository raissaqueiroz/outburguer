<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8" />
		<title>Outburguer More Tasty - Página Inicial</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="icon" type="image/x-icon" href="img/favicon.ico">
		<meta name="description" content="Descrição aqui" />
		<meta name="author" content="Ouburguer" />
		<meta name="robots" content="index, folow" />
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"/>
		
  		<link rel="stylesheet" href="css/bootstrap.min.css">
  		<link rel="stylesheet" href="css/style.css">
		  <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic&display=swap" rel="stylesheet">
		<!--Font Awesome === ICONES MANEIROS-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	</head>
	<body>
		<!--Menu-->
		<header class="navbar navbar-expand-lg navbar-dark bg-menu">
			<div class="container">
				<!--Logo-->
				<a class="navbar-brand h1 mb-0" href="#"><img src="img/logo.png" alt="PVNC - Santa Cruz da Serra" title="PVNC - Santa Cruz da Serra"></a>
				<!--Botão do Menu-->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
					<span class="navbar-toggler-icon"></span>
				</button>
				<!--Corpo do Menu-->
				<div class="collapse navbar-collapse" id="navbarSite">
					<ul class="navbar-nav ml-auto text-center">
						<li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
						<li class="nav-item"><a class="nav-link" href="#sobre">Sobre</a></li>
						<li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
					</ul>
				</div>
			</div>
		</header>
		<!--/Menu-->
		<!--banner-->
		<section class="banner"></section>
		<!--/banner-->
		<section class="container" id="sobre">
			
			<div class="card col-sm-3">
				<div class="card-body text-center">
					<h5 class="card-title">Cabe no seu bolso</h5>
					<span class="card-title"><i class="fas fa-hand-holding-usd icons"></i></span>
					<p class="card-text">É isso mesmo que você leu! A Outburguer oferece preços acessíveis que cabem em qualquer bolso!</p>
				</div>
			</div>
			<div class="card col-sm-3">
				<div class="card-body text-center">
					<h5 class="card-title">Muito mais sabor</h5>
					<span class="card-title"><i class="fas fa-utensils icons"></i></span>
					<p class="card-text">Descrição aqui. Fala sobre a parada do tasty aqui</p>
				</div>
			</div>
			<div class="card col-sm-3">
				<div class="card-body text-center">
					<h5 class="card-title">Sinta o prazer de fazer a diferença</h5>
					<span class="card-title"><i class="fas fa-heartbeat icons"></i></span>
					<p class="card-text">A cada hamburguer que você comsome na Outburguer, 5% do seu valor é revertivo em doações para instituições carentes.</p>
				</div>
			</div>
		</section>
		
		<section class="container-fluid pb-5" id="contato">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center my-5">
						<h1 class="display-4">Entre em Contato</h1>
						<div class="alert " role="alert"></div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-5 col-sm-12 text-dark mb-3">
						<form id="formContato" action="" method="POST" autocomplete="off">
							<div class="form-row mb-3">
								<input type="text" name="nome" class="form-control input" placeholder="*Nome: " required>
							</div>
							<div class="form-row mb-3">
								<input type="email" name="email" class="form-control input" placeholder="*Email: " required>
							</div>
							<div class="form-row mb-3">
								<input type="text" name="assunto" class="form-control input" placeholder="*Assunto: " required>
							</div>
							<div class="form-row mb-3">
								<textarea rows="8" class="form-control input" name="mensagem" placeholder="*Mensagem:" required></textarea>
							</div>
							<div class="form-row mb-3">
								<button type="submit" class="btn btn-dark col-6 fade"></button>
								<button type="submit" class="btn btn-enviar col-6 " name="enviar">Enviar</button>
								

							</div>
						</form>
					</div>
					<div class="col-md-6 col-sm-12 text-dark">
						<!--Google map-->
						<div id="map-container-google-1" class="z-depth-1-half map-container col-12" style="height: 500px;">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.190131931921!2d-43.1793738854004!3d-22.906356943613613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997f5e453810bf%3A0x36663ec7ca8b5720!2sAv.%20Rio%20Branco%20-%20Centro%2C%20Rio%20de%20Janeiro%20-%20RJ!5e0!3m2!1spt-BR!2sbr!4v1567913471111!5m2!1spt-BR!2sbr" frameborder="0" style="border:0;" style="border:0; height: 400px;" allowfullscreen class="col-12"></iframe>  
						    <div class="col-12">
						    	<p class="text-center lead">Outburguer More Tasty - Av. Rio Branco - Centro, Rio de Janeiro - RJ</p>
								<p class="text-center lead mt-1"><i class="far fa-envelope"></i>&nbsp;contato@outburguer.com.br</p>
								<a style="margin-top: -20px;" class="nav-link text-center lead" href="https://www.facebook.com/outburguer"><i class="fab fa-facebook"></i>&nbsp;/outburguer</a>
							</div>
						</div>
						<!--Google Maps-->			
					</div>
				</div>
			</div>
		</section>
		<footer class="container-fluid footer">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center text-white  my-3">
						<h6 class="col-12 lead" style="font-size: 22px">Outburguer More Tasty <?php echo date("Y");?></h6>
						<h5 class="col-12 lead" style="font-size: 16px">Todos os Direitos Reservados</h5>
					</div>
				</div>
			</div>
		</footer>
		
		<!--Bootstrap-->
		<!-- Primeiro o jQuery, depois o Popper.js, e depois o Bootstrap JS -->
  	    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
		<!--/Bootstrap-->
	</body>
</html>