<?php
// notifikasi error
echo validation_errors('<div class="alert alert-warning">','</div>');

// form open
echo form_open(base_url('pakar/solusi/tambah'), 'class="form-horizontal');
?>
<!--<div class="form-group">
	<label class="col-md-2 control-label">Id_Solusi</label>
	<div class="col-md-5">
		<input type="text" name="id_solusi" class="form-control"  placeholder="Id_solusi" value="<?php echo set_value('id_solusi') ?>" required>
	</div>
</div> -->

<div class="form-group">
	<label class="col-md-2 control-label">Id_Penyakit</label>
	<div class="col-md-5">
		<!-- <input type="text" name="id_penyakit" class="form-control"  placeholder="Id_penyakit" value="<?php echo set_value('id_penyakit') ?>" required> -->
	<select name="id_penyakit" class="form-control">
		<option value="P01">Hipertensi</option>
		<option value="P02">Diabetes</option>
		<option value="P03">Jantung</option>
		<option value="P04">Ginjal</option>
		<option value="P05">Obesitas</option>
		<option value="P06">Asam Urat</option>
		<option value="P07">Vertigo</option>
	</select>

	</div>

</div>

<div class="form-group">
	<label class="col-md-2 control-label">Solusi</label>
	<div class="col-md-5">
		<input type="text" name="solusi" class="form-control"  placeholder="Solusi" value="<?php echo set_value('solusi') ?>" required>
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label"></label>
	<div class="col-md-5">
		<button class="btn btn-success btn-lg" formmethod="post" type="submit">
			<i class="fa fa-save"></i>Simpan
		</button>
		<button class="btn btn-info btn-lg" name="reset" type="reset">
			<i class="fa fa-times"></i>Reset
		</button>
	</div>
</div>

<?php echo form_close(); ?>