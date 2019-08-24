<html>
	<head>
		<title></title>
	</head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<body>
		<div class="container my-4">
			<form>
				<div class="row col-12 mt-4">
					<input type="text" class="col-8 mr-4" placeholder="enter input ">
					<button class="btn btn-success col-2">Search</button>
				</div>
			</form>
		</div >
		<div class="container">
			<div class="row">
			<?php 
				if(!empty ($penampung_search)){
					foreach ($penampung_search as $d){
			?>
			
			<div class="card col-3 ml-4" style="float:left" style="width: 18rem;">
			  <img class="card-img-top" src="<?php echo base_url() ?>/gambar/<?php echo $d->gambar ?>" alt="Card image cap">
			  <div class="card-body">
				<h5 class="card-title"><?php echo $d->judul ?></h5>
				<p class="card-text"><?php echo $d->deskripsi ?></p>
				<div class="row">
					<button href="#" class="btn btn-primary mr-2">Read More</button>
					<?php echo form_open('search/delete/'.$d->id); ?>
						
						<input class="btn btn-danger" type="submit" value="Delete">
					</form>
					<a href="<?php echo base_url() ?>search/viewsdata/<?php  echo $d->id ?>" class="btn btn-warning text-light">Change</a>
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
			</div>
			<div class="container my-4">
				<?php 
				echo validation_errors();
				echo form_open(site_url('search/index')); 
				?>
					<div class="row">
						<div class="form-group col-12">
							<label>Judul</label>
							<input type="text" name="judul" class="form-control col-10" placeholder="insert judul">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-12">
							<label>Deskripsi</label>
							<input type="text" name="deskripsi" class="form-control col-10" placeholder="insert deskripsi">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-12">
							<label>gambar</label>
							<input type="text" class="form-control col-10" name="gambar" placeholder="enter image">
						</div>
					</div>
					<div class="row ">
						<button class="btn btn-success ml-3" type="submit" name="submit">Tambah</button>
					</div>
				</form>
			</div>
	</body>
</html>