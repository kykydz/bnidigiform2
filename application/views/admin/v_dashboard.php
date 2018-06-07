<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <?php
            $level=$this->session->userdata('level');
            $id_reg=$this->session->userdata('id_regional');
            $id_cab=$this->session->userdata('id_cabang');
            if($level=='Pusat')
            {
            $query=$this->db->query("SELECT * FROM pengajuan");
            $jml = $query->num_rows();
          }else if($level=='Regional'){

            $query=$this->db->query("SELECT pengajuan.id_pengajuan FROM pengajuan,bank_cabang,bank_regional WHERE bank_cabang.id=pengajuan.id_cabang AND bank_regional.id=bank_cabang.id_regional AND bank_regional.id=$id_reg");
            $jml = $query->num_rows();
          }else if($level=='Cabang'){

            $query=$this->db->query("SELECT pengajuan.id_pengajuan FROM pengajuan,bank_cabang WHERE bank_cabang.id=pengajuan.id_cabang AND bank_cabang.id=$id_cab");
            $jml = $query->num_rows();
          }
            ?>
            <h3><?php echo $jml ?></h3>

            <p>Pengajuan Kredit</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <?php
            if($level=='Pusat'){
              $query=$this->db->query("SELECT pengajuan.id_pengajuan FROM pengajuan,tbl_produk WHERE tbl_produk.id=pengajuan.id_produk AND tbl_produk.nama_produk='BNI Griya'");
              $griya=$query->num_rows();
            }else if($level=='Regional'){
              $query=$this->db->query("SELECT pengajuan.id_pengajuan FROM pengajuan,tbl_produk,bank_regional,bank_cabang WHERE pengajuan.id_produk=tbl_produk.id AND pengajuan.id_cabang=bank_cabang.id AND bank_regional.id=bank_cabang.id_regional AND bank_regional.id=$id_reg AND tbl_produk.nama_produk='BNI Griya'");
              $griya=$query->num_rows();
            }else if($level=='Cabang'){
              $query=$this->db->query("SELECT pengajuan.id_pengajuan FROM pengajuan,tbl_produk,bank_cabang WHERE pengajuan.id_produk=tbl_produk.id AND pengajuan.id_cabang=bank_cabang.id AND bank_cabang.id=$id_cab AND tbl_produk.nama_produk='BNI Griya'");
              $griya=$query->num_rows();
            }
            ?>
            <h3><?php echo $griya?></h3>

            <p>Pengajuan BNI Griya</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <?php
            if($level=='Pusat'){
              $query=$this->db->query("SELECT pengajuan.id_pengajuan FROM pengajuan,tbl_produk WHERE tbl_produk.id=pengajuan.id_produk AND tbl_produk.nama_produk='BNI Fleksi'");
              $fleksi=$query->num_rows();
            }else if($level=='Regional'){
              $query=$this->db->query("SELECT pengajuan.id_pengajuan FROM pengajuan,tbl_produk,bank_regional,bank_cabang WHERE pengajuan.id_produk=tbl_produk.id AND pengajuan.id_cabang=bank_cabang.id AND bank_regional.id=bank_cabang.id_regional AND bank_regional.id=$id_reg AND tbl_produk.nama_produk='BNI Fleksi'");
              $fleksi=$query->num_rows();
            }else if($level=='Cabang'){
              $query=$this->db->query("SELECT pengajuan.id_pengajuan FROM pengajuan,tbl_produk,bank_cabang WHERE pengajuan.id_produk=tbl_produk.id AND pengajuan.id_cabang=bank_cabang.id AND bank_cabang.id=$id_cab AND tbl_produk.nama_produk='BNI Fleksi'");
              $fleksi=$query->num_rows();
            }
            ?>
            <h3><?php echo $fleksi ?></h3>

            <p>Pengajuan BNI Fleksi</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <?php
            if($level=='Pusat'){
              $query=$this->db->query("SELECT pengajuan.id_pengajuan FROM pengajuan,tbl_produk WHERE tbl_produk.id=pengajuan.id_produk AND tbl_produk.nama_produk='BNI Fleksi Pensiun'");
              $pensiun=$query->num_rows();
            }else if($level=='Regional'){
              $query=$this->db->query("SELECT pengajuan.id_pengajuan FROM pengajuan,tbl_produk,bank_regional,bank_cabang WHERE pengajuan.id_produk=tbl_produk.id AND pengajuan.id_cabang=bank_cabang.id AND bank_regional.id=bank_cabang.id_regional AND bank_regional.id=$id_reg AND tbl_produk.nama_produk='BNI Fleksi Pensiun'");
              $pensiun=$query->num_rows();
            }else if($level=='Cabang'){
              $query=$this->db->query("SELECT pengajuan.id_pengajuan FROM pengajuan,tbl_produk,bank_cabang WHERE pengajuan.id_produk=tbl_produk.id AND pengajuan.id_cabang=bank_cabang.id AND bank_cabang.id=$id_cab AND tbl_produk.nama_produk='BNI Fleksi Pensiun'");
              $pensiun=$query->num_rows();
            }
            ?>
            <h3><?php echo $pensiun ?></h3>

            <p>Pengajuan BNI Fleksi Pensiun</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
      <!-- Left col -->
      <section class="col-lg-8 connectedSortable">
        <!-- Custom tabs (Charts with tabs)-->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Grafik Pengajuan</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <canvas id="pieChart" style="height:250px"></canvas>
          </div>

        </div>

      </section>
      <!-- /.Left col -->
      <!-- right col (We are only adding the ID to make the widgets sortable)-->
      <section class="col-lg-4 connectedSortable">

        <!-- Map box -->

        <!-- /.box -->
        <div class="box box-success">
          <div class="box-header">
            <i class="fa fa-documents-o"></i>

            <h3 class="box-title">Pengajuan Baru</h3>

            <div class="box-tools pull-right" data-toggle="tooltip" title="Status">

            </div>
          </div>
          <div class="box-body chat" id="chat-box">
            <!-- chat item -->
            <?php foreach($pengajuan_baru->result() as $baru):?>
            <div class="item">
              <img src="<?php echo base_url().'assets/images/user.png'?>" alt="user image" class="online">

              <p class="message">
                <a href="#" class="name">
                  <small class="text-muted pull-right"><i class="fa fa-clock-o"></i><?php echo $baru->created_at?></small>
                  <?php echo $baru->nama_nasabah ?>
                </a>
                <?php echo $baru->nama_produk ?>
              </p>
            </div>
          <?php endforeach ?>

          </div>


        </div>


      </section>
      <!-- right col -->
    </div>
    <!-- /.row (main row) -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> 1.0.0
  </div>
  <strong>Copyright &copy; <?php echo date("Y")?> <a href="https://wallezz.com">WALLEZZ</a>.</strong>
</footer>


</div>

</body>
<script src="<?php echo base_url().'assets/template/bower_components/jquery/dist/jquery.min.js'?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url().'assets/template/bower_components/jquery-ui/jquery-ui.min.js'?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url().'assets/template/bower_components/bootstrap/dist/js/bootstrap.min.js'?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'assets/template/dist/js/adminlte.min.js'?>"></script>
<!-- Datatables -->
<script src="<?php echo base_url().'assets/template/bower_components/datatables.net/js/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/template/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js'?>"></script>
<script src="<?php echo base_url().'assets/template/bower_components/chart.js/Chart.js'?>"></script>

<script>
$(function () {


  //-------------
  //- PIE CHART -
  //-------------
  // Get context with jQuery - using jQuery's .get() method.
  var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
  var pieChart       = new Chart(pieChartCanvas)
  var PieData        = [
    {
      value    : <?php echo $pensiun ?>,
      color    : '#f56954',
      highlight: '#f56954',
      label    : 'BNI Fleksi Pensiun'
    },
    {
      value    : <?php echo $griya ?>,
      color    : '#00a65a',
      highlight: '#00a65a',
      label    : 'BNI Griya'
    },
    {
      value    : <?php echo $fleksi ?>,
      color    : '#f39c12',
      highlight: '#f39c12',
      label    : 'BNI Fleksi'
    }
  ]
  var pieOptions     = {
    //Boolean - Whether we should show a stroke on each segment
    segmentShowStroke    : true,
    //String - The colour of each segment stroke
    segmentStrokeColor   : '#fff',
    //Number - The width of each segment stroke
    segmentStrokeWidth   : 2,
    //Number - The percentage of the chart that we cut out of the middle
    percentageInnerCutout: 50, // This is 0 for Pie charts
    //Number - Amount of animation steps
    animationSteps       : 100,
    //String - Animation easing effect
    animationEasing      : 'easeOutBounce',
    //Boolean - Whether we animate the rotation of the Doughnut
    animateRotate        : true,
    //Boolean - Whether we animate scaling the Doughnut from the centre
    animateScale         : false,
    //Boolean - whether to make the chart responsive to window resizing
    responsive           : true,
    // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
    maintainAspectRatio  : true,
    //String - A legend template
    legendTemplate       : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
  }
  //Create pie or douhnut chart
  // You can switch between pie and douhnut using the method below.
  pieChart.Doughnut(PieData, pieOptions)


})
</script>

<script>
//dataTables
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</html>
