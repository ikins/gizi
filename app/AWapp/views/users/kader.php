<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Daftar Kader
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
                  </div>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="info" class="table table-bordered table-hover" >
                <thead>
                <tr>
                  <th></th>
                  <th>Nama Kader</th>
                  <th>Nama Posyandu</th>
                  
                </tr>
                </thead>
                <tbody>
                <?php foreach ($kader as $rows) : ?>
                <tr>
                  <td>
                    
                    <?php $attributes = array('class' => 'form-horizontal'); ?>
                            <?php echo form_open('delete-kader', $attributes); ?>
                              <input type="hidden" name="kader_id" value="<?php echo $rows->kader_id; ?>" class="form-control">
                              <button type="submit" class="btn btn-xs btn-danger" onclick="return confirm('Apakah yakin akan dihapus?');"><i class="fa fa-remove"></i> Hapus</button>
                          </form>

                  </td>
                  
                  <td><a href="kader/<?php echo $rows->kader_id;  ?>"><?php echo $rows->kader_nama ?></a></td>
                  <td><?php echo $rows->posyandu_nama ?></td>
                  
                </tr>
                <?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                  <th></th>
                  <th>Nama Kader</th>
                  <th>Nama Posyandu</th>
                  
                </tr>
                </tfoot>
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
                <h4 class="modal-title">Tambah Kader</h4>
              </div>
              <?php $attributes = array('class' => 'form-horizontal'); ?>
              <?php echo form_open('add_kader', $attributes); ?>
                <div class="modal-body">
                  
                  <div class="box box-info bg-aqua">
                      <div class="box-body">
                        <div class="form-group">
                          <label for="inputEmail3" class="col-sm-2 control-label">Posyandu</label>

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
                          <label for="inputPassword3" class="col-sm-2 control-label">Nama Kader</label>

                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="Kader" placeholder="Nama Kader" name="kader_nama" data-validation="required" data-validation-error-msg="Harus diisi">
                          </div>
                        </div>
                      
                      </div>
  
                    </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-outline">Save</button>
                </div>
              </form>


            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

        