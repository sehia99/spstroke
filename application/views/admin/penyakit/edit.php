<?php
// NOTIFIKASI EROR
echo validation_errors('<div class="alert alert-warning">','</div>');

// FORM OPEN
echo form_open(base_url('admin/penyakit/edit/'.$penyakit->id_penyakit),' class="form-horizontal"');
?>
	<div class="form-group">
	<label class="col-md-2 control-label">Kode Penyakit</label>
	<div class="col-md-5">
	<input type="text" name="id_penyakit" class="form-control"placeholder="Kode Penyakit" value="<?php echo $penyakit->id_penyakit ?>" required>
	</div>
	</div>

	<div class="form-group">
	<label class="col-md-2 control-label">Penyakit</label>

	<div class="col-md-5">
	<input type="text" name="penyakit" class="form-control"placeholder="Penyakit" value="<?php echo $penyakit->penyakit ?>" required>
	</div>
	</div>

	

	<div class="form-group">
	<label class="col-md-2 control-label"></label>
	<div class="col-md-5">
	  <button class="btn btn-success btn-lg" name="submit" type="submit">
	  	<i class="fa fa-save"></i> Submit
	  </button>
	  <button class="btn btn-info btn-lg" name="reset" type="reset">
	  	<i class="fa fa-times"></i> Reset
	  </button>
	</div>
	</div>

<?php echo form_close(); ?>