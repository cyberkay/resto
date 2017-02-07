 <div class="col-md-12">
 	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">View Menu
	    	<span class="pull-right">
		    	<?= $menu->menu_code; ?>
		    </span>
	    </h3>
	    
	  </div>
	  <div class="panel-body">
	  	<div class="row">
	  		<div class="col-md-3">
	  			<img src="<?= base_url('assets/images/menus'); ?>/<?= $menu->menu_photo; ?>" height="300" width="300" alt="Image 600x600"><br><br>
	  			<?= ($menu->menu_stok < 1) ? "<button class='btn btn-danger btn-block' title='Stok Kosong' disabled>Pesan</button>" : "<button class='btn btn-info btn-block' title='Pesan Sekarang'>Pesan</button>" ; ?>
	  		</div>
	  		<div class="col-md-9">
	  			<h2><?= $menu->menu_name; ?></h2>
	  			<b>Rp <?= $menu->menu_harga_jual; ?></b><br><br>
	  			Status : <?= ($menu->menu_stok < 1) ? 'Habis' : 'Tersedia' ; ?> <br><br>
	  			Description : <br>
	  			<p><?= $menu->menu_desc; ?></p>
	    	</div>
	  	</div>
	  </div>
	</div>
 </div>