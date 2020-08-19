<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <!-- menu dashbord -->
        <li><a href="<?php echo base_url('pakar/dasbor')?>"><i class="fa fa-dashboard text-aqua"></i> <span>DASHBOARD</span></a></li>

        <!-- menu user -->
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>MEMBER</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('pakar/user') ?>"><i class="fa fa-table"></i> Data Member</a></li>
            <li><a href="<?php echo base_url('pakar/user/tambah') ?>"><i class="fa fa-plus"></i> Tambah Member </a></li>
          </ul>
        </li> -->

         <!-- menu gejala -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-medkit"></i><span>GEJALA</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('pakar/gejala') ?>"><i class="fa fa-table"></i> Data Gejala</a></li>
            <li><a href="<?php echo base_url('pakar/gejala/tambah') ?>"><i class="fa fa-plus"></i> Tambah Gejala </a></li>
          </ul>
        </li>

         <!-- menu penyakit -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-heartbeat"></i><span>PENYAKIT</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('pakar/penyakit') ?>"><i class="fa fa-table"></i> Data Penyakit</a></li>
            <li><a href="<?php echo base_url('pakar/penyakit/tambah') ?>"><i class="fa fa-plus"></i> Tambah Penyakit </a></li>
          </ul>
        </li>


         <!-- menu Solusi -->
          <li class="treeview">
          <a href="#">
            <i class="fa fa-tags"></i><span>SOLUSI</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('pakar/solusi') ?>"><i class="fa fa-table"></i> Data Solusi</a></li>
            <li><a href="<?php echo base_url('pakar/solusi/tambah') ?>"><i class="fa fa-plus"></i> Tambah Solusi </a></li>
          </ul>
          </li>

           <!-- menu relasi -->
        <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-sitemap"></i><span>RELASI</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('pakar/relasi') ?>"><i class="fa fa-table"></i> Data Relasi</a></li>
            <li><a href="<?php echo base_url('pakar/relasi/tambah') ?>"><i class="fa fa-plus"></i> Tambah Relasi </a></li> -->
          </ul>
        </li>
      
      
     </ul>   
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $title ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            
            <!-- /.box-header-->
            <div class="box-body">