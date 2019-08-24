<html>
	<head>
		<title></title>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIA
			qVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
			integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="<?php echo base_url('Asset/css/template.css')?>">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<script src="http://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand text-primary nav" href="<?php  echo base_url();?>"><img src="<?php  echo base_url('Asset/gambar/logo.png');?>"></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
			  <li class="nav-item active">
				<a class="nav-link text-muted ml-sm-2" href="<?php  echo base_url()?>learning">Belajar<span class="sr-only">(current)</span></a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link ml-sm-2" href="<?php  echo base_url()?>events">Kegiatan</a>
			  </li>
			  <li class="nav-item dropdown ml-sm-2">
				<a class="nav-link dropdown-toggle" href="<?php echo base_url()  ?>challenge" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  Perlombaan
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				  <a class="dropdown-item" href="#">Sudah Berakhir</a>
				  <a class="dropdown-item" href="#">Masih berlangsung</a>
				  <div class="dropdown-divider"></div>
				  <a class="dropdown-item" href="#">Akan Dimulai</a>
				</div>
			  </li>
			  <li class="nav-item">
				<a class="nav-link ml-sm-2" href="<?php  echo base_url()?>aboutus">TentangKami</a>
			  </li>
			  <form class="form-inline  my-sm-0 ml-sm-4 col-sm-12 ">
				<input class="form-control mr-sm-2 col-sm-9" type="search" placeholder="Pencarian" aria-label="Search">
				<button class="btn btn-outline-success  my-sm-0 col-sm-2" type="submit">Cari</button> 
			  </form>
			</ul>
			<ul class="navbar-nav nav-right">
				<a href="<?php base_url()?>create" class="btn btn-success text-light">Buat Post</a>
				<a href="<?php base_url()?>login" class="btn btn-primary ml-sm-2 text-light">Masuk</a>
			</ul>
		  </div>
		</nav>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rV
		o3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZU
		CnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>