<?php

require 'vendor/autoload.php';

$linkCount = new LinkCount(get('page'), get('project'), get('namespaces'));

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo $linkCount->getTitle(); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="js/" defer></script>
		<link rel="stylesheet" href="node_modules/oojs-ui/dist/oojs-ui-wikimediaui.min.css">
		<link rel="stylesheet" href="static/index.css">
		<link rel="shortcut icon" type="image/png" href="static/icon.png">
	</head>
	<body>
		<main>
			<h1>Link Count</h1>
			<?php echo (new Form)->getHtml(); ?>
			<div id="out"><?php echo $linkCount->getHtml(); ?></div>
		</main>
		<?php echo (new Footer('.'))->getHTML(); ?>
	</body>
</html>
