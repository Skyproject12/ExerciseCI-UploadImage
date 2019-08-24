<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="container">
<div style="margin-bottom:0;" class="alert alert-warning" role="alert">
	<a href="<?php echo base_url(); ?>create" type="button" ><center>Create</center></a>
</div>

<div class="row">
	<div class="col-md-12">

		
		<table style="margin-bottom:0;" class="table table-striped table-bordered">
			<div class="alert alert-primary" role="alert">
			<!-- Start User Head Information -->
		    <thead>
			
		        <tr>
				
				    <th class="alert alert-success" role="alert" class="col-md-1">Id:</th>
				    <th  class="alert alert-success" role="alert" class="col-md-3">NIM:</th>
				    <th class="alert alert-success" role="alert" class="col-md-3">NAMA:</th>
				    <th class="alert alert-success" role="alert" class="col-md-2">KELAS:</th>
					<th class="alert alert-success" role="alert" class="col-md-2">Aksi</th>
		        </tr>
				
		    </thead>
			</div>
		    <tbody>
				<?php foreach($all->result() as $row): ?>
			        <tr>
					    <td>
					        <?php echo $row->id; ?>
					    </td>
					    <td>
					        <?php echo $row->nim; ?>
					    </td>
					    <td>
					        <?php echo $row->nama; ?>
					    </td>
					    <td>
					        <?php echo $row->kelas; ?>
					    </td>
					    <td>
					        <a href="<?php echo base_url(); ?>read/index/<?php echo $row->id; ?>" type="button">Detail</a>
					        <a href="<?php echo base_url(); ?>update/index/<?php echo $row->id; ?>" type="button">Update</a>
					        <a href="<?php echo base_url(); ?>delete/index/<?php echo $row->id; ?>" type="button">Delete</a>
					    </td>
			        </tr>
				<?php endforeach; ?>
				
		    </tbody>

		</table>
		<div class="alert alert-primary" role="alert">
				</div>
		<!-- End User Queries -->

	</div>
</div>
</div>

<!-- End Content -->