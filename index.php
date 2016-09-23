<?php
	require 'instagramImagenes.php';
	$imagenes = getImages();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>#SIGUEMISPASOS - Fundación Arturo Lopez Perez</title>

		<link href="https://fonts.googleapis.com/css?family=Arvo|Open+Sans:300,400,600,700,400italic" rel="stylesheet">

		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/responsive.css">

		<meta name="viewport" content="width=device-width">

		<!-- Open Graph -->
    	<meta property="og:title" content="#SIGUEMISPASOS" />
    	<meta property="og:description" content="Ayúdanos a prevenir el cáncer de mamas con un aporte voluntario" />
    	<meta property="og:image" content="http://url/img/og.png" />
    <!-- / Open Graph -->

		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	</head>

	<body>
		<header>
			<div class="wrap">
				<hgroup>
					<h1><a href="">#SIGUEMISPASOS</a></h1>
					<h2>Ayúdanos a prevenir el <br>cáncer de mamas!</h2>
				</hgroup>
				
				<a id="go-donar" class="bot" href="#donar-form">Haz tu donación</a>
				<a id="go-video" class="bot" href="#video-corto">Ver cortometraje</a>
				<script>
					$('a.bot').click(function(e){
						e.preventDefault();
						$('html, body').stop().animate({scrollTop: $($(this).attr('href')).offset().top}, 1000);
					});
				</script>
			</div>
		</header>

		<div id="donar-form" class="slide">
			<div class="wrap">
				<h2>Ayúdanos a prevenir el cáncer de mamas <br>con un aporte voluntario.</h2>
				<p>¿Cuánto te gustaría aportar?</p>
				<form>
					<ul>
						<li class="first">
							<input type="radio" id="m1" class="valor" name="monto" value="1" />
  							<label for="m1"><span>$1.000</span></label>
  						</li>
  						<li class="second">
							<input type="radio" id="m2" class="valor" name="monto" value="2" />
  							<label for="m2"><span>$5.000</span></label>
  						</li>
  						<li>
							<input type="radio" id="m3" class="valor" name="monto" value="3" />
  							<label for="m3"><span>$10.000</span></label>
  						</li>
  						<li>
							<input type="radio" id="m4" class="valor" name="monto" value="4" />
  							<label for="m4"><span>$15.000</span></label>
  						</li>
  						<li>
							<input type="radio" id="m5" class="valor" name="monto" value="5" />
  							<label for="m5"><span>$30.000</span></label>
  						</li>
					</ul>
					<a class="bot pagar" href="">Realizar donación</a>
				</form>
				<!-- Para interacción de Checkbox -->
				<script> 
					$(function () {
						$( "input" ).change(function() {
	  						var $input = $( this );

							if($(".valor").is(':checked')) {  
					            $('.bot.pagar').css({'opacity':'0.9', 'pointer-events': 'auto', 'cursor': 'pointer'});
					        } else {  
					            $('.bot.pagar').css({'opacity':'0.5', 'pointer-events': 'none', 'cursor': 'default'});
					        }
				    	});
					});

				</script>
			</div>
		</div>

		<div id="hashtag-social" class="slide">
			<div class="cortina">
				<div class="wrap">
					<img src="img/hashtag.png" class="hashtag" />
					<h3>Ve las imágenes de quienes están apoyando nuestra causa.</h3>
					<a class="bot" href="https://www.instagram.com/explore/tags/siguemispasos/" target="_blank">Ir a Instagram</a>
				</div>
			</div>
			<div class="instagramfeed">
				<ul>
					<?php foreach ($imagenes as $k => $imagen){ ?>
						<li class="img-<?= $k+1; ?>"><img src="<?= $imagen; ?>"></li>
					<?php } ?>
				</ul>

				<script>
					$(function () {
						$.each($(".instagramfeed li img"), function (){
							$(this).load(function (){
								if ($(this).width() > $(this).height())
									$(this).addClass("fullheight");
							});
						});
					});
				</script>

			</div>
		</div>

		<div id="video-corto" class="slide">
			<div class="cortina">
				<div class="wrap">
					<a class="play-video" href=""></a>
					<h3>Es tiempo de prevenir el cáncer de mamas</h3>
					<p>Ve el corto de Matías Bize</p>
					<div class="social">
						<p>Compártelo ahora con tus amigos</p>
						<a class="btn f" href=""></a>
						<a class="btn t" href=""></a>
					</div>
				</div>
			</div>
			<div>
				<!-- aquí pondré el video de bg -->
			</div>
		</div>

		<div id="info-video-mobile">
			<div class="wrap">
				<a class="play-video" href=""></a>
				<h3>Es tiempo de prevenir el cáncer de mamas</h3>
				<p>Ve el corto de Matías Bize</p>
				<div class="social">
					<p>Compártelo ahora con tus amigos</p>
					<a class="btn f" href=""></a>
					<a class="btn t" href=""></a>
				</div>
			</div>
		</div>


		<div id="about" class="slide">
			<div class="wrap">
				<div class="about-logo">
					<img src="img/Falp.png"/>
				</div>
				<div class="blabla">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a dignissim risus. Maecenas id condimentum purus, id varius velit Phasellus.</p>
					<p><a href="">Conoce más de Falp aquí</a></p>
				</div>
			</div>
		</div>

		<footer>
			<div class="wrap">
				<div class="logo-falp-bn">
					Falp
				</div>
				<div class="converse">
					<p>
						<span>Con el apoyo de: </span>
						<span class="nombre-marca">converse</span>
						<img src="img/converse.png" />
					</p>
				</div>
				<p class="micro">Falp 2016 © Todos los derechos reservados.</p>
			</div>
		</footer>

		<div id="logo-falp-fijo">Por FALP</div>
	</body>

	<script>
		$(function (){
			$(".social a").click(function (e) {
				e.preventDefault();
				var link = "http://url";
				if ($(this).hasClass("t")) {
					mensaje = "Ayúdanos a prevenir el cáncer de mamas con un aporte voluntario";
					url = encodeURIComponent(link);

					var urlTwitter = 'https://twitter.com/intent/tweet?text=';
					urlTwitter = urlTwitter + mensaje;
					urlTwitter = urlTwitter +'&url=' + url;
					popupWindow = window.open(
						urlTwitter,'popUpWindow','height=300,width=600,left=10,top=10,resizable=no,scrollbars=no,toolbar=no,menubar=no,location=no,directories=no,status=yes');
				} else {
					var urlFacebook = 'http://www.facebook.com/share.php?u=' + link;
					popupWindow = window.open(
						urlFacebook,'popUpWindow','height=300,width=600,left=10,top=10,resizable=no,scrollbars=no,toolbar=no,menubar=no,location=no,directories=no,status=yes');
						}
					});
		});
	</script>
</html>