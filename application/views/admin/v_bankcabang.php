<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>Bank Cabang</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Bank Cabang</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-xs-12">
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Bank Cabang <?php //echo $simulasi?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>

                <tr>

                  <th>Nama Bank</th>
                  <th>Kab/Kota</th>
                  <th>Alamat</th>

                </tr>
                </thead>
              </table>
            </div>
            <!-- /.box-body -->
          </div>

    </div>
</div>
</section>
</div>
    <!-- /.row (main row) -->


  </section>
  <!-- /.content -->
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



  <script>
  $(document).ready(function(){
    // Setup datatables
    $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings)
      {
          return {
              "iStart": oSettings._iDisplayStart,
              "iEnd": oSettings.fnDisplayEnd(),
              "iLength": oSettings._iDisplayLength,
              "iTotal": oSettings.fnRecordsTotal(),
              "iFilteredTotal": oSettings.fnRecordsDisplay(),
              "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
              "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
          };
      };

      var table = $("#example1").dataTable({
          initComplete: function() {
              var api = this.api();
              $('#mytable_filter input')
                  .off('.DT')
                  .on('input.DT', function() {
                      api.search(this.value).draw();
              });
          },
              oLanguage: {
              sProcessing: "loading..."
          },
              processing: true,
              serverSide: true,
              ajax: {"url": "<?php echo base_url().'admin/bank/data_cabang'?>", "type": "POST"},
                  columns: [
                        {"data": "nama_cabang"},
                        {"data": "kab_kot"},
                        {"data": "alamat"}
                  ],
              order: [[1, 'asc']],
          rowCallback: function(row, data, iDisplayIndex) {
              var info = this.fnPagingInfo();
              var page = info.iPage;
              var length = info.iLength;
              $('td:eq(0)', row).html();
          }

      });
      // end setup datatables
      // get Edit Records
      $('#example1').on('click','.edit_record',function(){
            var id_bunga=$(this).data('id_bunga');
            var jumlah_tahun=$(this).data('jumlah_tahun');
            var suku_bunga=$(this).data('suku_bunga');

            $('#ModalUpdate').modal('show');
            $('[name="id_bunga"]').val(id_bunga);
            $('[name="jumlah_tahun"]').val(jumlah_tahun);
            $('[name="suku_bunga"]').val(suku_bunga);

      });
      // End Edit Records
      // get Hapus Records
      $('#example1').on('click','.hapus_record',function(){
            var kode=$(this).data('kode');
            $('#ModalHapus').modal('show');
            $('[name="kode_barang"]').val(kode);
      });
      // End Hapus Records

  });
  </script>

  <script>
  //dataTables
    $(function () {
      $('#example1').DataTable()

    })
  </script>
  </html>
