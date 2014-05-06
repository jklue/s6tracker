<hr>
<div class="login container">
	<div class="row">
		<h1>Log In</h1></div>
	<div class="row">
		<form action="/users/p_login" method="POST" role="form" class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
			
			<div class="form-group">
				<h4><?=$success?></h4>
			</div>

			<div class="form-group">
				<label for="email" class="sr-only">Email:</label>
				<input type="email" name="email" id="email" class="form-control" placeholder="Email" autofocus>
				<?php if ($error == 'error1') { echo '<br> <p class="error">No such email on record.</p>'; } ?>
			</div>

			<br>

			<div class="form-group">
				<label for="password" class="sr-only">Password:</label>
				<input type="password" name="password" id="password" class="form-control" placeholder="Password">
				<?php if ($error == 'error2') { echo '<br> <p class="error">Incorrect password.</p>'; } ?>
			</div>

			<br>
		
			<button type="submit" class="btn btn-default loginButton" >Log in</button>
		
		</form>
	</div>
</div>
<hr>