<p>
	<a href="<?php echo base_url('admin/relasi/tambah') ?>" class="btn btn-success btn-lg">
		<i class="fa fa-plus"></i> Tambah Relasi 
		
	</a>
</p>

<?php 
 //notifikasi
if($this->session->flashdata('sukses')) {
	echo '<p class="alert alert-success">';
	echo $this->session->flashdata('sukses');
	echo '</div>';


}

?>

<table class="table table-bordered" id="example1">
	<thead>
		<tr>
			<th>NO</th>
			<th>PENYAKIT</th>
			<th>GEJALA</th>
			<th>ACTION</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1; foreach($relasi as $relasi) { ?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $relasi->penyakit ?></td>
			<td><?php echo $relasi->gejala ?></td>
			<td>
				<a href="<?php echo base_url('admin/relasi/edit/'.$relasi->penyakit) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>

				<a href="<?php echo base_url('admin/relasi/delete/'.$relasi->penyakit) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="fa fa-trash-o"></i> Hapus</a>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>

