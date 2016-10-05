<?php
	require 'instagramImagenes.php';
	$imagenes = getImages();
?>

<!DOCTYPE html>
<html>
	<head>
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-WK76CZ');</script>
		<!-- End Google Tag Manager -->

		<meta charset="UTF-8">
		<title>#SIGUEMISPASOS - Fundación Arturo Lopez Perez</title>

		<link href="https://fonts.googleapis.com/css?family=Arvo|Open+Sans:300,400,600,700,400italic" rel="stylesheet">

		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/responsive.css">

		<meta name="viewport" content="width=device-width">

		<!-- Open Graph -->
    	<meta property="og:title" content="#SIGUEMISPASOS" />
    	<meta property="og:description" content="Ayúdanos a prevenir el cáncer de mama con un aporte voluntario" />
    	<meta property="og:image" content="http://www.siguemispasos.cl/images/sigue-og.png" />
    	<!-- / Open Graph -->

    	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	</head>

	<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WK76CZ"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
		<header>
			<div class="wrap">
				<hgroup>
					<h1><a href="">#SIGUEMISPASOS</a></h1>
					<h2>Ayúdanos a prevenir el <br>cáncer de mama!</h2>
				</hgroup>
				<div class="accesos">
					<a id="go-donar" class="bot" href="https://www.darcontarjeta.cl/portalpagodirecto/pages/institucion.jsf?idEstablecimiento=3388272" target="_blank">Haz tu donación</a>
					<!--
					<a id="go-donar" class="bot" href="#donar-form">Haz tu donación</a>
					-->
					<a id="go-video" class="bot down" href="#video-corto">Ver cortometraje</a>
				</div>
				<div class="social">
					<p>Difunde esta causa en</p>
					<a class="btn f" href=""></a>
					<a class="btn t" href=""></a>
				</div>
				<script>
					$('a.down').click(function(e){
						e.preventDefault();
						$('html, body').stop().animate({scrollTop: $($(this).attr('href')).offset().top}, 1000);
					});
				</script>
			</div>
		</header>

		<!-- Ocultaremos este contenido mientras no tengamos WebPay -->
		<!--

		<div id="donar-form" class="slide">
			<div class="wrap">
				<h2>Ayúdanos a prevenir el cáncer de mama <br>con un aporte voluntario.</h2>
				<p>¿Cuánto te gustaría aportar?</p>
				<form>
					<ul>
						<li class="first">
							<input type="radio" id="m1" class="valor" name="monto" value="1" data-url="https://siguemispasos.jumpseller.com/1000" />
  							<label for="m1"><span>$1.000</span></label>
  						</li>
  						<li class="second">
							<input type="radio" id="m2" class="valor" name="monto" value="2" data-url="https://siguemispasos.jumpseller.com/5000" />
  							<label for="m2"><span>$5.000</span></label>
  						</li>
  						<li>
							<input type="radio" id="m3" class="valor" name="monto" value="3" data-url="https://siguemispasos.jumpseller.com/10000" />
  							<label for="m3"><span>$10.000</span></label>
  						</li>
  						<li>
							<input type="radio" id="m4" class="valor" name="monto" value="4" data-url="https://siguemispasos.jumpseller.com/15000" />
  							<label for="m4"><span>$15.000</span></label>
  						</li>
  						<li>
							<input type="radio" id="m5" class="valor" name="monto" value="5" data-url="https://siguemispasos.jumpseller.com/30000" />
  							<label for="m5"><span>$30.000</span></label>
  						</li>
					</ul>
					<a class="bot pagar" href="">Realizar donación</a>
				</form>
				-->
				<!-- Para interacción de Checkbox -->
				<!-- 
				<script> 
					$(function () {
						$( ".valor" ).change(function() {
	  						var $input = $( this );
							if($input.is(':checked')) {  
					            $('.bot.pagar').css({'opacity':'0.9', 'pointer-events': 'auto', 'cursor': 'pointer'});
					            $('.bot.pagar').attr("href", $input.data("url"));
					        } else {  
					            $('.bot.pagar').css({'opacity':'0.5', 'pointer-events': 'none', 'cursor': 'default'});
					            $('.bot.pagar').attr("href", "");
					        }
				    	});

				    	$(".bot.pagar").click(function () {
				    		if ($(this).attr("href").length == 0){
				    			$('html, body').animate({
			    					scrollTop: $("#donar-form").offset().top - 40
								}, 1000);
				    			return false;
				    		}
				    		return true;
				    	});
					});

				</script>
			</div>
		</div>
		-->

		<div id="hashtag-social" class="slide">
			<div class="cortina">
				<div class="wrap">
					<img src="images/hashtag.png" class="hashtag" />
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
							var _img = $(this);
							$(this).ready(function (){
								if (_img.width() > _img.height())
									_img.addClass("fullheight");
							});
						});
					});
				</script>

			</div>
		</div>

		<!-- Ocultaremos este contenido mientras no exista -->
		
		<div id="video-corto" class="slide">
			<div class="cortina">
				<div class="wrap">
					<a class="play-video" href=""></a>
					<h3>Video de FALP reúne a 14 reconocidas chilenas<br/>para hablar sobre el cáncer de mama</h3>
					<div class="social">
						<p>Compártelo ahora con tus amigos</p>
						<a class="btn f" href="" data-url="https://www.facebook.com/Falpcomunicaciones/videos/1408874019140257/" ></a>
						<a class="btn t" href="" data-url="https://www.facebook.com/Falpcomunicaciones/videos/1408874019140257/"></a>
					</div>
				</div>
			</div>
		</div>

		<div id="video-fb">
			<div class="fb-video" data-href="https://www.facebook.com/Falpcomunicaciones/videos/1408874019140257/" data-width="500" data-show-text="false"></div>	
		</div>

		<div id="info-video-mobile">
			<div class="wrap">
				<a class="play-video" href=""></a>
				<h3>Video de FALP reúne a 14 reconocidas chilenas para hablar sobre el cáncer de mama</h3>
				<div class="social">
					<p>Compártelo ahora con tus amigos</p>
					<a class="btn f" href="" data-url="https://www.facebook.com/Falpcomunicaciones/videos/1408874019140257/" ></a>
					<a class="btn t" href="" data-url="https://www.facebook.com/Falpcomunicaciones/videos/1408874019140257/" ></a>
				</div>
			</div>
		</div>


		<div id="about" class="slide">
			<div class="wrap">
				<div class="about-logo">
					<img src="images/Falp.png"/>
				</div>
				<div class="blabla">
					<p>FALP lleva más de 60 años trabajando en la prevención, investigación, docencia, detección temprana, diagnóstico, tratamiento y protección financiera y beneficencia del cáncer. FALP cuenta con una amplia experiencia en la lucha contra el cáncer y prestigio a nivel nacional e internacional.</p>
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
						<img src="images/converse.png" />
					</p>
				</div>
				<p class="micro">Falp 2016 © Todos los derechos reservados.</p>
			</div>
		</footer>

		<div id="logo-falp-fijo">Por FALP</div>


		<div id="fb-root"></div>

	</body>

	<script>
		$(function (){

			window.fbAsyncInit = function() {
			    FB.init({
			      appId      : '195167410910037',
			      xfbml      : true,
			      version    : 'v2.8'
			    });
			  };

			  (function(d, s, id){
			     var js, fjs = d.getElementsByTagName(s)[0];
			     if (d.getElementById(id)) {return;}
			     js = d.createElement(s); js.id = id;
			     js.src = "//connect.facebook.net/en_US/sdk.js";
			     fjs.parentNode.insertBefore(js, fjs);
			   }(document, 'script', 'facebook-jssdk'));


			$("#video-corto a.play-video").click(function (e) {
				e.preventDefault();
				$("#video-corto").fadeOut(function (){
					$("#video-fb").fadeIn();	
				});
			}); 

			$(".social a").click(function (e) {
				e.preventDefault();
				var link = "http://siguemispasos.cl/";
				var mensaje = "Ayúdanos a prevenir el cáncer de mama con un aporte voluntario. #SigueMisPasos";
				if ($(this).data("url")) {
					link = $(this).data("url");
					mensaje = "¿Cuánto sabes realmente sobre el cáncer de mama? Conversa. Pregunta. Infórmate. #SigueMisPasos";
				}

				if ($(this).hasClass("t")) {
					url = encodeURIComponent(link);
					mensaje = encodeURIComponent(mensaje);
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