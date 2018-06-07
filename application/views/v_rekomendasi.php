<!-- 	<style type="text/css">
		div {
			border: solid;
			border-width: 1px;
			border-color: black;
		}
		body {
			/*background-image: url("<?php echo base_url().'assets/front/images/' ?>");*/
			background-color: #32383a;
		}

	</style> -->
		<style type="text/css">
			body {
				background-color: #003A4B;
			}
		</style>
		<?php

			if($this->session->userdata('user_masuk')==TRUE){
				$iduser=$this->session->userdata('id_user');
				$sql=$this->db->query("SELECT id FROM nasabah WHERE id_user=$iduser");
				$hsl=$sql->num_rows();
				if($hsl>0){
					$url="dokumen";
				}else{
					$url="form";
				}
				$link1 = base_url().'home/'.$url.'/'.$this->uri->segment(3);
			}else if($this->session->userdata('user_masuk')==FALSE){

				$link1 =base_url().'home/login/'.$this->uri->segment(3);
			}
		?>
		<div class="container">
			<div class="row mt wrapper-hasil">
				<div class="col">
					<h5>Maksimal Pinjaman</h5>
					Rp. 20.000.000,00
					<br>
					<br>
					<h5>Masa Pinjaman</h5>
					24 Bulan
				</div>
				<div class="col">
					<h5>Angsuran</h5>
						Rp. 2.040.000,00
					<br>
					<br>
					<h5>Bunga angsuran</h4>
					13.5 %
				</div>
				<div class="col-md-4" style="padding-top: 1%;">
					<div class="dropdown">
						<button onclick="myFunction()" class="tombol-qa">Ajukan Pinjaman</button>
					  	<div id="myDropdown" class="dropdown-content">
					    	<div class="container" style="background-color: #411b8e;">
								<div class="col" align="center">
									<h6>Anda sudah menjadi Nasabah ?</h6>
									<div class="row">
										<div class="col">
											<a href="<?php echo $link1?>" class="tombol-ok">Sudah </a>
										</div>
										<div class="col">
											<a href="<?php echo base_url().'home/bukarekening'?>" class="tombol-ok">Belum </a>
										</div>
									</div>
								</div>
							</div>
					  	</div>
					</div>
					<br>
					<br>
					<button class="tombol-info" data-toggle="collapse" data-target="#detail1">
						Detail Pinjaman
					</button>
				</div>
			</div>
			<div id="detail1" class="collapse row polaroidhasil" style="background-color: #036B89; color: white">
				<table id="example" class="table table-striped">
					<thead>
						<tr align="center">
							<th>Bulan Ke</th>
							<th>Angs Pokok</th>
							<th>Angs bunga</th>
							<th>Rate</th>
							<th>Total Angs</th>
							<th>Sisa Debet</th>
						</tr>
						<tbody align="center">
							<tr>
								<td>1</td>
								<td>IDR 465.887,11	</td>
								<td>IDR 46.238,17	</td>
								<td>9,5%</td>
								<td>IDR 512.125,28</td>
								<td>IDR 5.374.723,89</td>
							</tr>
							<tr>
								<td>2</td>
								<td>IDR 465.887,11	</td>
								<td>IDR 46.238,17	</td>
								<td>9,5%</td>
								<td>IDR 512.125,28</td>
								<td>IDR 5.374.723,89</td>
							</tr><tr>
								<td>3</td>
								<td>IDR 465.887,11	</td>
								<td>IDR 46.238,17	</td>
								<td>9,5%</td>
								<td>IDR 512.125,28</td>
								<td>IDR 5.374.723,89</td>
							</tr><tr>
								<td>4</td>
								<td>IDR 465.887,11	</td>
								<td>IDR 46.238,17	</td>
								<td>9,5%</td>
								<td>IDR 512.125,28</td>
								<td>IDR 5.374.723,89</td>
							</tr><tr>
								<td>5</td>
								<td>IDR 465.887,11	</td>
								<td>IDR 46.238,17	</td>
								<td>9,5%</td>
								<td>IDR 512.125,28</td>
								<td>IDR 5.374.723,89</td>
							</tr><tr>
								<td>6</td>
								<td>IDR 465.887,11	</td>
								<td>IDR 46.238,17	</td>
								<td>9,5%</td>
								<td>IDR 512.125,28</td>
								<td>IDR 5.374.723,89</td>
							</tr><tr>
								<td>7</td>
								<td>IDR 465.887,11	</td>
								<td>IDR 46.238,17	</td>
								<td>9,5%</td>
								<td>IDR 512.125,28</td>
								<td>IDR 5.374.723,89</td>
							</tr><tr>
								<td>8</td>
								<td>IDR 465.887,11	</td>
								<td>IDR 46.238,17	</td>
								<td>9,5%</td>
								<td>IDR 512.125,28</td>
								<td>IDR 5.374.723,89</td>
							</tr><tr>
								<td>9</td>
								<td>IDR 465.887,11	</td>
								<td>IDR 46.238,17	</td>
								<td>9,5%</td>
								<td>IDR 512.125,28</td>
								<td>IDR 5.374.723,89</td>
							</tr><tr>
								<td>10</td>
								<td>IDR 465.887,11	</td>
								<td>IDR 46.238,17	</td>
								<td>9,5%</td>
								<td>IDR 512.125,28</td>
								<td>IDR 5.374.723,89</td>
							</tr><tr>
								<td>11</td>
								<td>IDR 465.887,11	</td>
								<td>IDR 46.238,17	</td>
								<td>9,5%</td>
								<td>IDR 512.125,28</td>
								<td>IDR 5.374.723,89</td>
							</tr><tr>
								<td>12</td>
								<td>IDR 465.887,11	</td>
								<td>IDR 46.238,17	</td>
								<td>9,5%</td>
								<td>IDR 512.125,28</td>
								<td>IDR 5.374.723,89</td>
							</tr>
						</tbody>
					</thead>
				</table>
			</div>
			
			<div class="row mt wrapper-hasil">
				<div class="col">
					<h5>Maksimal Pinjaman</h5>
					Rp. 20.000.000,00
					<br>
					<br>
					<h5>Masa Pinjaman</h5>
					24 Bulan
				</div>
				<div class="col">
					<h5>Angsuran</h5>
						Rp. 2.040.000,00
					<br>
					<br>
					<h5>Bunga angsuran</h4>
					13.5 %
				</div>
				<div class="col-md-4" style="padding-top: 1%;">
					<div class="dropdown">
						<button onclick="myFunction()" class="tombol-qa">Ajukan Pinjaman</button>
					  	<div id="myDropdown" class="dropdown-content">
					    	<div class="container" style="background-color: #411b8e;">
								<div class="col" align="center">
									<h6>Anda sudah menjadi Nasabah ?</h6>
									<div class="row">
										<div class="col">
											<a href="<?php echo $link1?>" class="tombol-ok">Sudah </a>
										</div>
										<div class="col">
											<a href="<?php echo base_url().'home/bukarekening'?>" class="tombol-ok">Belum </a>
										</div>
									</div>
								</div>
							</div>
					  	</div>
					</div>
					<br>
					<br>
					<button class="tombol-info" data-toggle="collapse" data-target="#detail1">
						Detail Pinjaman
					</button>
				</div>
			</div>
			<div id="detail1" class="collapse row polaroidhasil" style="background-color: #036B89; color: white">
				<table id="example" class="table table-striped">
					<thead>
						<tr align="center">
							<th>Bulan Ke</th>
							<th>Angs Pokok</th>
							<th>Angs bunga</th>
							<th>Rate</th>
							<th>Total Angs</th>
							<th>Sisa Debet</th>
						</tr>
						<tbody align="center">
							<tr>
								<td>1</td>
								<td>IDR 465.887,11	</td>
								<td>IDR 46.238,17	</td>
								<td>9,5%</td>
								<td>IDR 512.125,28</td>
								<td>IDR 5.374.723,89</td>
							</tr>
							<tr>
								<td>2</td>
								<td>IDR 465.887,11	</td>
								<td>IDR 46.238,17	</td>
								<td>9,5%</td>
								<td>IDR 512.125,28</td>
								<td>IDR 5.374.723,89</td>
							</tr><tr>
								<td>3</td>
								<td>IDR 465.887,11	</td>
								<td>IDR 46.238,17	</td>
								<td>9,5%</td>
								<td>IDR 512.125,28</td>
								<td>IDR 5.374.723,89</td>
							</tr><tr>
								<td>4</td>
								<td>IDR 465.887,11	</td>
								<td>IDR 46.238,17	</td>
								<td>9,5%</td>
								<td>IDR 512.125,28</td>
								<td>IDR 5.374.723,89</td>
							</tr><tr>
								<td>5</td>
								<td>IDR 465.887,11	</td>
								<td>IDR 46.238,17	</td>
								<td>9,5%</td>
								<td>IDR 512.125,28</td>
								<td>IDR 5.374.723,89</td>
							</tr><tr>
								<td>6</td>
								<td>IDR 465.887,11	</td>
								<td>IDR 46.238,17	</td>
								<td>9,5%</td>
								<td>IDR 512.125,28</td>
								<td>IDR 5.374.723,89</td>
							</tr><tr>
								<td>7</td>
								<td>IDR 465.887,11	</td>
								<td>IDR 46.238,17	</td>
								<td>9,5%</td>
								<td>IDR 512.125,28</td>
								<td>IDR 5.374.723,89</td>
							</tr><tr>
								<td>8</td>
								<td>IDR 465.887,11	</td>
								<td>IDR 46.238,17	</td>
								<td>9,5%</td>
								<td>IDR 512.125,28</td>
								<td>IDR 5.374.723,89</td>
							</tr><tr>
								<td>9</td>
								<td>IDR 465.887,11	</td>
								<td>IDR 46.238,17	</td>
								<td>9,5%</td>
								<td>IDR 512.125,28</td>
								<td>IDR 5.374.723,89</td>
							</tr><tr>
								<td>10</td>
								<td>IDR 465.887,11	</td>
								<td>IDR 46.238,17	</td>
								<td>9,5%</td>
								<td>IDR 512.125,28</td>
								<td>IDR 5.374.723,89</td>
							</tr><tr>
								<td>11</td>
								<td>IDR 465.887,11	</td>
								<td>IDR 46.238,17	</td>
								<td>9,5%</td>
								<td>IDR 512.125,28</td>
								<td>IDR 5.374.723,89</td>
							</tr><tr>
								<td>12</td>
								<td>IDR 465.887,11	</td>
								<td>IDR 46.238,17	</td>
								<td>9,5%</td>
								<td>IDR 512.125,28</td>
								<td>IDR 5.374.723,89</td>
							</tr>
						</tbody>
					</thead>
				</table>
			</div>

			<div class="row mt wrapper-hasil">
				<div class="col">
					<h5>Maksimal Pinjaman</h5>
					Rp. 20.000.000,00
					<br>
					<br>
					<h5>Masa Pinjaman</h5>
					24 Bulan
				</div>
				<div class="col">
					<h5>Angsuran</h5>
						Rp. 2.040.000,00
					<br>
					<br>
					<h5>Bunga angsuran</h4>
					13.5 %
				</div>
				<div class="col-md-4" style="padding-top: 1%;">
					<div class="dropdown">
						<button onclick="myFunction()" class="tombol-qa">Ajukan Pinjaman</button>
					  	<div id="myDropdown" class="dropdown-content">
					    	<div class="container" style="background-color: #411b8e;">
								<div class="col" align="center">
									<h6>Anda sudah menjadi Nasabah ?</h6>
									<div class="row">
										<div class="col">
											<a href="<?php echo $link1?>" class="tombol-ok">Sudah </a>
										</div>
										<div class="col">
											<a href="<?php echo base_url().'home/bukarekening'?>" class="tombol-ok">Belum </a>
										</div>
									</div>
								</div>
							</div>
					  	</div>
					</div>
					<br>
					<br>
					<button class="tombol-info" data-toggle="collapse" data-target="#detail1">
						Detail Pinjaman
					</button>
				</div>
			</div>
			<div id="detail1" class="collapse row polaroidhasil" style="background-color: #036B89; color: white">
				<table id="example" class="table table-striped">
					<thead>
						<tr align="center">
							<th>Bulan Ke</th>
							<th>Angs Pokok</th>
							<th>Angs bunga</th>
							<th>Rate</th>
							<th>Total Angs</th>
							<th>Sisa Debet</th>
						</tr>
						<tbody align="center">
							<tr>
								<td>1</td>
								<td>IDR 465.887,11	</td>
								<td>IDR 46.238,17	</td>
								<td>9,5%</td>
								<td>IDR 512.125,28</td>
								<td>IDR 5.374.723,89</td>
							</tr>
							<tr>
								<td>2</td>
								<td>IDR 465.887,11	</td>
								<td>IDR 46.238,17	</td>
								<td>9,5%</td>
								<td>IDR 512.125,28</td>
								<td>IDR 5.374.723,89</td>
							</tr><tr>
								<td>3</td>
								<td>IDR 465.887,11	</td>
								<td>IDR 46.238,17	</td>
								<td>9,5%</td>
								<td>IDR 512.125,28</td>
								<td>IDR 5.374.723,89</td>
							</tr><tr>
								<td>4</td>
								<td>IDR 465.887,11	</td>
								<td>IDR 46.238,17	</td>
								<td>9,5%</td>
								<td>IDR 512.125,28</td>
								<td>IDR 5.374.723,89</td>
							</tr><tr>
								<td>5</td>
								<td>IDR 465.887,11	</td>
								<td>IDR 46.238,17	</td>
								<td>9,5%</td>
								<td>IDR 512.125,28</td>
								<td>IDR 5.374.723,89</td>
							</tr><tr>
								<td>6</td>
								<td>IDR 465.887,11	</td>
								<td>IDR 46.238,17	</td>
								<td>9,5%</td>
								<td>IDR 512.125,28</td>
								<td>IDR 5.374.723,89</td>
							</tr><tr>
								<td>7</td>
								<td>IDR 465.887,11	</td>
								<td>IDR 46.238,17	</td>
								<td>9,5%</td>
								<td>IDR 512.125,28</td>
								<td>IDR 5.374.723,89</td>
							</tr><tr>
								<td>8</td>
								<td>IDR 465.887,11	</td>
								<td>IDR 46.238,17	</td>
								<td>9,5%</td>
								<td>IDR 512.125,28</td>
								<td>IDR 5.374.723,89</td>
							</tr><tr>
								<td>9</td>
								<td>IDR 465.887,11	</td>
								<td>IDR 46.238,17	</td>
								<td>9,5%</td>
								<td>IDR 512.125,28</td>
								<td>IDR 5.374.723,89</td>
							</tr><tr>
								<td>10</td>
								<td>IDR 465.887,11	</td>
								<td>IDR 46.238,17	</td>
								<td>9,5%</td>
								<td>IDR 512.125,28</td>
								<td>IDR 5.374.723,89</td>
							</tr><tr>
								<td>11</td>
								<td>IDR 465.887,11	</td>
								<td>IDR 46.238,17	</td>
								<td>9,5%</td>
								<td>IDR 512.125,28</td>
								<td>IDR 5.374.723,89</td>
							</tr><tr>
								<td>12</td>
								<td>IDR 465.887,11	</td>
								<td>IDR 46.238,17	</td>
								<td>9,5%</td>
								<td>IDR 512.125,28</td>
								<td>IDR 5.374.723,89</td>
							</tr>
						</tbody>
					</thead>
				</table>
			</div>

			<div class="row mt2 resimulasi" style="">
				<div class="col-md-12">
					<div class="row"><div class="col"><h4 align="center" >Simulasi Griya</h4></div></div>
					<div class="row">
						<div class="col">
							<form>
								<div class="row">
									<div class="col-md-9">
										<div class="row">
											<div class="col-md-6">
												<label for="penghasilan">Penghasilan Bersih:</label>
												<input type="number" class="form-control"  name="penghasilan" placeholder="1200000">
											</div>
											<div class="col-md-6">
												<label for="tgl_lahir">Tanggal Lahir:</label>
												<input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
											</div>
											<div class="col-md-6">
												<label for="pekerjaan">Pekerjaan:</label>
												<input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="PNS">
											</div>
											<div class="col-md-6">
												<label for="pwd">Periode:</label>
												<input type="number" class="form-control" id="periode" name="periode" placeholder="(dalam Bulan)">
											</div>
										</div>
									</div>
									<div class="col-md-3" style="padding-top: 0px; margin-top: 0px;">
										<button href="<?php echo base_url().'home/simulasi/griya'?>" style="height: 100%;">Simulasikan Ulang <br> Perhitungan Anda</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>





</body>
	<!-- Modal detail-->

<footer align="center" style="padding-top: 2%; color: #00877D">
	<a class="cc">Copyright 2018. Wallezz Finansial Teknologi.</a>
</footer>
<link rel="stylesheet" href="<?php echo base_url().'assets/template/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'?>">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.js'></script>

<script  src="<?php echo base_url().'assets/front/js/index.js'?>"></script>
<script  src="<?php echo base_url().'assets/template/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'?>"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

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

<script>
	function myFunction() {
	    document.getElementById("myDropdown").classList.toggle("show");
	}

	window.onclick = function(event) {
	  if (!event.target.matches('.tombol-qa')) {

	    var dropdowns = document.getElementsByClassName("dropdown-content");
	    var i;
	    for (i = 0; i < dropdowns.length; i++) {
	      var openDropdown = dropdowns[i];
	      if (openDropdown.classList.contains('show')) {
	        openDropdown.classList.remove('show');
	      }
	    }
	  }
	}
</script>

</html>
