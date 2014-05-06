<div class="home page">
	<!-- Show welcome if user not logged in -->
	<?php if(!$user): ?>
		<h1 id="mainLogo">S6 Tracker</h1>
		<?php echo CORE_PATH; ?>
		<p>An equipment status system<br>for commo soldiers.</p>
		<p>(Optimized for iPhone)</p>
		<form class="pure-form pure-form-aligned" action="/users/p_login" method="POST" >
	    <fieldset>
	      <div class="pure-control-group">
	        <label for="email">Username</label>
	        <?php if ($error == 'error1') { echo '<p class="error">No such email on record.</p>'; } ?>
	        <input id="email" name="email" type="text" placeholder="Username">
	      </div>

	      <div class="pure-control-group">
	        <label for="password">Password</label>
	        <?php if ($error == 'error2') { echo '<p class="error">Incorrect password.</p>'; } ?>
	        <input id="password" name="password" type="password" placeholder="Password">
	      </div>

	      <div class="pure-controls">
	        <button class="pure-button pure-button-primary">Log In</button>
	      </div>
	    </fieldset>
		</form>

	<br>
	<footer>
		<p><a href="http://lukehatfield.com">lukehatfield</a> &copy; 2013</p>
	</footer>
<?php endif; ?>

<!-- Show click areas if user logged in -->
<?php if($user): ?>
	<ul>
		<li class="welcome-company"><a href="/equipment/organization">B Company</a></li>
		<li class="welcome"><span class="title">Welcome</span><br><span class="subButton">"I wish I had this when I was a commo guy," I found myself saying when I first began this student project. Often I would find myself deep inside of Strykers (kind of like a tank) only to notice a problem that I needed to somehow record so I could get the right part when I was back in the office. Enter the S6 Tracker, usable on both mobile devices and larger screens. Click 'B Company' above to begin drilling down to specific equipment types and changing their serial numbers, status', or making a comment.</span></li>
	</ul>

<?php endif; ?>
</div> <!-- END welcome -->