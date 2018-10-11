<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Daftar Balita
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <div class="row">
                <div class="col-md-3">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-info"><i class="fa fa-plus"></i> Tambah</button>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-info"><i class="fa fa-remove"></i> Hapus</button>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="info" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>NIK</th>
                  <th>Nama Balita</th>
                  <th>Jenis Kelamin</th>
                  <th>Tanggal Lahir</th>
                  <th>Nama Orang Tua</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($balita as $rows) : ?>
                    <tr>
                      
                      <td><?php echo $rows->balita_nik ?></td>
                      <td><?php echo $rows->balita_nama ?></td>
                      <td><?php echo $rows->balita_jk ?></td>
                      <td><?php echo $rows->balita_tgl_lahir ?></td>
                      <td><?php echo $rows->balita_ortu_nama ?></td>
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



  <div class="modal modal-info fade" id="modal-info">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Kecamatan</h4>
              </div>
              <?php $attributes = array('class' => 'form-horizontal'); ?>
              <?php echo form_open('add_balita', $attributes); ?>
              <div class="modal-body">
                
                <form class="form-horizontal">

                      <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Posyandu</label>
                      <div class="col-sm-10">
                            <select class="form-control" name="posyandu_id" data-validation="required" data-validation-error-msg="Harus diisi">
                              <option value="">--Pilih Posyandu--</option>
                              <?php foreach ($posyandu as $rows) : ?>
                                <option value="<?php echo($rows->posyandu_id); ?>"><?php echo($rows->posyandu_nama); ?></option>
                              <?php endforeach; ?>
                            </select>
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Nama Balita</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="kecamatan" placeholder="Nama Balita" name="balita_nama" data-validation="required" data-validation-error-msg="Harus diisi">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">NIK</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="kecamatan" placeholder="NIK" name="balita_nik" data-validation="required" data-validation-error-msg="Harus diisi">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Anak ke</label>

                          <div class="col-xs-3">
                            <input type="text" class="form-control" id="kecamatan" name="balita_anak_ke" data-validation="required" data-validation-error-msg="Harus diisi">
                          </div>
                          <label for="inputPassword3" class="col-sm-2 control-label">dari</label>

                          <div class="col-xs-3">
                            <input type="text" class="form-control" id="kecamatan" name="balita_anak_dari" data-validation="required" data-validation-error-msg="Harus diisi">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Jenis Kelamin</label>
                            <div class="radio">
                              <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="L">
                                Laki-laki
                              </label>
                              <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="P">
                                Perempuan
                              </label>
                            </div>
                        </div>

                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Tanggal Lahir</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="kecamatan" placeholder="Nama Kecamatan" name="balita_tgl_lahir" data-validation="required" data-validation-error-msg="Harus diisi">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Nama Orang Tua</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="kecamatan" placeholder="Nama Orang Tua" name="balita_ortu_nama" data-validation="required" data-validation-error-msg="Harus diisi">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">No Telepon/Hp Orang Tua</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="kecamatan" placeholder="No Telepon/Hp Orang Tua" name="balita_tlpn" data-validation="required" data-validation-error-msg="Harus diisi">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>

                          <div class="col-sm-10">
                            <textarea class="form-control" rows="3" placeholder="Alamat" name="balita_alamat" data-validation="required" data-validation-error-msg="Harus diisi"></textarea>
                            
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="inputPassword3" class="col-sm-2 control-label">RT/RW</label>

                          <div class="col-xs-3">
                            <input type="text" class="form-control" id="kecamatan" placeholder="RT" name="balita_rt" data-validation="required" data-validation-error-msg="Harus diisi">
                          </div>
                          <label for="inputPassword3" class="col-sm-2 control-label">/</label>

                          <div class="col-xs-3">
                            <input type="text" class="form-control" id="kecamatan" placeholder="RW" name="balita_rw" data-validation="required" data-validation-error-msg="Harus diisi">
                          </div>
                        </div>

                        <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Kecamatan</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="kel_id" data-validation="required" data-validation-error-msg="Harus diisi">
                              <option value="">--Pilih kelurahan--</option>
                              <?php foreach ($kelurahan as $rows) : ?>
                                <option value="<?php echo($rows->kel_id); ?>"><?php echo($rows->kel_nama); ?></option>
                              <?php endforeach; ?>
                            </select>
                          </div>
                        </div>

                        <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Kecamatan</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="kec_id" data-validation="required" data-validation-error-msg="Harus diisi">
                              <option value="">--Pilih Kecamatan--</option>
                              <?php foreach ($kecamatan as $rows) : ?>
                                <option value="<?php echo($rows->kec_id); ?>"><?php echo($rows->kec_nama); ?></option>
                              <?php endforeach; ?>
                            </select>
                          </div>
                        </div>



                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-outline">Save</button>
                </div>
              </form>
              </div>




            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
      </div>

        