<style type="text/css">
	
/*  bhoechie tab */
div.bhoechie-tab-container{
  z-index: 10;
  background-color: #ffffff;
  padding: 0 !important;
  border-radius: 4px;
  -moz-border-radius: 4px;
  border:1px solid #ddd;
  -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
  box-shadow: 0 6px 12px rgba(0,0,0,.175);
  -moz-box-shadow: 0 6px 12px rgba(0,0,0,.175);
  background-clip: padding-box;
  opacity: 0.97;
  filter: alpha(opacity=97);
}
div.bhoechie-tab-menu{
  padding-right: 0;
  padding-left: 0;
  padding-bottom: 0;
}
div.bhoechie-tab-menu div.list-group{
  margin-bottom: 0;
}
div.bhoechie-tab-menu div.list-group>a{
  margin-bottom: 0;
}
div.bhoechie-tab-menu div.list-group>a .glyphicon,
div.bhoechie-tab-menu div.list-group>a .fa {
  color: #5A55A3;
}
div.bhoechie-tab-menu div.list-group>a:first-child{
  border-top-right-radius: 0;
  -moz-border-top-right-radius: 0;
}
div.bhoechie-tab-menu div.list-group>a:last-child{
  border-bottom-right-radius: 0;
  -moz-border-bottom-right-radius: 0;
}
div.bhoechie-tab-menu div.list-group>a.active,
div.bhoechie-tab-menu div.list-group>a.active .glyphicon,
div.bhoechie-tab-menu div.list-group>a.active .fa{
  background-color: #5A55A3;
  background-image: #5A55A3;
  color: #ffffff;
}
div.bhoechie-tab-menu div.list-group>a.active:after{
  content: '';
  position: absolute;
  left: 100%;
  top: 50%;
  margin-top: -13px;
  border-left: 0;
  border-bottom: 13px solid transparent;
  border-top: 13px solid transparent;
  border-left: 10px solid #5A55A3;
}

div.bhoechie-tab-content{
  background-color: #ffffff;
  /* border: 1px solid #eeeeee; */
}

div.bhoechie-tab div.bhoechie-tab-content:not(.active){
  display: none;
}
</style>
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
					      <img src="<?= base_url('assets/images/menus/'); ?>/<?= $menu->menu_photo; ?>" height="300" width="300" alt="Image 242x200">
					      <div class="caption">
					        <h5><?= $menu->menu_name; ?></h3>
					        <p>Rp <?= $menu->menu_harga_jual; ?></p>
					        <p><a href="#" class="btn btn-block btn-primary" role="button">Add</a></p>
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
					      <img src="<?= base_url('assets/images/menus/'); ?>/<?= $menu->menu_photo; ?>" height="300" width="300" alt="Image 242x200">
					      <div class="caption">
					        <h5><?= $menu->menu_name; ?></h3>
					        <p>Rp <?= $menu->menu_harga_jual; ?></p>
					        <p><a href="#" class="btn btn-block btn-primary" role="button">Add</a></p>
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
						      <img src="<?= base_url('assets/images/menus/'); ?>/<?= $menu->menu_photo; ?>" height="300" width="300" alt="Image 242x200">
						      <div class="caption">
						        <h5><?= $menu->menu_name; ?></h3>
						        <p>Rp <?= $menu->menu_harga_jual; ?></p>
						        <p><a href="#" class="btn btn-block btn-primary" role="button">Add</a></p>
						      </div>
						    </div>
						  </div>
					<?php } ?>
                </div>
            </div>
        </div>

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
		});
	</script>