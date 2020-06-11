<div id="layoutSidenav_content">
 <main>
  <div class="container-fluid">
     <h1 class="mt-4">Edit Data Barang</h1>
      <?php foreach ($barang as $brg) {;?>

      	<form method="post" action="<?php echo base_url('admin/Data_barang/edit') ?>">

      		<div class="form-group">
      			<label>Nama Barang</label>
      			<input type="text" name="nama_brg" class="form-control" value="<?php echo $brg->nama_brg?>">
      		</div>
      		<div class="form-group">
      			<label>Keterangan</label>
      			<input type="hidden" name="id_brg" class="form-control" value="<?php echo $brg->id_brg?>">
      			<input type="text" name="keterangan" class="form-control" value="<?php echo $brg->keterangan?>">
      		</div>

      		<div class="form-group">
      			<label>Kategori</label>
      			<input type="text" name="kategori" class="form-control" value="<?php echo $brg->kategori?>">
      		</div>
      		<div class="form-group">
      			<label>Harga</label>
      			<input type="text" name="nama_brg" class="form-control" value="<?php echo $brg->harga?>">
      		</div>
      		<div class="form-group">
      			<label>Stok</label>
      			<input type="text" name="nama_brg" class="form-control" value="<?php echo $brg->stok?>">
      		</div>
      		
      		<button type="submit" class="btn btn-primary btn-sm">Simpan</button>
      	</form>
      <?php }?>
  </div>
</main>