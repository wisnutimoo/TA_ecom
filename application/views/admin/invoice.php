
<div id="layoutSidenav_content">
 <main>
  <div class="container-fluid">
     <h1 class="mt-4">Invoice Pemesanan</h1>
        <div class="row">                         
        
       <table class ="table table-bordered table-hover table-striped">
       	<tr>
       		<th>Id Invoice</th>
       		<th>Nama Pemesanan</th>
       		<th>Alamat Pengiriman</th>
       		<th>Tanggal  Pemesanan</th>
       		<th>Batas Pembayaran</th>
       		<th>Aksi</th>
       	</tr>
       	<?php  
       	foreach ($invoice as $inv):?>
       		<tr>
       			<td><?php echo $inv ->id?></td>
       			<td><?php echo $inv ->nama ?></td>
       			<td><?php echo $inv ->alamat ?></td>
       			<td><?php echo $inv ->tgl_pesan ?></td>
       			<td><?php echo $inv ->batas_bayar ?></td>
       			<td><?php echo anchor('admin/Invoice/detail/'.$inv->id,'<div class="btn btn-sm btn-primary">Detail</div>')?></td>
       			
       		</tr>
       	<?php endforeach ;  ?>

        </table>
      </div>
    </div>
   </main>
</div>