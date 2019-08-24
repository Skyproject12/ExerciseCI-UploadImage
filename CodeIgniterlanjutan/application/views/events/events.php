<html>
	<head>
		<title></title>
	<link rel="stylesheet" href="./Asset/css/events.css">
	<style>
		.footer-container {
			background-image:url("./Asset/gambar/events.jpg");
		}
	</style>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" 
	integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	</head>
	
	<body>
		<div class="jumbotron footer-container mb-sm-0 dibawahnav">
			<div class="container">
				<div class="row col-sm-4">
				  <h1 class="display-4 text-primary">Endless,<small class="text-success">Code</small></h1>
				  <p class="text-dark mt-sm-2"style="font-size:22px;">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
				  <p class="text-muted">It uses utility classes for typography and spacing to space content out within the larger container.</p>
				  <a class="btn btn-success btn-lg" href="<?php echo base_url()?>/aboutus" role="button">Learn More</a>
				</div>
			</div>
		</div>
		<div class="col-12 mb-sm-4 py-sm-4 events">
			<div class="container">
				<div class="row ">
					<div class="media col-4 ">
					  <i class="fas fa-gift display-4 mr-sm-2 text-light" style="font-size:50;"></i>
					  <div class="media-body" >
						<h5 class="mt-0 text-light">Media heading</h5>
						<p class="text-light">Cras sit amet nibh libero, in gravida  </p>  
					  </div>
					</div>
					<div class="media col-4 ">
					 <i class="fas fa-cog dispaly-4 mr-sm-2 text-light" style="font-size:50;"></i>
					  <div class="media-body">
						<h5 class="mt-0 text-light">Media heading</h5>
						<p class="text-light"> Cras sit amet nibh libero, in gravida </p>  
					  </div>
					</div>
					<div class="media col-4 ">
					  <i class="fas fa-book dispaly-4 mr-sm-2 text-light" style="font-size:50;"></i>
					  <div class="media-body">
						<h5 class="mt-0 text-light">Media heading</h5>
						<p class="text-light">Cras sit amet nibh libero, in gravida</p> 
					  </div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12">
			<h1 class=" text-dark text-center">Events</h1>
		</div>
		<div class="col-12  py-sm-4">
			<div class="container my-sm-6">
				<div class="container ">
					<div class="row">	
					<?php  foreach ($penampung_events as $events): ?>
						<div class="card mr-sm-5" style="width: 20.12rem;">
						  <img class="card-img-top " style="height:200px;" src="./Asset/gambar/<?php echo $events->gambar;?>" alt="Card image cap">
						  <div class="card-body">
							<h5 class="card-title"><?php  echo $events->judul; ?></h5>
							<p class="card-text"><?php echo $events->post;  ?></p>
							<a href="#" class="btn btn-primary">Read More</a>
						  </div>
						</div>
					<?php endforeach ?>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 bg-light py-sm-4">
			<div class="container mt-sm-4 ">
				<div class="container ">
					<div class="row">	
					<?php  foreach ($penampung_events as $events): ?>
						<div class="card mr-sm-5" style="width: 20.12rem;">
						  <img class="card-img-top " style="height:200px;" src="./Asset/gambar/<?php echo $events->gambar;?>" alt="Card image cap">
						  <div class="card-body">
							<h5 class="card-title"><?php  echo $events->judul; ?></h5>
							<p class="card-text"><?php echo $events->post;  ?></p>
							<a href="#" class="btn btn-primary">Read More</a>
						  </div>
						</div>
					<?php endforeach ?>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12  py-sm-4">
			<div class="container">
				<div class="container ">
					<div class="row">	
					<?php  foreach ($penampung_events as $events): ?>
						<div class="card mr-sm-5" style="width: 20.12rem;">
						  <img class="card-img-top " style="height:200px;" src="./Asset/gambar/<?php echo $events->gambar;?>" alt="Card image cap">
						  <div class="card-body">
							<h5 class="card-title"><?php  echo $events->judul; ?></h5>
							<p class="card-text"><?php echo $events->post;  ?></p>
							<a href="#" class="btn btn-primary">Read More</a>
						  </div>
						</div>
					<?php endforeach ?>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row justify-content-center mt-sm-4">
		<nav  aria-label="...">
		  <ul class="pagination">
			<li class="page-item disabled">
			  <a class="page-link" href="#" tabindex="-1">Previous</a>
			</li>
			<li class="page-item"><a class="page-link" href="#">1</a></li>
			<li class="page-item active">
			  <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
			</li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item">
			  <a class="page-link" href="#">Next</a>
			</li>
		  </ul>
		</nav>
		</div>
	</body>
</html>
