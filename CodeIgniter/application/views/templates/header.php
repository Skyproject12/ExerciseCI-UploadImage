<html>
	<head>
		<title></title>
	<!-- untuk memanggil boostrap css --><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
	crossorigin="anonymous">
	<!-- untuk memanggil css external --><link rel="stylesheet" href="./Asset/css/style.css">
	<!-- untuk memanggil script Ckeditor --><script src="http://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
	</head>
	<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="<?php /*diambil dari config lalu di tambah dengan nama folder atau halaman*/ echo base_url()?>">Home</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
		  <li class="nav-item active">
			<a class="nav-link" href="<?php echo base_url()?>about">About <span class="sr-only">(current)</span></a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="<?php  echo base_url()?>posts">Link</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link " href="#">Disabled</a>
		  </li>
		</ul>
		 <ul class="nav navbar-nav navbar-right">
		   <li class="nav-item">
			<a class="nav-link" href="<?php  echo base_url()?>posts/create">Create Post</a>
		  </li>
		  </ul>
		 </div>
		</nav>
	