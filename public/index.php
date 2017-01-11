<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hello</title>

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.0/css/foundation.min.css">
</head>
<body>
	<div class="row">
		<div class="medium-12 columns">
			<h1>Todo List</h1>
			<ul>
				<li>Export sql file on container stop</li>
				<li><del>Dynamic ports when provided one is in use</del></li>
				<li>Create custom image with tools needed for WordPress development</li>
			</ul>
		</div>
	</div>

	<div class="row">
		<div class="medium-12 columns">
			<?php
				phpinfo();
			?>
		</div>
	</div>
</body>
</html>