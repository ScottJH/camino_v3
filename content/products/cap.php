<?php 
  
  $productname = 'cap';
  $produtTitle = 'Caps';
  $price ='$20';

?>

<div class="span6 product" id="<?php echo $productname; ?>">        
    <h3><?php echo $produtTitle; ?></h3>

        <a href="images/products/camino-caps.png" class="lightbox"><img src="images/products/camino-caps_th.png" alt="some product" class="pull-left" /></a>    
        
        <p><strong class="price"><?php echo $price; ?></strong></p>

          <!-- Paypal button goes here -->
          <form class="product" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
              
          <input type="hidden" name="cmd" value="_s-xclick">
          <input type="hidden" name="hosted_button_id" value="TD36RRZKQD8RW">
          <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
          <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                 
          </form>

          <p>100% cotton hat with adjustable velcro strap.</p>    

</div>
