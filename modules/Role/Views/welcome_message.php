<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to CodeIgniter 4!</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

	<!-- STYLES -->

	
</head>
<body>

<div class="further">

	<?php echo  ROOTPATH;?>

</div>

<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

<footer>
	<div class="environment">

		<p>Page rendered in {elapsed_time} seconds</p>

		<p>Environment: <?= ENVIRONMENT ?></p>

	</div>

	<div class="copyrights">

		<p>&copy; <?= date('Y') ?> CodeIgniter Foundation. CodeIgniter is open source project released under the MIT
			open source licence.</p>

	</div>

</footer>

<!-- SCRIPTS -->

<script>
	function toggleMenu() {
		var menuItems = document.getElementsByClassName('menu-item');
		for (var i = 0; i < menuItems.length; i++) {
			var menuItem = menuItems[i];
			menuItem.classList.toggle("hidden");
		}
	}
</script>

<!-- -->

</body>
</html>
