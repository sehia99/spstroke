<body class="hold-transition login-page" style="background-image: url('<?php echo base_url(); ?>assets/stroke.jpg');
background-position: center;
  background-repeat: no-repeat;">

<CENTER><div class="col-md-4 text-white">
	<table class="table">
	<center>
	<h1>HASIL ANALISA</h1>
	</center>
		<!-- <tr>
			<td>Nama</td>
			<td>:</td>
			<td><?php echo $this->session->userdata('nama'); ?></td>
		</tr> -->

		<tr> 
			<td>Tanggal Konsultasi</td>
			<td>:</td>
			<td><?php echo date('d m y') ?></td>
		</tr>

		

		<tr>
			<center>
			<td><?php echo 'PENYAKIT TIDAK TERDETEKSI' ?></td>
			</center>		
		</tr>

		<!-- <tr>
			<td>Solusi</td>
			<td>:</td>
			<td><p>
				<?php $no=1; foreach ($solusi as $s) {?>
					<?php echo $no++.'. '.$s->solusi ?>
					<br>
				<?php } ?>
				</p>
			</td> 
		</tr>  -->
</table>
<a href="<?php echo base_url() ?>user/pertanyaan" class="btn btn-danger btn-lg">Konsultasi Kembali</a>


<button class="btn btn-warning btn-lg" onclick="window.print()"><i class="fa fa-save"></i>Cetak</button>
</div>
</CENTER>