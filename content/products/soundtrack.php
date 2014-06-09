<?php 
  
  $productname = 'sountrack';
  $produtTitle = '"Walking the Camino: Six Ways to Santiago - Motion Picture Soundtrack"';
  $price ='$15';

?>

<div class="span6 product" id="<?php echo $productname; ?>">        
    <h3><?php echo $produtTitle; ?></h3>

        <a href="images/products/cd-front.jpg" class="lightbox" data-group="soundtrack" title="Soundtrack Front Cover"><img src="images/products/cd-front-th.jpg" alt="soundtrack cover" class="pull-left" /></a>
        <a href="images/products/cd-back.jpg" class="lightbox" data-group="soundtrack" title="Soundtrack Back Cover"></a>
        
        <p><strong class="price"><?php echo $price; ?></strong></p>

           <!-- Paypal button goes here -->
           <form class="product" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
              
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="2N58RLQCGUC4Y">
        <input type="hidden" name="weight" value="weight">
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                
          </form>

         <p><strong>Orginal Score by J.J. McGeehan</strong>  

</div>
