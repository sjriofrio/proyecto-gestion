<!DOCTYPE html>
<html lang="es" >
<head>
  <meta charset="UTF-8">
  <title>Inicio</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
<link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<style>
	body {
		font-family: "Inter", sans-serif;
		line-height: 1.5;
		display: flex;
		flex-direction: row;
		justify-content: flex-start;
		align-items: stretch; 
		margin: 0;
		padding: 0;
		height: 100vh; 
		background-color: #ffff;
	}

	.barra_navegacion {
		width: 80px;
		background-color: #05043e;
		display: flex;
		flex-direction: column;
		justify-content: space-between;
		padding: 0.75rem;
		border-radius: 10px;
		box-shadow: 0 10px 50px 0 rgba(5, 4, 62, 0.25);
		height: 100%; 
	}


	ul {
		list-style: none;
		margin: 0;
		padding: 0;
	}
      
	li:nth-child(6) {
		margin-top: 5rem;
		padding-top: 1.25rem;
		border-top: 1px solid #363664;
	}

	li + li {
		margin-top: 0.75rem;
	}

	a {
		color: #FFF;
		text-decoration: none;
		display: flex;
		align-items: center;
		justify-content: center;
		width: 3rem;
		height: 3rem;
		border-radius: 8px;
		position: relative;
	}

	a:hover,
	a:focus,
	a.active {
		background-color: #30305a;
		outline: 0;
	}

	a:hover span,
	a:focus span,
	a.active span {
		transform: scale(1);
		opacity: 1;
	}

	a i {
		font-size: 1.375rem;
	}

	a span {
		position: absolute;
		background-color: #30305a;
		white-space: nowrap;
		padding: 0.5rem 1rem;
		border-radius: 6px;
		left: calc(100% + 1.5rem);
		transform-origin: center left;
		transform: scale(0);
		opacity: 0;
		transition: 0.15s ease;
	}

	a span:before {
		content: "";
		display: block;
		width: 12px;
		height: 12px;
		position: absolute;
		background-color: #30305a;
		left: -5px;
		top: 50%;
		transform: translatey(-50%) rotate(45deg);
		border-radius: 3px;
	}
	.img-fluid {
            max-width: 100%;
            height: auto;
			text-align: center;

        }
		.imagen{

			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;


			
		}


</style>

</head>
<body>

<div class="barra_navegacion">
<ul>
	<li>
		<a href="index.php">
			<i class="fa fa-home" aria-hidden="true"></i>
			<span>inicio</span>
		</a>
	</li>
	<li>
		<a href="registro_tripulcion.php">
			<i class="fa fa-address-book" aria-hidden="true"></i>
			<span>Astronauta</span>
		</a>
	</li>	
	<li>
		<a href="registro_nave_espacial.php">
			<i class="fa fa-rocket" aria-hidden="true"></i>
			<span>Nave Espacial</span>
		</a>
	</li>
	<li>
		<a href="registro_misiones.php">
			<i class="ai-game-controller"></i>
			<span>Misiones</span>
		</a>
	</li>	
	<li>
		<a href="Diccionario_datos.php">
			<i class="fa fa-laptop" aria-hidden="true"></i>
			<span>Dicionario de datos</span>
		</a>
	</li>


	<li>
		<a href="index.php">
			<i class="ai-bell"></i>
			<span>Notifications</span>
		</a>
	</li>
	<li>	
		<a href="index.php">
			<i class="ai-gear"></i>
			<span>Settings</span>
		</a>
	</li>
	<li>
		<a href="index.php">
			<i class="ai-person"></i>
			<span>Profile</span>
		</a>
	</li>
</ul>
</div>

<div class="container">

</div>

  <script src='https://unpkg.com/akar-icons-fonts'></script><script  src="./script.js"></script>


</body>
</html>
