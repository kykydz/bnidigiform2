<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>BNI DIGIFORM</title>

	<!-- BS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/front/css/kustom.css' ?>">
	<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

	<!-- MATERIAL DESIGN -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- <link rel="stylesheet" href="<?php echo base_url().'assets/front/css/material-dashboard.css?v=2.0.0' ?> "> -->

    <!-- icon -->
	<link rel="icon" href="<?php echo base_url().'assets/images/favicon.ico'?>" type="image/x-icon" />

	<!-- self CSS -->
	<link rel="stylesheet" href="<?php echo base_url().'assets/front/css/style.css'?>">
	<link href="<?php echo base_url().'assets/front/css/scrolling-nav.css'?>" rel="stylesheet">

	<!-- input file -->
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/front/css/demo.css' ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/front/css/component.css' ?>" />
 -->
</head>
<body>
	<style type="text/css">
		.fluidnya {
			max-height: 100px;
			max-width: 100px;
		}
	</style>

	<?php echo $this->session->flashdata('msg')?>

	<div id="homeku"></div>
	<nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background: linear-gradient(to right, #003A4B, #00516A, #003A4B);">
	  	<a class="navbar-brand" href="<?php echo base_url().'home' ?>"><img src="<?php echo base_url().'assets/front/images/bnilogo.png' ?>" class="fluidnya"></a>
	  	<div style="width: 30%"></div>
	  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    	<span class="navbar-toggler-icon"></span>
	  	</button>

	  	<div class="collapse navbar-collapse" id="navbarSupportedContent" align="center">
		    <ul class="navbar-nav mr-auto" style="text-align: center;">
		      	<li class="nav-item active">
		        	<a class="nav-link" href="#">Beranda<span class="sr-only">(current)</span></a>
		      	</li>
		      	<!-- <li class="nav-item active borleft">
		        	<a class="nav-link" href="#">Produk<span class="sr-only">(current)</span></a>
		      	</li>
		      	<li class="nav-item active borleft">
		        	<a class="nav-link" href="#">Layanan<span class="sr-only">(current)</span></a>
		      	</li> -->
		      	<li class="nav-item active borleft">
		        	<a class="nav-link" href="#">Simulasi<span class="sr-only">(current)</span></a>
		      	</li>
		    </ul>
		    <div class="form-inline my-2 my-lg-0">
		    	<?php echo $this->session->flashdata('msg')?>
		    	<a class="btn buttlogin btn-outline-light my-2 my-sm-0" href="<?php echo base_url().'home/login' ?>">
		      		Login
		      	</a>
		    </div>
	  	</div>
	</nav>
