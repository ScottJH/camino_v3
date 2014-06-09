
<?php 
  
  $productname = 'dvd';
  $produtTitle = '"Limited Edition Bonus Materials DVD"';
  $price ='$20';

?>

<div class="span6 product" id="<?php echo $productname; ?>">        
    <h3><?php echo $produtTitle; ?></h3>

        <a href="images/products/bonus-dvd-cover.jpg" class="lightbox" title="Bonus DVD Front Cover" data-group="bonus-dvd"><img src="images/products/bonus-dvd-cover_th.jpg" class="pull-left"/></a>
        <a href="images/products/bonus-dvd-back.jpg" class="lightbox" title="Bonus DVD Back Cover" data-group="bonus-dvd"></a>
        
        <p><strong class="price"><?php echo $price; ?></strong></p>

           <!-- Paypal button goes here -->
           <form class="product" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
              
              <input type="hidden" name="cmd" value="_s-xclick">
              <input type="hidden" name="hosted_button_id" value="TZ33BFRSRURBY">
              <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
              <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            
          </form>

        <strong>Does not include the feature film.</strong><br />        
        <p>Check out more than 2 hours worth of deleted and unseen footage on this DVD that gives you a behind-the-scenes access to more of the Camino's history, a glimpse into "hospitalero" life, a deeper look at the pilgrims featured in the film, and tells the stories of many other pilgrims encountered along the way. Don't wait to order your copy; this is a limited edition offer and is available only while supplies last! <br />
        <strong>NTSC All Regions.</strong></p>

</div>
