<?php
error_reporting(0);

require 'config.php';

if(isset($_GET['source'])) {
    highlight_file(__FILE__);
    die();
}

$kelulusan = '';

if(isset($_POST['submit']) && $_POST['submit'] == "_Ch3K"){
	$cek = $_POST['cek'];

	$hasil = mysqli_query($conn, "SELECT id_pendaftar FROM lulus WHERE id_pendaftar = '$cek'");
	//var_dump($hasil);
	if($hasil->num_rows > 0){
		$kelulusan = true;
	  }else{
		$kelulusan = false;
	  }
}

?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ ?source ---------->

<div class="card mb-4">
	<a href="#" class="btn btn-success">BLIND</a>
</div>

<h1 class="text-center">
Masukan No Pendaftar
</h1>
  <div class="row justify-content-center">
    <div class="col-12 col-md-10 col-lg-8">
        <form class="card card-sm" action="" method="POST">
            <div class="card-body row no-gutters align-items-center">

                <input type="hidden" name="rand" value="<?= rand(1,9999999999) ?>"></ins>
                <div class="col">
                    <input name="cek" class="form-control form-control-lg form-control-borderless" type="search" placeholder="123">
                </div>

                <div class="col-auto">
                    <button class="btn btn-lg btn-success" type="submit" name="submit" value="_Ch3K">Search</button>
                </div>

            </div>
        </form>
<?php 
if (isset($kelulusan) && $kelulusan === true){ 
  echo '<div class="alert alert-success" role="alert">
  Selamat Kamu dinyatakan LULUS. <br>';
  echo '</div>';
}
?>
    </div>

</div>
</div>
<!-- 123 -->