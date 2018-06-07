<!DOCTYPE html>
<html>
<head>

	<title>Login</title>
	<!-- BS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- MINE -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/front/css/login.css' ?> ">
	
	<link href='https://fonts.googleapis.com/css?family=Assistant' rel='stylesheet'>

	<style type="text/css">
		/*div {
			border: solid;
			border-width: 1px;
			border-color: black;
		}*/
		body {
			background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url("<?php echo base_url().'assets/front/images/background.png' ?>");	
		}
		
	</style>

</head>
<body style="background-color: #32383a; padding-top:5%">
	<div class="container">
		<div class="section">
			<div class="row">
			<div class="col-md-7 side">
				<div class="row sideLogo">
					<div class="col-md-12">
						<a href="index.php"><img src="<?php echo base_url().'assets/front/images/bnilogo.png' ?>" width="30%" height="auto"></a>
					</div>
				</div>
				<div class="row sideTittle">
					<div class="col-md-12">
						<h1>Selamat Datang</h1>
					</div>
				</div>
				<div class="row sideContent">
					<div class="col-md-12">
						This should be less tier at some point (Puck:Dota2). This should be less tier at some point (Puck:Dota2). This should be less tier at some point (Puck:Dota2). This should be less tier at some point (Puck:Dota2).s
					</div>
				</div>
			</div>
			<div class="col-md-5 formSide">
				<div id="accordion">
				    <div class="signup">
				    	<div data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" align="center">
					        <h3><strong>SIGN UP</strong></h3>
					    </div>
					    <div id="collapseOne" class="collapse show" data-parent="#accordion">
					      	<div class="card-body">
					        	<form>
					        		<input type="text" class="inputan" name="user" placeholder="Userame">
					        		<input type="text" class="inputan" name="email" placeholder="Email">
					        		<input type="text" class="inputan" name="ttl" placeholder="Tanggal Lahir">
					        		<input type="password" class="inputan" name="pass1" placeholder="Password">
					        		<input type="password" class="inputan" name="pass2" placeholder="Re-Password">
					        		<button type="submit" class="buttonku" name="save">sign up</i></button>
					        	</form>
						  	</div>
						</div>
				    </div>
				    <div class="login">
				    	<div data-toggle="collapse" data-target="#colLogin" aria-expanded="false" aria-controls="collapseTwo" align="center">
					        <h3><strong>LOGIN</strong></h3>
					    </div>
					    <div id="colLogin" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
					      	<div class="card-body">
					        	<form>
					        		<input type="text" class="inputan" name="email" placeholder="Email">
					        		<input type="password" class="inputan" name="pass2" placeholder="Password">
					        		<button type="submit" class="butlogin" name="save">Login</i></button>
					        	</form>
					      	</div>
					    </div>
				    </div>
				</div>
			</div>
		</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="<?php echo base_url().'assets/front/js/bootstrap.min.js' ?>"></script>
</body>
</html>