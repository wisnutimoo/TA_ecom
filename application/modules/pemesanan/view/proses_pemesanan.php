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
 		<div class="alert alert-success">
<p align="text-center align-middle">Selamat pesanan anda telah berhasil diproses</p>
</div>
</div>
</div>
