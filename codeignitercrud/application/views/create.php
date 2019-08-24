<div class="container">
<div class="alert alert-danger" role="alert">
	<a href="<?php echo base_url(); ?>">Kembali Ke Home</a>
</div>
<!-- End Top Menu -->

<!-- Start Content -->
<div class="row">
	<div class="col-md-12">

		<!-- Start Form Update -->
		<form method="post" action="<?php echo base_url(); ?>create/create/">
			<table class="table table-striped table-bordered">
				
				<!-- Start User Head Information -->
			    <thead>
			        <tr>
					    <th class="col-md-1">Id</th>
					    <th class="col-md-3">NIM</th>
					    <th class="col-md-3">NAMA</th>
					    <th class="col-md-2">KELAS</th>
						<th class="col-md-2">Aksi</th>
			        </tr>
			    </thead>
		    	<!-- End User Head Information -->

		    	<!-- Start User Content Form -->
			    <tbody>
			        <tr>
					    <td>
					        Auto
					    </td>
					    <td>
					        <input type="text" name="nim" class="form-control" placeholder="NIM">
					    </td>
					    <td>
					        <input type="text" name="nama" class="form-control" placeholder="Nama">
					    </td>
					    <td>
					        <input type="text" name="kelas" class="form-control" placeholder="Kelas">
					    </td>
					    <td>
					        <button type="submit" class="btn btn-default">Submit</button>
					    </td>
			        </tr>
			    </tbody>
		    	<!-- End User Content Form -->

			</table>
		</form>
		<!-- End Form Update -->
	
	</div>
</div>
</div>
