 <!DOCTYPE html>
	<html>
		<head>
		  <title>Guitare Learning - Improvisation</title>
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

    <section class="row darken-4 center-align centrealignement" id="impro" style="margin-bottom:250px !important;"> 
		<article>
			<h1>Sed imperdiet turpis ut velit pellentesque ornare.</h1>
			 
			<ul class="collapsible" data-collapsible="accordion">
				<li>
				  <div class="collapsible-header"><i class="material-icons red-text">volume_up</i>Venenatis accumsan</div>
				  <div class="collapsible-body">
						<blockquote>
							<h5>In quis elit et eros posuere</h5>
						</blockquote>					
						
						<p>
						Fusce malesuada maximus lacus efficitur interdum. 
						</p>
						
						<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ante ante, facilisis et justo vel, fermentum gravida enim. 
						</p>
						
						<p>
						Nam egestas vitae nunc nec elementum. Nunc quis interdum augue. 
						</p>
						
						<p>
						Nunc posuere vel quam nec mattis. Fusce magna quam, sagittis et est at, pellentesque mollis ligula.
						</p>				  
				  </div>
				</li>
				
				<li>
				  <div class="collapsible-header"><i class="material-icons red-text">vibration</i>Pellentesque</div>
				  <div class="collapsible-body">
					  <span>
						<blockquote>
							<h5>Pellentesque ex ex</h5>
						</blockquote>
						
						<p>
						Pellentesque ex ex, malesuada non pharetra sit amet, sollicitudin nec risus. 
						</p>
						
						<p>
						Aliquam eu metus nec tellus efficitur tincidunt. 
						</p>					
						
						<blockquote>
							<h5>Etiam quis</h5>
						</blockquote>
						
						<p>
						Fusce efficitur maximus libero, eget elementum arcu rutrum in. Etiam convallis tellus libero, vitae iaculis tortor faucibus ac. Morbi vulputate id nisl ac pellentesque. 
						</p>
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

























