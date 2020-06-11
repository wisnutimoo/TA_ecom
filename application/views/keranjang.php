<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->


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
          $no = 1;
          foreach ($this->cart->contents() as $items) {; ?>

            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $items['name'] ?></td>
              <td><?php echo $items['qty'] ?></td>
              <td>Rp.<?php echo number_format(
                        $items['price'],
                        0,
                        ',',
                        '.'
                      ) ?></td>
              <td>Rp.<?php echo number_format(
                        $items['subtotal'],
                        0,
                        ',',
                        '.'
                      ) ?></td>

            </tr>

          <?php } ?>
          <tr>
            <td colspan="4"></td>
            <td align="right"><?php echo number_format($this->cart->total(), 0, ',', '.') ?>

            </td>
          </tr>
        </table>
        <div align="right">
          <a href="<?php echo base_url('index.php/Dashboard/hapus_keranjang') ?>">
            <div class="btn btn-sm btn-danger">Hapus Keranjang</div>
          </a>
          <a href="<?php echo base_url('index.php/Dashboard/index') ?>">
            <div class="btn btn-sm btn-primary">Lanjutkan Belanja</div>
          </a>
          <a href="<?php echo base_url('index.php/Dashboard/pembayaran') ?>">
            <div class="btn btn-sm btn-success">Bayar</div>
          </a>
        </div>
      </div>
    </div>