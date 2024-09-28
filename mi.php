<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-68888768-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-68888768-3');
</script>

<!DOCTYPE html>
	<html>
		<head>
		 <title>Guitar Learning - Mentions légales</title>
		 <meta charset="utf-8">
		 <!--Import Google Icon Font-->
		 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		 <!-- Import Google font Lobster-->
		 <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 
		 <!-- Compiled and minified CSS -->
		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
		 <link rel="stylesheet" type="text/css" href="stylesheets/screen.css">
		 <!--Let browser know website is optimized for mobile-->
		 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		</head>

		<body>
			<?php include("nav.php");?>
			
			<section class="row darken-4 center-align centrealignement" id="mi">
				<article>
					<h1>Mentions légales</h1>
				
					<p>
					Je me réserve le droit de modifier les mentions légales de ce site en fonction d’éléments nouveaux concernant cette activité.Le site est édité et mis à jour par :			
					</p>			
			
					<ul>
						<li>Cassano Gabriele</li>
						<li>Domicilié à l’adresse suivante : Rue Saint-Alphonse, n°180, 7110 Strépy-Bracquegnies (Belgique)</li>
						<li>Téléphone: 0497/62.10.10</li>
						<li>Adresse e-mail: gabriel_cassano@hotmail.com</li>						
					</ul>
					
					<p>
					J’ai écrit tous les textes du projet Secret Faces.
					</p>
					
					<p>
					Ce site est hébergé par:
					<br/>
					Kimsufi
					<br/>
					Dont le siège est situé à l’adresse suivante : 2 rue Kellermann – 59100 Roubaix (France).
					</p>
				</article>
			</section>		  
			

			<?php include("footer.php"); ?>
			
			<a href="http://invokingdemons.eu/" style="display:none;">Invoking Demons</a>
			<a href="http://homesweethomedesign.be/" style="display:none;">Home Sweet Home Design</a>

			<!--Import jQuery before materialize.js-->
			<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

			<script>
			 jQuery(document).ready(function($) {
			  $(".button-collapse").sideNav();
			  $(".parallax").parallax();
			  $(".slider").slider({full_width:true});
			  Materialize.updateTextFields();
			  $('select').material_select();
			  $('.modal').modal();    
			});
			</script>

			<script>
			 jQuery(document).ready(function($) {
			  var options = [{
			   selector:"#infobulle",offset:100, callback:'Materialize.toast("ne partez pas sans m\'avoir écrit", 3500)'
			 }];

			 Materialize.scrollFire(options);
			});
			</script>
		</body>
	</html>
















