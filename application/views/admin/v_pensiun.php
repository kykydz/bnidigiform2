<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>Verifikasi data</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Pengajuan</li><li class="active">Verifikasi</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <?php foreach($datapengajuan->result() as $pengajuan): ?>
    <div class="row">
      <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Pribadi Pemohon Pinjaman <?php echo $pengajuan->nama_produk?></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="noktp" class="col-sm-2 control-label">No KTP</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="noktp" placeholder="No KTP" value="<?php echo $pengajuan->nik ?>">


                  </div>
                  <div class="radio">
                      <label><input type="radio" name="rdnik" id="salahnik" value="Nomor NIK tidak Valid" onclick="nik()">Salah</label>
                      <label><input type="radio" name="rdnik" id="benarnik" value="" onclick="nik()">Benar</label>
                      <script>
                      function nik(){
                        if(document.getElementById("salahnik").checked){
                          var nik = document.getElementById("salahnik").value;
                        }else if(document.getElementById("benarnik").checked){
                          var nik = document.getElementById("benarnik").value;
                        }
                        document.getElementById("msg_nik").innerHTML = nik;
                      }
                      </script>
                  </div>
                </div>
                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Nama lengkap</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" value="<?php echo $pengajuan->nama_nasabah ?>">
                  </div>
                  <div class="radio">
                      <label><input type="radio" name="rdnama" id="salah_nama" value="Nama Tidak Valid" onclick="nama_nsb()">Salah</label>
                      <label><input type="radio" name="rdnama" id="benar_nama" value="" onclick="nama_nsb()">Benar</label>
                      <script>
                        function nama_nsb(){
                          if(document.getElementById("salah_nama").checked){
                            var nama = document.getElementById("salah_nama").value;
                          }else if(document.getElementById("benar_nama").checked){
                            var nama = document.getElementById("benar_nama").value;
                          }
                          document.getElementById("msg_nama").innerHTML = nama;
                        }
                      </script>
                  </div>
                </div>
                <div class="form-group">
                  <label for="nohp" class="col-sm-2 control-label">No Handphone</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="nohp"  value="<?php echo $pengajuan->nohp ?>">


                  </div>
                  <div class="radio">
                      <label><input type="radio" name="rdpekerjaan" id="hp_salah" value="Nomor Handphone tidak Valid" onclik="nohp_nsb()">Salah</label>
                      <label><input type="radio" name="rdpekerjaan" id="hp_benar" value="" onclick="nohp_nsb()">Benar</label>
                      <script>
                        function nohp_nsb(){
                          if(document.getElementById("hp_salah").checked){
                            var nohp = document.getElementById("hp_salah").value;
                          }else if(document.getElementById("hp_benar").checked){
                            var nohp = document.getElementById("hp_benar").value;
                          }
                          document.getElementById("msg_hp").innerHTML = nohp;
                        }
                      </script>
                  </div>
                </div>
                <div class="form-group">
                  <label for="tgllahir" class="col-sm-2 control-label">Tangal Lahir</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="tgllahir" placeholder="Tanggal Lahir" value="<?php echo $pengajuan->tgl_lahir ?>">


                  </div>
                  <div class="radio">
                      <label><input type="radio" name="rdtgllahir" id="lahir_salah" value="Tanggal lahir Salah" onclick="lahir_nsb()">Salah</label>
                      <label><input type="radio" name="rdtgllahir" id="lahir_benar" value="" onclick="lahir_nsb()">Benar</label>
                      <script>
                        function lahir_nsb(){
                          if(document.getElementById("lahir_salah").checked){
                            var lahir = document.getElementById("lahir_salah").value;
                          }else if(document.getElementById("lahir_benar").checked){
                            var lahir = document.getElementById("lahir_benar").value;
                          }
                          document.getElementById("msg_tgllahir").innerHTML = lahir;
                        }
                      </script>
                  </div>
                </div>
                <div class="form-group">
                  <label for="alamat" class="col-sm-2 control-label">Alamat Sesuai KTP</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="alamat" placeholder="Alamat" value="<?php echo $pengajuan->alamat_ktp ?>">


                  </div>
                  <div class="radio">
                      <label><input type="radio" name="rdalmatktp" id="alamat_salah" onclick="alamatktp_nsb()" value="Alamat tidak valid">Salah</label>
                      <label><input type="radio" name="rdalmatktp" id="alamat_benar" onclick="alamatktp_nsb()" value="">Benar</label>
                      <script>
                        function alamatktp_nsb(){
                          if(document.getElementById("alamat_salah").checked){
                            var alamatktp = document.getElementById("alamat_salah").value;
                          }else if(document.getElementById("alamat_benar").checked){
                            var alamatktp = document.getElementById("alamat_benar").value;
                          }
                          document.getElementById("msg_alamatktp").innerHTML = alamatktp;
                        }
                      </script>
                  </div>
                </div>
                <div class="form-group">
                  <label for="alamat" class="col-sm-2 control-label">Alamat Tempat Tinggal</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="alamat" placeholder="Alamat" value="<?php echo $pengajuan->alamat_domisili ?>">


                  </div>
                  <div class="radio">
                      <label><input type="radio" name="rdalamat" onclick="alamat_tt()" value="Alamat Tempat tinggal tidak Valid" id="alamat_tt_salah">Salah</label>
                      <label><input type="radio" name="rdalamat" onclick="alamat_tt()" value="" id="alamat_tt_benar">Benar</label>
                      <script>
                        function alamat_tt(){
                          if(document.getElementById("alamat_tt_salah").checked){
                            var alamattt = document.getElementById("alamat_tt_salah").value;
                          }else if(document.getElementById("alamat_tt_benar").checked){
                            var alamattt = document.getElementById("alamat_tt_benar").value;
                          }
                          document.getElementById("msg_alamat_tt").innerHTML = alamattt;
                        }
                      </script>
                  </div>
                </div>
                <div class="form-group">
                  <label for="alamat" class="col-sm-2 control-label">Tempat Lahir</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="alamat"  value="<?php echo $pengajuan->tempat_lahir ?>">


                  </div>
                  <div class="radio">
                      <label><input type="radio" name="rdtmplahir" value="Tempat Lahir tidak Valid" onclick="tl()" id="tl_salah">Salah</label>
                      <label><input type="radio" name="rdtmplahir" value="" onclick="tl()" id="tl_benar" value="">Benar</label>
                      <script>
                        function tl(){
                          if(document.getElementById("tl_salah").checked){
                            var t_l = document.getElementById("tl_salah").value;
                          }else if(document.getElementById("tl_benar").checked){
                            var t_l = document.getElementById("tl_benar").value;
                          }
                          document.getElementById("msg_tempaltlahir").innerHTML = t_l;
                        }
                      </script>
                  </div>
                </div>
                <div class="form-group">
                  <label for="statuskawin" class="col-sm-2 control-label">Status Perkawinan</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="statuskawin" value="<?php echo $pengajuan->status_perkawinan ?>">


                  </div>
                  <div class="radio">
                      <label><input type="radio" name="kawin" value="Status Perkawinan tidak valid" id="kawin_salah" onclick="st_kawin()">Salah</label>
                      <label><input type="radio" name="kawin" value="" id="kawin_benar" onclick="st_kawin()">Benar</label>
                      <script>
                        function st_kawin(){
                          if(document.getElementById("kawin_salah").checked){
                            var kawin = document.getElementById("kawin_salah").value;
                          }else if(document.getElementById("kawin_benar").checked){
                            var kawin = document.getElementById("kawin_benar").value;
                          }
                          document.getElementById("msg_kawin").innerHTML = kawin;
                        }
                      </script>
                  </div>
                </div>


              </div>

              <!-- /.box-footer -->
            </form>
          </div>
      </div>
      <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Pekerjaan Pemohon</h3>
            </div>

            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="pekerjaan" class="col-sm-2 control-label">Pekerjaan</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="pekerjaan"  value="<?php echo $pengajuan->pekerjaan ?>">


                  </div>
                  <div class="radio">
                      <label><input type="radio" name="rdpekerjaan" id="pekerjaan_salah" value="Status pekerjaan tidak valid" onclick="pekerjaan_nsb()">Salah</label>
                      <label><input type="radio" name="rdpekerjaan" id="pekerjaan_benar" value="" onclick="pekerjaan_nsb()">Benar</label>
                      <script>
                        function pekerjaan_nsb(){
                          if(document.getElementById("pekerjaan_salah").checked){
                            var pekerjaan = document.getElementById("pekerjaan_salah").value;
                          }else if(document.getElementById("pekerjaan_benar").checked){
                            var pekerjaan = document.getElementById("pekerjaan_benar").value;
                          }
                          document.getElementById("msg_pekerjaan").innerHTML = pekerjaan;
                        }
                      </script>
                  </div>
                </div>
                <div class="form-group">
                  <label for="jenispekerjaan" class="col-sm-2 control-label">Jenis Pekerjaan</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="jenispekerjaan" value="<?php echo $pengajuan->jenis_pekerjaan ?>">


                  </div>
                  <div class="radio">
                      <label><input type="radio" name="rdjenispekerjaan" id="jp_salah" value="Jenis Pekerjaan tidak Valid" onclick="jp()">Salah</label>
                      <label><input type="radio" name="rdjenispekerjaan" id="jp_benar" value="" onclick="jp()">Benar</label>
                      <script>
                        function jp(){
                          if(document.getElementById("jp_salah").checked){
                            var jpp = document.getElementById("jp_salah").value;
                          }else if(document.getElementById("jp_benar").checked){
                            var jpp = document.getElementById("jp_benar").value;
                          }
                          document.getElementById("msg_jp").innerHTML = jpp;
                        }
                      </script>
                  </div>
                </div>
                <div class="form-group">
                  <label for="npwp" class="col-sm-2 control-label">Nomor NPWP</label>

                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="npwp"  value="<?php echo $pengajuan->no_npwp ?>">


                  </div>
                  <div class="radio">
                      <label><input type="radio" name="rdnpwp" id="npwp_salah" value="Nomor NPWP tidak Valid" onclick="npwp()">Salah</label>
                      <label><input type="radio" name="rdnpwp" id="npwp_benar" value="" onclick="npwp()">Benar</label>
                      <script>
                        function npwp(){
                          if(document.getElementById("npwp_salah").checked){
                            var npwpp = document.getElementById("npwp_salah").value;
                          }else if(document.getElementById("npwp_benar").checked){
                            var npwpp = document.getElementById("npwp_benar").value;
                          }
                          document.getElementById("msg_npwp").innerHTML = npwpp;
                        }
                      </script>
                  </div>
                </div>

              </div>
            </form>
            </div>
          </div>
          <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Data Keuangan pemohon dan Suami/Istri pemohon</h3>
                </div>

                <form class="form-horizontal">
                  <div class="box-body">
                    <table  class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Bank Cabang</th>
                        <th>Jenis Simpanan</th>
                        <th>Sejak</th>
                        <th>Nomor Rekening</th>
                        <th>Saldo Per...</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td></td>
                        <td>Tabungan/Giro/Deposito/Lain</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Tabungan/Giro/Deposito/Lain</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <thead>
                      <tr>
                        <th>Bank Cabang</th>
                        <th>Jenis Simpanan</th>
                        <th>Sejak</th>
                        <th>Nomor Rekening</th>
                        <th>Saldo Per...</th>
                      </tr>
                      </thead>
                      <tr>
                        <td></td>
                        <td>Produktif/Konsumtif</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Produktif/Konsumtif</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <thead>
                      <tr>
                        <th>Bank Cabang</th>
                        <th>Jenis Simpanan</th>
                        <th>Sejak</th>
                        <th>Nomor Rekening</th>
                        <th>Saldo Per...</th>
                      </tr>
                      </thead>
                      <tr>
                        <td></td>
                        <td>Visa/Master</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Visa/Master</td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>

                    </tbody>

                    </table>
                  </div>
                </form>
                </div>
              </div>
      <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Dokumen Persyaratan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">

              <div class="box-body">
                <img src="<?php echo base_url().'assets/images/users/'.$pengajuan->ktp ?>"  width="100%">
                <div class="radio">
                    <label><input type="radio" name="ktp" id="ulang_ktp" value="Foto Ulang KTP" onclick="foto_ktp()">Foto Ulang</label>
                    <label><input type="radio" name="ktp" id="benar_ktp" value="" onclick="foto_ktp()">Benar</label>
                    <script>
                      function foto_ktp(){
                        if(document.getElementById("ulang_ktp").checked){
                          var ktp_foto = document.getElementById("ulang_ktp").value;
                        }else if(document.getElementById("benar_ktp").checked){
                          var ktp_foto = document.getElementById("benar_ktp").value;
                        }
                        document.getElementById("msg_fotoktp").innerHTML = ktp_foto;
                        document.getElementById("msg_fotoktp1").innerHTML = ktp_foto;
                      }
                    </script>
                </div>
              </div>
              <div class="box-body">
                <img src="<?php echo base_url().'assets/images/users/'.$pengajuan->kk ?>"  width="100%">
                <div class="radio">
                    <label><input type="radio" name="kk" id="ulang_kk" value="Foto ulang Kartu Keluarga" onclick="foto_kk()">Foto Ulang</label>
                    <label><input type="radio" name="kk" id="benar_kk" value="" onclick="foto_kk()">Benar</label>
                    <script>
                      function foto_kk(){
                        if(document.getElementById("ulang_kk").checked){
                          var kk_foto = document.getElementById("ulang_kk").value;
                        }else if(document.getElementById("benar_kk").checked){
                          var kk_foto = document.getElementById("benar_kk").value;
                        }
                        document.getElementById("msg_kk").innerHTML = kk_foto;
                        document.getElementById("msg_kk1").innerHTML = kk_foto;
                      }
                    </script>
                </div>
              </div>
              <div class="box-body">
                <img src="<?php echo base_url().'assets/images/users/'.$pengajuan->buku_tabungan ?>"  width="100%">
                <div class="radio">
                    <label><input type="radio" name="buku_tabungan" id="ulang_bukutabungan" value="Foto ulang buku tabungan" onclick="foto_bukutabungan()">Foto Ulang</label>
                    <label><input type="radio" name="buku_tabungan" id="benar_bukutabungan" value="" onclick="foto_bukutabungan()">Benar</label>
                    <script>
                      function foto_bukutabungan(){
                        if(document.getElementById("ulang_bukutabungan").checked){
                          var buku_tabunngan = document.getElementById("ulang_bukutabungan").value;
                        }else if(document.getElementById("benar_bukutabungan").checked){
                          var buku_tabunngan = document.getElementById("benar_bukutabungan").value;
                        }
                        document.getElementById("msg_buku").innerHTML = buku_tabunngan;
                        document.getElementById("msg_buku1").innerHTML = buku_tabunngan;
                      }
                    </script>
                </div>
              </div>
              <div class="box-body">
                <img src="<?php echo base_url().'assets/images/users/'.$pengajuan->slip_gaji ?>"  width="100%">
                <div class="radio">
                    <label><input type="radio" name="slip_gaji">Foto Ulang</label>
                    <label><input type="radio" name="slip_gaji">Benar</label>
                </div>
              </div>
              <div class="box-body">
                <img src="<?php echo base_url().'assets/images/users/'.$pengajuan->npwp ?>"  width="100%">
                <div class="radio">
                    <label><input type="radio" name="npwp">Foto Ulang</label>
                    <label><input type="radio" name="npwp">Benar</label>
                </div>
              </div>
              <div class="box-body">
                <img src="<?php echo base_url().'assets/images/users/'.$pengajuan->rc_pinjaman ?>"  width="100%">
                <div class="radio">
                    <label><input type="radio" name="rc_pinjaman">Foto Ulang</label>
                    <label><input type="radio" name="rc_pinjaman">Benar</label>
                </div>
              </div>
              <div class="box-body">
                <img src="<?php echo base_url().'assets/images/users/'.$pengajuan->sk_kgb ?>"  width="100%">
                <div class="radio">
                    <label><input type="radio" name="sk_kgb">Foto Ulang</label>
                    <label><input type="radio" name="sk_kgb">Benar</label>
                </div>
              </div>
              <div class="box-body">
                <img src="<?php echo base_url().'assets/images/users/'.$pengajuan->sk_pengangkatan ?>"  width="100%">
                <div class="radio">
                    <label><input type="radio" name="sk_pengangkatan">Foto Ulang</label>
                    <label><input type="radio" name="sk_pengangkatan">Benar</label>
                </div>
              </div>
              <div class="box-body">
                <img src="<?php echo base_url().'assets/images/users/'.$pengajuan->sk_pensiun ?>"  width="100%">
                <div class="radio">
                    <label><input type="radio" name="sk_pensiun">Foto Ulang</label>
                    <label><input type="radio" name="sk_pensiun">Benar</label>
                </div>
              </div>
              <div class="box-body">
                <img src="<?php echo base_url().'assets/images/users/'.$pengajuan->pas_photo ?>"  width="100%">
                <div class="radio">
                    <label><input type="radio" name="pas_photo">Foto Ulang</label>
                    <label><input type="radio" name="pas_photo">Benar</label>
                </div>
              </div>
              <div class="box-body">
                <img src="<?php echo base_url().'assets/images/users/'.$pengajuan->foto_bukti ?>"  width="100%">
                <div class="radio">
                    <label><input type="radio" name="bukti_pengurusan_pindah_kantor_bayar_manfaat_pensiun">Foto Ulang</label>
                    <label><input type="radio" name="bukti_pengurusan_pindah_kantor_bayar_manfaat_pensiun">Benar</label>
                </div>
              </div>

            </form>

          </div>
      </div>

      <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="col-md-4"><button type="button" class="btn btn-warning btn btn-block" data-toggle="modal" data-target="#modal-warning">Ditahan</button></div>
                <div class="col-md-4"><a href="<?php echo site_url().'pengajuan/disetujui'?>"><button type="button" class="btn btn-success btn btn-block">Diterima</button></a></div><div class="col-md-4"><button type="button" class="btn btn-danger btn btn-block" data-toggle="modal" data-target="#modal-danger">Ditolak</button></div>
              </div>

              <!-- /.box-footer -->
            </form>
          </div>
      </div>
</div>
<?php endforeach ?>
<!-- end row -->
</section>
</div>
    <!-- Modal  -->
    <div class="modal modal-warning fade" id="modal-warning">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Pengajuan Ditahan</h4>
              </div>
              <div class="modal-body">
                <div class="form-group">
  <label for="comment">Pesan</label>

    <p id="msg_nik"></p>
    <p id="msg_nama"></p>
    <p id="msg_hp"></p>
    <p id="msg_tgllahir"></p>
    <p id="msg_alamatktp"></p>
    <p id="msg_alamat_tt"></p>
    <p id="msg_tempaltlahir"></p>
    <p id="msg_kawin"></p>
    <p id="msg_pekerjaan"></p>
    <p id="msg_jp"></p>
    <p id="msg_npwp"></p>

</div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Keluar</button>
                <button type="button" class="btn btn-outline">Kirim</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

        <div class="modal modal-danger fade" id="modal-danger">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Pengajuan Ditolak</h4>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
      <label for="comment">Pesan</label>
      <textarea class="form-control" rows="5" id="comment"></textarea>
    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Keluar</button>
                    <button type="button" class="btn btn-outline">Kirim</button>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>


  </section>
  <!-- /.content -->
