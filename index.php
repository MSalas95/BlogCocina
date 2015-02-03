<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<title>TituloBlogCocina</title>
</head>
<body>

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">					

			<div class="navbar-header">
			<a href="#" class="navbar-brand">Cook site</a>
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse navHeaderCollapse">

				<form class="navbar-form navbar-left" role="search">
		        	<div class="form-group">
		          		<input type="text" class="form-control" placeholder="Search">
		        	</div>
		        	<button type="submit" class="btn btn-default">Submit</button>
	      		</form>
				
				<ul class="nav navbar-nav navbar-right">
					<li class ="active"><a href="#">Home</a></li>
					<li><a href="#">Blog</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Social Media <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Twitter</a></li>
							<li><a href="#">Facebook</a></li>
							<li><a href="#">Google+</a></li>						
						</ul>
					</li>					
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
				</ul>

			</div>

		</div>

	</div>

	<header id="myCarousel" class="carousel slide sombra-bottom" >
		<ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
        	<div class="item active">
        		<div class="fill" style="background: blue"></div>
        		<div class="carousel-caption">
                    <h2>Item 1</h2>                
        		</div>
        	</div>
        	<div class="item">
        		<div class="fill" style="background: red"></div>
        		<div class="carousel-caption">
                    <h2>Item 2</h2>                
        		</div>
        	</div>
        	<div class="item">
        		<div class="fill" style="background: green"></div>
        		<div class="carousel-caption">
                    <h2>Item 3</h2>                
        		</div>
        	</div>

        </div>

        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

	</header>


	<div class="container margin">
		
		<div class="row">
			
			<div class="col-md-8 sombra">
				<?php 
					for ($i=0; $i < 100; $i++) { 
						echo "<p>Post</p>";
					}
				 ?>
			</div>

			<div class="col-md-4 aside-border">
				<?php 
					for ($i=0; $i < 100; $i++) { 
						echo "<p>Aside</p>";
					}
				 ?>
			</div>

		</div>

	</div>

<div class="navbar navbar-inverse navbar-static-bottom margin-btm">
</div>


	<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 4000 //changes the speed
    })
    </script>

</body>
</html>