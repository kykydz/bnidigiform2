
	<img src="<?php echo base_url().'assets/front/images/besar.jpeg'?>" alt="">

	<div class="container mt">
		<div class="row mt polaroidhasil">
			<div class="col">

					<h3 align="center">FORM PENGAJUAN BNI FLEXI PENSIUN</h3>
					<br>
				  	<div class="row">
					    <div class="col">
					      	<label>NIK</label>
					      	<input type="text" class="form-control">
					    </div>
					    <div class="col">
					      	<label>Nama</label>
					      	<input class="form-control">
					    </div>
					    <div class="col">
					      	<label>Alamat (KTP)</label>
					      	<input class="form-control">
					    </div>
					</div>
					<div class="row">
					    <div class="col">
					      	<label>Tempat Lahir </label>
					      	<input type="text" class="form-control">
					    </div>
					    <div class="col">
					      	<label>Tanggal Lahir</label>
					      	<input class="form-control">
					    </div>
					    <div class="col">
					      	<label>Alamat Sekarang</label>
					      	<input class="form-control">
					    </div>
					</div>
					<div class="row">
					    <div class="col">
					      	<label>Telephon</label>
					      	<input type="text" class="form-control">
					    </div>
					    <div class="col">
					      	<label>Handphone</label>
					      	<input class="form-control">
					    </div>
					    <div class="col">
					      	<label>Status Perkawinan</label>
					      	<input class="form-control">
					    </div>
					</div>
					<div class="row">
					    <div class="col">
					      	<label>Jenis Pekerjaan</label>
					      	<input type="text" class="form-control">
					    </div>
					    <div class="col">
					      	<label>Nomor NPWP</label>
					      	<input class="form-control">
					    </div>
					    <div class="col">
					      	<label>Payroll BNI</label>
					      	<input class="form-control">
					    </div>
					</div>
					<br>
					<p align="center"><a href="<?php echo base_url().'home/dokumen/'.$this->uri->segment(3)?>"><button  class="btn btn-primary">Ajukan</button></a></p>

			</div>
		</div>
	</div>




		<!-- Modal login-->


</body>
<footer>
	<h5 class="cc">Copyright 2018. Wallezz Finansial Teknologi.</h5>
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.js'></script>

<script  src="<?php echo base_url().'assets/front/js/index.js'?>"></script>

<script>
	function openCity(evt, cityName) {
			var i, tabcontent, tablinks;
			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) {
					tabcontent[i].style.display = "none";
			}
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
					tablinks[i].className = tablinks[i].className.replace(" active", "");
			}
			document.getElementById(cityName).style.display = "block";
			evt.currentTarget.className += " active";
	}

	// Get the element with id="defaultOpen" and click on it
	document.getElementById("defaultOpen").click();
</script>

<script type="text/javascript">

	function myFunction(){
		var x = document.getElementById('nasabah').value;
		if(x == 'Sudah'){
			document.getElementById('tombol').innerHTML = "<button class='btn btn-warning btn-aku'>Ajukan Pinjaman</button>";
		}else{
			document.getElementById('tombol').innerHTML = "<button class='btn btn-warning btn-aku'>Ajukan Pembukaan Rekening</button>";
		}
	}

</script>
</html>
