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
			<title>Guitar Learning</title>
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
			 
			<style>
			.alert {
				.card-content {
					span {
						font-weight: bold;
						font-size: 1.1em;
						margin-right:4px;
					}
					.material-icons {
						font-size: 1.5em;
						position: relative;
						top: 5px;
						margin-right: 0.5em;
					}	
				}
			}	
			
			.text-center{ text-align: center}	
			
			.mt{ margin-top: 25px; }
			 </style>
		</head>

		<body>
			<?php include("nav.php");?>
			
			<div class="alert card red lighten-4 red-text text-darken-4 text-center mt">
				<div class="card-content">
					<p><i class="material-icons"></i><span>&#9888; Ce site est un site de démonstration, contenant des données fictives, et ayant pour unique objectif, de présenter mes compétences en Materialize.</span></p>
				</div>
			</div>
  
			
			<section class="white" id="guitarists">
				<section class="container">
				    <section class="row padding-perso">
						<article class="col m4 s12 center-align" id="guitarist1">
						   <img src="img/g1.jpg" id="g1" width="320" height="240" />
						</article>

						<article class="col m4 s12 center-align" id="guitarist2">
						  <img src="img/g2.jpg" id="g2" width="320" height="240" />
						</article>

						<article class="col m4 s12 center-align" id="guitarist3">
						  <img src="img/g3.jpg" id="g3" width="320" height="240" />
						</article>  

						<article class="col m4 s12 center-align" id="guitarist3">
						  <img src="img/g4.jpg" id="g3" width="320" height="240" />
						</article>  						
					</section>
				 </section>
			</section>
		
		  
			<!-- parallax -->
			 <section class="parallax-container" >
			   <section class="container valign-wrapper accroche">
					<div class="row white-text darken-4 center-align centrealignement"> 
					 <h1>Guitar Learning</h1>
					 <p id="subtitle" class="red darken-4">Apprenez les bases pour jouer de la guitare.</p>
				   </div>
				</section>

				<section class="parallax" style='background-color:black !important;'>
				   
				</section>
			</section>

			<section class="white">
				<section class="container">
				    <section class="row padding-perso">
						<article class="col m4 s12 center-align">
						   <i class="material-icons red-text darken-4 large">play_arrow</i>
						   <h2 class="shadows">Apprentissage</h2> 
						   <p class="border-shadows">Répéter les méthodes un peu tous les jours.</p>
						</article>

						<article class="col m4 s12 center-align">
						   <i class="material-icons red-text darken-4 large">album</i>
						   <h2 class="shadows">Composer</h2> 
						   <p class="border-shadows">Composer rapidement.</p>
						</article>

						<article class="col m4 s12 center-align">
						   <i class="material-icons red-text darken-4 large">explore</i>
						   <h2 class="shadows">Solos</h2> 
						   <p class="border-shadows">Construisez vos solos.</p>
						</article>        
					</section>
				 </section>
			</section>
	

			<?php include("footer.php"); ?>
			
			<a href="http://invokingdemons.gabriel-cassano.be/" style="display:none;">Invoking Demons</a>
			
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
















