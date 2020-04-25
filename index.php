<?php 
include 'aset/header.php';
include 'koneksi.php';

$date=date("Y-m-d");
$pasien = "SELECT count(nama) as jml FROM pasien ";


$pasien = mysqli_query($koneksi, $pasien);

$s=mysqli_fetch_assoc($pasien);

?>
<div class="container">
	<div class="row mt-4">
		<div class="col-md">
		<h2><i class="fas fa-biohazard"></i>Dashboard</h2>	
		<hr class="bg-light">
		</div>
	</div>

	<div class="row">
		<div class="col-md-4">
			<div class="card bg-secondary" style="width: 18rem;">
  				<div class="card-body text-white">
    		<h5 class="card-title">Pasien</h5>
    		<p class="card-text" style="font-size: 60px">25</p>
    		<a href="http://localhost/covid-19/pasien/index.php" class="text-white">load more <i class="fas fa-angle-double-right"></i></a>
  				</div>
			</div>
		</div>
	</div>
</div>
<!-- <div>
<div class="p-3 mx-3"><div class="card shadow p-5"><header><h3>1. Apakah Anda mengalami salah satu dari yang berikut:</h3></header>
<section><p class="text-info large"></p><nav><ul><li><i class="icon-right-thin mr-1"></i>Kesulitan bernafas yang parah (Bernafas dengan sangat cepat atau berbicara dalam satu kata)</li>
<li><i class="icon-right-thin mr-1"></i>Nyeri dada yang parah</li><li><i class="icon-right-thin mr-1"></i>Sulit untuk bangun</li><li><i class="icon-right-thin mr-1"></i>Merasa kebingungan</li><li><i class="icon-right-thin mr-1"></i>Penurunan kesadaran</li></ul></nav><div class="large text-center"><button class="mr-2">Ya</button><button class="info">Tidak</button></div></section></div></div></div> -->
<?php 
include 'aset/footer.php';
?>
