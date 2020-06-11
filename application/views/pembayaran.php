<body class="hold-transition sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">
		<!-- Navbar -->
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="btn btn-sm btn-primary">
							<?php
							$grand_total = 0;
							if ($keranjang = $this->cart->contents()) {
								foreach ($keranjang as $item) {
									$grand_total = $grand_total + $item['subtotal'];
								}
								echo "<h4>Total Pembayaran Belanja Anda : Rp. " . number_format($grand_total, 0, ',', '.');
							?>
						</div><br><br>
						<h3>Masukan Alamat dan Segara lakukan Pembayaran</h3>
						<form method="post" action="<?php echo base_url('index.php/Dashboard/proses_pemesanan') ?>">
							<div class="form-group">
								<label>Nama</label>
								<input type="text" name="nama" placeholder="Nama Lengkap" class="form_control">
								<?= form_error('username', ' <small ml-2 class="text-danger" pl-3>', '</small>'); ?>
							</div>
							<div class="form-group">
								<label>Alamat Lengkap</label>
								<input type="text" name="alamat" placeholder="Alamat Lengkap" class="form_control">
							</div>
							<div class="form-group">
								<label>Telepon</label>
								<input type="text" name="no_telp" placeholder="No Telp" class="form_control">
							</div>
							<div class="form-group">
								<label>Jasa Pengiriman</label>
								<select class="form_control">
									<option>JNE</option>
									<option>J&T</option>
									<option>Post</option>
								</select>
							</div>
							<div class="form-group">
								<label>Pilih Bank</label>
								<select class="form_control">
									<option>BRI XXXXXX</option>
									<option>BNI XXXXXX</option>
									<option>BCA XXXXXX</option>
								</select>
							</div>

							<button type="submit" class="btn btn-sm btn-success">Pesan</button>
						</form>
					<?php
							} else {
								echo "<h4>Keranjang Masih Kosong";
							}
					?>
					</div>
				</div>
			</div>

		</div>



		<div class="col-md-2"></div>
	</div>
	</div>