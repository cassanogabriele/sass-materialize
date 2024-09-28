 <!DOCTYPE html>
	<html>
		<head>
		  <title>Guitare Learning - Electrique</title>
		  <meta charset="utf-8">
		  <!--Import Google Icon Font-->
		  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		  <!-- Import Google font Lobster-->
		  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 
		  <!-- Compiled and minified CSS -->
		  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
		  <link rel="stylesheet" type="text/css" href="stylesheets/screen.css">
		</style>
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		</head>	
	

	<body>
	<?php include("nav.php");?>

    <section class="row darken-4 center-align centrealignement"> 
		<h1>Composants d'une guitare acoustique</h1>
				
		<p>
		Toutes les guitares, qu’elles soient électriques ou acoustiques, partagent certaines caractéristiques physiques faisant en sorte qu’elles se comportent comme des instruments à cordes et pas des percussions. Connaître l’anatomie d’une guitare électrique est important afin de comprendre la façon de bien jouer de cet instrument, mais aussi pour s’en occuper convenablement.
		Du point de vue des composants qui constituent les guitares électriques, ces dernières en possèdent plus que les guitares acoustiques. Cependant, les luthiers s’entendent généralement sur le fait que fabriquer une guitare acoustique est plus difficile que de concevoir une guitare électrique. C’est pourquoi, à poids égal, les guitares acoustiques coûtent aussi cher – ou plus – que leurs homologues électriques. Les deux types de guitares suivent les mêmes « approche » et « principe de base », malgré une différence parfois radicale dans la production du son.			
		</p>
			
		<br>
		
		<img class="materialboxed center-align centrealignement" id="" src="img/electrique.png">			
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

























