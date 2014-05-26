<?php 

	session_start();

	$title = 'Get Involved'; 
	$description = 'Donate to Walking the Camino.'; 

include('inc/header.php'); ?>

	<?php include('content/get_involved.html'); ?>

		<?php
			$page;
			if( $_GET[page]==NULL ) $page="donation-form/form.php";
			else $page=$_GET[page];
			include($page);
		?>

<?php include('inc/footer.php'); ?>