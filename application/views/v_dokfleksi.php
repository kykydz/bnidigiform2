

	<div class="container cont-padd">
		<div class="row mt polaroidhasil myform">
			<div class="col">
				<form action="<?php echo base_url().'fleksi/dokumen_fleksi/'.$this->uri->segment(3)?>" method="post" enctype="multipart/form-data">
					<h3 align="center">FORM UPLOAD DOKUMEN PENGAJUAN BNI FLEKSI</h3>
					<br>
					<?php
					$this->db->select('id');
					$this->db->from('nasabah');
					$this->db->where('id_user',$this->session->userdata('id_user'));
					$this->db->limit(1);
					$query=$this->db->get();
					$hsl=$query->row_array();
					$id_nasabah=$hsl['id'];


					?>
					<input type="hidden" name="id_nasabah" value="<?php echo $id_nasabah?>">
					<style type="text/css">
						.row .mt-top {
							padding-top: 2%;
						}
					</style>
					<br>
				  	<div class="row justify-content-center">
				  		<div class="col-md-6">
				  			<div class="col-md-12 mt-top">
									<label>Upload Foto KTP Pemohon</label>

							    	<input type="file" name="foto_ktppemohon" class="form-control">
				  			</div>
				  			<div class="col-md-12 mt-top">
									<label>Upload Foto NPWP Pribadi / SPT PPH 21</label>

							    	<input type="file" name="foto_npwp" class="form-control">
				  			</div>
				  			<div class="col-md-12 mt-top">
									<label>Upload Foto Rekening 3 Bln Terakhir </label>

								    	<input type="file" name="foto_rekening" class="form-control">
				  			</div>
				  			<div class="col-md-12 mt-top">
									<label>Upload Foto Asli Slip Gaji Terakhir</label>

							    	<input type="file" name="foto_slipgaji" class="form-control">
				  			</div>
							</div>
							<div class="col-md-6">


				  			<div class="col-md-12 mt-top">
									<label>Upload Pas Foto 4x6 Pemohon</label>
							    	<input type="file" name="foto_pasfoto" class="form-control">
				  			</div>
				  			<div class="col-md-12 mt-top">
									<label>Upload Foto Surat Keterangan Masa Kerja dari Atasan</label>

							    	<input type="file" name="foto_surat_sk" class="form-control">
				  			</div>
				  			<div class="col-md-12 mt-top">
									<label>Upload Foto Surat Keterangan Payroll BNI</label>

							    	<input type="file" name="foto_surat_payroll" class="form-control">

				  			</div>
				  		</div>

					</div>
					<br>
					<div class="row">
							<div class="col-md-4" style="padding-left: 2%">
								<button type="submit" class="tombol-qa">Lanjutkan</button>
							</div>
						</div>
				</form>
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
