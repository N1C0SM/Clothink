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
		<script src="../js/script.js"></script>
		<?php include '../database/db.php' ?>
	</head>
	<body>
		<div id="loader" style="display: none"></div>
		<div id="content">
			<header>
				<nav>
					<ul>
						<li><a href="../html/index.html">inicio</a></li>
						<li class="active"><a href="../html/products.html">productos</a></li>
					</ul>
					<img src="../img/brand-page.svg" alt="brand-page" />
					<ul>
						<li class="shopping-cart"><img src="../img/icons/shopping-cart.svg" alt="shopping-cart" /></li>
						<li><a href="../html/contact.html">contacto</a></li>
					</ul>
				</nav>
			</header>
			<main>
				<?php
					$product = $products[$_GET['id']-1];
						if ($product) {
						echo('<section class="product-detail">');
						if (!empty($product['image'])) {
							$productsImagesUrls = array_map('trim', explode(',', $product['image']));
							if (count($productsImagesUrls) > 0) {
								echo('<div class="images">');
								foreach ($productsImagesUrls as $imageUrl) {
									echo '<img src="' . htmlspecialchars($imageUrl) . '" alt="Imagen del producto">';
								}
								echo('</div>');
							} else {
								echo '<p>No hay imágenes disponibles para este producto .</p>'.$product['id']; 
							}
						} else {
							echo '<p>No hay imágenes disponibles para este producto.</p>' . $product['id']; 
						}
						
						echo('</section>'); 
					} else {
						echo '<p>Producto no encontrado.</p>'; 
					}
					
    ?>
    <section class="reviews">
        <h2 class="title">reseñas</h2>
        <h3 class="category">reseñas de productos</h3>
    </section>
</main>
?>
				<section class="reviews">
					<h2 class="title">reseñas</h2>
					<h3 class="category">reseñas de productos</h3>
				</section>
			</main>
			<footer></footer>
		</div>
	</body>
</html>
