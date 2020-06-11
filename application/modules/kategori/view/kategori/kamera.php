

 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url()?>assets/dist/img/s1.jpg" width="180" height="200" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url()?>/assets/dist/img/s2.jpg" width="180" height="200" class="d-block w-100" alt="...">
    </div>
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

        <div class="row mt-5 mb-3">
         <?php foreach ($kamera as $brg){;?>
          <div class="card ml-3" style="width: 16rem;">
            <img src="<?php echo base_url('/uploads/'.$brg->gambar);?>" class="card-img-top" alt="...">
            <div class="card-body ">
            <h5 class="card-title "><?php echo $brg->nama_brg ?></h5><br>
            <small><?php echo $brg->keterangan ?></small>
            <br>
            <span class="badge badge-pill badge-success mb-3">RP. <?php echo number_format( $brg->harga, 0,',','.') ?></span>

          <?php echo anchor('/Dashboard/tambah_ke_keranjang/'.$brg->id_brg,'<div class="btn btn-sm btn-primary">Tambah ke keranjang</div>');?>
           <?php echo anchor('/Dashboard/detail/'.$brg->id_brg,'<div class="btn btn-sm btn-warning">Detail</div>');?>
            
        </div>
        </div>

          <?php } ?>
         
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
     
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 