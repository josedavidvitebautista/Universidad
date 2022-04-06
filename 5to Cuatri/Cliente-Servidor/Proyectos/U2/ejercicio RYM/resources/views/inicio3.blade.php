<!DOCTYPE HTML>
<html>
	<head>
		<title>Practica</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<div id="header">

				<div class="top">

					<!-- Logo -->
						<div id="logo">

							<h1 id="title">Peliculas de Spiderman</h1>
							<p>Hyperspace Engineer</p>
						</div>

					<!-- Nav -->
                    <nav id="nav">
                        <ul>
                            <li><a href="inicio" id="top-link"><span class="icon solid fa-home">Peliculas Termineitor</span></a></li>
                            <li><a href="inicio1" id="portfolio-link"><span class="icon solid fa-th">Peliculas Marvel</span></a></li>
                            <li><a href="inicio2" id="about-link"><span class="icon solid fa-user">Peliculas DC</span></a></li>
                            <li><a href="inicio4" id="contact-link"><span class="icon solid fa-envelope">Peliculas Spiderman</span></a></li>
                            <li><a href="inicio5" id="contact-link"><span class="icon solid fa-envelope">Peliculas Batman</span></a></li>
                        </ul>
                    </nav>

				</div>

				<div class="bottom">

					<!-- Social Icons -->
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
							<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
							<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
						</ul>

				</div>

			</div>

		<!-- Main -->
			<div id="main">

				<!-- Intro -->
					<section id="top" class="one dark cover">
						<div class="container">
						@foreach ($personajes as $personaje)
                            <article>
                                <a target="_blank" href="{{route('detalle.personaje',$personaje['id'])}}" ></a>
                                <header>
                                    <h3><a target="_blank" href="{{route('detalle.personaje',$personaje['id'])}}">{{$personaje['Titulo']}}</a></h3>
                                </header>
                                <img src="{{$personaje['Poster']}}" alt="" width="500">
                            </article>
                        @endforeach
					</section>
            </div>



		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
	</body>
</html>
