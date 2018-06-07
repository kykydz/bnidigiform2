
	<div class="container cont-padd">
		<div class="row mt polaroidhasil myform">
			<div class="col">
				<form action="<?php echo base_url().'griya/dokumen_griya/'.$this->uri->segment(3)?>" method="post" enctype="multipart/form-data">

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

					<h3 align="center">FORM UPLOAD DOKUMEN PENGAJUAN BNI GRIYA</h3>
					<br>
<!-- 					<select id="bni" onchange="pilihan()" class="form-control">
						<option value="griya">BNI Griya</option>
						<option value="flexi">BNI Flexi</option>
						<option value="pensiun">BNI Flexi Pensiun</option>
					</select> -->
					<br>
					<style type="text/css">
						.row .mt-top {
							padding-top: 2%;
						}
					</style>
				  	<div class="row justify-content-center">
				  		<div class="col-md-6">
				  			<div class="col-md-12 mt-top">
				  				<label> Foto KTP (Suami)</label>
    							<input type="file" name="foto_ktpsuami" class="form-control" id="inputGroupFile01">
				  			</div>
				  			<div class="col-md-12 mt-top">
									<label> Foto KTP (Istri)</label>
							    	<input type="file" name="foto_ktpistri"  class="form-control" id="inputGroupFile01">
				  			</div>
				  			<div class="col-md-12 mt-top">
									<label> Foto Kartu Keluarga</label>

							    	<input type="file" name="foto_kk"  class="form-control" id="inputGroupFile01">
				  			</div>
				  			<div class="col-md-12 mt-top">
									<label> Foto Surat Nikah</label>

							    	<input type="file" name="foto_suratnikah"  class="form-control" id="inputGroupFile01">
				  			</div>

				  			<div class="col-md-12 mt-top">
									<label> Foto NPWP Pribadi / SPT PPh 21</label>

							    	<input type="file" name="foto_npwp"  class="form-control" id="inputGroupFile01">
				  			</div>
				  			<div class="col-md-12 mt-top">
									<label> Foto Rek Gaji 3 Bln Terakhir</label>

								    	<input type="file" name="foto_rekgaji"  class="form-control" id="inputGroupFile01">
				  			</div>
				  			<div class="col-md-12 mt-top">
									<label> Foto Rek Koran 6 Bln Terakhir</label>

							    	<input type="file" name="foto_rekkoran"  class="form-control" id="inputGroupFile01">
				  			</div>
							<div class="col-md-12 mt-top">
									<label> Laporan Keuangan</label>

							    	<input type="file" name="laporan_keuangan"  class="form-control" id="inputGroupFile01">
				  		</div>
						</div>
							<div class="col-md-6">
				  			<div class="col-md-12 mt-top">
									<label> Foto Surat Keterangan Kerja </label>

							    	<input type="file" name="foto_sk"  class="form-control" id="inputGroupFile01">
				  			</div>
				  			<div class="col-md-12 mt-top">
									<label> Slip Gaji</label>
							    	<input type="file" name="foto_slipgaji"  class="form-control" id="inputGroupFile01">
				  			</div>
				  			<div class="col-md-12 mt-top">
									<label> Foto Izin Praktek Profesi</label>

							    	<input type="file" name="foto_izin_praktek"  class="form-control" id="inputGroupFile01">
				  			</div>
				  			<div class="col-md-12 mt-top">
									<label> Foto Legalitas Usaha</label>

							    	<input type="file" name="foto_legalitas_usaha"  class="form-control" id="inputGroupFile01">

				  			</div>
				  			<div class="col-md-12 mt-top">
									<label> Pas Foto 4x6 (Suami)</label>

							    	<input type="file" class="form-control" name="foto_pasphoto_pemohonsuami" id="inputGroupFile01">
				  			</div>
				  			<div class="col-md-12 mt-top">
									<label> Pas Foto 4x6 ( Istri)</label>

							    	<input type="file" class="form-control" name="foto_pasphoto_pemohonistri"  id="inputGroupFile01">
				  			</div>
				  			<div class="col-md-12 mt-top">
									<label> Dokumen Jaminan *)</label>

							    	<input type="file"  class="form-control" name="dokumen_jaminan" id="inputGroupFile01">
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




</body>
<footer align="center">
	<br>
	<a class="cc" style="color: white;">Copyright 2018. Wallezz Finansial Teknologi.</a>
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
