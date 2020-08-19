<?php
// notifikasi error
echo validation_errors('<div class="alert alert-warning">','</div>');

// form open
echo form_open_multipart(base_url('admin/gejala/tambah'), ' class="form-horizontal');
?>
<div class="form-group">
	<label class="col-md-2 control-label">Id_gejala</label>
	<div class="col-md-5">
 		<input type="text" name="id_gejala" class="form-control"  placeholder="Id_gejala" value="<?php echo set_value('id_gejala') ?>">
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label">Gejala</label>
	<div class="col-md-5">
		<input type="text" name="gejala" class="form-control"  placeholder="Gejala" value="<?php echo set_value('gejala') ?>">
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label"></label>
	<div class="col-md-5">
		<button class="btn btn-success btn-lg" name="submit" type="submit">
			<i class="fa fa-save"></i>Simpan
		</button>
		<button class="btn btn-info btn-lg" name="reset" type="reset">
			<i class="fa fa-times"></i>Reset
		</button>
	</div>
</div>

<?php echo form_close(); ?>