<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>Pengajuan</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Pengajuan</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-xs-12">
      <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pengajuan Pinjaman</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>

                <tr>
                  <th>Nama Pemohon</th>
                  <th>Produk</th>
                  <th>Cabang pengajuan</th>
                  <th>Status</th>
                  <th>Tanggal Masuk</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach($dataproduk->result() as $produk): ?>
                <tr>
                  <td><?php echo $produk->nama_nasabah ?></td>
                  <td><?php echo $produk->nama_produk ?></td>
                  <td><?php echo $produk->nama_cabang ?></td>
                  <td><?php echo $produk->status ?></td>
                  <td><?php echo $produk->created_at ?></td>
                  <td><a href="<?php echo site_url().'admin/pengajuan/verifikasi/'.$produk->id_pengajuan?>"><button type="button" class="btn btn-primary btn btn-block"><i class="fa fa-search"></i> Periksa</button></a></td>
                </tr>
              <?php endforeach ?>

              </tbody>

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
