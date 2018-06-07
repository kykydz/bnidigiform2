
	<img src="<?php echo base_url().'assets/front/images/besar.jpeg'?>" alt="">

	<div class="container mt">
		<div class="row mt polaroidhasil">
			<div class="col">
				<form>
					<h3 align="center">Terimakasih</h3>
					<br>
<?php
$nomor=$this->uri->segment(3);
$query=$this->db->query("SELECT id_cabang FROM pengajuan WHERE nomor_pengajuan='$nomor'");
$id_cb=$query->row_array();
$idcabang=$id_cb['id_cabang'];
$ambil_cb=$this->db->query("SELECT nama_cabang,alamat FROM bank_cabang WHERE id=$idcabang");
$hsl=$ambil_cb->row_array();
?>
					<br>
				  	<div class="row" align="center">
							<h5>
							Berikut adalah nomor pengajuan anda <br><br>"<?php echo $nopengajuan?>" <br><br>di Bank BNI <?php echo $hsl['nama_cabang']?>, <?php echo $hsl['alamat']?>.<br><br> Harap disimpan untuk keperluan konfirmasi selanjutnya.  Pengajuan anda akan segera kami proses. silahkan menunggu email notifikasi dari kami untuk proses selanjutnya</h5>

					</div>
					<br>
					<p align="center"><a href="<?php echo base_url().'home'?>" class="btn btn-success">Selesai</a></p>
					<div class="row mt">

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


		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary">Login</button>
		      </div>
					</form>
		    </div>

		  </div>
		</div>

</body>
<footer>
	<h5 class="cc">Copyright 2018. Wallezz Financial Tech.</h5>
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
