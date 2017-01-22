<center>
	<br>
	<h1>Logo</h1>
	<br>
</center>
		<div class="col-sm-4 col-md-offset-4">
			<div class="panel panel-default">
			  <div class="panel-heading" align="center">
			    <h3 class="panel-title">Login Form</h3>
			  </div>
			  <div class="panel-body" align="center">
			    <form method="POST" action="<?= base_url('user/auth?redirect=') . $_GET['redirect'] ?>">
				  <div class="form-group">
				    <div class="input-group">
				      <div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>
				      <input type="text" class="form-control" name="username" placeholder="username" REQUIRED>
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="input-group">
				      <div class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></div>
				      <input type="password" class="form-control" name="password" placeholder="password" REQUIRED>
				    </div>
				  </div>
				  <div class="checkbox">
				    <label>
				      <input type="checkbox" name="remember"> Remember Me
				    </label>
				  </div>
				  <button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Login Now</button>
				</form>

			  </div>
			  <div class="panel-footer">
			  	<a href="#" data-toggle="tooltip" data-placement="bottom" title="Contact your administrator">Don't have account ?</a>
			  	<div class="pull-right">
			  		<a href="#" data-toggle="tooltip" data-placement="bottom" title="Contact your administrator">Forggot Password ?</a>
			  	</div>
			  </div>
			</div>
			<?= $this->session->flashdata('alert'); ?>
		</div>
<script type="text/javascript">
	$(function () {
	  $('[data-toggle="tooltip"]').tooltip()
	});
</script>