<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 align="center">
        Laporan Resume Kegiatan Posyandu
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              
              <?php $attributes = array('class' => 'form-horizontal'); ?>
              <?php echo form_open('ipuskesmas/resume_kp_filter', $attributes); ?>
              <!-- Hide URL -->
              <input type="hidden" id="url" value="<?php echo base_url();?>">
                <div class="box-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Kelurahan</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="kel_id" data-validation="required" data-validation-error-msg="Harus diisi" id="kelurahan">
                        <option value="">--Pilih Kelurahan--</option>
                        <?php foreach ($listkelurahan as $rows) : ?>
                        <option value="<?php echo($rows->kel_id); ?>"><?php echo($rows->kel_nama); ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Bulan/Tahun</label>

                    <div class="col-sm-3">
                      <select class="form-control" name="bulan" data-validation="required" data-validation-error-msg="Harus diisi" id="bulan">
                        <option value="">--Bulan--</option>
                        <option value="01">Januari</option>
                        <option value="02">Februari</option>
                        <option value="03">Maret</option>
                        <option value="04">April</option>
                        <option value="05">Mei</option>
                        <option value="06">Juni</option>
                        <option value="07">Juli</option>
                        <option value="08">Agustus</option>
                        <option value="09">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                      </select>
                    </div>
                    <div class="col-sm-3">
                      <select class="form-control" name="tahun" data-validation="required" data-validation-error-msg="Harus diisi" id="tahun">
                        <option value="">--Tahun--</option>
                        <?php for ($i=2018; $i<=2035; $i++) : ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                        <?php endfor; ?>
                      </select>
                    </div>
                  </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-info pull-right">Lihat</button>
                </div>
                <!-- /.box-footer -->
              </form>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              <div class="row">
                <div class="col-md-12" align="center">
                  <strong>
                  LAPORAN REKAPITULASI PENGUKURAN BALITA <br>
                  <?php foreach ($kelurahan as $rows) : ?>
                  <textarea id="header-title" style="display:none;">
                      Kel/Desa: <?php echo $rows->kel_nama; ?> 
                      BULAN : <?php 

                        switch ($bulan) {
                          case '01':
                            echo 'Januari';
                            break;
                          
                          case '02':
                            echo 'Februari';
                            break;

                          case '03':
                            echo 'Maret';
                            break;

                          case '04':
                            echo 'April';
                            break;

                          case '05':
                            echo 'Mei';
                            break;

                          case '06':
                            echo 'Juni';
                            break;

                          case '07':
                            echo 'Juli';
                            break;

                          case '08':
                            echo 'Agustus';
                            break;

                          case '09':
                            echo 'September';
                            break;

                          case '10':
                            echo 'Oktober';
                            break;

                          case '11':
                            echo 'November';
                            break;

                          case '12':
                            echo 'Desember';
                            break;
                        }

                         

                        ?> TAHUN : <?php echo $tahun; ?> 
                  </textarea>
                  <!-- Alamat -->
                  Kel/Desa: <?php echo $rows->kel_nama; ?> <br>
                  <?php endforeach; ?>
                  BULAN : <?php 

                  switch ($bulan) {
                    case '01':
                      echo 'Januari';
                      break;
                    
                    case '02':
                      echo 'Februari';
                      break;

                    case '03':
                      echo 'Maret';
                      break;

                    case '04':
                      echo 'April';
                      break;

                    case '05':
                      echo 'Mei';
                      break;

                    case '06':
                      echo 'Juni';
                      break;

                    case '07':
                      echo 'Juli';
                      break;

                    case '08':
                      echo 'Agustus';
                      break;

                    case '09':
                      echo 'September';
                      break;

                    case '10':
                      echo 'Oktober';
                      break;

                    case '11':
                      echo 'November';
                      break;

                    case '12':
                      echo 'Desember';
                      break;
                  }

                   

                  ?> TAHUN : <?php echo $tahun; ?>  <br>
                  </strong>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <table id="info_kp" class="table table-bordered table-hover">
                <thead>
                <tr class="info">
                  <th rowspan="2">#</th>
                  <th rowspan="2">Posyandu</th>
                  <th colspan="2"><center>Jumlah Balita</center></th>
                </tr>
                <tr class="info">
                  <th>Laki-laki</th>
                  <th>Perempuan</th>
                </tr>
                </thead>
                <tbody>
                <?php $i=0; foreach ($resume_kp as $rows) : $i++;?>
                <tr>
                  <td>
                    <?php echo $i; ?>
                  </td>
                  <td><?php echo $rows->posyandu_nama; ?></td>
                  <td><?php echo $rows->jumlah_laki; ?></td>
                  <td><?php echo $rows->jumlah_perempuan; ?></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
              </table>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
</div>
  <!-- /.content-wrapper -->