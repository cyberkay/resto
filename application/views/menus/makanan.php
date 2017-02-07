
 <div class="col-md-12">
 	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">Makanan
	    	<span class="pull-right">
		    	<a href="<?= base_url('menu/makanan_add') ?>" title="tambah menu makanan"><span class="glyphicon glyphicon-plus"></span></a>
		    </span>
	    </h3>
	    
	  </div>
	  <div class="panel-body">
	    <table class="table" id="datatables">
	    	<thead>
	    	<tr>
	    		<th>No</th>
	    		<th>Kode</th>
	    		<th>Nama</th>
	    		<th>Harga</th>
	    		<th>Action</th>
	    	</tr>
	    	</thead>
	    	<tbody>
	    	<?php $no=1; foreach ($menus as $row) { ?>
	    		
	    	<tr>
	    		<td><?= $no++; ?></td>
	    		<td><?= $row->menu_code; ?></td>
	    		<td><?= $row->menu_name; ?></td>
	    		<td><?= $row->menu_harga_jual; ?></td>
	    		<td align="center">
	    			<a href="<?= base_url('menu/view/') ?>/<?= $row->menu_code; ?>" title="view"><button class="btn btn-info"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></button></a>
	    			
	    			<a href="<?= base_url('menu/edit/') ?>/<?= $row->menu_code; ?>" title="edit"><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></a>
	    			
	    			<a href="<?= base_url('menu/delete/') ?>/<?= $row->menu_code; ?><?= '?redirect=' . current_url(); ?>" title="delete" onclick="return confirm('Anda ingin menghapusnya ?');"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></a>
	    		</td>
	    	</tr>
	    	<?php } ?>
	    	</tbody>
	    </table>
	  </div>
	</div>
 </div>