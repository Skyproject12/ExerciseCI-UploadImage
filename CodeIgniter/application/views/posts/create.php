<h2><?/*diambil dari controller Posts untuk menampilkan title */=$title?></h2>
<div class="container">
<?php   echo validation_errors(); ?>
<?php /*memberi link ke http://localhost/CodeIgniter/posts/create */  echo form_open ('posts/create');?>
		<div class="row">
		  <div class="form-group col-12">
			<label>title</label>
			<input type="text" class="form-control" name="title" placeholder="Enter your title">
		  </div>
		</div>
		<div class="row">
		  <div class="form-group col-12">
			<label>body</label>
			<textarea id="editor1" class="form-control" name="body" placeholder="Enter body"></textarea>
		  </div>
		</div>
		<div class="row">
		  <div class="form-group col-12">
			<label>body</label>
				<select class="form-control">
				<?php  
					foreach($categories as $categori):;
				?>
					<option value="<?php $categori['id'];?>"><?php echo $categori['nama']  ?></option>
					<option></option>
					<option></option>
				<?php  
					endforeach;
				?>
				</select> 
		  </div>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
		<a href="<?php  echo base_url()?>/posts"class="btn btn-warning text-light">cancel</a>
	</form>
</div>