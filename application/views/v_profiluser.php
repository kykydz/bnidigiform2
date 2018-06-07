
		
		<div class="wrapper profile-header">
			<div class="row" align="center">
				<div class="col-6" align="right">
					<div class="imgprofil">
						<div class="ratio img-responsive img-circle" style="background-image: url('<?php echo base_url().'assets/front/images/avatar.png' ?>');">
						</div>
					</div>
				</div>
				<div class="col-md-6 pf-id" align="left">
					<h4>Tn/Ny.</h4>
					<h3>Zoro</h3>
					<form class="def-form">
						<input type="text" class="" id="bb" value="Anime Studio" style="padding: 0px; width: 90%">
						<a href="#"><i class="fa fa-edit"></i></a>
					</form>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-6 ">
					<div class="pf-konten">
						<h5><i class="fa fa-cogs"></i> My Account</h5>
						<hr>
						<form class="def-form">
							<div class="form-group">
							    <label for="aa">Nama Lengkap dan Gelar :</label>
							    <input type="text" class="" id="aa" value="One Piece">
							</div>
							<div class="form-group">
							    <label for="bbs">Email address :</label>
							    <input type="text" class="" id="bbs" value="One Piece">
							</div>
							<div class="form-group">
							    <label for="bb">Password :</label>
							    <div>
							    	<input type="password" class="" id="passnya" value="One Piece" style="width: 95%">
							    	<i class="fa fa-eye" id="iconp" onclick="passkuhilang()" ></i>
							    </div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<button type="submit" class="tombol-qa"><i class="fa fa-cog"></i> Update</button>		
								</div>
							</div>
							
						</form>
					</div>
				</div>
				<style type="text/css">
					.table thead th {
						background-color: #034b75;
					}
				</style>
				<div class="col-md-6">
					<div class="pf-konten">
						<h5><i class="fa fa-history"></i> Riwayat Transaksi</h5>
						<hr>
						<table class="table table-striped">
						  <thead>
						    <tr>
						      <th scope="col">No Ref.</th>
						      <th scope="col">Produk BNI</th>
						      <th scope="col">Besar Pinjaman</th>
						      <th scope="col">Masa Pinjaman</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <th scope="row">1</th>
						      <td>Mark</td>
						      <td>Otto</td>
						      <td>@mdo</td>
						    </tr>
						    <tr>
						      <th scope="row">2</th>
						      <td>Jacob</td>
						      <td>Thornton</td>
						      <td>@fat</td>
						    </tr>
						    <tr>
						      <th scope="row">3</th>
						      <td>Larry</td>
						      <td>the Bird</td>
						      <td>@twitter</td>
						    </tr>
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<script>
			function passkuhilang() {
			    var x = document.getElementById("passnya");
			    var fac = document.getElementById("iconp");
			    if (x.type === "password") {
			        x.type = "text";
			        fac.classList.remove("fa-eye");
			        fac.classList.add("fa-eye-slash");
			    } else {
			        x.type = "password";
			        fac.classList.add("fa-eye");
			        fac.classList.remove("fa-eye-slash");
			    }
			}
		</script>
		<iframe
							    width="350"
							    height="430"
							    src="https://console.dialogflow.com/api-client/demo/embedded/eb0de09f-2fc1-4f67-9eca-ac0bb4acbd2e">
							</iframe>
</body>
</html>