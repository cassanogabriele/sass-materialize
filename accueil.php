 <!DOCTYPE html>
	<html>
		<head>
		  <title>Guitare Learning - Accueil</title>
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
		
		<!-- parallax -->
		<section class="parallax-container" id="presentation">
			<ul class="collection">
				<li class="collection-item avatar">
				  <i class="material-icons circle red">build</i>
					  <span class="title flow-text">Sed diam odio</span>
						<p class="top">Sed diam odio, egestas molestie eleifend quis, ultricies ac nibh.</p>
					  <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
				</li>
				
				<li class="collection-item avatar">
				  <i class="material-icons circle red">hearing</i>
				  <span class="title flow-text">Aenean porta nisl</span>
					  <p class="top">Aenean porta nisl sit amet lacus accumsan accumsan sed quis ligula.</p>	
				  <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
				</li>
				
				<li class="collection-item avatar">
				  <i class="material-icons circle red">music_note</i>
				  <span class="title flow-text">Vivamus nec mauris tempor, </span>
					  <p class="top">Vivamus nec mauris tempor, tincidunt felis vitae, scelerisque sem.</p>	
				  <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
				</li>
				
				<li class="collection-item avatar">
				  <i class="material-icons circle red">vibration</i>
				  <span class="title flow-text">Suspendisse eget</span>
					<p class="top">Suspendisse eget lacus in nibh scelerisque gravida non sed mauris. Curabitur dignissim malesuada augue a consequat. </p>
				
				  <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
				</li>
				
				<li class="collection-item avatar">
				  <i class="material-icons circle red">play_arrow</i>
				  <span class="title flow-text">Interdum et malesuada</span>
					<p class="top">Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>					 
				 
				  <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
				</li>
		  </ul>	
		</section>
		
		
		  <div class="carousel">
			<a class="carousel-item" href="#one!"><img src="img/g1.jpg"></a>
			<a class="carousel-item" href="#two!"><img src="img/g2.jpg"></a>
			<a class="carousel-item" href="#three!"><img src="img/g3.jpg"></a>
			<a class="carousel-item" href="#four!"><img src="img/g4.jpg"></a>
		  </div>
		
		 <article class="row" style="margin: 0 auto;width:860px;margin-bottom:60px;">
			<a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Bon amusement! Rock and Roll !!">Enjoy</a>
			<div class="col s12 m6">
			  <div class="card blue-grey darken-1">
				<div class="card-content white-text">
				  <span class="card-title">Aliquam eget ligula</span>
					<p> 
					Aliquam eget ligula non tellus mattis placerat sit amet eu justo. 
					</p>
				</div>
				<div class="card-action">
				  <a href="guitareacoustique.php">Suspendisse interdum</a>
				  <a href="guitareelectrique.php">Sed imperdiet turpis</a>
				</div>
			  </div>
			</div>
		  </article>
            
		
		
		<?php include("footer.php"); ?>

		<!--Import jQuery before materialize.js-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

		<script>
		jQuery(document).ready(function($) {		
		  $('.tap-target').tapTarget('open');
		  $('.tap-target').tapTarget('close');	
		});
		
		$(document).ready(function(){
			$('.tooltipped').tooltip({delay: 50});
		});
        
		 $(document).ready(function(){
		  $('.carousel').carousel();
		});        
		</script>		
	</body>
</html>

























