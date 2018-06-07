	<style type="text/css">
		div.row {
			margin-top: 2%;
		}

		/*div{
			border: solid;
			border-color: blue;
			border-width: 1px;
		*/}
	</style>

	<div class="container cont-padd">
		<div class="row mt polaroidhasil">
			<div class="col">
				<form action="<?php echo site_url().'griya/savenasabahgriya/'.$this->uri->segment(3)?>" method="post" class="myform">
					<h3 align="center">FORM DATA NASABAH</h3>
					<input type="hidden" name="id_user" value="<?php echo $this->session->userdata('id_user')?>">
					<div class="row">
							<div class="col-md-6">
									<label>NIK</label>
									<input type="text" class="form-control" name="griya_nik" style="outline: none;">
							</div>
							<div class="col-md-6">
									<label>Nama</label>
									<input type="text" class="form-control" name="griya_nama">
							</div>						
					</div>
					<div class="row">
							<div class="col-md-6">
									<label>Alamat (KTP)</label>
									<input type="text" class="form-control" name="griya_alamatktp">
							</div>
							<div class="col-md-6">
									<label>Tempat Lahir </label>
									<input type="text" class="form-control" name="griya_tempat_lahir">
							</div>
					</div>
					<div class="row">
							<div class="col-md-6">
									<label>Tanggal Lahir</label>
									<input class="form-control" type="date" name="griya_tanggal_lahir">
							</div>
							<div class="col-md-6">
									<label>Alamat Sekarang</label>
									<input type="text" class="form-control" name="griya_alamat_sekarang">
							</div>
					</div>
					<div class="row">
							<div class="col-md-6">
									<label>Telephon</label>
									<input type="text" class="form-control" name="griya_telepon">
							</div>
							<div class="col-md-6">
									<label>Handphone</label>
									<input type="text" class="form-control" name="griya_handphone">
							</div>
					</div>
					<div class="row">
							<div class="col-md-6">
									<label>Status Perkawinan</label>
									<input type="text" class="form-control" name="griya_status_perkawinan">
							</div>
							<div class="col-md-6">
									<label>Jenis Pekerjaan</label>
									<input type="text" class="form-control" name="griya_jenis_pekerjaan">
							</div>
					</div>
					<div class="row">
							<div class="col-md-6">
									<label>Nomor NPWP</label>
									<input type="text" class="form-control" name="griya_npwp">
							</div>
							<div class="col-md-6">
									<label>Payroll BNI</label>
									<select class="form-control ddinput" name="payroll_bni">
										<option value="">-Pilih-</option>
										<option value="Ya">Ya</option>
										<option value="Tidak">Tidak</option>
									</select>
							</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<button type="submit" class="tombol-qa">Lanjutkan</button>	
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>






</body>
<footer align="center">
	<br>
	<a class="cc" align="center" style="color: white">Copyright 2018. Wallezz Finansial Teknologi.</a>
</footer>
<!-- CORE JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>


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
