<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
   
      <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <div class="navbar">
      <ul class ="nav navbar-nav navbar-right">
       
      </ul>
      </div>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- K E R A N J A N G  B E L A N J A -->
       <li>
          <?php
          $keranjang = 'Keranjang Belanja:'.$this->cart->total_items().'items'?>

          <?php echo  anchor('Dashboard/detail_keranjang' ,$keranjang) ?>
        </li>
      <li class="nav-item ml-3">
        <a href="../examples/login.html" class="nav-link">
                  <i class="fas fa-sign-in-alt">Login</i>
                  
                </a>
              </li>
   
    </ul>
  </nav>
  <!-- /.navbar -->
<div class="content-wrapper">
<div class="container-fluid">
	<h2>Detail Barang</h2>
	<div class="card">
  <h5 class="card-header">Detail Produk</h5>
  <div class="card-body">

    <?php foreach ($barang as $brg):?>

    <div class="row">
      <div class="col-md-4">
        <img src="<?php echo base_url('/uploads/'.$brg->gambar)?>" class="card-img-top">

      </div>

      <div class="col-md-8">
        <table class="table">
          <tr>
            <td>Nama Produk</td>
            <td><strong><?php echo $brg->nama_brg?></strong></td>
          </tr>
          <tr>
            <td>Keterangan</td>
            <td><strong><?php echo $brg->keterangan?></strong></td>
          </tr>
          <tr>
            <td>Kategori</td>
            <td><strong><?php echo $brg->kategori?></strong></td>
          </tr>
          <tr>
            <td>Stok</td>
            <td><strong><?php echo $brg->stok?></strong></td>
          </tr>
          <tr>
            <td>Harga</td>
            <td> <strong><div class="btn btn-sm btn-success">Rp.<?php echo  number_format($brg->harga,0,',','.')?></div></strong>
          </tr>
          
        </table>
        <?php echo anchor('/Dashboard/tambah_ke_keranjang/'.$brg->id_brg,'<div class="btn btn-sm btn-primary">Tambah ke keranjang</div>');?>
        <?php echo anchor('/Dashboard/index/','<div class="btn btn-sm btn-secondary">Kembali</div>');?>

      </div>
    </div>
  <?php endforeach;?>
  </div>
</div>
</div>
</div>
</div>
</body>