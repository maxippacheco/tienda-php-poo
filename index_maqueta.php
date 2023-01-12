<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tienda de camisetas</title>
	<link rel="stylesheet" href="./assets/css/styles.css">
</head>
<body>
	<div id="container">

		<!-- cabecera -->
		<header id="header">
			<div id="logo">
				<img src="assets/img/camiseta.png" alt="Camiseta Logo">
				<a href="index.php">
					Tienda de camisetas
				</a>
			</div>
		</header>
		<!-- menu -->
	
		<nav id="menu">
			<ul>
				<li>
					<a href="#">
						Inicio
					</a>
				</li>
				<li>
					<a href="#">
						Categoria 1
					</a>
				</li>
		
		
				<li>
					<a href="#">
						Categoria 1
					</a>
				</li>
		
		
				<li>
					<a href="#">
						Categoria 1
					</a>
				</li>
		
		
				<li>
					<a href="#">
						Categoria 1
					</a>
				</li>
		
				<li>
					<a href="#">
						Categoria 1
					</a>
				</li>
			</ul>
	
		</nav>
	
		<div id="content">
			<!-- barra lateral -->
			<aside id="lateral">
				
				<div id="login" class="block_aside">
					<h3>Entrar a la web</h3>
					<form action="#" method="POST">
						<label for="email">Email</label>
						<input type="email" name="email" />
						<label for="password">Contraseña</label>
						<input type="password" name="password" />
	
						<input type="submit" value="Enviar" />
					</form>
	
					<ul>
						<li>
							<a href="#">Gestionar categorias</a>
						</li>
						<li>
							<a href="#">Gestionar pedidos</a>
						</li>
						<li>						
							<a href="#">Mis pedidos</a>
						</li>
					</ul>
				</div>
			</aside>
	
	
			<!-- contenido central -->
			<div id="central">
				<h1>Productos destacados</h1>
				<div class="product">
					<img src="assets/img/camiseta.png" alt="Camiseta" />
					<h2>Camiseta Azul Ancha</h2>
					<p>30 euros</p>
					<a href="#" class="button">Comprar</a>
				</div>
				<div class="product">
					<img src="assets/img/camiseta.png" alt="Camiseta" />
					<h2>Camiseta Azul Ancha</h2>
					<p>30 euros</p>
					<a href="#" class="button">Comprar</a>
				</div>
	
				<div class="product">
					<img src="assets/img/camiseta.png" alt="Camiseta" />
					<h2>Camiseta Azul Ancha</h2>
					<p>30 euros</p>
					<a href="#" class="button">Comprar</a>
				</div>
				<div class="product">
					<img src="assets/img/camiseta.png" alt="Camiseta" />
					<h2>Camiseta Azul Ancha</h2>
					<p>30 euros</p>
					<a href="#" class="button">Comprar</a>
				</div>
			</div>
	
		
	
		</div>
	
	
		<!-- footer -->
		<footer id="footer">
			<p>Desarrollado por Máximo Pacheco &copy; <?= date('Y'); ?></p>
		</footer>
	</div>

</body>
</html>