<?php 
  
  $productname = 'shirt-womens';
  $produtTitle = 'Women\'s T-Shirt';
  $price ='$20';

?>

<div class="span6 product" id="<?php echo $productname; ?>">        
    <h3><?php echo $produtTitle; ?></h3>


        <a href="images/products/t-shirt-womens_front.png" class="lightbox" data-group="shirt-womens" title="Women's Shirt Front"><img src="images/products/t-shirt-womens_front_thumb.png" class="pull-left" /></a>
        <a href="images/products/t-shirt-womens_side.png" class="lightbox" data-group="shirt-womens" title="Women's Shirt Side"></a>
        <a href="images/products/t-shirt-womens_back.png" class="lightbox" data-group="shirt-womens" title="Women's Shirt Back"></a>
        
        <p><strong class="price"><?php echo $price; ?></strong></p>

           <!-- Paypal button goes here -->
           <form class="product" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
              
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="3CGPEP9YLFQDJ">
        <table>
        <tr><td><input type="hidden" name="on0" value="Sizes">Sizes</td></tr><tr><td><select name="os0">
          <option value="X-Small">X-Small $20.00 USD</option>
          <option value="Small">Small $20.00 USD</option>
          <option value="Medium">Medium $20.00 USD</option>
          <option value="Large">Large $20.00 USD</option>
          <option value="X-Large">X-Large $20.00 USD</option>
          <option value="XXL">XXL $20.00 USD</option>
        </select> </td></tr>
        </table>
        <input type="hidden" name="currency_code" value="USD">
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
        <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                
          </form>

        <p>100% cotton t shirt</p>        
        <table class="sizes">
          <tr>
            <th>Sizes</th>
            <th>Width</th>
            <th>Length</th>
          </tr>
          <tr>
            <td>X-Small</td>
            <td>16"</td>
            <td>23.5"</td>
          </tr>
          <tr>
            <td>Small</td>
            <td>18"</td>
            <td>25"</td>
          </tr>
          <tr>
            <td>Medium</td>
            <td>20"</td>
            <td>26"</td>
          </tr>
          <tr>
            <td>Large</td>
            <td>22"</td>
            <td>27"</td>
          </tr>
          <tr>
            <td>X-Large</td>
            <td>24"</td>
            <td>28"</td>
          </tr>
          <tr>
            <td>XXL</td>
            <td>26"</td>
            <td>29"</td>
          </tr>
        </table>      

</div>
