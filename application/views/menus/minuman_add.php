<div class="col-md-12">
	<form action="<?= base_url('menu/save'); ?><?= '?redirect=' . current_url(); ?>" method="POST" enctype="multipart/form-data">
 	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">Minuman Add
	    	<span class="pull-right">
		    	<a href="<?= base_url('menu/makanan') ?>"><span class="glyphicon glyphicon-list-alt"></span></a>
		    </span>
	    </h3>
	  </div>
	  <div class="panel-body">
	  	<div class="col-md-9">
	  		<div class="row">
	  			<div class="col-md-4"><input type="text" name="menu_code" class="form-control" minlength="4" maxlength="12" placeholder="kode makanan required" REQUIRED></div>
	  			<div class="col-md-8"><input type="text" name="menu_name" class="form-control" minlength="2" maxlength="24" placeholder="nama makanan required" REQUIRED></div>
	  		</div>
	  		<br>
	  		<textarea class="form-control" name="menu_desc" rows="13" placeholder="Deskripsi Minuman">Deskripsi Minuman</textarea>
	  		<br>
	  		<button type="submit" class="btn btn-success">Save</button>
	  		<a href="<?= base_url('/') ?>"><button type="button" class="btn btn-danger">Cancel</button></a>
	  	</div>
	  	<div class="col-md-3">
	  		<!-- Photo -->
	  		<div class="fileinput fileinput-new" data-provides="fileinput">
			  <div class="fileinput-new thumbnail" style="width: 100%;">
			    <img src="<?= base_url('assets/images/menus/242x200.svg'); ?>" alt="Image 600x600">
			  </div>
			  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 100%; max-height: 350px;"></div>
			  <div>
			    <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="menu_photo"></span>
			    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
			  </div>
			</div>
	  		<!-- photo -->
	  		<br>
	  		<hr>
	  		<div class="row">
	  			<div class="col-md-6">Jenis : </div>
	  			<div class="col-md-6" align="right"><input type="hidden" name="menu_jenis" value="minuman">Minuman</div>
	  		</div>
	  		<hr>
	  		<div class="row">
	  			<div class="col-md-3">Harga : </div>
	  			<div class="col-md-3" align="right">Rp </div>
	  			<div class="col-md-6"><input type="number" name="menu_harga_jual" class="form-control" placeholder="Harga Jual"></div>
	  		</div>
	  		<br>
	  		<div class="row">
	  			<div class="col-md-6">Stok : </div>
	  			<div class="col-md-6"><input type="number" name="menu_stok" class="form-control" placeholder="Stok"></div>
	  		</div>
	  	</div>
	  </div>
	</div>
	</form>
 </div>