<div class="col-md-12">
		
	<table class="table table-bordered" id="datatables">
		<thead>
		<tr>
			<th>No</th>
			<th>No Nota</th>
			<th>Tanggal</th>
			<th>Jumlah Pesanan</th>
			<th>Kasir</th>
			<th>Subtotal</th>
		</tr>
		</thead>
		<tbody>
		<?php $no=1; $total=0; foreach ($penjualan as $get) { ?>
		<tr>
				<td><?= $no; ?></td>
				<td><?= $get->trx_code; ?></td>
				<td><?= $get->trx_date; ?></td>
				<td><?= $this->laporan->count_pesanan($get->trx_code); ?></td>
				<td><?= $get->name; ?></td>
				<td align="right">Rp <?= number_format($get->trx_total); ?></td>
		</tr>
		<?php $no++; $total=$total+$get->trx_total; } ?>
		</tbody>
	</table>
	<div class="row">
		<div class="col-md-10" align="right">Total</div>
		<div class="col-md-2" align="right">Rp <?= number_format($total); ?></div>
	</div>
</div>