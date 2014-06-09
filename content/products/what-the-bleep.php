<?php 
  
  $productname = 'what-the-bleep';
  $produtTitle = '"What the Bleep Do We Know!?"';
  $price ='$19.95';

?>

<div class="span6 product" id="<?php echo $productname; ?>">        
    <h3><?php echo $produtTitle; ?></h3>

        <a href="images/products/what_the_bleep.jpg" class="lightbox" title="What the Bleep Do We Know!?"><img src="images/products/what_the_bleep_th.png" class="pull-left" /></a>
        
        <p><strong class="price"><?php echo $price; ?></strong></p>

           <!-- Paypal button goes here -->
           <form class="product" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
              
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="T2P876EDF8W6S">
            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                
          </form>

            <p><strong>Science and spirituality come together in this mind-bending trip down the rabbit hole.</strong></p>
            <p>Embark on a mind-bending voyage through the worlds of science and spirituality includes revelations by quantum physics experts, playful animation, and even a conversation with a wise, 35,000-year-old being.</p>       

</div>
