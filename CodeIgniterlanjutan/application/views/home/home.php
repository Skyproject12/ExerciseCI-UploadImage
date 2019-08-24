<html>
	<head>
		<title></title>
	<link rel="stylesheet" href="./Asset/css/events.css">
	<style>
		.footer-container {
			background-image:url("./Asset/gambar/home.jpg");
			background-size:cover;
		}
	</style>
	
	</head>
	
	<body>
		<div class="jumbotron footer-container mb-sm-0 dibawahnav">
			<div class="container">
				<div class="row">
					<div class="row col-sm-4">
					  <h1 class="display-4 text-primary">Endless,<small class="text-success">Code</small></h1>
					  <p class="text-dark "style="font-size:22px;">Raih keinginanmu tanpa batas dan genggam hingga menjadi suatu ha yang nyata</p>
					  <p class="text-muted">awali dengan hal kecil  terlenbih dahulu hingga kalian tau apa arti kekalah, kesalahan , 
					  kekeliruan, kegagalan hingga kalian dapat maju terus ke depan mencapai kesuksesan  </p>
					  <a class="btn btn-success btn-lg" href="<?php echo base_url()?>signin">Daftar</a>
					</div>
					<div class="row col-2">
						<div class="col-12">
						</div>
					</div>
					<div class="row col-6">
						<div class="col-12">
							<img src="<?php echo base_url('Asset/gambar/Komputer.png')?>" style="width:94%; height:auto;">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 mb-sm-4 py-sm-4 events">
			<div class="container">
				<div class="row ">
					<div class="media col-4 ">
					  <i class="fas fa-gift display-4 mr-sm-2 text-light" style="font-size:50;"></i>
					  <div class="media-body" >
						<h5 class="mt-0 text-light">Hadiah Hadiah Menarik</h5>
						<p class="text-light">Ambil Berbagai hadiah dari kami </p>  
					  </div>
					</div>
					<div class="media col-4 ">
					 <i class="fas fa-cog dispaly-4 mr-sm-2 text-light" style="font-size:50;"></i>
					  <div class="media-body">
						<h5 class="mt-0 text-light">Disiplin Untuk Masa Depan</h5>
						<p class="text-light"> Belajar disiplin untuk mencapai cita cita </p>  
					  </div>
					</div>
					<div class="media col-4 ">
					  <i class="fas fa-book dispaly-4 mr-sm-2 text-light" style="font-size:50;"></i>
					  <div class="media-body">
						<h5 class="mt-0 text-light">Belajar Demi Kesuksesan</h5>
						<p class="text-light">pelajari modul modul dari kami</p> 
					  </div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12">
			<h1 class=" text-dark text-center">Populer</h1>
		</div>
		<div class="col-12  py-sm-4">
			<div class="container my-sm-6">
				<div class="container ">
					<div class="row">
					
					<?php  
					if(!empty($penampung)){
					foreach ($penampung as $home){ ?>
						<div class="card mr-sm-5" style="width: 20.12rem;">
						  <img class="card-img-top " style="height:200px;" src="./Asset/gambar/<?php echo $home->gambar;?>" alt="Card image cap">
						  <div class="card-body">
							<h5 class="card-title"><?php  echo $home->title; ?></h5>
							<p class="card-text"><?php echo word_limiter ($home->deskription,20);  ?></p>
								<a href= <?php echo base_url()?>home/gethomeberita/<?php echo $home->id;?> class="btn btn-primary">Lihat Lebih</a>
						  </div>
						</div>
					<?php } }
					else{
						echo"<script>alert'daat kosong'</script>";
					}
					?>
					</div>
				</div>
			</div>
		</div>
		<div class="row justify-content-center mt-sm-4">
		<nav  aria-label="...">
		  <ul class="pagination">
			<li class="page-item disabled">
			  <a class="page-link" href="#" tabindex="-1">Sebelumnya</a>
			</li>
			<li class="page-item"><a class="page-link" href="#">1</a></li>
			<li class="page-item active">
			  <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
			</li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item">
			  <a class="page-link" href="#">Selanjutnya</a>
			</li>
		  </ul>
		</nav>
		</div>
		
	</body>
</html>
