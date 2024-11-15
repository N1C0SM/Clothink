<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="twitter:title" content="Klothink - Ropa Sostenible y Personalizada" />
		<meta property="og:title" content="Klothink - Ropa Sostenible y Personalizada" />
		<meta name="keywords" content="Moda sostenible, ropa personalizada, estilo de vida, algoritmos, aprendizaje automático, impacto ambiental" />
		<meta name="twitter:description" content="Encuentra ropa que se adapte a tu estilo de vida y valores." />
		<meta property="og:description" content="Encuentra ropa que se adapte a tu estilo de vida y valores." />
		<meta name="description" content="Klothink - Encuentra ropa sostenible y personalizada que se adapta a tu estilo de vida y valores." />
		<title>Clothink - Encuentra ropa que se adapte a tu estilo de vida y valores.</title>
		<link rel="icon" href="../../img/brand-page.svg" />
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet" />
		<link rel="stylesheet" href="../../css/styles.css" />
		<script src="../../js/script.js"></script>
		<?php include '../database/db.php' ?>
	</head>
	<body>
		<div id="loader" style="display: none"></div>
		<div id="content">
			<header>
				<nav>
					<ul>
						<li><a href="./index.php">inicio</a></li>
						<li class="active"><a href="./products.html">productos</a></li>
					</ul>
					<img src="../../img/brand-page.svg" alt="brand-page" />
					<ul>
						<li class="shopping-cart"><img src="../../img/icons/shopping-cart.svg" alt="shopping-cart" /></li>
						<li><a href="./contact.html">contacto</a></li>
					</ul>
				</nav>
			</header>
			<main>
				<section class="hero">
					<section class="header">
						<section class="title">
							<h1>descubre la moda.</h1>
							<h3>productos</h3>
						</section>
						<p>sumergete en un mundo de inovación en moda en Klothink. Nuestras colecciones cuidadosamente seleccionadas reunen las últimas tendencias y clasicos atemporales, asegurandote de encontrar las piezas perfectas para cada ocasión</p>
					</section>
					<section class="news">
						<div class="new">
							<h2>novedades</h2>
							<p>50+ nuevas diarias</p>
						</div>
						<div class="new">
							<h2>más de 1,500+</h2>
							<p>productos de moda seleccionados</p>
						</div>
					</section>
				</section>
				<section class="filters">
					<button class="active">todo</button>
					<button><img src="../../img/icons/shirt.svg" alt="shirt" /> ropa de caballeros</button>
					<button><img src="../../img/icons/dress.svg" alt="dress" /> ropa de mujer</button>
					<button><img src="../../img/icons/baby-dress.svg" alt="baby-dress" /> ropa para niños</button>
				</section>
				<section class="collections">
					<?php
                        foreach ($collections as $collection) {
                            echo '<div class="collection" id="' . htmlspecialchars($collection['name']) . '">';
                                echo'<div class="header">';
                                    echo'<div class="title">';
                                        echo '<h2>' . htmlspecialchars($collection['name']) . '</h2>';
                                        echo'<p>' .    htmlspecialchars($collection['description'])         . '</p>';
                                    echo'</div>';
                                echo'</div>';
                                echo('<div class="clothes">');
								foreach ($products as $product ) {
											echo('<a href="./product-detail.php?id='.$product['id'].'">');
											$productsImagesUrls = array_map('trim', explode(',', $product['image']));
												echo'<article>';
													echo'<figure>';
														echo '<img src="' . htmlspecialchars($productsImagesUrls[0]) . '" alt="' . htmlspecialchars($product['name']) . '" />';
													echo'</figure>';
													echo'<figcaption>';
														echo'<h2>' .htmlspecialchars($product['name']).'</h2>';
														echo'<div class="footer">';
															echo'<h3>' . htmlspecialchars($product['fit']) . '</h3>';
															echo'<span>'. htmlspecialchars($product['price']) .'</span>';
														echo'</div>';
													echo'</figcaption>';
												echo'</article>';
											echo'</a>';
                                        }
                        		echo'</div>';
                        }
                    ?>
			</main>
			<footer>
				<section class="main">
					<section class="suscription">
						<img src="../../img/brand-page.svg" alt="brand-page" />
						<div class="main">
							<input type="text" placeholder="Ingrese su correo electrónico" />
							<button>Suscribirse</button>
						</div>
					</section>
					<section class="menu">
						<div class="row">
							<a href="./index.php"><h2>Inicio</h2></a>
							<p>Características</p>
							<p>Productos populares</p>
							<p>Testimonios</p>
							<p>FAQ</p>
						</div>
						<div class="row">
							<h2>Hombre</h2>
							<a href="#formal"><p>Formal</p></a>
							<a href="#sport"><p>Sport</p></a>
							<a href="#casual"><p>Casual</p></a>
						</div>
						<div class="row">
							<h2>Mujer</h2>
							<p>Formal</p>
							<p>Sport</p>
							<p>Casual</p>
						</div>
						<div class="row">
							<h2>Niños</h2>
							<p>Formal</p>
							<p>Sport</p>
							<p>Casual</p>
						</div>
					</section>
				</section>
				<section class="footer-policies">
					<div class="policies-content">
						<a href="./polities/Terminos-Condiciones.php"><p>Términos y condiciones</p></a>
						<a href="./polities/Politica-privacidad.php"><p>Política de privacidad</p></a>
					</div>
					<div class="social-media-icons">
						<a href="https://www.linkedin.com/in/nicolas-sanmarcos/" target="_blank" class="social-icon">
							<img src="../../img/icons/linkedin.svg" alt="linkedin-logo" />
						</a>
						<a class="social-icon" target="_blank">
							<img src="../../img/icons/twitter.svg" alt="twitter-logo" />
						</a>
						<a class="social-icon" target="_blank">
							<img src="../../img/icons/facebook.svg" alt="facebook-logo" />
						</a>
					</div>
					<div class="rights">
						<p>© 2024 Klothink. Todos los derechos reservados.</p>
					</div>
				</section>
			</footer>

		</div>
	</body>
</html>