<?php 

	$title = 'Store'; 
	$description = '';

include('inc/header.php'); ?>

	<div class="content">
	<h1>Store</h1>	
	<span class="cms-editable" id="headline-message">
		Lorem testin messge blah blah.
	</span>

	<hr>
	
	<ul class="nav nav-pills">
		<li><a href="#media">Media</a></li>
		<li><a href="#apparel">Apparel</a></li>
		<li><a href="#accessories">Accessories</a></li>
		<li><a href="#other-media">Other Media</a></li>
	</ul>

	<hr>

	<h2 id="media">Media</h2>
		<div class="row-fluid">	
			<?php 
			include('content/products/bonus-dvd.php'); 
			?>
			<?php 
			include('content/products/soundtrack.php'); 
			?>
		</div>
	<a href="#" class="btn btn-default pull-right">Back to top ^</a>
	<div class="clearfix"></div>	
	<hr>
	<h2 id="apparel">Apparel</h2>
		<div class="row-fluid">
			<?php include('content/products/shirt-womens.php'); ?>
			<?php include('content/products/shirt-mens.php'); ?>
		</div>
		<div class="row-fluid">
			<?php include('content/products/cap.php'); ?>
		</div>
	<a href="#" class="btn btn-default pull-right">Back to top ^</a>
	<div class="clearfix"></div>	
	<hr>
	<h2 id="accessories">Accessories</h2>
		<div class="row-fluid">
			<?php include('content/products/patches.php'); ?>
			<?php include('content/products/postcards.php'); ?>
		</div>
		<div class="row-fluid">
			<?php include('content/products/poster.php'); ?>
			<?php include('content/products/water-bottle.php'); ?>
		</div>
		<div class="row-fluid">
			<?php include('content/products/decals.php'); ?>
			<?php include('content/products/tote-bag.php'); ?>
		</div>
	<a href="#" class="btn btn-default pull-right">Back to top ^</a>
	<div class="clearfix"></div>	
	<hr>
	<h2 id="other-media">Other Media</h2>
		<div class="row-fluid">
			<?php include('content/products/million-steps.php'); ?>
			<?php include('content/products/pilgrim-guide.php'); ?>
		</div>
		<div class="row-fluid">
			<?php include('content/products/what-the-bleep.php'); ?>
			<?php include('content/products/finding-joe.php'); ?>
		</div>

		<a href="#" class="btn btn-default pull-right">Back to top ^</a>
	<div class="clearfix"></div>	

	
	</div>
<?php include('inc/footer.php'); ?>