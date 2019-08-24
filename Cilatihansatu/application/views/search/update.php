<div class="container">
	  <?php 
	  if(!empty ($nampung)){
		foreach($nampung as $lihat_hasil){  
	  echo form_open('search/changes');
	  ?>
	  <input type="hidden" name="id" value="<?php echo $lihat_hasil->id ?>">
	  <div class="form-group">
		<label>Judul</label>
		<input type="text" class="form-control" id="exampleInputEmail1"  name="judul" value="<?php echo $lihat_hasil->judul ?>">
	  </div>
	  <div class="form-group">
		<label for="exampleInputPassword1">Deskripsi</label>
		<input name="deskripsi" type="text" class="form-control" value="<?php echo $lihat_hasil->deskripsi ?>">
	  </div>
		<div class="form-group">
			<label>Gambar</label>
			<input type="text" name="gambar" class="form-control" value="<?php echo $lihat_hasil->gambar ?>">
		</div>
	  <button type="submit" class="btn btn-primary">Mengubah</button>
	   <a href="<?php echo base_url()?>" class="btn btn-warning text-light">cancel</a>
	</form>
	<?php 
		}
	  }
	?>
</div>