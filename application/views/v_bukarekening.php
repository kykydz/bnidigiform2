


	<div class="container mt">
		<div class="row mt polaroidhasil">
			<div class="col">
				<?php echo $this->session->flashdata('email')?>
				<div class="" id="myModal" role="dialog">
							<div class="modal-dialog">
							<div class="modal-content">
							<div class="modal-header">

							<h4 class="modal-title">Buka Rekening Baru</h4>
							</div>
							<div class="modal-body">
								<form action="<?php echo base_url()?>" method="post" data-toggle="validator">

										<div class="form-group col-md-12">
											<label for="email">Nama Lengkap</label>
											<input type="email" class="form-control" id="email" name="email">
										</div>
										<div class="form-group col-md-12">
											<label for="email">Nomor NIK</label>
											<input type="email" class="form-control" id="email" name="email">
										</div>
										<div class="form-group col-md-12">
											<label for="email">Nomor NPWP</label>
											<input type="email" class="form-control" id="email" name="email">
										</div>
										<div class="form-group col-md-12">
											<label for="nohp">Tanggal Lahir</label>
											<input type="date" class="form-control" id="nohp" name="nohp">
										</div>
										<div class="form-group col-md-12">
											<label for="pwd">Pekerjaan</label>
											<input type="text" class="form-control" id="inputPassword">
										</div>
										<div class="form-group col-md-12">
											<label for="pwd">Alamat KTP</label>
											<input type="text" class="form-control" id="inputPassword">
										</div>
										<div class="form-group col-md-12">
											<label for="pwd">Alamat Domisili</label>
											<input type="text" class="form-control" id="inputPassword">
										</div>




							</div>
							<div class="modal-footer">
							<button  class="btn btn-primary">Simpan</button>


							</div>
							</form>
							</div>
							</div>
				</div>

			</div>
		</div>
	</div>




		<!-- Modal login-->

</body>
<footer>
	<h5 class="cc">Copyright 2018. Wallezz Financial Tech.</h5>
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.js'></script>

<script  src="<?php echo base_url().'assets/front/js/index.js'?>"></script>
<script  src="<?php echo base_url().'assets/front/js/validator.js'?>"></script>

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
