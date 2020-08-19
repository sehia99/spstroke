<body class="hold-transition login-page" style="background-image: url('<?php echo base_url(); ?>assets/stroke.jpg');
background-position: center;
  background-repeat: no-repeat;">


<center><div class="col-lg-12 text-white">
	<h2>Apakah Anda Mengalami  <b><?php echo $pertanyaan->gejala ?></b> ?</h2>

	<?php if ($pertanyaan->ifyes > 0) { ?>
		<a class="text-white btn btn-success" href="<?php echo base_url() ?>User/pertanyaan/<?php echo $pertanyaan->ifyes ?>">Ya</a>
	<?php }else{ ?>
		<a class="text-white btn btn-success" href="<?php echo base_url() ?>User/hasil/<?php echo $hasil ?>">Ya</a>
	<?php } ?>
	<a class="btn btn-danger" href="<?php echo base_url() ?>User/pertanyaan/<?php echo $pertanyaan->ifno ?>">Tidak</a>
</div></center>