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
                <div class="col-md-6">
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
                          document.getElementById("msg_nik").innerHTML = "<div class='form-group'><input type='text' style='color:black;' class='form-control' name='nik' value='"+nik+"'></div>";
                          document.getElementById("msg_nik1").innerHTML = "<div class='form-group'><input type='text' style='color:black;' class='form-control' name='nik' value='"+nik+"'></div>";
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
                            document.getElementById("msg_nama").innerHTML = "<div class='form-group'><input type='text' style='color:black;' class='form-control' name='nama' value='"+nama+"'></div>";
                            document.getElementById("msg_nama1").innerHTML = "<div class='form-group'><input type='text' style='color:black;' class='form-control' name='nama' value='"+nama+"'></div>";
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
                            document.getElementById("msg_hp").innerHTML = "<div class='form-group'><input type='text' style='color:black;' class='form-control' name='nohp' value='"+nohp+"'></div>";
                            document.getElementById("msg_hp1").innerHTML = "<div class='form-group'><input type='text' style='color:black;' class='form-control' name='nohp' value='"+nohp+"'></div>";
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
                            document.getElementById("msg_tgllahir").innerHTML = "<div class='form-group'><input type='text' style='color:black;' class='form-control' name='tgl_lahir' value='"+lahir+"'></div>";
                            document.getElementById("msg_tgllahir1").innerHTML = "<div class='form-group'><input type='text' style='color:black;' class='form-control' name='tgl_lahir' value='"+lahir+"'></div>";
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
                            document.getElementById("msg_alamatktp").innerHTML = "<div class='form-group'><input type='text' style='color:black;' class='form-control' name='alamatktp' value='"+alamatktp+"'></div>";
                            document.getElementById("msg_alamatktp1").innerHTML = "<div class='form-group'><input type='text' style='color:black;' class='form-control' name='alamatktp' value='"+alamatktp+"'></div>";
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
                            document.getElementById("msg_alamat_tt").innerHTML = "<div class='form-group'><input type='text' style='color:black;' class='form-control' name='tempat_tinggal' value='"+alamattt+"'></div>";
                            document.getElementById("msg_alamat_tt1").innerHTML = "<div class='form-group'><input type='text' style='color:black;' class='form-control' name='tempat_tinggal' value='"+alamattt+"'></div>";
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
                            document.getElementById("msg_tempaltlahir").innerHTML = "<div class='form-group'><input type='text' style='color:black;' class='form-control' name='tempat_lahir' value='"+t_l+"'></div>";
                            document.getElementById("msg_tempaltlahir1").innerHTML = "<div class='form-group'><input type='text' style='color:black;' class='form-control' name='tempat_lahir' value='"+t_l+"'></div>";
                          }
                        </script>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="statuskawin" class="col-sm-2 control-label">Payroll</label>

                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="payroll" name="payroll" value="<?php echo $pengajuan->payroll_bni ?>">


                    </div>
                    <div class="radio">
                        <label><input type="radio" name="payroll" value="Status Payroll tidak valid" id="payroll_salah" onclick="st_kawin()">Salah</label>
                        <label><input type="radio" name="payroll" value="" id="payroll_benar" onclick="st_kawin()">Benar</label>
                        <script>
                          function st_kawin(){
                            if(document.getElementById("payroll_salah").checked){
                              var kawin = document.getElementById("payroll_salah").value;
                            }else if(document.getElementById("payroll_benar").checked){
                              var kawin = document.getElementById("payroll_benar").value;
                            }
                            document.getElementById("msg_kawin").innerHTML = "<div class='form-group'><input type='text' style='color:black;' class='form-control' name='status_kawin' value='"+kawin+"'></div>";
                            document.getElementById("msg_kawin1").innerHTML = "<div class='form-group'><input type='text' style='color:black;' class='form-control' name='status_kawin' value='"+kawin+"'></div>";
                          }
                        </script>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                <img src="<?php echo base_url().'assets/images/users/'.$pengajuan->ktp?>"  width="100%">

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
                          document.getElementById("msg_pekerjaan").innerHTML ="<div class='form-group'><input type='text' style='color:black;' class='form-control' name='pekerjaan' value='"+pekerjaan+"'></div>" ;
                          document.getElementById("msg_pekerjaan1").innerHTML = "<div class='form-group'><input type='text' style='color:black;' class='form-control' name='pekerjaan' value='"+pekerjaan+"'></div>";
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
                          document.getElementById("msg_jp").innerHTML = "<div class='form-group'><input type='text' style='color:black;' class='form-control' name='jenis_pekerjaan' value='"+jpp+"'></div>";
                          document.getElementById("msg_jp1").innerHTML = "<div class='form-group'><input type='text' style='color:black;' class='form-control' name='jenis_pekerjaan' value='"+jpp+"'></div>";
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
                          document.getElementById("msg_npwp").innerHTML = "<div class='form-group'><input type='text' style='color:black;' class='form-control' name='npwp' value='"+npwp+"'></div>";
                          document.getElementById("msg_npwp1").innerHTML = "<div class='form-group'><input type='text' style='color:black;' class='form-control' name='npwp' value='"+npwp+"'></div>";
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
              <h3 class="box-title">Dokumen Identitas Diri</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">

              <div class="box-body">
                <div class="col-md-6">
                  <img src="<?php echo base_url().'assets/images/users/'.$pengajuan->pas_photo ?>"  width="100%">
                  <div class="radio">
                      <label><input type="radio" name="pas_photo" id="pas_ulang" value="Foto Ulang Pas Photo" onclick="poto_pas()">Foto Ulang</label>
                      <label><input type="radio" name="pas_photo" id="pas_benar" value="" onclick="poto_pas()">Benar</label>
                      <script>
                        function poto_pas(){
                          if(document.getElementById("pas_ulang").checked){
                            var pas_poto = document.getElementById("pas_ulang").value;
                          }else if(document.getElementById("pas_benar").checked){
                            var pas_poto = document.getElementById("pas_benar").value;
                          }
                          document.getElementById("msg_pas").innerHTML = "<div class='form-group'><input type='text' style='color:black;' class='form-control' name='pas_foto' value='"+pas_poto+"'></div>";
                          document.getElementById("msg_pas1").innerHTML = "<div class='form-group'><input type='text' style='color:black;' class='form-control' name='pas_foto' value='"+pas_poto+"'></div>";
                        }
                      </script>
                  </div>
                </div>
                <div class="col-md-6">
                <img src="<?php echo base_url().'assets/images/users/'.$pengajuan->ktp?>"  width="100%">
                <div class="radio">
                    <label><input type="radio" name="ktp" onclick="foto_ktp()" id="ktp_ulang" value="Foto Ulang KTP">Foto ulang</label>
                    <label><input type="radio" name="ktp" onclick="foto_ktp()" id="ktp_benar" value="">Benar</label>
                    <script>
                      function foto_ktp(){
                        if(document.getElementById("ktp_ulang").checked){
                          var ktp_foto = document.getElementById("ktp_ulang").value;
                        }else if(document.getElementById("ktp_benar").checked){
                          var ktp_foto = document.getElementById("ktp_benar").value;
                        }
                        document.getElementById("msg_fotoktp").innerHTML = "<div class='form-group'><input type='text' style='color:black;' class='form-control' name='ktp_foto' value='"+ktp_foto+"'></div>";
                        document.getElementById("msg_fotoktp1").innerHTML = "<div class='form-group'><input type='text' style='color:black;' class='form-control' name='ktp_foto' value='"+ktp_foto+"'></div>";
                      }
                    </script>
                </div>
              </div>
              <div class="col-md-6">
                <img src="<?php echo base_url().'assets/images/users/'.$pengajuan->npwp_sph?>"  width="100%">
                <div class="radio">
                    <label><input type="radio" name="npwp_sph" id="npwp_ulang" value="Foto ulang NPWP" onclick="foto_npwp()">Foto ulang</label>
                    <label><input type="radio" name="npwp_sph" id="npwp_benar" value="" onclick="foto_npwp()">Benar</label>
                    <script>
                      function foto_npwp(){
                        if(document.getElementById("npwp_ulang").checked){
                          var npwp_foto = document.getElementById("npwp_ulang").value;
                        }else if(document.getElementById("npwp_benar").checked){
                          var npwp_foto = document.getElementById("npwp_benar").value;
                        }
                        document.getElementById("msg_fotonpwp").innerHTML = "<div class='form-group'><input type='text' style='color:black;' class='form-control' name='npwp_foto' value='"+npwp_foto+"'></div>";
                        document.getElementById("msg_fotonpwp1").innerHTML = "<div class='form-group'><input type='text' style='color:black;' class='form-control' name='npwp_foto' value='"+npwp_foto+"'></div>";
                      }
                    </script>
                </div>
              </div>
              </div>
              </div>
              </div>


      <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Dokumen Keuangan</h3>
            </div>
            <div class="box-body">
              <div class="col-md-6">
                <img src="<?php echo base_url().'assets/images/users/'.$pengajuan->rekening?>"  width="100%">
                <div class="radio">
                    <label><input type="radio" name="rekening" id="rekening_ulang" value="Foto ulang Rekening" onclick="foto_rekening()">Foto ulang</label>
                    <label><input type="radio" name="rekening" id="rekening_benar" value="" onclick="foto_rekening()">Benar</label>
                    <script>
                      function foto_rekening(){
                        if(document.getElementById("rekening_ulang").checked){
                          var rekening_foto = document.getElementById("rekening_ulang").value;
                        }else if(document.getElementById("rekening_benar").checked){
                          var rekening_foto = document.getElementById("rekening_benar").value;
                        }
                        document.getElementById("msg_fotorekening").innerHTML = "<div class='form-group'><input type='text' style='color:black;' class='form-control' name='foto_rekening' value='"+rekening_foto+"'></div>";
                        document.getElementById("msg_fotorekening1").innerHTML = "<div class='form-group'><input type='text' style='color:black;' class='form-control' name='foto_rekening' value='"+rekening_foto+"'></div>";
                      }
                    </script>
                </div>
              </div>

                <div class="col-md-6">
              <img src="<?php echo base_url().'assets/images/users/'.$pengajuan->slip_gaji ?>"  width="100%">
              <div class="radio">
                  <label><input type="radio" name="slip_gaji" id="slip_ulang" value="Foto ulang slip gaji" onclick="foto_slipgaji()">Foto Ulang</label>
                  <label><input type="radio" name="slip_gaji" id="slip_benar" value="" onclick="foto_slipgaji()">Benar</label>
                  <script>
                    function foto_slipgaji(){
                      if(document.getElementById("slip_ulang").checked){
                        var slip_foto = document.getElementById("slip_ulang").value;
                      }else if(document.getElementById("slip_benar").checked){
                        var slip_foto = document.getElementById("slip_benar").value;
                      }
                      document.getElementById("msg_fotoslip").innerHTML = "<div class='form-group'><input type='text' style='color:black;' class='form-control' name='slip_foto' value='"+slip_foto+"'></div>";
                      document.getElementById("msg_fotoslip1").innerHTML = "<div class='form-group'><input type='text' style='color:black;' class='form-control' name='slip_foto' value='"+slip_foto+"'></div>";
                    }
                  </script>
              </div>
            </div>

            </div>
          </div>
        </div>

        <div class="col-md-12">
          <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Surat-surat</h3>
              </div>
              <div class="box-body">

          <div class="col-md-6">
            <img src="<?php echo base_url().'assets/images/users/'.$pengajuan->surat_pernyataan ?>"  width="100%">
            <div class="radio">
                <label><input type="radio" name="surat_pernyataan" value="Foto ulang surat pernyataan" id="pernyataan_ulang" onclick="pernyataan()">Foto Ulang</label>
                <label><input type="radio" name="surat_pernyataan" value="" id="pernyataan_benar" onclick="pernyataan()">Benar</label>
                <script>
                  function pernyataan(){
                    if(document.getElementById("pernyataan_ulang").checked){
                      var fotopernyataan = document.getElementById("pernyataan_ulang").value;
                    }else if(document.getElementById("pernyataan_benar").checked){
                      var fotopernyataan = document.getElementById("pernyataan_benar").value;
                    }
                    document.getElementById("msg_nyata").innerHTML = "<div class='form-group'><input type='text' style='color:black;' class='form-control' name='foto_pernyataan' value='"+fotopernyataan+"'></div>";
                    document.getElementById("msg_nyata1").innerHTML = "<div class='form-group'><input type='text' style='color:black;' class='form-control' name='foto_pernyataan' value='"+fotopernyataan+"'></div>";
                  }
                </script>
            </div>
          </div>
          <div class="col-md-6">
            <img src="<?php echo base_url().'assets/images/users/'.$pengajuan->surat_masakerja ?>"  width="100%">
            <div class="radio">
                <label><input type="radio" name="surat_masakerja" id="masa_ulang" value="Foto ulang Surat Keterangan Masa Kerja" onclick="masakerja()">Foto Ulang</label>
                <label><input type="radio" name="surat_masakerja" id="masa_benar" value="" onclick="masakerja()">Benar</label>
                <script>
                  function masakerja(){
                    if(document.getElementById("masa_ulang").checked){
                      var masa_kerja = document.getElementById("masa_ulang").value;
                    }else if(document.getElementById("masa_benar").checked){
                      var masa_kerja = document.getElementById("masa_benar").value;
                    }
                    document.getElementById("msg_masa").innerHTML = "<div class='form-group'><input type='text' style='color:black;' class='form-control' name='masa_kerja' value='"+masa_kerja+"'></div>";
                    document.getElementById("msg_masa1").innerHTML = "<div class='form-group'><input type='text' style='color:black;' class='form-control' name='masa_kerja' value='"+masa_kerja+"'></div>";
                  }
                </script>
            </div>
          </div>
        </div>



      </div>
  </div>
      <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

              <div class="box-body">
                <div class="col-md-4"><button type="button" class="btn btn-warning btn btn-block" data-toggle="modal" data-target="#modal-warning">Ditahan</button></div>
                <div class="col-md-4"><a href="#"><button type="button" class="btn btn-success btn btn-block">Diterima</button></a></div><div class="col-md-4"><button type="button" class="btn btn-danger btn btn-block" data-toggle="modal" data-target="#modal-danger">Ditolak</button></div>
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
    <div class="modal modal-warning fade" id="modal-warning" style="color:black">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Pengajuan Ditahan</h4>
              </div>
              <div class="modal-body" >
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
    <p id="msg_fotoktp"></p>
    <p id="msg_fotonpwp"></p>
    <p id="msg_fotorekening"></p>
    <p id="msg_fotoslip"></p>
    <p id="msg_pas"></p>
    <p id="msg_nyata"></p>
    <p id="msg_masa"></p>
                </div>
                  <div class="form-group">
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

        <p id="msg_nik1"></p>
        <p id="msg_nama1"></p>
        <p id="msg_hp1"></p>
        <p id="msg_tgllahir1"></p>
        <p id="msg_alamatktp1"></p>
        <p id="msg_alamat_tt1"></p>
        <p id="msg_tempaltlahir1"></p>
        <p id="msg_kawin1"></p>
        <p id="msg_pekerjaan1"></p>
        <p id="msg_jp1"></p>
        <p id="msg_npwp1"></p>
        <p id="msg_fotoktp1"></p>
        <p id="msg_fotonpwp1"></p>
        <p id="msg_fotorekening1"></p>
        <p id="msg_fotoslip1"></p>
        <p id="msg_pas1"></p>
        <p id="msg_nyata1"></p>
        <p id="msg_masa1"></p>

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
