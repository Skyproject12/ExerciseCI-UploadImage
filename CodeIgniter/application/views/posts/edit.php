<h2><?/*diambil dari controller Posts untuk menampilkan title */=$title?></h2>
<div class="container">
	<?php   echo validation_errors(); ?>
		<?php /*memberi link ke http://localhost/CodeIgniter/posts/create */  echo form_open ('posts/update');?>
			<div class="row">
			<input type="hidden" value="<?=$id?>">
			  <div class="form-group col-12">
				<label>title</label>
				<input type="text" class="form-control" value="<?= $title?>" name="title" >
			  </div>
			</div>
			<div class="row">
			  <div class="form-group col-12">
				<label>body</label> 
				<textarea class="form-control" name="body"><?=$body?></textarea>
			  </div>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
			<a href="<?php  echo base_url()?>/posts"class="btn btn-warning text-light">cancel</a>
		</form>
</div>