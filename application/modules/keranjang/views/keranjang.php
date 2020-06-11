
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
	<h2>Keranjang Belanja</h2>
	<table class="table table-bordered table-striped table-hover">
	<tr>
		<th>No</th> 
		<th> Nama Barang</th> 
		<th>Jumlah</th> 
		<th>Harga</th>
		<th>Sub-Total</th>
	</tr>

	<?php
	$no=1;
	foreach ($this->cart->contents() as $items){;?>
	 	
	 	<tr>
	 		<td><?php echo $no++?></td>
	 		<td><?php echo $items['name']?></td>
	 		<td><?php echo $items['qty']?></td>
	 		<td>Rp.<?php echo number_format($items['price'],
	 		0,',','.')?></td>
	 		<td>Rp.<?php echo number_format($items['subtotal'], 
	 		0,',','.') ?></td>

	 	</tr>
	 	
          <?php } ?>
          <tr>
          	<td colspan="4"></td>
	 		<td align="right"><?php echo number_format($this->cart->total(),0,',','.') ?>
	 			
	 		</td>
	 	</tr>
</table>
	<div align="right">
		<a href ="<?php echo base_url('index.php/Dashboard/hapus_keranjang')?>"><div class="btn btn-sm btn-danger">Hapus Keranjang</div></a>
		<a href ="<?php echo base_url('index.php/Dashboard/index')?>"><div class="btn btn-sm btn-primary">Lanjutkan Belanja</div></a>
		<a href ="<?php echo base_url('index.php/Dashboard/pembayaran')?>"><div class="btn btn-sm btn-success">Bayar</div>
		</a>
	</div>
</div>
</div>


