
	<img src="<?php echo base_url().'assets/front/images/besar.jpeg'?>" alt="">

	</div>

		<div class="container mt">
			<?php
			 error_reporting(0);
				if($this->session->userdata('user_masuk')==TRUE){
					$iduser=$this->session->userdata('id_user');
					$sql=$this->db->query("SELECT id FROM nasabah WHERE id_user=$iduser");
					$hsl=$sql->num_rows();
					if($hsl>0){
						$url="dokumen";
					}else{
						$url="form";
					}
					$link1 = base_url().'home/'.$url.'/'.$produk;
				}else if($this->session->userdata('user_masuk')==FALSE){

					$link1 =base_url().'home/login/'.$produk;
				}





			 foreach($data_bunga->result() as $hitung):
				 $background=$hitung->id_bunga % 2;
				 if($hitung->id_bunga==$id_bunga){
					 $warna='#FF8F4A';
				 }
				 if($background==0 AND $hitung->id_bunga!=$id_bunga){
					 $warna='#ededed';
				 }else if($background!=0 AND $hitung->id_bunga!=$id_bunga){
					 $warna='';
				 }
				$masa_bulan=$hitung->jumlah_tahun * 12;
				$bunga = $hitung->suku_bunga / 100;
				$bunga_angsuran = $hitung->suku_bunga;


				$angsuranperbulan=($max_kredit / $masa_bulan) + ($max_kredit * ($bunga/12));
				$minimal_penghasilan= $dsr;
				$angsuran_bunga=($angsuranperbulan * $hitung->suku_bunga) / 100;
				$angsuran_pokok=$angsuranperbulan - $angsuran_bunga;
				?>
			<div class="row mt polaroidhasil" style="background-color:<?php echo $warna?>">
				<div class="col-md-3">
					<h5>Jumlah Kredit</h5>
					Rp. <?php echo number_format($max_kredit)?>
					<h5>Angsuran</h5>
					Rp. <?php echo number_format($angsuranperbulan)?>
				</div>
				<div class="col-md-3">
					<h5>Masa kredit</h5>
					<?php echo $masa_bulan ?> Bulan / <?php echo $masa_bulan/12?> Tahun
					<h5>Bunga angsuran</h5>
					<?php echo $bunga_angsuran ?> %
				</div>
				<div class="col-md-2">
					<h5>Minimal Penghasilan</h5>
					<?php echo number_format($angsuranperbulan / $dsr)  ?>

				</div>

				<div class="col-md-4" class="boxhasil">
					<br>

					<button class="btn btn-success btn-aku btn btn-block" data-toggle="dropdown">Ajukan Pinjaman</button></a>
					<div class="dropdown-menu col-md-11" align="center" style="padding:20px">
						<strong>Apakah anda sudah menjadi Nasabah ?</strong>
						<br>
						<br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url().'home/bukarekening'?>" class="btn btn-warning">Belum </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="<?php echo $link1?>" class="btn btn-info">Sudah </a>
							
					</div>
					<br>
					<br>
					<a href="#detail<?php echo $hitung->id_bunga?>" data-toggle="collapse" class="btn btn-info btn-aku btn btn-block">Detail Pinjaman</a>

				</div>

				<script type="text/javascript">


							$(document).ready(function(){
    					$('[data-toggle="popover"]').popover();
							});


				</script>
			</div>
					<div id="detail<?php echo $hitung->id_bunga?>" class="collapse row polaroidhasil">
						<table id="example" class="table table-bordered table-striped">
				<thead>
					<tr align="center">
						<th>Bulan Ke</th>
						<th>Angs Pokok</th>
						<th>Angs bunga</th>
						<th>Rate</th>
						<th>Total Angs</th>

					</tr>
					<tbody align="center">

						<?php

						for($x=1;$x<=$masa_bulan;$x++){?>
						<tr>

							<td><?php echo $x ?></td>
							<td>Rp. <?php echo number_format($angsuran_pokok)?></td>
							<td>Rp. <?php echo number_format($angsuran_bunga)?></td>
							<td><?php echo $bunga_angsuran ?> %</td>
							<td>Rp. <?php echo number_format($angsuranperbulan)?></td>

						</tr>
						<?php } ?>
					</tbody>
				</thead>
			</table>
					</div>
					<?php endforeach ?>
					<div id="pensiun" class="tabcontent polaroid">
						<div align="center">
							<button type="button" name="button" class="btn btn-warning" onclick="maxpinjaman()">Hitung maksimal pinjaman anda</button>&nbsp;<button type="button" name="button" class="btn btn-warning" onclick="minpenghasilan()">Hitung minimal pendaptan untuk pinjaman</button>

					</div>
							<div id="pensiun_f" align="">


							</div>
							<script type="text/javascript">
							function maxpinjaman() {

									document.getElementById("pensiun_f").innerHTML =
									"<div class='col-md-12'><div class='row'><div class='col'><h4 align='center'>Simulasi Fleksi Pensiun</h4></div></div><form action='<?php echo base_url().'home/pensiun'?>' method='post'><div class='row'><div class='col-md-2'></div><div class='form-group col-md-3'><label for='penghasilan'>Penghasilan Bersih:</label><input type='text' class='form-control' id='rupiah' onkeydown='return numbersonly(this, event);' onkeyup='javascript:tandaPemisahTitik(this);' name='penghasilan' required></div><div class='form-group col-md-3'><label for='pwd'>Masa Pinjaman:</label><select class='form-control' id='masa_kredit' name='masa_kredit' required><option value=''>-Pilih-</option><?php foreach($datapensiun->result() as $pensiun):?><option value='<?php echo $pensiun->id_bunga?>'><?php echo $pensiun->jumlah_tahun?> Tahun (<?php echo $pensiun->jumlah_tahun * 12 ?> Bulan)</option><?php endforeach ?></select></div><div class='form-group col-md-3'><label for='pwd' style='color:#006685;'>Pekerjaan:</label><br><button type='submit' class='btn btn-warning'>Hitung</button></div></form></div></div>";
								}
							</script>
							<script type="text/javascript">
							function minpenghasilan() {

									document.getElementById("pensiun_f").innerHTML =
									"<div class='col-md-12'><div class='row'><div class='col'><h4 align='center'>Simulasi Fleksi Pensiun</h4></div></div><form action='<?php echo base_url().'home/pensiun'?>' method='post'><div class='row'><div class='col-md-2'></div><div class='form-group col-md-3'><label for='penghasilan'>Jumlah Pinjaman:</label><input type='text' class='form-control' id='max_pinjaman'  onkeydown='return numbersonly(this, event);' onkeyup='javascript:tandaPemisahTitik(this);' max='500000000' name='max_pinjaman' required></div><div class='form-group col-md-3'><label for='pwd'>Masa Pinjaman:</label><select class='form-control' id='masa_kredit' name='masa_kredit' required><option value=''>-Pilih-</option><?php foreach($datapensiun->result() as $pensiun):?><option value='<?php echo $pensiun->id_bunga?>'><?php echo $pensiun->jumlah_tahun?> Tahun (<?php echo $pensiun->jumlah_tahun * 12 ?> Bulan)</option><?php endforeach ?></select></div><div class='form-group col-md-3'><label for='pwd' style='color:#006685;'>Pekerjaan:</label><br><button type='submit' class='btn btn-warning'>Hitung</button></div></form></div></div>";
								}
							</script>
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
		<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
</body>
<footer>
	<h5 class="cc">Copyright 2018. Wallezz Finansial Teknologi.</h5>
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

<script type="text/javascript">

function tandaPemisahTitik(b){
var _minus = false;
if (b<0) _minus = true;
b = b.toString();
b=b.replace(".","");
b=b.replace("-","");
c = "";
panjang = b.length;
j = 0;
for (i = panjang; i > 0; i--){
j = j + 1;
if (((j % 3) == 1) && (j != 1)){
c = b.substr(i-1,1) + "." + c;
} else {
c = b.substr(i-1,1) + c;
}
}
if (_minus) c = "-" + c ;
return c;
}

function numbersonly(ini, e){
if (e.keyCode>=49){
if(e.keyCode<=57){
a = ini.value.toString().replace(".","");
b = a.replace(/[^\d]/g,"");
b = (b=="0")?String.fromCharCode(e.keyCode):b + String.fromCharCode(e.keyCode);
ini.value = tandaPemisahTitik(b);
return false;
}
else if(e.keyCode<=105){
if(e.keyCode>=96){
//e.keycode = e.keycode - 47;
a = ini.value.toString().replace(".","");
b = a.replace(/[^\d]/g,"");
b = (b=="0")?String.fromCharCode(e.keyCode-48):b + String.fromCharCode(e.keyCode-48);
ini.value = tandaPemisahTitik(b);
//alert(e.keycode);
return false;
}
else {return false;}
}
else {
return false; }
}else if (e.keyCode==48){
a = ini.value.replace(".","") + String.fromCharCode(e.keyCode);
b = a.replace(/[^\d]/g,"");
if (parseFloat(b)!=0){
ini.value = tandaPemisahTitik(b);
return false;
} else {
return false;
}
}else if (e.keyCode==95){
a = ini.value.replace(".","") + String.fromCharCode(e.keyCode-48);
b = a.replace(/[^\d]/g,"");
if (parseFloat(b)!=0){
ini.value = tandaPemisahTitik(b);
return false;
} else {
return false;
}
}else if (e.keyCode==8 || e.keycode==46){
a = ini.value.replace(".","");
b = a.replace(/[^\d]/g,"");
b = b.substr(0,b.length -1);
if (tandaPemisahTitik(b)!=""){
ini.value = tandaPemisahTitik(b);
} else {
ini.value = "";
}

return false;
} else if (e.keyCode==9){
return true;
} else if (e.keyCode==17){
return true;
} else {
//alert (e.keyCode);
return false;
}

}

</script>
<style>
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: #E55300;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #006685;
}
</style>
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>

</html>
