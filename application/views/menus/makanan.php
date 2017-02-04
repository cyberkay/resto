
 <div class="col-md-12">
 	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">Makanan
	    	<span class="pull-right">
		    	<a href="<?= base_url('menu/makanan_add') ?>"><span class="glyphicon glyphicon-plus"></span></a>
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
	    		<td>view edit delete</td>
	    	</tr>
	    	<?php } ?>
	    	</tbody>
	    </table>
	  </div>
	</div>
 </div>