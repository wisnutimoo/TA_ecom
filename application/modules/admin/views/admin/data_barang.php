<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <h1 class="mt-4">Data Barang</h1>
      <div class="row">
        <div class="container-fluid">
          <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang">
            <i class="fas fa-fw fa-plus fa-sm"></i>Tambah Barang</button>
          <table class="table table-bordered">
            <tr>
              <th>No</th>
              <th>Nama Barang</th>
              <th>Keterangan</th>
              <th>Kategori</th>
              <th>Harga</th>
              <th>Stok</th>
              <th colspan="3">Aksi</th>
            </tr>

            <?php
            $no = 1;
            foreach ($barang as $brg) {; ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $brg->nama_brg ?></td>
                <td><?php echo $brg->keterangan ?></td>
                <td><?php echo $brg->kategori ?></td>
                <td><?php echo $brg->harga ?></td>
                <td><?php echo $brg->stok ?></td>
                <td> <?php echo anchor('admin/Data_barang/detail/' . $brg->id_brg, '<div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>') ?></td>
                <td><?php echo anchor('admin/Data_barang/edit/' . $brg->id_brg, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?> </td>
                <td><?php echo anchor('admin/Data_barang/hapus/' . $brg->id_brg, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>
              <?php } ?>
          </table>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Input Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="<?php echo base_url('index.php/admin/data_barang/tambah_aksi/index.php'); ?>" method="post" enctype="multipart/form-data">

                  <div class="form-group">

                    <label>Nama Barang</label>
                    <input type="text" name="nama_brg" class="form-control">
                  </div>
                  <div class="form-group">

                    <label>Keterangan</label>
                    <input type="text" name="keterangan" class="form-control">
                  </div>
                  <div class="form-group">

                    <label>Kategori</label>
                    <select class="form-control " name="kategori">
                      <option>Elektronik</option>
                      <option>Kamera</option>
                      <option>Hp</option>
                      <option>Aksesoris</option>
                    </select>
                  </div>
                  <div class="form-group">

                    <label>Harga</label>
                    <input type="text" name="harga" class="form-control">
                  </div>
                  <div class="form-group">
                    <label>Stok</label>
                    <input type="text" name="stok" class="form-control">
                  </div>
                  <div class="form-group">

                    <label>Gambar Produk</label><br>
                    <input type="file" name="gambar" class="form-control">
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
              </div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
</div>

</div>
</main>
<footer class="py-4 bg-light mt-auto">
  <div class="container-fluid">
    <div class="d-flex align-items-center justify-content-between small">
      <div class="text-muted">Copyright &copy; Your Website 2019</div>
      <div>
        <a href="#">Privacy Policy</a>
        &middot;
        <a href="#">Terms &amp; Conditions</a>
      </div>
    </div>
  </div>
</footer>
</div>
</div>