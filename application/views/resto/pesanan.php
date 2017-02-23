
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
		    <?php foreach ($this->pesanan->get_items($get->trx_code) as $item) { ?>
		    	<div class="col-md-2">
					<div class="thumbnail">
						<img src="<?= base_url('assets/images/menus/'); ?>/<?= $item->menu_photo; ?>" style="height: 200px; width: 200px;" alt="Image 242x200">
						 <div class="caption">
						    <h5><?= $item->menu_name; ?></h3>
						    <p>Rp <?= $item->menu_harga_jual; ?></p>
						    <?php if($item->td_status == 4) { ?>
						    <p><a href="#" class="btn btn-block btn-info" role="button" disabled>Diantar</a></p>	
						    <?php } elseif($item->td_status == 3) { ?>
						    <p><a href="<?= base_url('pesanan/update') ?>/<?= $item->td_id; ?>/<?= $item->td_status+1; ?>" class="btn btn-block btn-primary" onClick="return confirm('Anda akan mengantar pesanan ?')" role="button">Antar</a></p>
						    <?php } elseif($item->td_status == 2) { ?>
						    <p><a href="<?= base_url('pesanan/update') ?>/<?= $item->td_id; ?>/<?= $item->td_status+1; ?>" class="btn btn-block btn-primary" onClick="return confirm('Pesanan siap disajikan ?')" role="button">Tersaji</a></p>
						    <?php } elseif($item->td_status == 1) { ?>
						    <p><a href="<?= base_url('pesanan/update') ?>/<?= $item->td_id; ?>/<?= $item->td_status+1; ?>" onClick="return confirm('Anda akan memproses pesanan ?')" class="btn btn-block btn-primary" role="button">Process</a></p>
						    <?php } ?>
						</div>
					</div>
				</div>
			<?php } ?>
		  </div>
		  <div class="panel-footer"><?= $get->trx_note; ?></div>
		</div>
	</div>

<?php } ?>