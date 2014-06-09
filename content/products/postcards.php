<?php 
  
  $productname = 'postcards';
  $produtTitle = 'Postcards';
  $price ='$5 (for a pack of 10)';

?>

<div class="span6 product clearfix" id="<?php echo $productname; ?>">        
    <h3><?php echo $produtTitle; ?></h3>

            <a href="images/products/postcards/postcard_back_01.jpg" class="lightbox" data-group="postcards" title="Postcard Back"><img src="images/products/postcards/thumbs/postcard_back_01.jpg" class="pull-left" /></a>
            <a href="images/products/postcards/postcard_front_01.jpg" class="lightbox" data-group="postcards" title="Postcard Front-1"></a>
            <a href="images/products/postcards/postcard_front_02.jpg" class="lightbox" data-group="postcards" title="Postcard Front-2"></a>
            <a href="images/products/postcards/postcard_front_03.jpg" class="lightbox" data-group="postcards" title="Postcard Front-3"></a>
            <a href="images/products/postcards/postcard_front_04.jpg" class="lightbox" data-group="postcards" title="Postcard Front-4"></a>
            <a href="images/products/postcards/postcard_front_05.jpg" class="lightbox" data-group="postcards" title="Postcard Front-5"></a>
            <a href="images/products/postcards/postcard_front_06.jpg" class="lightbox" data-group="postcards" title="Postcard Front-6"></a>
            <a href="images/products/postcards/postcard_front_07.jpg" class="lightbox" data-group="postcards" title="Postcard Front-7"></a>
            <a href="images/products/postcards/postcard_front_08.jpg" class="lightbox" data-group="postcards" title="Postcard Front-8"></a>
            <a href="images/products/postcards/postcard_front_09.jpg" class="lightbox" data-group="postcards" title="Postcard Front-9"></a>
            <a href="images/products/postcards/postcard_front_10.jpg" class="lightbox" data-group="postcards" title="Postcard Front-10"></a>      
                   
        <p><strong class="price"><?php echo $price; ?></strong></p>

           <!-- Paypal button goes here -->
           <form class="product" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
              
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="NS4HA8C4Y63KU">
            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">                
          </form>

     
</div>
