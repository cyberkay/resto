
<?php foreach ($pesanan as $get) { ?>

	<div class="col-md-12">
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">
		    	No Nota : <?= $get->trx_code; ?>
		    	<p class="pull-right"><?= $get->trx_date; ?></p>
		    </h3>
		  </div>
		  <div class="panel-body">
		    <?php $status=true; foreach ($this->pesanan->get_items($get->trx_code) as $item) { ?>
		    <?php if($item->td_status != 4){ $status=false; } ?>
		    	<div class="col-md-2">
					<div class="thumbnail">
						<img src="<?= base_url('assets/images/menus/'); ?>/<?= $item->menu_photo; ?>" style="height: 200px; width: 200px;" alt="Image 242x200">
						 <div class="caption">
						    <h5><?= $item->menu_name; ?></h3>
						    <p>Rp <?= $item->menu_harga_jual; ?></p>
						    <?php if($item->td_status == 4) { ?>
						    <p><a href="#" class="btn btn-block btn-info" role="button" disabled>Diantar</a></p>	
						    <?php } elseif($item->td_status == 3) { ?>
						    <p><a href="<?= base_url('pesanan/update') ?>/<?= $item->td_id; ?>/<?= $item->td_status+1; ?>" class="btn btn-block btn-success" onClick="return confirm('Anda akan mengantar pesanan ?')" role="button" <?= ($_SESSION['res_level'] != 4) ? 'disabled' : '' ; ?>>Antar</a></p>
						    <?php } elseif($item->td_status == 2) { ?>
						    <p><a href="<?= base_url('pesanan/update') ?>/<?= $item->td_id; ?>/<?= $item->td_status+1; ?>" class="btn btn-block btn-primary" onClick="return confirm('Pesanan siap disajikan ?')" role="button" <?= (($_SESSION['res_level'] != 6) && ($_SESSION['res_level'] != 5)) ? 'disabled' : '' ; ?>>Tersaji</a></p>
						    <?php } elseif($item->td_status == 1) { ?>
						    <p><a href="<?= base_url('pesanan/update') ?>/<?= $item->td_id; ?>/<?= $item->td_status+1; ?>" onClick="return confirm('Anda akan memproses pesanan ?')" class="btn btn-block btn-default" role="button" <?= (($_SESSION['res_level'] != 6) && ($_SESSION['res_level'] != 5)) ? 'disabled' : '' ; ?>>Process</a></p>
						    <?php } ?>
						</div>
					</div>
				</div>
			<?php } ?>
		  </div>
		  <div class="panel-footer">
		  	<div class="col-md-10">
		  		<?= $get->trx_note; ?>	
		  	</div>
		  	<div class="col-md-2" align="right">
		  		<?php if ($status == true) { ?>
		  			<a href="<?= base_url('pesanan/close') ?>/<?= $get->trx_code; ?>" onClick="return confirm('Apakah pesanan selesai dan akan di close ?')" class="btn btn-block btn-danger" role="button">Close Pesanan</a>

		  		<?php } ?>
		  	</div>
		  	<div class="clearfix"></div>
		  </div>
		</div>
	</div>

<?php } ?>