<html>
	<head>
		<title></title>
	<link rel="stylesheet" href="<?php base_url()?>./Asset/css/homeberita.css">
	<style>
		.nav-image img {
			width:200px;
			height:auto;
		}
		.homeberita{
			background:white;
		}
		.button-samping{
			height:40px;
			margin-top:6%;
		}
		.bagian{
			height:40px;
		}
		.content{
			margin-left:10%;
		}
		.content h1{
			text-align:center;
		}
		.content img{
			width:400px;
			height:auto;
			margin:0 auto;
			margin-top:80px;
			margin-bottom:80px;	
		}
		.footer-container {
			background-image:url("./Asset/gambar/home.jpg");\
			background-size:cover;
		}
		.jumbotron{
			padding-bottom:0;
		}
	</style>
	</head>
	<body>
		<div class="jumbotron homeberita">
	
		<?php 
		if(!empty($homeberita)){
			foreach ($homeberita as $data){ 
			$tampil=$data->gambar;
			$hastag=$data->hastag;
		?>
			<div class="container ">
				<div class="row col-12">
					<div class="row col-sm-4  nav-image">
					
					  <img src="<?php echo base_url()?>./Asset/gambar/<?php echo $hastag.'.png' ?>">
					</div>
					<div class="row col-sm-4 mt-sm-4">
						<h1><?php echo $data->title;?></h1>
						<p class="text-light"><?php echo word_limiter ($data->deskription,20);  ?></p>
					</div>
					<div class="row col-sm-2 mt-sm-4">
					</div>
					<div class="row col-3 button-samping">
						<button class="btn btn-success col-12" >Gabung Grup</button>
					</div>
				</div>
			</div>
		</div>
		<?php 
			}
		}
		else{
			echo"data kosong";
		}	
		?>
		</div>
		<div class="col-12 bg-light bagian">
		
		</div>
		<div class="col-12 bg-light">
			<div class="container-fluid bg-light">
				<div class="row col-12">
					<div class="row col-7 bg-white content mr-2">
						<img  src="<?php echo base_url()?>./Asset/gambar/<?php echo $tampil; ?>">
						<p class="card-text"><?php echo nl2br ($data->deskription);  ?></p>
					</div>
					<div class=" row col-3 ml-4">
						<div class="col-12  ">
							<p style="font-size:20px;color:#263238;" class="mt-2">Hubungi Kami</p>
							 <i class="fab fa-facebook-f " style="font-size:30;color:#37474F;"></i>
							 <i class="fab fa-twitter ml-sm-4" style="font-size:30;color:#37474F;"></i>
							 <i class="fab fa-google ml-sm-4" style="font-size:30;color:#37474F"></i>
							 <i class="fab fa-github ml-sm-4" style="font-size:30;color:#37474F;"></i>
							<p style="font-size:20px;color:#263238;" class="pt-3">Recomendasi Artikel </p>
							<li class="pt-sm-1"><a href="<?php echo base_url()?>" class="text-muted">Pengertian dan manfaat HTML dalam pembuatan Website</a></li>
							<li class="pt-sm-2"><a href="<?php echo base_url()?>learning" class="text-muted">Pengertian dan manfaat C# dalam pembuatan Game</a></li>
							<li class="pt-sm-2"><a href="<?php echo base_url()?>events" class="text-muted">Dasar Dasar Belajar PHP</a></li>
							<li class="pt-sm-2"><a href="<?php echo base_url()?>challenge" class="text-muted">Membuat Gui mengguanakan java OOP</a></li>
							<li class="pt-sm-2"><a href="<?php echo base_url()?>login"class="text-muted">Belajar dasar dasar CodeIgniter</a></li>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 bg-light bagian">
		
		</div>		
	<body>
</html>