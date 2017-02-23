	<div class="col-md-3">
	<div class="panel panel-default">
	  <div class="panel-heading">
	  	<center>
	  		Kedai Oramen <br>
	  		Jl. Soekarno Hatta No 10101 Bandung Telp.022 398493 <br><br>
	  	</center>
	    <h3 class="panel-title">List of Order <p class="pull-right">No. <?= $order->trx_code; ?></p></h3>
	  </div>
	  <div class="panel-body">
	    Kasir : <?= $order->name; ?>
	  	<p class="pull-right"><?= $order->trx_date; ?></p>
	  	<hr>
	  	<?php $subtotal=0; foreach ($items as $get) { ?>
	  	<div class="row">
	  		<div class="col-md-6"><?= $get->menu_name; ?><br> <?= $get->td_harga_active; ?> x <?= $get->td_qty; ?> </div>
	  		<div class="col-md-6" align="right">Rp <?= $jumlah = $get->td_harga_active*$get->td_qty; ?></div>
	  	</div>
	  	<?php $subtotal = $subtotal+$jumlah; } ?>
	  	<hr>
	  	<div class="row">
	  		<div class="col-md-6">Sub total</div>
	  		<div class="col-md-6" align="right">Rp <?= $subtotal; ?></div>
	  	</div>
	  	<div class="row">
	  		<div class="col-md-6">Tax 10%</div>
	  		<div class="col-md-6" align="right">Rp <?= $tax = $order->trx_tax; ?></div>
	  	</div>
	  	<div class="row">
	  		<div class="col-md-6">Disc</div>
	  		<div class="col-md-6" align="right">Rp <?= $disc = $order->trx_disc; ?></div>
	  	</div>
	  </div>
	  <div class="panel-footer">
	  	Total :
	  	<p class="pull-right">Rp <?= $total = $subtotal + $tax - $disc; ?></p>
	  </div>
	</div>
	
	</div> <!-- end of left widget -->

	<script type="text/javascript">
		window.print();
	</script>