<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="<?php echo base_url('Asset/css/login.css');?>">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIA
			qVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
			integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<style>
			body{
				background-image: url("./Asset/gambar/login.jpg");
				background-size:cover;
			}
		</style>
	</head>
	<body>
		<div class="container form_login ">
			<div class="row">
				<div class="col-3">
				</div>
				<div class="col-5 border border-primary login">
					<div class="row">
						<div class="col-12 text-light py-sm-3 biodata">
							<h4 class="text-center text-light">Masukkan Biodata Login</h4>
						</div>
					</div>
					<?php  echo validation_errors(); ?>
					<?php  echo form_open (base_url('login'));?>
						<div class="row">
							<div class="col-12 align-self-center ">
								<div class="row">
									<div class="form-group col-12">
										<label>Email</label>
										<input type="email" name="email" placeholder="enter your email" class="form-control col-md-12">
									</div>
								</div>
								<div class="row ">
									<div class="form-group col-12">
										<label>Username</label>
										<input type="text" name="username" class="form-control col-md-12" placeholder="enter your Username" >
									</div>
								</div>
								<div class="row">
									<div class="form-group col-md-12">
										<label>Password</label>
										<input type="password" name="password" class="form-control col-md-12" placeholder="enter your password">
									</div>
								</div>
								<div class="row">
									<button class="btn btn-primary ml-sm-3 mr-sm-2" type="submit">Login</button>
									<a href="<?php echo base_url();?>" class="btn btn-warning text-light">Cancel</a>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>