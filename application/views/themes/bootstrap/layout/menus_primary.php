		<ul class="nav navbar-nav">
	        <?php if (
	        	($_SESSION['res_level'] == 3) || 
	        	($_SESSION['res_level'] == 1)
	        	) { ?>
	        <li><a href="#">Akun</a></li>
	        <li><a href="#">Pegawai</a></li>
	        <li><a href="#">Beban Gaji</a></li>
	        <?php } ?>
	        <?php if (
	        	($_SESSION['res_level'] == 5) || 
	        	($_SESSION['res_level'] == 1)) { ?>
	        <li><a href="<?= base_url('menu/minuman') ?>">Minuman</a></li>
	        <?php } ?>
	        <?php if (
	        	($_SESSION['res_level'] == 6) || 
	        	($_SESSION['res_level'] == 1)) { ?>
	        <li><a href="<?= base_url('menu/makanan') ?>">Makanan</a></li>
	        <?php } ?>
	        <?php if (
	        	($_SESSION['res_level'] == 3) || 
	        	($_SESSION['res_level'] == 1)) { ?>
	        <li><a href="<?= base_url('order') ?>">Order</a></li>
	        <?php } ?>
	        <?php if (
	        	($_SESSION['res_level'] == 6) || 
	        	($_SESSION['res_level'] == 5) || 
	        	($_SESSION['res_level'] == 1)) { ?>
	        <li><a href="#">Pesanan</a></li>
	        <?php } ?>
	        <?php if (
	        	($_SESSION['res_level'] == 2) || 
	        	($_SESSION['res_level'] == 1)) { ?>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Laporan<span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Jurnal</a></li>
	            <li><a href="#">Buku Besar</a></li>
	            <li><a href="#">Neraca Saldo</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Laporan Pesanan</a></li>
	            <li><a href="#">Laporan Penjualan</a></li>
	            <li><a href="#">Laporan Laba Rugi</a></li>
	          </ul>
	        </li>
	        <?php }  ?>
	      </ul>
	      <form class="navbar-form navbar-left">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Search menus">
	        </div>
	        <button type="submit" class="btn btn-default">Search Now</button>
	      </form>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#">Settings</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $this->users_m->get_session()->name; ?> <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">My Profile</a></li>
	            <li><a href="#">Change Password</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="<?= base_url('user/logout') ?>">Logout</a></li>
	          </ul>
	        </li>
	      </ul>