<p>
	<a href="<?php echo base_url('pakar/solusi/tambah') ?>" class="btn btn-success btn-lg">
		<i class="fa fa-plus"></i> Tambah Solusi
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
			<th>ID_SOLUSI</th>
			<th>ID_PENYAKIT</th>
			<th>SOLUSI</th>
			<th>ACTION</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1; foreach($solusi as $solusi) { ?>
		<tr>
			<td><?php echo $solusi->id_solusi ?></td>
			<td><?php echo $solusi->id_penyakit ?></td>
			<td><?php echo $solusi->solusi ?></td>
			<td>
				<a href="<?php echo base_url('pakar/solusi/edit/'.$solusi->id_solusi) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>

				<a href="<?php echo base_url('pakar/solusi/delete/'.$solusi->id_solusi) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="fa fa-trash-o"></i> Hapus</a>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>

