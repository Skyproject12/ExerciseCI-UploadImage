<!DOCTYPE html>
<html>
<head>
	<title>4120 | Ahmad Zaeni</title>
  <link rel="stylesheet" href="<?php echo base_url() ?>css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="bg-light">

<div class="bg-danger rounded-top text-white text-center container mt-5">
	<h3 class="m-0">MODUL 10</h3>
</div>
<div class="bg-white p-5 mt-0 rounded-bottom container">
  <div class="form-group">
  <?php echo form_open("upload/tambah", array('enctype'=>'multipart/form-data')); ?>
      <label for="">Judul</label>
      <input type="text" name="input_deskripsi" class="form-control" value="<?php echo set_value('input_deskripsi'); ?>">
      <label>Gambar</label>
      <td><input type="file" class="form-control-file" name="input_gambar">
      <input type="submit" class="btn btn-info float-right" name="submit" value="Upload">
    <?php echo form_close(); ?>
  </div>

<br>
<br>
<hr>
<?php
if(!empty($gambar)){
  foreach($gambar as $data){
    echo "<center>".$data->deskripsi."</center>";
    echo"<br>";
    echo "<img src='".base_url('gambar/'.$data->nama)."' class='img-fluid'>";
  }
}else{
  echo "<center>Data Kosong</center>";
}
?>
</div>
</body>
</html>