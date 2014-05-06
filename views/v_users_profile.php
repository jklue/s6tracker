<div class="profile container">
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1 col-md-4 col-md-offset-4">
			<h1>Profile:</h1>
			<table class="table">
				<tr>
					<td><h3 class="lead">Name:</h3></td>
					<td><h3 class="lead"><span class="highlight"><?=$user->first_name?> <?=$user->last_name?></span></h3></td>
				</tr>
				<tr>
					<td><h3 class="lead">Email:</h3></td>
					<td><h3 class="lead"><span class="highlight"><?=$user->email?></span></h3></td>
				</tr>
				<tr>
					<td><h3 class="lead">Avatar:</h3></td>
					<?php if ($user->avatar != "/core/images/placeholder.png"): ?>
						<td><img src="<?=$user->avatar?>" alt="<?=$user->first_name?> <?=$user->last_name?>" >
					<?php else: ?>
						<td><span class="glyphicon glyphicon-user placeholder"></span>
					<?php endif; ?>
							<form action="/users/p_new_avatar" enctype="multipart/form-data" method="POST" role="form">
								<label for="avatar" class="sr-only">Upload a new avatar:</label>
								<input type="file" name="avatar" id="avatar">
								<br>
								<button type="submit" class="btn btn-default loginButton">Upload New Avatar</button>
							</form>
						</td>
				</tr>
			</table>
		</div>
	</div>
</div>