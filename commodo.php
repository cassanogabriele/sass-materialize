<!DOCTYPE html>
	<html>
		<head>
		  <title>Guitare Learning - Blues</title>
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

    <section class="row darken-4 center-align centrealignement" style="margin-bottom:200px !important;"> 
			<article>
			<h1>Commodo</h1>
			 <ul class="collapsible" data-collapsible="accordion">			
				<li>
				  <div class="collapsible-header"><i class="material-icons red-text">flash_on</i>Suspendisse</div>
				  <div class="collapsible-body">
					  <span>	
						<ul class="collection">
							<li class="collection-item">
							Suspendisse interdum tellus eget diam eleifend, tempor ultrices quam sollicitudin.
							
							<li class="collection-item">
							Sed imperdiet turpis ut velit pellentesque ornare. Nam commodo dui vitae eros pharetra, vel bibendum nunc maximus. Fusce orci tellus, suscipit at magna vitae, convallis congue neque. 
							</li>						
						</ul>
					  </span>
				  </div>
				</li>			
				
				<li>
				  <div class="collapsible-header"><i class="material-icons red-text">send</i>Suspendisse interdum tellus</div>
				  <div class="collapsible-body">
					<blockquote>
						<h5>Fusce orci tellus.</h5>
					</blockquote>
					
					  <span>							
						<ul class="collection">
							<li class="collection-item">Duis venenatis accumsan tortor. </li>
							<li class="collection-item">In quis elit et eros posuere vulputate ac sit amet eros. </li>
							<li class="collection-item">Fusce malesuada maximus lacus efficitur interdum. </li>
						</ul>
					  </span>		
				  </div>
				</li>
			  </ul>
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

























