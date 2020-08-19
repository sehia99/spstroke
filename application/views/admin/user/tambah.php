<?php
// notifikasi error
echo validation_errors('<div class="alert alert-warning">','</div>');

// form open
echo form_open_multipart(base_url('admin/user/tambah'), 'class="form-horizontal');
?>
<div class="form-group">
	<label class="col-md-2 control-label">Nama Member</label>
	<div class="col-md-5">
		<input type="text" name="nama" class="form-control"  placeholder="Nama Member" value="<?php echo set_value('nama') ?>">
	</div>
</div>


<div class="form-group">
	<label class="col-md-2 control-label">Username</label>
	<div class="col-md-5">
		<input type="text" name="username" class="form-control"  placeholder="Username" value="<?php echo set_value('username') ?>" >
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label">Password</label>
	<div class="col-md-5">
		<input type="password" name="password" class="form-control"  placeholder="Password" value="<?php echo set_value('password') ?>" >
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label">Level Hak Akses</label>
	<div class="col-md-5">
		<select name="akses_level" class="form-control">
			<option value="Admin">Admin</option>
			<option value="Pakar">Pakar</option>
		</select>
	</div>
</div>

<div class="form-group">
	<label class="col-md-2 control-label"></label>
	<div class="col-md-5">
		<button class="btn btn-success btn-lg" type="submit">
			<i class="fa fa-save"></i>Simpan
		</button>
		<button class="btn btn-info btn-lg" name="reset" type="reset">
			<i class="fa fa-times"></i>Reset
		</button>
	</div>
</div>

<?php echo form_close(); ?>