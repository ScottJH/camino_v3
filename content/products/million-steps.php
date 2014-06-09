<?php 
  
  $productname = 'million-steps';
  $produtTitle = '"A Million Steps" by Kurt Koontz';
  $price ='$15.95 (Papaerback)';

?>

<div class="span6 product" id="<?php echo $productname; ?>">        
    <h3><?php echo $produtTitle; ?></h3>

        <a href="images/products/a-million-steps.png" class="lightbox" title="A Million Steps"><img src="images/products/a-million-steps_th.png" class="pull-left" /></a>
        
        <p><strong class="price"><?php echo $price; ?></strong></p>

           <!-- Paypal button goes here -->
           <form class="product" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
              
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="PZDS88LJYBGDE">
            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                
          </form>

           <p>Kurt Koontz thought he was well prepared for his 490-mile walking trip on the historic Camino de Santiago pilgrimage route in Spain. He was fit and strong. He had a good guidebook and all the right equipment. His pilgrim passport would grant him access to the shelter of hostels along the way. But all that, however helpful, did not begin to encompass the grandeur of his external or internal adventure. A Million Steps climbs over the high meadows of the Pyrenees, quests through the unceasing wind of the Meseta, and dances in the rains of Galicia. While following the yellow arrows that mark the route, Koontz also navigates through his personal history of addiction, recovery, and love. With outgoing humor and friendliness, he embraces the beauty of the countryside and joyful connections to other pilgrims from around the world. Part diary, part travelogue, A Million Steps is a journey within a journey all the way to the Cathedral de Santiago de Compostela and beyond.</p>

</div>
