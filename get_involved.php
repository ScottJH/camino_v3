<?php 

	session_start();

	$title = 'Get Involved'; 
	$description = 'Donate to Walking the Camino.'; 

include('inc/header.php'); ?>
<div class="donation-element content">
	<div class="row-fluid">
		
		<div class="span6">
			<img src="images/fundraising-santiago.png" class="pull-left" style="margin-left: -10px; margin-top: -10px">
			<h2>Camino to the World...</h2>
			<p>
				With the help of countless individuals from all reaches, we raised enough money to complete the film, and begin the next phase in our journey. The combined efforts of every donor, and our hard working staff, has led <em>Walking the Camino</em> to win an award, sell out, or both, at every film festival we took part in. Every donation helped us reach our goal and we can't thank you enough. ¡Gracias!			
			</p>

			<h2>Our next step</h2>
			<img src="images/fundraising-finisterre.png" class="pull-right" style="margin-right: -5px; margin-top: -28px">
			<p> 
			. . . in spreading the message and spirit of the camino is our national tour. Starting in February 2014, Lydia will be driving the Camino RV to theaters throughout the US. Our goal is to continue to sell out every stop. In order to fufill this, we will be working hard to promote our screenings by contacting businesses, media outlets, and by asking everyone to continue to spread the word. We are still raising funds to help our theatrical run be as successful as possible, to find a distributor, to pay publicists along the way, and to create our feature film DVD.
			</p>

			<p><strong>With your continued support, Walking the Camino will be able to share the spirit of the Camino to audiences across the globe.</strong></p>

			<center><img src="images/fundraising-world.png"></center>

		</div>
		
		<?php
			$page;
			if( $_GET[page]==NULL ) $page="donation-form/form.php";
			else $page=$_GET[page];
			include($page);
		?>

	</div>
</div>

<?php include('inc/footer.php'); ?>