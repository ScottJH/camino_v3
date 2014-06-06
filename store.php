<?php 

	$title = 'Store'; 
	$description = '';

	//Products

	$testproduct = file_get_contents('content/products/test-product'); 

include('inc/header.php'); ?>

	<div class="content">
	<h1>Store</h1>	
	<span class="cms-editable" id="headline-message">
		Lorem testin messge blah blah.
	</span>	
	<hr>
		<div class="row-fluid">	
			<?php echo "$testproduct"; ?>		
		</div>
	</div>
<?php include('inc/footer.php'); ?>