<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css" />
    <link
			rel="stylesheet"
			href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
			integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
			crossorigin="anonymous"
		/>
        <script src="js/script.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-info navbar-light bg-light fixed-top shadow">
				<div class="container">
					<a class="navbar-brand" href="#inicio"
						><img src="img/1280px-Logo_TotalPlay.svg.png" alt="logototalplay" width="200" height="50"
					/></a>

					<button
						class="navbar-toggler"
						type="button"
						data-toggle="collapse"
						data-target="#navbarText"
						aria-controls="navbarText"
						aria-expanded="false"
						aria-label="Toggle navigation"
					>
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarText">
						<ul class="navbar-nav mr-auto">
							<span class="sr-only">(current)</span>
							<li class="nav-item">
								<a class="nav-link text-info" href="#paquetes"><h4>Paquetes</h4></a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-info" href="#ubicacion"><h4>Ubicación</h4></a>
							</li>
							
							
							<li class="nav-item">
								<a class="nav-link text-info" href="#contacto" onclick="openForm()"
									><h4>Contacto</h4></a
								>
							</li>
							
						</ul>
					</div>
				</div>
			</nav>

			<h1 class="text-center text-white bg-success pt-3 pb-3" id="inicio">¡Instalación en menos de 24 horas!</h1>
			<div class="container">
				<div class="mt-2">
					<div class="bd-example">
						<div id="carouselExampleCaptions" class="carousel slide mr-auto" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
								<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
								<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner bg-secondary">
								<div class="carousel-item active">
									<img
										src="img/promo1.png"
										class="d-block w-100 h-25"
										width="750"
										height="500"
										alt="..."
									/>
								</div>
								<div class="carousel-item">
									<img
										src="img/promo2.png"
										class="d-block w-100 h-25"
										width="750"
										height="500"
										alt="..."
									/>
								</div>
								<div class="carousel-item">
									<img src="img/prom3.png" class="d-block w-100 h-25" height="500" alt="..." />
								</div>
							</div>
							<a
								class="carousel-control-prev"
								href="#carouselExampleCaptions"
								role="button"
								data-slide="prev"
							>
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a
								class="carousel-control-next"
								href="#carouselExampleCaptions"
							
								role="button"
								data-slide="next"
							>
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
				</div>
                <h1 class="text-center display-4" id="paquetes">Paquetes</h1>

                <div class="tab">
                <div class="tipos-paquetes">
                    <button class="tablinks" onclick="openCity(event, 'Tripleplay')"id="defaultOpen" >TriplePlay</button>
                    <button class="tablinks" onclick="openCity(event, 'Dobleplay')">DoblePlay</button>
                </div>
                </div>

                    
                <div id="Tripleplay"class="tabcontent">
				<div class="row mt-2">

                    <div class="cardW3b">
                    @yield('500m')
                </div>
                
                <div class="cardW3b">
                      @yield('350m')		
                    </div>
                    
					<div class="cardW3b">
						@yield('250m')
					</div>

					<div class="cardW3b">
                    @yield('150m')
					</div>

					<div class="cardW3b">
                    @yield('80m')
					</div>

					<div class="cardW3b">
                    @yield('40m')
                    </div>
                    
                    <div class="cardW3b">
                    @yield('20m')
                    </div>
                
                    </div>


				</div>

				<div class="comparacion" id="ubicacion">
					<img class="mx-auto d-block" src="img/1.png" alt="">
				</div>
			</div>

			<a class="whats-button" href="https://wa.me/525524856950?text=Quiero+contratar+totalplay">
				<img src="img/whatsapp.png" width="70" height="70" alt="whatsIcon" />
			</a>

			<button class="open-button" onclick="openForm()">
				<img src="img/contact.png" width="70" height="60" alt="contactoIcon" />
			</button>

			<div class="form-popup" id="myForm">
				<form action="clientes/administrar_cliente.php" method='post' class="form-container">
                    <h1>Contáctanos</h1>
                    <h4>Déjanos tú número</h4>

					<label for="name"><b>Nombre</b></label>
					<input type="text" placeholder="Ingresa tu nombre" name="nombre" required />

					<label for="number"><b>Número de teléfono</b></label>
					<input type="text" placeholder="Tú teléfono" name="telefono" required />

					<input type='hidden' name='insertar' value='insertar'>

					<button type="submit" class="btn">Contactar</button>
					<button type="button" class="btn cancel" onclick="closeForm()">Cierra</button>

					
				</form>
			</div>

			<footer>
				<div class="card text-center">
					<div class="card-footer text-muted">
						<p>Todos los derechos reservados TotalpLay
							telecomunicaciones S.A de C.V.|<a href=""> Aviso de privacidad </a>|<a href="">Carta de derechos</a>|</p>
						Desarrollado por @DevLy-Code
					</div>
				</div>
			</footer>
		</div>
<script
			src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
			integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
			crossorigin="anonymous"
		></script>
		<script
			src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
			integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
			crossorigin="anonymous"
		></script>
		<script
			src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
			integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
			crossorigin="anonymous"
		></script>
</body>
</html>