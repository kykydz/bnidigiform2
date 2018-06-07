<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" id="homeku">
		<style type="text/css">
			.absdown {
		   		z-index: 1;
		   		position: fixed;
		   		top: 75%;
		    	left: 90%;
		    	text-align: center;
		    	font-size: 2em;
		    	color: orange;
			}
			.absup {
		   		z-index: 1;
		   		position: absolute;
		   		top: 218%;
		    	left: 50%;
		    	text-align: center;
		    	font-size: 2em;
		    	color: orange;
			}

		</style>
		<div class="absdown">
			<!-- <a href="#simulasi"><i class="abs fa fa-chevron-circle-down"></i></a> -->
		</div>
		<ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<style type="text/css">
				img {
					padding: 0px;
					margin: 0px;
				}
			</style>
		    <div class="carousel-item active">
		      <img class="d-block w-100" src="<?php echo base_url().'assets/front/images/background.png' ?>" alt="First slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="<?php echo base_url().'assets/front/images/background.png' ?>" alt="Second slide">
		    </div>
		    <div class="carousel-item">
		      <img class="d-block w-100" src="<?php echo base_url().'assets/front/images/background.png' ?>" alt="Third slide">
		    </div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		</a>
	</div>
	
	<section id="simulasi" style="padding-top: 5em; padding-bottom: 5em; background-color: #003A4B">
        <div class="container">
        	<div class="row">
        		<div class="col">
        			<div class="section-heading">
						<div class="headtittle">
							<a style="color: #5399cc">Simulasikan </a><a><strong>pilihan </strong></a><a style="color: orange">Anda</a>
						</div>
						<div class="headcontent">
							<p>Pilih jenis pinjaman yang sesuai dengan kebutuhan anda dan kemampuan anda.
							Kemudian isikan data yang diperlukan untuk memperhitungkan besar angsuran dan bunga dari pinjaman anda.</p>
						</div>
					</div>
        		</div>
        	</div>
        	<div class="row">
	          	<div class="col-md-4 mt">
	        		<div class="flip">
				        <div class="card"> 
				          <div class="face front"> 
				            <div class="inner">   
				              	<div class="mycard-wrapper">
									<div class="mycard-img">
										<img src="<?php echo base_url().'assets/front/images/griya.png' ?>" class="img-fluid" width="70%" height="auto">
									</div>
									<div class="mycard-heading">
										BNI Griya
										<br>
									</div>
									<div class="mycard-content">
										<br>
										<p>Pilih jenis pinjaman yang sesuai dengan kebutuhan anda dan kemampuan anda.
										Kemudian isikan data yang diperlukan untuk memperhitungkan besar angsuran dan bunga dari pinjaman anda.</p>
									</div>
								</div>
				            </div>
				          </div> 
				          <div class="face back">
				            <div class="inner text-center"> 
				              <div class="mycard-wrapper">
				              		<br>
									<div class="mycard-heading">
										BNI Griya
										<br>
									</div>
									<div class="mycard-content" align="">
										<form>
											<div class="form-group">
											    <label for="bersih">Penghasilan Bersih</label>
											    <input type="number" class="form-control" id="bersih" aria-describedby="emailHelp" placeholder="ex: 10000000" min="0" max="999999999999999999">
											</div>
										  	<div class="form-group">
										    	<label for="ttl">Tanggal Lahir</label>
										    	<input type="text" class="form-control" id="ttl" placeholder="ex: 09-07-1989">
										  	</div>
										  	<div class="form-group">
										    	<label for="ttl">Pekerjaan</label>
										    	<input type="text" class="form-control" id="ttl" placeholder="ex: akuntan">
										  	</div>
										  	<div class="form-group">
										    	<label for="ttl">Masa Pinjaman</label>
										    	<input type="text" class="form-control" id="ttl" placeholder="12 (Bulan)">
										  	</div>
										  	<div>
										  		<button type="submit" class="mybtn">Submit</button>
										  	</div>
										</form>
									</div>
								</div>
				            </div>
				          </div>
				        </div>	 
				    </div>
	          	</div>
	          	<div class="col-md-4 mt">
	        		<div class="flip">
				        <div class="card"> 
				          <div class="face front"> 
				            <div class="inner">   
				              	<div class="mycard-wrapper">
									<div class="mycard-img">
										<img src="<?php echo base_url().'assets/front/images/fleksi.png' ?>" class="img-fluid" width="70%" height="auto">
									</div>
									<div class="mycard-heading">
										BNI Fleksi
										<br>
									</div>
									<div class="mycard-content">
										<br>
										<p>Pilih jenis pinjaman yang sesuai dengan kebutuhan anda dan kemampuan anda.
										Kemudian isikan data yang diperlukan untuk memperhitungkan besar angsuran dan bunga dari pinjaman anda.</p>
									</div>
								</div>
				            </div>
				          </div> 
				          <div class="face back">
				            <div class="inner text-center"> 
				              <div class="mycard-wrapper">
				              		<br>
									<div class="mycard-heading">
										BNI Fleksi
										<br>
									</div>
									<div class="mycard-content" align="">
										<form>
											<div class="form-group">
											    <label for="bersih">Penghasilan Bersih</label>
											    <input type="number" class="form-control" id="bersih" aria-describedby="emailHelp" placeholder="ex: 10000000" min="0" max="999999999999999999">
											</div>
										  	<div class="form-group">
										    	<label for="ttl">Tanggal Lahir</label>
										    	<input type="text" class="form-control" id="ttl" placeholder="ex: 09-07-1989">
										  	</div>
										  	<div class="form-group">
										    	<label for="ttl">Pekerjaan</label>
										    	<input type="text" class="form-control" id="ttl" placeholder="ex: akuntan">
										  	</div>
										  	<div class="form-group">
										    	<label for="ttl">Maksimal Pinjaman</label>
										    	<input type="text" class="form-control" id="ttl" placeholder="12 (Bulan)">
										  	</div>
										  	<div class="form-group">
										    	<label for="ttl">Masa Pinjaman</label>
										    	<input type="text" class="form-control" id="ttl" placeholder="12 (Bulan)">
										  	</div>
										  	<div>
										  		<button type="submit" class="mybtn">Submit</button>
										  	</div>
										</form>
									</div>
								</div>
				            </div>
				          </div>
				        </div>	 
				    </div>
	          	</div>
	          	<div class="col-md-4 mt">
	        		<div class="flip">
				        <div class="card"> 
				          <div class="face front"> 
				            <div class="inner">   
				              	<div class="mycard-wrapper">
									<div class="mycard-img">
										<img src="<?php echo base_url().'assets/front/images/fleksipensiun.png' ?>" class="img-fluid" width="70%" height="auto">
									</div>
									<div class="mycard-heading">
										BNI Fleksi Pensiun
										<br>
									</div>
									<div class="mycard-content">
										<br>
										<p>Pilih jenis pinjaman yang sesuai dengan kebutuhan anda dan kemampuan anda.
										Kemudian isikan data yang diperlukan untuk memperhitungkan besar angsuran dan bunga dari pinjaman anda.</p>
									</div>
								</div>
				            </div>
				          </div> 
				          <div class="face back">
				            <div class="inner text-center"> 
				              <div class="mycard-wrapper">
				              		<br>
									<div class="mycard-heading">
										BNI Fleksi Pensiun
										<br>
									</div>
									<div class="mycard-content" >
										<div id="accordion">
											<style type="text/css">
												.headcard {
													border-top:solid;
													border-width: 2px;
													border-color: #E55300;
													padding: 2%;
												}
											</style>
										    <div class="signup">
										    	<div data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" align="center" class="headcard">
											        <strong>Hitung Max Pinjaman</strong>
											    </div>
											    <div id="collapseOne" class="collapse show" data-parent="#accordion">
											      	<div class="card-body">
											        	<form>
															<div class="form-group">
															    <label for="bersih">Penghasilan Bersih</label>
															    <input type="number" class="form-control" id="bersih" aria-describedby="emailHelp" placeholder="ex: 10000000" min="0" max="999999999999999999">
															</div>
														  	<div class="form-group">
														    	<label for="ttl">Tanggal Lahir</label>
														    	<input type="text" class="form-control" id="ttl" placeholder="ex: 09-07-1989">
														  	</div>
														  	<div class="form-group">
														    	<label for="ttl">Masa Pinjaman</label>
														    	<input type="text" class="form-control" id="ttl" placeholder="12 (Bulan)">
														  	</div>
														  	<div>
														  		<button type="submit" class="mybtn">Submit</button>
														  	</div>
														</form>
												  	</div>
												</div>
										    </div>
										    <div class="login">
										    	<div data-toggle="collapse" data-target="#colLogin" aria-expanded="false" aria-controls="collapseTwo" align="center" class="headcard">
											        <strong>Hitung Min Pendapatan</strong>
											    </div>
											    <div id="colLogin" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
											      	<div class="card-body">
											        	<form>
															<div class="form-group">
															    <label for="bersih">Jumlah Pinjaman</label>
															    <input type="number" class="form-control" id="bersih" aria-describedby="emailHelp" placeholder="ex: 10000000" min="0" max="999999999999999999">
															</div>
														  	<div class="form-group">
														    	<label for="ttl">Tanggal Lahir</label>
														    	<input type="text" class="form-control" id="ttl" placeholder="ex: 09-07-1989">
														  	</div>
														  	<div class="form-group">
														    	<label for="ttl">Masa Pinjaman</label>
														    	<input type="text" class="form-control" id="ttl" placeholder="12 (Bulan)">
														  	</div>
														  	<div>
														  		<button type="submit" class="mybtn">Submit</button>
														  	</div>
														</form>
											      	</div>
											    </div>
										    </div>
										</div>
									</div>
								</div>
				            </div>
				          </div>
				        </div>	 
				    </div>
	          	</div>
        	</div>
        </div>
        <div class="absup">
			<!-- <a href="#homeku"><i class="abs fa fa-chevron-circle-up"></i></a> -->
		</div>
    </section>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	

	<script type="text/javascript">
		$('.flip').hover(function(){
        	$(this).find('.card').toggleClass('flipped');
    	});
	</script>


	<script src="<?php echo base_url().'assets/front/js/jquery.easing.min.js' ?>"></script>
    <script src="<?php echo base_url().'assets/front/js/scrolling-nav.js' ?>"></script>
</body>
</html>