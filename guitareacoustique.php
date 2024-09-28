 <!DOCTYPE html>
	<html>
		<head>
			<title>Guitare Learning - Acoustique</title>
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

			<section class="row darken-4 center-align centrealignement"> 
				<article>
					<h1>Composants d'une guitare acoustique</h1>
						
					<p>
					Les guitares acoustiques peuvent être "classique" ou "folk". Le choix revient au musicien, selon le style de son qu'il désire. Que ce soit l'une ou l'autre, les guitares acoustiques sont composées dans la très grande majorité de six cordes tendues parallèlement au manche entre le sillet de tête et le chevalet dont la tension peut être ajustée grâce aux mécaniques (clefs auxquelles s'enroulent les cordes). Chaque corde est composée d’un fil de base appelé " âme " entouré par un autre fil dont les matières divergent, que l'on appelle filage. Il existe aussi des guitares comportant 12 cordes afin d'avoir plus d'harmoniques.
					Les matières de l’âme et du filage divergent selon le type de guitare.
					Ici nous nous intéresserons uniquement aux guitares sèches, généralement faites de bois,  dont les cordes peuvent être conçu soit en nylons filées de métal ,filées de bronze, d’argent ou encore de nickel, chaque matière produit un son d’une couleur différente. Nous avons vu que l'instrument de musique qu'est la guitare produit des sons dits musicaux, caractérisés par leur timbre. Or, si la matière des cordes influe sur l'identité du son produit, ce facteur influence donc le timbre du son émit par la guitare. A un matériau donné correspondra donc une gamme de sonorité. Le style de jeu mais aussi et surtout le type de vibration varie selon ce paramètre. Ainsi, la matière du cordage est un agent décisif dans la sonorité de l'instrument.
					Néanmoins, lorsque qu'un musicien choisit sa guitare, plusieurs paramètres peuvent encore avoir une plus grande incidence sur la qualité du son.
					En effet, le bois dans lequel la guitare est forgée a un grand impact sur la résonnance. L'intensité sonore peut en pâtir mais également encore une fois le caractère du son. Nous étudierons plus précisément cette répercussion dans le dernier point de cette partie.
					Enfin, la forme de la caisse de résonnance (qui permet l'amplification du son émit lors du pincement des cordes), a de fortes conséquences sur le son qu'elle va amplifier puisque en effet, la vitesse de propagation des ondes est bouleversée selon l'espace dans lequel on les projette. Ainsi plus le périmètre d'une caisse est faible, plus le son se propage vite.			
					</p>
					
					<br>
					
					<img class="materialboxed" id="acoustic" src="img/acoustique.png">
				</article>
			</section>
				
				<?php include("footer.php"); ?>		
				
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
				  $('.collapsible').collapsible({
					accordion: false, // A setting that changes the collapsible behavior to expandable instead of the default accordion style			
				  });
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

























