<?php
    include 'connect.php';
    include 'checkLogin.php';

    $s="select * from reg where id='$_SESSION[id]'";
    $qu= mysqli_query($con, $s);
    $f=mysqli_fetch_assoc($qu);

?>

<html lang="en">
<head>
	<!-- Meta tags Obrigatórias -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="shortcut icon" href="Rocket/images/logo.png" type="image/x-png"/>
	<title>RocketHome</title>
	<link rel="stylesheet" href="Rocket/css/test.css">
</head>
<body>
	<header>
		<img class="logo" src="Rocket/images/Logo3.png" alt="logo">
		<nav>
			<ul class ="nav__links">
				
				  <li class="nav-item">
					<a class="nav-link" href="#">DIFERENCIAIS</a>
				  </li>
				  <li>|</li>
				  <li class="nav-item">
					<a class="nav-link" href="#">QUEM SOMOS?</a>
				  </li>
				  <li>|</li>
				  <li class="nav-item">
					<a class="nav-link" href="carrinho.php">PRODUTOS</a>
				  </li>
				
			</ul>
		</nav>
		<div class ="loginmds">
		
		<a class="cta" href="perfil.php"><button>Perfil</button></a>
		
		</div>
	</header>

	

	<div class="content-area">
		<div class="foto_app"></div>
		<div class="texto"></div>

		<div class="contato">
			<form >
				<h2>Fale Conosco</h2>
				<div class="formContato">
					<div class="form-group">
						<input type="text" class="form-control" id="inputAddress" placeholder="Nome">
					  </div>
					  <div class="form-group">
						<input type="text" class="form-control" id="inputAddress2" placeholder="Celular">
					  </div>
					  <div class="form-group">
						<input type="text" class="form-control" id="inputAddress2" placeholder="Email">
					  </div>
					  <div class="form-group">
						<input type="text" class="form-control" id="inputAddress2" placeholder="CEP">
					  </div>
					  <div class="form-row">
						<div class="col-7">
						  <input type="text" class="form-control" placeholder="Cidade">
						</div>
						<div class="col">
						  <input type="text" class="form-control" placeholder="Estado">
						</div>		
					   </div>
					   <input type="submit" value="ENVIAR SOLICITAÇÃO">				
			</form></div>		
	</div>

<div class="container">
	<div class="conheca" style="text-align: center;">CONHEÇA NOSSOS PLANOS</div>
	<div class="row">

	<div class="col-sm">
		  <img src="Rocket/images/Planos/Simples.jpg" alt="plano" style="width:100%">
		</div>
		<div class="col-sm">
		  <img src="Rocket/images/Planos/Medio.jpg" alt="plano" style="width:100%">
		</div>
		<div class="col-sm">
		  <img src="Rocket/images/Planos/Luxo.jpg" alt="plano" style="width:100%">
		</div>
</div>
</div>



</body>
</html>





