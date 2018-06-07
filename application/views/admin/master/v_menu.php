<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="<?php echo base_url().'assets/images/favicon.ico'?>" type="image/x-icon" />
<link rel="SHORTCUT ICON" href="<?php echo base_url().'assets/images/favicon.ico'?>"
 type="image/x-icon">
  <title>BNI-FORM</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/template/bower_components/bootstrap/dist/css/bootstrap.css'?>">
  <!-- Font Awesome -->
<link rel="stylesheet" href="<?php echo base_url().'assets/template/bower_components/font-awesome/css/font-awesome.css'?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/template/bower_components/Ionicons/css/ionicons.css'?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/template/dist/css/AdminLTE.css'?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/template/dist/css/skins/_all-skins.css'?>">
  <!-- Datatables -->
  <link rel="stylesheet" href="<?php echo base_url().'/assets/template/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->


  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo site_url().'admin/dashboard'?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>BNI</b></span>
      <!-- logo for regular state and mobile devices -->
      <img src="<?php echo base_url().'assets/images/logoo-besar.png'?>" class="img-fluid" width="50%">
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->

          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-info">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url().'assets/images/user.png'?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo mb_strtoupper($this->session->userdata('username'))?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url().'assets/images/user.png'?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo mb_strtoupper($this->session->userdata('username'))?> - <?php echo $this->session->userdata('level') ?>
                  <?php

                if($this->session->userdata('level')=='Pusat'){
                    $info="BNI PUSAT";
                  }else if($this->session->userdata('level')=='Regional'){
                    $idreg=$this->session->userdata('id_regional');
                      $query=$this->db->query("SELECT nama_regional FROM bank_regional WHERE id=$idreg");
                      $dt=$query->row_array();
                      $info=$dt['nama_regional'];
                  }else if($this->session->userdata('level')=='Cabang'){
                    $idcab=$this->session->userdata('id_cabang');
                    $query=$this->db->query("SELECT nama_cabang FROM bank_cabang WHERE id=$idcab");
                    $dt=$query->row_array();
                    $info=$dt['nama_cabang'];
                  }
                  ?>
                  <small><?php echo $info ?></small>
                </p>
              </li>
              <!-- Menu Body -->

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profil</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo site_url().'admin/login/logout'?>" class="btn btn-default btn-flat">Keluar</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->

        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url().'assets/images/user.png'?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo mb_strtoupper($this->session->userdata('username'))?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">

        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">

      <li >
          <a href="<?php echo base_url().'/admin/dashboard'?>">
            <i class="fa fa-edit"></i> <span>Dashboard</span>
          </a>

        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Pengajuan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url().'admin/pengajuan'?>"><i class="fa fa-circle-o"></i>Semua pengajuan</a></li>
            <?php foreach($menu->result() as $menuu):?>
            <li><a href="<?php echo base_url().'admin/pengajuan/produk/'.$menuu->id?>"><i class="fa fa-circle-o"></i>Pengajuan <?php echo $menuu->nama_produk?></a></li>
          <?php endforeach ?>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Suku Bunga</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i>BNI Griya</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>BNI Fleksi</a></li>
            <li><a href="<?php echo site_url().'/admin/bunga/pensiun'?>"><i class="fa fa-circle-o"></i>BNI Fleksi Pensiun</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Simulasi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url().'admin/simulasi/griya'?>"><i class="fa fa-circle-o"></i>BNI Griya</a></li>
            <li><a href="<?php echo site_url().'admin/simulasi/fleksi'?>"><i class="fa fa-circle-o"></i>BNI Fleksi</a></li>
            <li><a href="<?php echo site_url().'admin/simulasi/pensiun'?>"><i class="fa fa-circle-o"></i>BNI Fleksi Pensiun</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Bank</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo site_url().'admin/bank/regional'?>"><i class="fa fa-circle-o"></i>Regional</a></li>
            <li><a href="<?php echo site_url().'admin/bank/cabang'?>"><i class="fa fa-circle-o"></i>Cabang</a></li>

          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Produk</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i>Kategori Produk</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Produk</a></li>

          </ul>
        </li>





      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
