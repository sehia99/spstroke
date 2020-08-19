<?php
// NOTIFIKASI EROR
echo validation_errors('<div class="alert alert-warning">','</div>');

// FORM OPEN
echo form_open(base_url('admin/penyakit/tambah'),' class="form-horizontal"');
?>

	<div class="form-group">
	<label class="col-md-2 control-label">Id Penyakit</label>
	<div class="col-md-5">
	<input type="text" name="id_penyakit" class="form-control"placeholder="Id Penyakit" value="<?php echo set_value('id_penyakit') ?>">
	</div>
	</div>

	<div class="form-group">
	<label class="col-md-2 control-label">Nama Penyakit</label>
	<div class="col-md-5">
	<input type="text" name="penyakit" class="form-control"placeholder="Nama Penyakit" value="<?php echo set_value('penyakit') ?>">
	</div>
	</div>


	<div class="form-group">
	<label class="col-md-2 control-label"></label>
	<div class="col-md-5">
	  <button class="btn btn-success btn-lg" name="submit" type="submit">
	  	<i class="fa fa-save"></i> Simpan
	  </button>
	  <button class="btn btn-info btn-lg" name="reset" type="reset">
	  	<i class="fa fa-times"></i> Reset
	  </button>
	</div>
	</div>

<?php echo form_close(); ?>