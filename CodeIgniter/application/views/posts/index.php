<h2><?= $title ?></h2>
	<!-- untuk mengubah dari array menjadi variable -->
	<?php foreach($pospenampung as $post) : ?>
		<div class="container-fluid">
			<h3><?php echo $post['title']; ?></h3><br>
			<small>posted on: <?php echo $post['create_at'];?></small><br>
			<?php echo word_limiter ($post['body'],20); ?><br>
			<div class="row mt-sm-2">
				<p><a href="<?php  echo  site_url('/posts/'.$post['slug']); ?> " class=" mr-sm-2 btn btn-dark "> Read More</a></p>
				<p><a href="<?php/*untuk memanggil data dalam data base*/  echo base_url()?>posts/create" class="mr-sm-2 btn btn-warning">Create</a></p>
				<?php  echo form_open ('/posts/delete/'.$post['id'] );  ?>
					<input type="submit" value="delete" class="btn btn-danger">
				</form>
				<p><a class="btn btn-primary ml-sm-2" href="posts/edit/<?php echo $post['slug'];?>">edit</a></p>
			</div>	
		</div>
	<?php endforeach; ?>