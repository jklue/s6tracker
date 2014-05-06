<hr>
<div class="login container">
	<div class="row"><h1>Sign up</h1></div>
	
	<div class="row">
		<form action="/users/p_signup" enctype="multipart/form-data" method="POST" role="form" class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
			
			<div class="form-group error">
				<?=$error?>
			</div>

			<div class="form-group">
				<label for="first_name" class="sr-only">First Name:</label>
				<input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name" autofocus>
			</div>

			<br>

			<div class="form-group">
				<label for="last_name" class="sr-only">Last Name:</label>
				<input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name">
			</div>

			<div class="form-group">
				<label for="avatar" class="">Upload an image:</label>
				<input type="file" name="avatar" id="avatar">
			</div>
			
			<div class="form-group">
				<label for="email" class="sr-only">Email:</label>
				<input type="email" name="email" id="email" class="form-control" placeholder="Email">
			</div>

			<br>

			<div class="form-group">
				<label for="password" class="sr-only">Password:</label>
				<input type="password" name="password" id="password" class="form-control" placeholder="Password">
			</div>

			<br>

			<button type="submit" class="btn btn-default loginButton">Sign Up</button>

		</form>
	</div>
</div>
<hr>