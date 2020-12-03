<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>URBANMOVE</title>
		<meta name="description" content="Actualización de productos">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

		<!-- STYLES -->

		<style {csp-style-nonce}>
            
			header {
				background-color: rgb(192, 237, 240);
				padding: .4rem 0 0;
			}
			.menu {
				padding: .4rem 2rem;
			}
			header ul {
				border-bottom: 1px solid rgba(242, 242, 242, 1);
				list-style-type: none;
				margin: 0;
				overflow: hidden;
				padding: 0;
				text-align: center;
			}
			header li{
				display: inline-block;
			}
			header li. nombre{
				float: left;
				padding-top: 15px;
				padding-left: 555px;
				color: black;
			}
			header h1{
				text-align: center;
			}
			header li a {
				border-radius: 5px;
				color: rgba(0, 0, 0, .5);
				display: block;
				height: 44px;
				text-decoration: none;
			}
			header li.menu-item a {
				border-radius: 5px;
				margin: 5px 0;
				height: 38px;
				line-height: 36px;
				padding: .4rem .65rem;
				text-align: center;
			}
			header li.menu-item a:hover,
			header li.menu-item a:focus {
				background-color: rgba(221, 72, 20, .2);
				color: rgba(221, 72, 20, 1);
			}
			header .logo {
				float: left;
				height: 44px;
				padding: .4rem .5rem;
			}
			header .menu-toggle {
				display: none;
				float: center;
				font-size: 2rem;
				font-weight: bold;
			}
			header .menu-toggle button {
				background-color: rgba(221, 72, 20, .6);
				border: none;
				border-radius: 3px;
				color: rgba(255, 255, 255, 1);
				cursor: pointer;
				font: inherit;
				font-size: 1.3rem;
				height: 36px;
				padding: 0;
				margin: 11px 0;
				overflow: visible;
				width: 40px;
			}
			header .menu-toggle button:hover,
			header .menu-toggle button:focus {
				background-color: rgba(221, 72, 20, .8);
				color: rgba(255, 255, 255, .8);
			}
			section a {
				width: 100%;
				color: rgba(221, 72, 20, 1);
			}
			form {
				margin-left: 40%;
				width: 100%;
			}
			
			#nombretabla{
				width: 60%;
				height: 66px;
			}
			#password{
				width: 30%;
				height: 36px;
			}
			#crear {
				width: 10%;
				height: 36px;
				margin-left: 25%;
			}
			#cancelar {
				width: 10%;
				height: 36px;
				margin-left: 25%;
			}
			tr.nth-child(1n){
			  	line-height: 100px;
  				background-color: white;
			}
			@media (max-width: 559px) {
				header ul {
					padding: 0;
				}
				header .menu-toggle {
					padding: 0 1rem;
				}
				header .menu-item {
					background-color: rgba(244, 245, 246, 1);
					border-top: 1px solid rgba(242, 242, 242, 1);
					margin: 0 15px;
					width: calc(100% - 30px);
				}
				header .menu-toggle {
					display: block;
				}
				header li.menu-item a {
					background-color: rgba(221, 72, 20, .1);
				}
				header li.menu-item a:hover,
				header li.menu-item a:focus {
					background-color: rgba(221, 72, 20, .7);
					color: rgba(255, 255, 255, .8);
				}
			}
		</style>
	</head>
	<body>

		<!-- HEADER: MENU + HEROE SECTION -->
	    <header>
			<div class="menu">
				<ul>
					<li class="logo"><a href="logoJRCJ.docx" target="_blank">
										<img height="44" title="Logo JRCJ"
											alt="Visita la website JRCJ"
											src="logo JRCJ.png"/>
									</a>
					</li>
					<li class="empresa"><b>URBANMOVE</b></li>
				</ul>
			</div>

			<div class="menu">
				<ul>
					<li class="menu-item hidden"><a href="#">Inicio</a></li>
					<!-- <li class="menu-item hidden">&nbsp;</li> -->
					<li class="menu-item hidden"><a href="#">Registro</a></li>
					<li class="menu-item hidden"><a href="#">Iniciar Sesión</a></li>
				</ul>
			</div>  

			<br><br>
			<!-- <h1></h1> -->
		</header>
		<!-- CONTENT -->
		<div> <!-- Antes <section> -->
			<br><br>
			<form id="formulario">
				<label for="nombre"></label>
                <input type="text" id="nombretabla" name="nombretabla" placeholder="Nombre de usuario">
                <br>  <br><br>

				<label for="password"></label>
				<input type="password" id="password" name="password" placeholder="Contraseña">
				<br>  <br><br>

				<p><input type="submit" value="Acceder" id="crear"></p>
				<p><input type="reset" value="Cancelar" id="cancelar"></p>
			</form>
		</div>
	</body>
</html> 