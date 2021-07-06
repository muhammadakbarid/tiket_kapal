<div class="row">
    <div class="col-xs-12 col-md-6">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Penumpang</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" onclick="location.reload()" title="Collapse">
                        <i class="fa fa-refresh"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form action="<?php echo $action; ?>" method="post">
                    <input type="hidden" class="form-control" name="id_user" id="id_user" placeholder="Id User" value="<?php echo $id_user; ?>" />
                    <div class="form-group">
                        <label for="varchar">Nama Awal <?php echo form_error('nama_awal') ?></label>
                        <input type="text" class="form-control" name="nama_awal" id="nama_awal" placeholder="nama_awal" value="<?php echo $nama_awal; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="varchar">Nama Akhir <?php echo form_error('nama_akhir') ?></label>
                        <input type="text" class="form-control" name="nama_akhir" id="nama_akhir" placeholder="nama_akhir" value="<?php echo $nama_akhir; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="varchar">Alamat <?php echo form_error('alamat') ?></label>
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="<?php echo $alamat; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="varchar">Jens Kelamin <?php echo form_error('jens_kelamin') ?></label>
                        <input type="text" class="form-control" name="jens_kelamin" id="jens_kelamin" placeholder="Jens Kelamin" value="<?php echo $jens_kelamin; ?>" />
                    </div>
                    <div class="form-group">
                        <label for="int">Nomor Hp <?php echo form_error('nomor_hp') ?></label>
                        <input type="text" class="form-control" name="nomor_hp" id="nomor_hp" placeholder="Nomor Hp" value="<?php echo $nomor_hp; ?>" />
                    </div>
                    <input type="hidden" name="id_penumpang" value="<?php echo $id_penumpang; ?>" />
                    <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
                    <a href="<?php echo site_url('penumpang') ?>" class="btn btn-default">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>