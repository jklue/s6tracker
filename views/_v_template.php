<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	
	<!-- Mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
  <!-- Pure CSS -->
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.3.0/pure-min.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="/css/style.css">

	<!-- Adobe Typekit -->
	<script type="text/javascript" src="//use.typekit.net/llz6tlv.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	
</head>

<body>

	<!-- Show top nav if user logged in -->
	<?php if($user): ?>
    <nav>
    	<ul>
    		<li class="back"><a href="javascript:void(0);">Up</a></li>
    		<li class="labels"><a href="javascript:void(0);">|  Labels</a></li>
    		<li class="logout"><a href="/users/logout">Logout</a></li>    		
    	</ul>
    </nav>
	<?php endif; ?>

	<?php if(isset($content)) echo $content; ?>

	<?php if(isset($client_files_body)) echo $client_files_body; ?>

	<!-- jQuery -->
  <script src='http://code.jquery.com/jquery-latest.js'></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

  <!-- Custom JS -->
  <script src='/js/p4.js'></script>

</body>
</html>