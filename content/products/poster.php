<?php 
  
  $productname = 'poster';
  $produtTitle = 'Poster';
  $price ='$15';

?>

<div class="span6 product clearfix" id="<?php echo $productname; ?>">        
    <h3><?php echo $produtTitle; ?></h3>

        <a href="images/products/poster-with-laurels.jpg" class="lightbox" title="Poster"><img src="images/products/poster-with-laurels_th.png" class="pull-left" /></a>
        
        <p><strong class="price"><?php echo $price; ?></strong></p>

           <!-- Paypal button goes here -->
           <form class="product" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
              
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="9X43DXVJSLRY4">
            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                
          </form>

          <p><strong>Dimensions:</strong> 27" by 39"</p>              

</div>
