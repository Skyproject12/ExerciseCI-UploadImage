<html>
	<head>
		<title></title>
	</head>
	<body>
		<div class="container mt-4">
			<div class="row">
				<div class="col-2">
				</div>
				<div class="col-6">
					<?php validation_errors();  ?>
					<?php echo form_open(base_url('create'));?>
						<div class="row">
							<div class="form-group col-12">
								<label>Title</label>
								<input type="text" name="title" class="form-control col-12" placeholder="enter your title">
							</div>
						</div>
						<div class="row">
							<div class="form-group col-12">
								<label>Deskription</label>
								<textarea id="editor1" name="deskription" class="form-control col-12" placeholder="input your post deskription"></textarea>
							</div>
						</div>
						<div class="row">
							<div class="form-group col-12">
								<label>HasTag</label>
								<select class="form-control" name="hastag">
									<option>Pilih Hastag</option>
									<option>PHP</option>
									<option>Csharp</option>
									<option>HTML</option>
									<option>JAVASCRIPT</option>
								</section>
							</div>
						</div>
						<div class="row ">
							<div class="form-group">
								<label for="exampleFormControlFile1">Example file input</label>
								<input name="upload" type="file" class="form-control-file mt-md-4" id="exampleFormControlFile1">
							</div>
						</div>
						<div class="row ">
							<button href="" class="btn btn-primary ml-3 col-2  mr-2" name="submit">Buat</button>
							<a href="<?php echo base_url()?>" class="btn btn-warning text-light">Cancel</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>