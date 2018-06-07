
	<div class="container cont-padd">
		<div class="row mt polaroidhasil myform">
			<div class="col">
					<h3 align="center">FORM UPLOAD DOKUMEN PENGAJUAN BNI FLEXI PENSIUN</h3>
					<br>
<!-- 					<select id="bni" onchange="pilihan()" class="form-control">
						<option value="griya">BNI Griya</option>
						<option value="flexi">BNI Flexi</option>
						<option value="pensiun">BNI Flexi Pensiun</option>
					</select> -->
					<br>
					<form action="<?php echo base_url().'pensiun/dokumen_pensiun/'.$this->uri->segment(3)?>" method="post" enctype="multipart/form-data">
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
				  		<div class="row">
							<div class="col-md-6">
							    <div class="col">
							    	<label>Upload Foto KTP Pemohon</label>

							      	<div class="input-group mb-3">
									  	<div class="custom-file">
									    	<input type="file" class="form-control" name="foto_ktp">
									  	</div>
									</div>
							    </div>
							    <div class="col">
							    	<label>Upload Foto Kartu Keluarga</label>

							      	<div class="input-group mb-3">
									  	<div class="custom-file">
									    	<input type="file" class="form-control" name="foto_kk">
									  	</div>
									</div>
							    </div>
							    <div class="col">
							    	<label>Upload Foto buku tabungan 3 bulan terakhir </label>

							    	<br>
							      	<div class="input-group mb-3">
									  	<div class="custom-file">
									    	<input type="file" class="form-control" name="foto_buku_tabungan">
									  	</div>
									</div>
							    </div>
							    <div class="col">
							    	<label>Upload Foto Asli Slip Gaji</label>

							      	<div class="input-group mb-3">
									  	<div class="custom-file">
									    	<input type="file" class="form-control" name="foto_slipgaji">
									  	</div>
									</div>
							    </div>
							    <div class="col">
							    	<label>Upload Foto Asli NPWP</label>

							      	<div class="input-group mb-3">
									  	<div class="custom-file">
									    	<input type="file" class="form-control" name="foto_npwp">
									  	</div>
									</div>
							    </div>
							    <div class="col">
							    	<label>Upload Foto RC pinjaman 6 (enam) bulan terakhir **)</label>
							    	<br>
							    	<br>
							      	<div class="input-group mb-3">
									  	<div class="custom-file">
									    <input type="file" class="form-control" name="foto_rc">
									  	</div>
									</div>
							    </div>
							</div>
							<div class="col-md-6">
							    <div class="col">
							    	<label>Upload Foto SK terakhir Kenaikan Gaji Berkala (KGB)***)</label>
							      	<div class="input-group mb-3">
									  	<div class="custom-file">
									    	<input type="file" class="form-control" name="foto_kgb">
									  	</div>
									</div>
							    </div>
							    <div class="col">
							    	<label>Upload Foto SK pengangkatan PNS / TNI / POLRI / SK Pertama</label>
							      	<div class="input-group mb-3">
									  	<div class="custom-file">
									    	<input type="file" class="form-control" name="foto_sk_pertama">
									  	</div>
									</div>
							    </div>
							    <div class="col">
							    	<label>Upload Foto SK terakhir saat pegawai aktif PNS/ TNI/ POLRI / SK Terakhir</label>
							      	<div class="input-group mb-3">
									  	<div class="custom-file">
									    	<input type="file" class="form-control" name="foto_sk_terakhir">
									  	</div>
									</div>
							    </div>
							    <div class="col">
							    	<label>Upload SK pensiun ****)</label>
							      	<div class="input-group mb-3">
									  	<div class="custom-file">
									    <input type="file" class="form-control" name="foto_sk_pensiun">
									  	</div>
									</div>
							    </div>
							    <div class="col">
							    	<label>Upload Foto terbaru</label>
							      	<div class="input-group mb-3">
									  	<div class="custom-file">
									    	<input type="file" class="form-control" name="foto_terbaru">
									  	</div>
									</div>
							    </div>
							    <div class="col">
							    	<label>Bukti Pindah Kantor Bayar manfaat pensiun</label>
							      	<div class="input-group mb-3">
									  	<div class="custom-file">
									    	<input type="file" class="form-control" name="foto_bukti">
									  	</div>
									</div>
							    </div>
							</div>
						</div>
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
		<div id="login" class="modal fade" role="dialog">
		  	<div class="modal-dialog">
		    <!-- Modal content-->
			    <div class="modal-content">
			      <div class="modal-header">
			        <h4 class="modal-title">Login</h4>
			      </div>
			      <div class="modal-body">
						<form action="<?php echo base_url().'index.php/logincontroller/auth'?>" method="post">
			 				<div class="form-group">
			 					 <label for="exampleInputEmail1">Email address</label>
			 					 <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email">
			 				</div>
			 				<div class="form-group">
			 					 <label for="exampleInputPassword1">Password</label>
			 					 <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
			 				</div>
			 				<br>
						    <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						        <button type="submit" class="btn btn-primary">Login</button>
						    </div>
						</form>
			    	</div>

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

<!-- <script src="<?php echo base_url().'assets/front/js/custom-file-input.js' ?>"></script> -->

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
