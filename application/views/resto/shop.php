<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/custom-tabs.css'); ?>">
	<form method="POST" action="<?= base_url('order/save'); ?>/<?= $order->trx_code; ?>">
		

        <div class="col-md-9 bhoechie-tab-container">
            <div class="col-md-3 bhoechie-tab-menu">
              <div class="list-group">
                <a href="#" class="list-group-item active text-center">
                  <h4 class="glyphicon glyphicon-th"></h4><br/>All Menus
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-cutlery"></h4><br/>Makanan
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 class="glyphicon glyphicon-glass"></h4><br/>Minuman
                </a>
              </div>
            </div>
            <div class="col-md-9 bhoechie-tab">
                <!-- flight section -->
                <div class="bhoechie-tab-content active">
                <?php foreach ($menus as $menu) { ?>
                    <div class="col-md-4">
					    <div class="thumbnail">
					      <img src="<?= base_url('assets/images/menus/'); ?>/<?= $menu->menu_photo; ?>" style="height: 200px; width: 200px;" alt="Image 242x200">
					      <div class="caption">
					        <h5><?= $menu->menu_name; ?></h3>
					        <p>Rp <?= $menu->menu_harga_jual; ?></p>
					        <p><a href="<?= base_url('order/insert') ?>/<?= $order->trx_code; ?>/<?= $menu->menu_code; ?>/<?= $menu->menu_harga_jual; ?>" class="btn btn-block btn-primary" role="button">Add</a></p>
					      </div>
					    </div>
					  </div>
				<?php } ?>
                </div>
                <!-- train section -->
                <div class="bhoechie-tab-content">
                    <?php foreach ($makanan as $menu) { ?>
                    <div class="col-md-4">
					    <div class="thumbnail">
					      <img src="<?= base_url('assets/images/menus/'); ?>/<?= $menu->menu_photo; ?>" style="height: 200px; width: 200px;" alt="Image 242x200">
					      <div class="caption">
					        <h5><?= $menu->menu_name; ?></h3>
					        <p>Rp <?= $menu->menu_harga_jual; ?></p>
					        <p><a href="<?= base_url('order/insert') ?>/<?= $order->trx_code; ?>/<?= $menu->menu_code; ?>/<?= $menu->menu_harga_jual; ?>" class="btn btn-block btn-primary" role="button">Add</a></p>
					      </div>
					    </div>
					  </div>
					<?php } ?>
                </div>
    
                <!-- hotel search -->
                <div class="bhoechie-tab-content">
                    <?php foreach ($minuman as $menu) { ?>
	                    <div class="col-md-4">
						    <div class="thumbnail">
						      <img src="<?= base_url('assets/images/menus/'); ?>/<?= $menu->menu_photo; ?>" style="height: 200px; width: 200px;" alt="Image 242x200">
						      <div class="caption">
						        <h5><?= $menu->menu_name; ?></h3>
						        <p>Rp <?= $menu->menu_harga_jual; ?></p>
						        <p><a href="<?= base_url('order/insert') ?>/<?= $order->trx_code; ?>/<?= $menu->menu_code; ?>/<?= $menu->menu_harga_jual; ?>" class="btn btn-block btn-primary" role="button">Add</a></p>
						      </div>
						    </div>
						  </div>
					<?php } ?>
                </div>
            </div>
        </div>

	<div class="col-md-3">
	<p><a href="#" class="btn btn-block btn-success" role="button" data-toggle="modal" data-target="#checkout">Checkout</a></p>
	<p align="center">--------OR----------</p>
	<p><a href="<?= base_url('order/cancel/'); ?>/<?= $order->trx_code; ?>" onClick="return confirm('Anda ingin membatalkan pesanan ?')" class="btn btn-block btn-danger" role="button">Cancel</a></p>
	
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">List of Order <p class="pull-right">No. <?= $order->trx_code; ?></p></h3>
	  </div>
	  <div class="panel-body">
	    Kasir : <?= $order->name; ?>
	  	<p class="pull-right"><?= $order->trx_date; ?></p>
	  	<hr>
	  	<?php $subtotal=0; foreach ($items as $get) { ?>
	  	<div class="row">
	  		<div class="col-md-6"><?= $get->menu_name; ?><br> <?= $get->td_harga_active; ?> x <?= $get->td_qty; ?> </div>
	  		<div class="col-md-6" align="right">Rp <?= $jumlah = $get->td_harga_active*$get->td_qty; ?> <br> <a href="<?= base_url('order/remove/') ?>/<?= $get->td_id; ?>/<?= $order->trx_code; ?>" title="Remove <?= $get->menu_name; ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></div>
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
	<textarea name="note" class="form-control" placeholder="Note for your menu">Note order</textarea>
	<br>
	
	</div> <!-- end of left widget -->


<!-- Modal -->
<div class="modal fade" id="checkout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Checkout</h4>
      </div>
      <div class="modal-body" align="center">
      	<input type="hidden" name="total" value="<?= $total; ?>">
        <h2>Total</h2>
        <h2>Rp <?= number_format($total); ?></h2>
        <div class="row">
        	<div class="col-md-4 col-md-offset-4">
        		<hr>
        	</div>
        </div>
        <h2>Bayar</h2>
        <div class="row">
        	<div class="col-md-4 col-md-offset-4"><input type="number" name="bayar" align="right" class="form-control" id="bayar"></div>
        </div>
        <h2>Kembali</h2>
        <div class="row">
        	<div class="col-md-4 col-md-offset-4" >
        		<h2 id="kembali">0</h2>
        	</div>
        </div>
        <div class="row">
        	<div class="col-md-4 col-md-offset-4">
        		<input type="checkbox" name="print" value="ya" checked="true"> Cetak Nota ?
        	</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
	</form>
	<script type="text/javascript">
		$(document).ready(function() {
		    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
		        e.preventDefault();
		        $(this).siblings('a.active').removeClass("active");
		        $(this).addClass("active");
		        var index = $(this).index();
		        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
		        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
		    });

		    $( "#bayar" ).keyup(function() {
			  $("#kembali").html( $("#bayar").val() - <?= $total; ?>);
			});
		});
	</script>