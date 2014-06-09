<?php 
  
  $productname = 'pilgrim-guide';
  $produtTitle = '"A Pilgrim\'s Guide to the Camino de Santiago: St. Jean - Roncesvalles - Santiago (Aamino Guides)" by John Brierley';
  $price ='$29.95 (Paperback)';

?>

<div class="span6 product" id="<?php echo $productname; ?>">        
    <h3><?php echo $produtTitle; ?></h3>

        <a href="images/products/camino-guide.png" class="lightbox" title="A Pilgrim's Guide to the Camino de Santiago"><img src="images/products/camino-guide_th.png" class="pull-left" /></a>
        
        <p><strong class="price"><?php echo $price; ?></strong></p>

           <!-- Paypal button goes here -->
           <form class="product" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
              
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="U7PX9CY8SA7GY">
            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                
          </form>

        <p>Now updated to include newer maps and photos—and lighter in weight to support carefree traveling—this comprehensive guidebook to the Camino de Santiago and its offshoots contains all the information needed by modern-day pilgrims wishing to walk the sacred Way of St. James. Overview route planners plus daily stage maps and detailed town plans help sojourners with all the advance preparation they need. The maps feature contour guides to help distinguish the terrain that will be crossed each day, while full information on all pilgrim hostels, as well as details for alternative accommodation, allow travelers to plot adequate nightly stopping points. All reference information is accompanied by helpful spiritual guidelines to support the seeker's inner journey as well as the outer pilgrimage. Otherwise known as the Camino Francés, the main route covered in this volume is the most popular sacred route through Spain, from St. Jean Pied de Port to Santiago.</p>

</div>
