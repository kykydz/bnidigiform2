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
			  <div class="col-md-6">
				<img src="<?php echo base_url().'assets/images/griya/'.$pengajuan->ktp_suami?>"  width="100%">
                <div class="radio">
                   
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
                <div class="col-md-6">
                <img src="<?php echo base_url().'assets/images/griya/'.$pengajuan->ktp_suami?>"  width="100%">
                <div class="radio">
                    <label><input type="radio" name="ktp_suami" id="foto_ulangktpsuami" value="Foto ulang KTP suami" onclick="ktp_suami()">Foto ulang</label>
                    <label><input type="radio" name="ktp_suami" id="foto_benarktpsuami" value="" onclick="ktp_suami()">Benar</label>
                    <script>
                      function ktp_suami(){
                        if(document.getElementById("foto_ulangktpsuami").checked){
                          var suami_ktp = document.getElementById("foto_ulangktpsuami").value;
                        }else if(document.getElementById("foto_benarktpsuami").checked){
                          var suami_ktp = document.getElementById("foto_benarktpsuami").value;
                        }
                        document.getElementById("msg_suamiktp").innerHTML = suami_ktp;
                        document.getElementById("msg_suamiktp1").innerHTML = suami_ktp;
                      }
                    </script>
                </div>
              </div>
              <div class="col-md-6">
                <img src="<?php echo base_url().'assets/images/griya/'.$pengajuan->ktp_istri?>"  width="100%">
                <div class="radio">
                    <label><input type="radio" name="ktp_istri" id="ulang_ktpistri" value="Foto ulang KTP istri" onclick="ktp_istri()">Foto ulang</label>
                    <label><input type="radio" name="ktp_istri" id="benar_ktpistri" value="" onclick="ktp_istri()">Benar</label>
                    <script>
                      function ktp_istri(){
                        if(document.getElementById("ulang_ktpistri").checked){
                          var istri_ktp = document.getElementById("ulang_ktpistri").value;
                        }else if(document.getElementById("benar_ktpistri").checked){
                          var istri_ktp = document.getElementById("benar_ktpistri").value;
                        }
                        document.getElementById("msg_ktpistri").innerHTML = istri_ktp;
                        document.getElementById("msg_ktpistri1").innerHTML = istri_ktp;
                      }
                    </script>

                </div>
              </div>
            </div>
            <div class="box-body">
              <div class="col-md-6">
                <img src="<?php echo base_url().'assets/images/griya/'.$pengajuan->surat_nikah?>"  width="100%">
                <div class="radio">
                    <label><input type="radio" name="surat_nikah" id="ulang_suratnikah" value="Foto ulang surat nikah" onclick="surat_nikah()">Foto ulang</label>
                    <label><input type="radio" name="surat_nikah" id="benar_suratnikah" value="" onclick="surat_nikah()">Benar</label>
                    <script>
                      function surat_nikah(){
                        if(document.getElementById("ulang_suratnikah").checked){
                          var nikah_surat = document.getElementById("ulang_suratnikah").value;
                        }else if(document.getElementById("benar_suratnikah").checked){
                          var nikah_surat = document.getElementById("benar_suratnikah").value;
                        }
                        document.getElementById("msg_suratnikah").innerHTML = nikah_surat;
                        document.getElementById("msg_suratnikah1").innerHTML = nikah_surat;
                      }
                    </script>
                </div>
              </div>
              <div class="col-md-6">
                <img src="<?php echo base_url().'assets/images/griya/'.$pengajuan->npwp_spt ?>"  width="100%">
                <div class="radio">
                    <label><input type="radio" name="pwp_spt" id="ulang_pwp" value="Foto Ulang PWP/SPT" onclick="pwp()">Foto Ulang</label>
                    <label><input type="radio" name="pwp_spt" id="benar_pwp" value="" onclick="pwp()">Benar</label>
                    <script>
                      function pwp(){
                        if(document.getElementById("ulang_pwp").checked){
                          var foto_pwp = document.getElementById("ulang_pwp").value;
                        }else if(document.getElementById("benar_pwp").checked){
                          var foto_pwp = document.getElementById("benar_pwp").value;
                        }
                        document.getElementById("msg_pwp").innerHTML = foto_pwp;
                        document.getElementById("msg_pwp1").innerHTML = foto_pwp;
                      }
                    </script>
                </div>
              </div>
            </div>
            <div class="box-body">
              <div class="col-md-6">
                <img src="<?php echo base_url().'assets/images/griya/'.$pengajuan->rek_gaji ?>"  width="100%">
                <div class="radio">
                    <label><input type="radio" name="rek_gaji" id="ulang_rekgaji" onclick="rek_gaji()" value="Foto ulang rekening gaji">Foto Ulang</label>
                    <label><input type="radio" name="rek_gaji" id="benar_rekgaji" onclick="rek_gaji()" value="">Benar</label>
                    <script>
                      function rek_gaji(){
                        if(document.getElementById("ulang_rekgaji").checked){
                          var gaji_rek = document.getElementById("ulang_rekgaji").value;
                        }else if(document.getElementById("benar_rekgaji").checked){
                          var gaji_rek = document.getElementById("benar_rekgaji").value;
                        }
                        document.getElementById("msg_rekgaji").innerHTML = gaji_rek;
                        document.getElementById("msg_rekgaji1").innerHTML = gaji_rek;
                      }
                    </script>
                </div>
              </div>
              <div class="col-md-6">
                <img src="<?php echo base_url().'assets/images/griya/'.$pengajuan->rek_koran ?>"  width="100%">
                <div class="radio">
                    <label><input type="radio" name="rek_koran" id="ulang_rekkroan" value="Foto ulang rekening koran" onclick="rek_koran()">Foto Ulang</label>
                    <label><input type="radio" name="rek_koran" id="benar_rekkoran" value="" onclick="rek_koran()">Benar</label>
                    <script>
                      function rek_koran(){
                        if(document.getElementById("ulang_rekkroan").checked){
                          var koran_rek = document.getElementById("ulang_rekkroan").value;
                        }else if(document.getElementById("benar_rekkoran").checked){
                          var koran_rek = document.getElementById("benar_rekkoran").value;
                        }
                        document.getElementById("msg_rekkoran").innerHTML = koran_rek;
                        document.getElementById("msg_rekkoran1").innerHTML = koran_rek;
                      }
                    </script>
                </div>
              </div>
            </div>
            <div class="box-body">
              <div class="col-md-6">
                <img src="<?php echo base_url().'assets/images/griya/'.$pengajuan->ijin_praktek ?>"  width="100%">
                <div class="radio">
                    <label><input type="radio" name="ijin_praktek" id="ulang_ijinpraktek" value="Foto ulang Izin Praktek" onclick="ijin_praktek()">Foto Ulang</label>
                    <label><input type="radio" name="ijin_praktek" id="benar_ijinpraktek" value="" onclick="ijin_praktek()">Benar</label>
                    <script>
                      function ijin_praktek(){
                        if(document.getElementById("ulang_ijinpraktek").checked){
                          var praktek_ijin = document.getElementById("ulang_ijinpraktek").value;
                        }else if(document.getElementById("benar_ijinpraktek").checked){
                          var praktek_ijin = document.getElementById("benar_ijinpraktek").value;
                        }
                        document.getElementById("msg_ijinpraktek").innerHTML = praktek_ijin;
                        document.getElementById("msg_ijinpraktek1").innerHTML = praktek_ijin;
                      }
                    </script>
                </div>
              </div>
              <div class="col-md-6">
                <img src="<?php echo base_url().'assets/images/griya/'.$pengajuan->slip_gaji ?>"  width="100%">
                <div class="radio">
                    <label><input type="radio" name="slip_gaji" id="ulang_slipgaji" value="Foto ulang slip gaji" onclick="slip_gaji()">Foto Ulang</label>
                    <label><input type="radio" name="slip_gaji" id="benar_slipgaji" value="" onclick="slip_gaji()">Benar</label>
                    <script>
                      function slip_gaji(){
                        if(document.getElementById("ulang_slipgaji").checked){
                          var gaji_slip = document.getElementById("ulang_slipgaji").value;
                        }else if(document.getElementById("benar_slipgaji").checked){
                          var gaji_slip = document.getElementById("benar_slipgaji").value;
                        }
                        document.getElementById("msg_slipgaji").innerHTML = gaji_slip;
                        document.getElementById("msg_slipgaji1").innerHTML = gaji_slip;
                      }
                    </script>
                </div>
              </div>
            </div>
            <div class="box-body">
              <div class="col-md-6">
                <img src="<?php echo base_url().'assets/images/griya/'.$pengajuan->siu_lu_sku ?>"  width="100%">
                <div class="radio">
                    <label><input type="radio" name="siu_lu_sku" id="ulang_siu" value="" onclick="siu_lu()">Foto Ulang</label>
                    <label><input type="radio" name="siu_lu_sku" id="benar_siu" value="" onclick="siu_lu()">Benar</label>
                    <script>
                      function siu_lu(){
                        if(document.getElementById("ulang_siu").checked){
                          var lu_siu = document.getElementById("ulang_siu").value;
                        }else if(document.getElementById("benar_siu").checked){
                          var lu_siu = document.getElementById("benar_siu").value;
                        }
                        document.getElementById("msg_lu").innerHTML = lu_siu;
                        document.getElementById("msg_lu1").innerHTML = lu_siu;
                      }
                    </script>
                </div>
              </div>
              <div class="col-md-6">
                <img src="<?php echo base_url().'assets/images/griya/'.$pengajuan->keterangan_kerja ?>"  width="100%">
                <div class="radio">
                    <label><input type="radio" name="keterangan_kerja" id="ulang_ketkerja" value="Foto ulang surat keterangan kerja" onclick="keterangan_kerja()">Foto Ulang</label>
                    <label><input type="radio" name="keterangan_kerja" id="benar_ketkerja" value="" onclick="keterangan_kerja()">Benar</label>
                    <script>
                      function keterangan_kerja(){
                        if(document.getElementById("ulang_ketkerja").checked){
                          var kerja_keterangan = document.getElementById("ulang_ketkerja").value;
                        }else if(document.getElementById("benar_ketkerja").checked){
                          var kerja_keterangan = document.getElementById("benar_ketkerja").value;
                        }
                        document.getElementById("msg_ketkerja").innerHTML = kerja_keterangan;
                        document.getElementById("msg_ketkerja1").innerHTML = kerja_keterangan;
                      }
                    </script>
                </div>
              </div>
            </div>
            <div class="box-body">
              <div class="col-md-6">
                <img src="<?php echo base_url().'assets/images/griya/'.$pengajuan->pas_photo_suami ?>"  width="100%">
                <div class="radio">
                    <label><input type="radio" name="pas_photo_suami" id="ulang_potosuami" value="" onclick="poto_suami()">Foto Ulang</label>
                    <label><input type="radio" name="pas_photo_suami" id="benar_potosuami" value="" onclick="poto_suami()">Benar</label>
                    <script>
                      function poto_suami(){
                        if(document.getElementById("ulang_potosuami").checked){
                          var suami_poto = document.getElementById("ulang_potosuami").value;
                        }else if(document.getElementById("benar_potosuami").checked){
                          var suami_poto = document.getElementById("benar_potosuami").value;
                        }
                        document.getElementById("msg_potosuami").innerHTML = suami_poto;
                        document.getElementById("msg_potosuami1").innerHTML = suami_poto;
                      }
                    </script>
                </div>
              </div>
              <div class="col-md-6">
                <img src="<?php echo base_url().'assets/images/griya/'.$pengajuan->pas_photo_istri ?>"  width="100%">
                <div class="radio">
                    <label><input type="radio" name="pas_photo_istri" id="ulang_potoistri" value="" onclick="poto_istri()">Foto Ulang</label>
                    <label><input type="radio" name="pas_photo_istri" id="benar_potoistri" value="" onclick="poto_istri()">Benar</label>
                    <script>
                      function poto_istri(){
                        if(document.getElementById("ulang_potoistri").checked){
                          var istri_poto = document.getElementById("ulang_potoistri").value;
                        }else if(document.getElementById("benar_potoistri").checked){
                          var istri_poto = document.getElementById("benar_potoistri").value;
                        }
                        document.getElementById("msg_potoistri").innerHTML = istri_poto;
                        document.getElementById("msg_potoistri1").innerHTML = istri_poto;
                      }
                    </script>
                </div>
              </div>
            </div>
            <div class="box-body">
              <div class="col-md-6">
                <img src="<?php echo base_url().'assets/images/griya/'.$pengajuan->dokumen_jaminan ?>"  width="100%">
                <div class="radio">
                    <label><input type="radio" name="dokumen_jaminan" id="ulang_dokumenjaminan" value="" onclick="dokumen_jaminan()">Foto Ulang</label>
                    <label><input type="radio" name="dokumen_jaminan" id="benar_dokumenjaminan" value="" onclick="dokumen_jaminan()">Benar</label>
                    <script>
                      function dokumen_jaminan(){
                        if(document.getElementById("ulang_dokumenjaminan").checked){
                          var dok_jaminan = document.getElementById("ulang_dokumenjaminan").value;
                        }else if(document.getElementById("benar_dokumenjaminan").checked){
                          var dok_jaminan = document.getElementById("benar_dokumenjaminan").value;
                        }
                        document.getElementById("msg_dokjaminan").innerHTML = dok_jaminan;
                        document.getElementById("msg_dokjaminan1").innerHTML = dok_jaminan;
                      }
                    </script>
                </div>
              </div>
              <div class="col-md-6">
                <img src="<?php echo base_url().'assets/images/griya/'.$pengajuan->laporan_keuangan ?>"  width="100%">
                <div class="radio">
                    <label><input type="radio" name="laporan_keuangan" id="ulang_lapuang" value="" onclick="lap_uang()">Foto Ulang</label>
                    <label><input type="radio" name="laporan_keuangan" id="" value="" onclick="lap_uang()">Benar</label>
                    <script>
                      function lap_uang(){
                        if(document.getElementById("ulang_lapuang").checked){
                          var uang_lap = document.getElementById("ulang_lapuang").value;
                        }else if(document.getElementById("benar_lapuang").checked){
                          var uang_lap = document.getElementById("benar_lapuang").value;
                        }
                        document.getElementById("msg_lapuang").innerHTML = uang_lap;
                        document.getElementById("msg_lapuang1").innerHTML = uang_lap;
                      }
                    </script>
                </div>
              </div>
            </div>
              </div>


              <!-- /.box-footer -->

            </form>

        
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

    <p id="msg_suamiktp"></p>
    <p id="msg_ktpistri"></p>
    <p id="msg_suratnikah"></p>
    <p id="msg_pwp"></p>
    <p id="msg_rekgaji"></p>
    <p id="msg_rekkoran"></p>
    <p id="msg_ketkerja"></p>
    <p id="msg_slipgaji"></p>
    <p id="msg_ijinpraktek"></p>
    <p id="msg_lu"></p>
    <p id="msg_potosuami"></p>
    <p id="msg_potoistri"></p>
    <p id="msg_dokjaminan"></p>
    <p id="msg_lapuang"></p>

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

                    <p id="msg_suamiktp1"></p>
                    <p id="msg_ktpistri1"></p>
                    <p id="msg_suratnikah1"></p>
                    <p id="msg_pwp1"></p>
                    <p id="msg_rekgaji1"></p>
                    <p id="msg_rekkoran1"></p>
                    <p id="msg_ketkerja1"></p>
                    <p id="msg_slipgaji1"></p>
                    <p id="msg_ijinpraktek1"></p>
                    <p id="msg_lu1"></p>
                    <p id="msg_potosuami1"></p>
                    <p id="msg_potoistri1"></p>
                    <p id="msg_dokjaminan1"></p>
                    <p id="msg_lapuang1"></p>
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
