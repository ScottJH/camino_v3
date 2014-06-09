<?php 
  
  $productname = 'finding-joe';
  $produtTitle = '"Finding Joe"';
  $price ='$19.95';

?>

<div class="span6 product" id="<?php echo $productname; ?>">        
    <h3><?php echo $produtTitle; ?></h3>

        <a href="images/products/finding_joe.jpg" class="lightbox" title="Finding Joe"><img src="images/products/finding_joe_th.png" class="pull-left" /></a>
        
        <p><strong class="price"><?php echo $price; ?></strong></p>

           <!-- Paypal button goes here -->
           <form class="product" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
              
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="J8MX76ZZS3234">
            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                
          </form>

            <p><strong>Winner 2012 COVR Award</strong></p>  
            <p>Finding Joe explores famed Mythologist Joseph Campbell's continued impact on our culture. The film navigates the stages of what Campbell dubbed "the hero's journey": the challenges, fears, dragons, battles and the hero's inevitable return home as a changed person. Finding Joe shows how Campbell's work is relevant and essential in today's world and how it provides a narrative for how to live a fully realized life—or as Campbell would simply state, how to "follow your bliss."</p>

</div>
