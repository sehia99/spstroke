<!-- <p>
	<a href="<?php echo base_url('admin/penyakit/tambah') ?>" class="btn btn-success btn-lg">
		<i class="fa fa-plus"></i> Tambah Baru
	</a>
</p> -->

<?php
// NOTIFIKASI
if($this->session->flashdata('sukses')) {
	echo '<p class="alert alert-success">';
	echo $this->session->flashdata('sukses');
	echo '</div>';
}
?>

<table class="table table-bordered" id="example1">
	<thead>
		<tr>
			<th>Id Penyakit</th>
			<th>Nama Penyakit</th>
			
			<!-- <th>Pilih</th> -->
		</tr>
	</thead>
	<tbody>
		<?php $no=1; foreach($penyakit as $penyakit) { ?>
		<tr>
			<td><?php echo $penyakit->id_penyakit ?></td>
			<td><?php echo $penyakit->penyakit ?></td>
			
			<!-- <td>
				<a href="<?php echo base_url('admin/penyakit/edit/'.$penyakit->id_penyakit) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>

				<a href="<?php echo base_url('admin/penyakit/delete/'.$penyakit->id_penyakit) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin menghapus data ini ?')"><i class="fa fa-trash-o"></i> Hapus</a>
			</td> -->
		</tr>
		<?php } ?>
	</tbody>
</table>