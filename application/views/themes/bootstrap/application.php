<!DOCTYPE html>
<html>
<head>
	<title>Resto App v1.0 Beta</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">Resto</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="#">Dashboard <span class="sr-only">(current)</span></a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menus Category <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">One more separated link</a></li>
	          </ul>
	        </li>
	        <li><a href="#">Users</a></li>
	        <li><a href="#">Report</a></li>
	      </ul>
	      <form class="navbar-form navbar-left">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Search menus">
	        </div>
	        <button type="submit" class="btn btn-default">Submit</button>
	      </form>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#">Settings</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">My Profile</a></li>
	            <li><a href="#">Change Password</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Logout</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav><!-- enf of nav -->

	<!-- list gorup -->
	<div class="col-md-2">
	<div class="list-group">
	  <a href="#" class="list-group-item active">
	    All Menus
	  </a>
	  <a href="#" class="list-group-item">Cold Drinks</a>
	  <a href="#" class="list-group-item">Hot Drinks</a>
	  <a href="#" class="list-group-item">Water</a>
	  <a href="#" class="list-group-item">Eat</a>
	</div> 
	</div><!-- end of list group -->

	<!-- main content -->
	<div class="col-md-7">

	  <div class="col-md-4">
	    <div class="thumbnail">
	      <img src="<?= base_url('assets/images/menus/242x200.svg'); ?>" alt="Image 242x200">
	      <div class="caption">
	        <h3>Menu of name</h3>
	        <p> Description Of menus </p>
	        <p><a href="#" class="btn btn-block btn-primary" role="button">Add</a></p>
	      </div>
	    </div>
	  </div>

	  <div class="col-md-4">
	    <div class="thumbnail">
	      <img src="<?= base_url('assets/images/menus/242x200.svg'); ?>" alt="Image 242x200">
	      <div class="caption">
	        <h3>Menu of name</h3>
	        <p> Description Of menus </p>
	        <p><a href="#" class="btn btn-block btn-primary" role="button">Add</a></p>
	      </div>
	    </div>
	  </div>

	  <div class="col-md-4">
	    <div class="thumbnail">
	      <img src="<?= base_url('assets/images/menus/242x200.svg'); ?>" alt="Image 242x200">
	      <div class="caption">
	        <h3>Menu of name</h3>
	        <p> Description Of menus </p>
	        <p><a href="#" class="btn btn-block btn-primary" role="button">Add</a></p>
	      </div>
	    </div>
	  </div>

	  <div class="col-md-4">
	    <div class="thumbnail">
	      <img src="<?= base_url('assets/images/menus/242x200.svg'); ?>" alt="Image 242x200">
	      <div class="caption">
	        <h3>Menu of name</h3>
	        <p> Description Of menus </p>
	        <p><a href="#" class="btn btn-block btn-primary" role="button">Add</a></p>
	      </div>
	    </div>
	  </div>

	  <div class="col-md-4">
	    <div class="thumbnail">
	      <img src="<?= base_url('assets/images/menus/242x200.svg'); ?>" alt="Image 242x200">
	      <div class="caption">
	        <h3>Menu of name</h3>
	        <p> Description Of menus </p>
	        <p><a href="#" class="btn btn-block btn-primary" role="button">Add</a></p>
	      </div>
	    </div>
	  </div>

	  <div class="col-md-4">
	    <div class="thumbnail">
	      <img src="<?= base_url('assets/images/menus/242x200.svg'); ?>" alt="Image 242x200">
	      <div class="caption">
	        <h3>Menu of name</h3>
	        <p> Description Of menus </p>
	        <p><a href="#" class="btn btn-block btn-primary" role="button">Add</a></p>
	      </div>
	    </div>
	  </div>

	</div> <!-- end of main content -->

	<div class="col-md-3">
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">List of Order <p class="pull-right">No. P212</p></h3>
	  </div>
	  <div class="panel-body">
	    User : Guest
	  	<p class="pull-right"><?= date("Y-m-d H:i:s") ?></p>
	  	<hr>
	  	<div class="row">
	  		<div class="col-md-6">Menu x 2 </div>
	  		<div class="col-md-6" align="right">Rp 40.000,-</div>
	  	</div>
	  	<div class="row">
	  		<div class="col-md-6">Drinks x 2 </div>
	  		<div class="col-md-6" align="right">Rp 20.000,-</div>
	  	</div>
	  	<div class="row">
	  		<div class="col-md-6">Rice x 3 </div>
	  		<div class="col-md-6" align="right">Rp 25.000,</div>
	  	</div>
	  	<hr>
	  	<div class="row">
	  		<div class="col-md-6">Sub total</div>
	  		<div class="col-md-6" align="right">Rp 85.000,-</div>
	  	</div>
	  	<div class="row">
	  		<div class="col-md-6">Tax 10%</div>
	  		<div class="col-md-6" align="right">Rp 8.500,-</div>
	  	</div>
	  </div>
	  <div class="panel-footer">
	  	Total :
	  	<p class="pull-right">Rp 93.500,-</p>
	  </div>
	</div>
	<p><a href="#" class="btn btn-block btn-primary" role="button">Checkout</a></p>
	</div> <!-- end of left widget -->

</body>
<script type="text/javascript" src="<?= base_url(); ?>assets/js/jQuery-2.2.0.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
</html>