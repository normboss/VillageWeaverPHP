<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
    <title>Maine Village Weaver Shawls and Scarves</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="./css/shawls.css" media="screen" rel="stylesheet" type="text/css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="./js/prices1.js"></script>
    <!--<script src="./js/handlers.js"></script>-->

    <script>
      $(function () {
        $("#banner").load("banner.html");
        $("#main-menu").load("main-menu.html");
        $("#footer").load("footer.html");
        var priceObj = new Prices();
        priceObj.setPrices();
      });
    </script> 
    


  </head>
  <body>

    <div class="banner">
      <span class="text1">Maine Village Weaver</span><span class="text2">Shawls and Scarves</span>
    </div>
    <div id="header-image">
      Hand woven with love
    </div>

    <div id="main-menu" class="home"></div>

    <div class="statement-parent">
      <div class="statement">
        <i>
          "I carefully weave each piece so you can enjoy them for years to come."
        </i>
      </div>
      <div class="signature">Phyllis Leck</div>
    </div>


    <!--
            FULL SIZE SHAWLS CONTAINER
    -->

    <div class="shawls-container">


      <!--BLOCK 1--> 

      <div class="copy-and-image">
        <div class="image-block">
          <!--<a href="shawls.html">-->
          <img src="./images/shawl_knot1.jpg" alt="picture" >
          <!--</a>-->
        </div>
        <div class="copy-block shawl-text1">
          <br>
          <div class="small-heading-row">
            Open Weave 
          </div>
          <div class="small-heading-row">
            Knotweed Shawl<span class="dev">1</span>
          </div>
          <div class="spacer10"></div>
          <div class="content-text-block">
            <div>Cotton and wool shawl woven in my signature 
open weave has a lovely drape.
The white cotton threads are dyed with brown
walnut shells and the wool yarn hand dyed
with local "knotweed" plants.
The natural colors go well with linen.
            </div>
            <br>
            <div>The natural colors go well with linen.</div>
            <br>
            <div class="description-and-price">
              <span>Size 24 x 88 inches</span>
              <span id="OpenWeaveKnotweedShawl" class="price OpenWeaveKnotweedShawl">???</span>
            </div>
            <br>
            <div class="add-to-cart">
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="H58D6B76QXXN8">
                <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
              </form>
            </div>
          </div>
        </div>
      </div>  <!-- end copy-and-image -->

      <!--BLOCK 2--> 

      <div class="copy-and-image block2">
        <div class="image-block steel-grey-shawl-images">
          <!--<img src="./images/shawl_steel.jpg" alt="picture" >-->
          <img src="./images/shawl_steel_1b.jpg" class="image-bottom" alt="Image1">
<!--          <img src="./images/shawl_steel_a.jpg" alt="Image1">-->
          <img src="./images/shawl_steel_2.jpg" class="img-top" alt="Image1">
        </div>
        <div class="copy-block block2 shawl-text2">
          <br>
          <div class="small-heading-row">
            Steel Grey Shawl<span class="dev">2</span>
          </div>
          <div class="spacer10"></div>
          <div class="content-text-block">
            <div>Merino wool/tencel blend hand woven</div>
            <div>into this graceful shawl.</div>
            <br>
            <div>Dry clean only</div>
            <div class="description-and-price">
              <span>Measures 24 x 94 inches</span>
              <span id="SteelGreyShawl" class="price SteelGreyShawl">???</span>
            </div>
            <br>
            <div class="add-to-cart">
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="2GKD5D68DPV7C">
                <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <!--<input type="button" value="Add to Cart"  border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">-->
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
              </form>
            </div>
          </div> 
        </div>
      </div>   <!--  end  copy-and-image --> 

      <!--BLOCK 3--> 

      <div class="copy-and-image">
        <div class="image-block has-insert">
          <img class="image1" src="./images/shawl_sea_foam.jpg" alt="picture" >
          <img class="image2" src="./images/detail_sea_thumb.jpg" alt="picture" >
        </div>
        <div class="copy-block block3 shawl-text3">
          <br>
          <div class="small-heading-row">
            Open Weave 
          </div>
          <div class="small-heading-row">
            Sea Foam Shawl<span class="dev">3</span>
          </div>
          <div class="spacer20"></div>
          <div class="content-text-block">
            <div>
              Cotton yarn is hand dyed with black walnut
              shells then woven with wool yarn the color 
              of blue and green sea foam.
            </div>
            <div class="spacer10"></div>
            <div>
              The open weave gives this shawl a 
              luxurious softness.
            </div> 
            <div></div>
            <br>
            <div>Colors vary in warm linen tones.</div>
            <br>
            <div class="description-and-price">
              <span>Measures 24 by 88 inches</span>
              <span id="OpenWeaveSeaFoamShawl" class="price OpenWeaveSeaFoamShawl">???</span>
            </div>
            <br>
            <div class="add-to-cart">
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="42PMR3GJL7HF8">
                <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
              </form>
            </div>
            <br>
            <div>
              Hit and miss dye pattern creates the natural look of
              the sea foam shawl.
            </div>
          </div>
        </div>
      </div>   <!--  end  copy-and-image --> 

      <!--BLOCK 4--> 

      <br>
      <br>
      <div class="large-heading-row">
        Wraps and Scarves
      </div>

      <div class="copy-and-image">
        <div class="image-block">
          <img src="./images/wrap_jewel.jpg" alt="picture" >
        </div>
        <div id="asymmetrical" class="copy-block shawl-text4">
          <br>
          <div class="small-heading-row">
            Asymmetrical Jewel Wrap<span class="dev">4</span>
          </div>
          <div class="spacer20"></div>
          <div class="content-text-block">
            <div>Merino Wool Blend and
Boucle Cotton in jewel tones.
Available in small, medium and large.
</div>
            <br>
            <div></div>
            <br>
            <div class="description-and-price">
              <span>.</span>
              <span id="AsymmetricalJewelWrap" class="price AsymmetricalJewelWrap">???</span>
            </div>
            <div class="add-to-cart-dropdown">
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="JDJV9NA765N6C">
                <table>
                  <tr><td><input type="hidden" name="on0" value="Sizes"></td></tr><tr><td><select name="os0">
                        <option value="Small">Small</option>
                        <option value="Medium">Medium</option>
                        <option value="Large">Large</option>
                      </select> </td></tr>
                </table>
                <br>
                <br>
                <br>
                <div class="add-to-cart-button">
                  <input type="hidden" name="currency_code" value="USD">
                  <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                  <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div> <!--  end  copy-and-image -->
      <br>
      <br>

      <!-- BLOCK 4a -->


      <div class="copy-and-image">
        <div class="image-block">
          <img src="./images/shawlsM_v3.png" alt="picture" >
        </div>
        <div id="asymmetrical" class="copy-block shawl-text5">
          <br>
          <div class="small-heading-row">
            <div>Open Weave</div>
            <div>Knotweed Wrap</div>
          </div>
          <div class="spacer20"></div>
          <div class="content-text-block">
            <br>
            <div>
              Light and fluid cotton and wool wrap woven
              in my signature open weave.
              The white cotton threads are dyed with brown
              walnut shells and the wool yarn hand dyed
              with local "knotweed" plants.
              The natural colors dress up jeans and look
              terrific with linen.
            </div>
            <br>
            <div class="description-and-price">
              <span>Available in small, medium and large.</span>
              <span id="OpenWeaveKnotweedWrap" class="price OpenWeaveKnotweedWrap">???</span>
            </div>
            <div class="add-to-cart-dropdown">
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="388GQRZHB8VTG">
                <table>
                  <tr><td><input type="hidden" name="on0" value="Sizes"></td></tr><tr><td><select name="os0">
                        <option value="Small">Small </option>
                        <option value="Medium">Medium </option>
                        <option value="Large">Large </option>
                      </select> </td></tr>
                </table>
                <br>
                <br>
                <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
              </form>
            </div>
          </div>
        </div>
      </div> <!--  end  copy-and-image -->
      <br>


      <!--BLOCK 5F --> 

      <div class="copy-and-image">
        <div class="image-block">
          <img src="./images/wrap_steel.jpg" alt="picture" >
        </div>
        <div id="asymmetrical" class="copy-block shawl-text6">
          <br>
          <div class="small-heading-row">
            Asymmetrical Wrap in Steel Grey<span class="dev">5</span>
          </div>
          <div class="spacer20"></div>
          <div class="content-text-block">
            <div>Graceful and easy to wear. Asymetrical
              wrap is hand woven in versatile steel color.
              Merino wool/tencel blend yarn.</div>
            <div>Dry clean only</div>
            <br>
            <div class="description-and-price">
              <span></span>
              <span id="AsymmetricalWrapinSteelGrey" class="price AsymmetricalWrapinSteelGrey">???</span>
            </div>
            <br>
            <div class="add-to-cart">
              <span></span>
              <span>
                <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="5EHJMB99TAX3E">
                  <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                  <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>
              </span>
            </div>
          </div>
        </div> <!-- end copy-block -->
      </div> <!--  end  copy-and-image -->

      <!--BLOCK 6--> 

      <div class="copy-and-image">
        <div class="image-block">
          <img src="./images/scarf_knot.jpg" alt="picture" >
        </div>
        <div id="asymmetrical" class="copy-block shawl-text7">
          <br>
          <div class="small-heading-row">
            Open Weave Knotweed Scarf<span class="dev">6</span>
          </div>
          <div class="spacer20"></div>
          <div class="content-text-block">
            <div>Soft cotton and wool scarf is hand</div>
            <div>dyed using local plants. Black </div>
            <div>walnut shells color the cotton and </div>
            <div>the wool/tencel blend is dyed using locally gathered knotweed. </div>
            <div>Each one unique as color varies in shades of warm linen. </div>
            <br>
            <div class="description-and-price">
              <span>Measures 10 x 88 inches</span>
              <span id="OpenWeaveKnotweedScarf" class="price OpenWeaveKnotweedScarf">???</span>
            </div>
            <br>
            <br>
            <div class="add-to-cart">
              <span></span>
              <span>
                <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="98MJLASZK2MZY">
                  <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                  <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>
              </span>
            </div>
          </div>
        </div>
      </div> <!--  end  copy-and-image -->

      <!--BLOCK 7--> 

      <div class="copy-and-image">
        <div class="image-block">
          <img src="./images/scarf_sea_glass.jpg" alt="picture" >
        </div>
        <div id="asymmetrical" class="copy-block shawl-text8">
          <br>
          <div class="small-heading-row">
            Sea Glass Scarf<span class="dev">7</span>
          </div>
          <div class="spacer20"></div>
          <div class="content-text-block">
            <div>The greens and blues of beach</div>
            <div>sea glass are woven together</div>
            <div>to create this lovely scarf.</div>
            <div>Cotton/merino rayon boucle. </div>
            <div>Hand wash.</div>
            <br>
            <div class="description-and-price">
              <span>Measures 12 by 90 inches </span>
              <span id="SeaGlassScarf" class="price SeaGlassScarf">???</span>
            </div>
            <br>
            <br>
            <div class="add-to-cart">
              <span></span>
              <span>
                <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="7JKAR8CNBQS5Q">
                  <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                  <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>
              </span>
            </div>
          </div>
        </div> <!-- end copy-block -->
      </div> <!--  end  copy-and-image -->


    </div> <!--  end shawls-container -->


    <!--  ------------------------------------------------------------
    MOBILE SIZE SHAWLS CONTAINER
--------------------------------------------------------------- -->

    <div class="shawls-container-mobile">
      <!--
        SHAWLS
      -->
      <!-- BLOCK 1M -->
      <div class="large-heading-row">Shawls</div>
      <br>

      <div class="shawls-block">
        <div class="copy-and-image">
          <div class="image-block">
            <img src="./images/shawl_knot1.jpg" alt="picture" >
          </div>
          <div class="copy-block">
            <div class="spacer20"></div>
            <div class="small-heading-row">
              Open Weave
            </div>
            <div class="small-heading-row">
              Knotweed Shawl<span class="dev">1M</span>
            </div>
            <div class="spacer10"></div>
            <div class="content-text-block">
              <div>Cotton and wool shawl woven in my signature open weave has a lovely drape.</div>
              <div>
                The white cotton threads are dyed with brown walnut
                shells and the wool yarn hand dyed with a local "knotweed" plant.
              </div>
              <div>The natural colors go well with linen.</div>
              <br>
              <div class="description-and-price">
                <span>Size 24 x 88 inches</span>
                <span id="OpenWeaveKnotweedShawlM" class="price OpenWeaveKnotweedShawl">???</span>
              </div>
              <br>
              <div class="add-to-cart">
                <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="H58D6B76QXXN8">
                  <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                  <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>
              </div>
            </div> <!-- content-text-block -->
          </div> <!-- end copy-block -->
        </div>  <!-- end copy-and-image -->
      </div> <!-- end shawls-block -->
      <br>
      <br>

      <!-- BLOCK 2M -->

      <div class="shawls-block">
        <div class="copy-and-image">
          <div class="image-block">
            <img id="img-top-1" src="./images/shawl_steel_1b.jpg" alt="Image1">
            <img id="img-top-0" src="./images/shawl_steel_2.jpg" class="img-top" alt="Image1">
            <span id="mobile-device-msg1">Click image for detail</span>
          </div>
<!--        <div class="image-block steel-grey-shawl-images">
          <img src="./images/shawl_steel_11.jpg" class="image-bottom" alt="Image1">
          <img src="./images/shawl_steel_2.jpg" class="img-top" alt="Image1">
        </div>-->

          <div class="copy-block">
            <div class="spacer20"></div>
            <div class="small-heading-row">
              Steel Grey Shawl<span class="dev">2M</span>
            </div>
            <div class="spacer10"></div>
            <div class="content-text-block">
              <div>Merino wool/tencel blend hand woven</div>
              <div>into this graceful shawl.</div>
              <br>
              Dry clean only
              <div class="description-and-price">
                <span>Measures 24 x 94 inches</span>
                <span id="SteelGreyShawlM" class="price SteelGreyShawl">???</span>
              </div>
              <br>
              <div class="add-to-cart">
                <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="2GKD5D68DPV7C">
                  <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                  <!--<input type="button" value="Add to Cart"  border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">-->
                  <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>
              </div>
            </div> 
          </div>
        </div>  <!-- end copy-and-image -->
      </div> <!-- shawls-block -->
      <br>
      <br>

      <!-- BLOCK 3M -->

      <div class="shawls-block">
        <div class="copy-and-image">
          <div class="image-block has-insert">
            <img class="image1" src="./images/shawl_sea_foam.jpg" alt="picture" >
            <img class="image2" src="./images/detail_sea_thumb.jpg" alt="picture" >
          </div>
          <div class="copy-block">
            <div class="spacer20"></div>
            <div class="small-heading-row">
              <div>Open Weave</div>
            </div>
            <div class="small-heading-row">
              <span>Sea Foam Shawl</span><span class="dev">3M</span>
            </div>
            <div class="spacer10"></div>
            <div class="content-text-block">
              <div>
                Cotton yarn is hand dyed with black walnut
                shells then woven with wool yarn the color 
                of blue and green sea foam.
              </div>
              <div class="spacer10"></div>
              <div>
                The open weave gives this shawl a 
                luxurious softness and the hit and miss dye
                pattern produces a natural look.
              </div> 
              <div></div>
              <br>
              <div class="description-and-price">
                <span>Measures 24 by 88 inches</span>
                <span id="OpenWeaveSeaFoamShawlM" class="price OpenWeaveSeaFoamShawl">???</span>
              </div>
              <br>
              <div class="add-to-cart">
                <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="42PMR3GJL7HF8">
                  <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                  <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>
              </div>
              <br>
            </div>
          </div>
        </div>  <!-- end copy-and-image -->
      </div> 

      <br>
      <br>
      <br>

      <!-- BLOCK 4M -->

      <div class="large-heading-row">
        Wraps and Scarves
      </div>
      <br>
      <div class="shawls-block">
        <div class="copy-and-image">
          <div class="image-block">
            <img src="./images/wrap_jewel.jpg" alt="picture" >
          </div>
          <div id="asymmetrical" class="copy-block">
            <br>
            <div class="small-heading-row">
              Asymmetrical Wrap in Jewel<span class="dev">4M</span>
            </div>
            <div class="spacer20"></div>
            <div class="content-text-block">
              <div>Merino Wool Blend and</div>
              <div>Boucle Cotton in jewel tones.</div>
              <div></div>
              <div class="description-and-price">
                <span>Available in small, medium and large.</span>
                <span id="AsymmetricalJewelWrapM" class="price AsymmetricalJewelWrap">???</span>
              </div>
              <br>
              <div class="add-to-cart-dropdown">
                <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="JDJV9NA765N6C">
                  <table>
                    <tr><td><input type="hidden" name="on0" value="Sizes"></td></tr><tr><td><select name="os0">
                          <option value="Small">Small</option>
                          <option value="Medium">Medium</option>
                          <option value="Large">Large</option>
                        </select> </td></tr>
                  </table>
                  <br>
                  <div>
                    <span>
                      <input type="hidden" name="currency_code" value="USD">
                      <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                      <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                    </span>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div> <!-- end  copy-and-image -->
      </div>
      <br>
      <br>

      <!-- BLOCK 4a M -->

      <div class="shawls-block">
        <div class="copy-and-image">
          <div class="image-block">
            <img src="./images/shawlsM_v3.png" alt="picture" >
          </div>
          <div id="asymmetrical" class="copy-block">
            <br>
            <div class="small-heading-row">
              Open Weave
            </div>
            <div class="small-heading-row">
              Knotweed Asymmetrical Wrap
            </div>
            <div class="spacer20"></div>
            <div class="content-text-block">
              <div>
                Light and fluid cotton and wool wrap woven
                in my signature open weave.
                The white cotton threads are dyed with brown
                walnut shells and the wool yarn hand dyed
                with local "knotweed" plants.
                The natural colors dress up jeans and look
                terrific with linen.
              </div>
              <div class="description-and-price">
                <span>Available in small, medium and large.</span>
                <span id="OpenWeaveKnotweedWrapM" class="price OpenWeaveKnotweedWrap">???</span>
              </div>
              <br>
              <div class="add-to-cart-dropdown">
                <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="JDJV9NA765N6C">
                  <table>
                    <tr><td><input type="hidden" name="on0" value="Sizes"></td></tr><tr><td><select name="os0">
                          <option value="Small">Small</option>
                          <option value="Medium">Medium</option>
                          <option value="Large">Large</option>
                        </select> </td></tr>
                  </table>
                  <br>
                  <div>
                    <span></span>
                    <span>
                      <input type="hidden" name="currency_code" value="USD">
                      <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                      <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                    </span>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div> <!-- end  copy-and-image -->
      </div>
      <br>
      <br>

      <!-- BLOCK 5M -->
      
      <div class="shawls-block">

        <div class="copy-and-image">
          <div class="image-block">
            <img src="./images/wrap_steel.jpg" alt="picture" >
          </div>
          <div id="asymmetrical" class="copy-block">
            <br>
            <div class="small-heading-row">
              Asymmetrical Wrap in Steel Grey<span class="dev">5M</span>
            </div>
            <div class="spacer20"></div>
            <div class="content-text-block">
              <div>Graceful and easy to wear. Asymmetrical</div>
              <div>wrap is hand woven in versatile steel color.</div>
              <div>Merino wool/tencel blend yarn.</div>
              <div>Dry clean only</div>
              <br>
              <div class="description-and-price">
                <span></span>
                <span id="AsymmetricalWrapinSteelGreyM" class="price AsymmetricalWrapinSteelGrey">???</span>
              </div>
              <br>
              <div class="add-to-cart">
                <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="5EHJMB99TAX3E">
                  <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                  <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>
              </div>
            </div>
          </div> <!-- end copy-block -->
        </div> <!-- end  copy-and-image -->
      </div>
      <br>
      <br>

      <!-- BLOCK 6M -->
      
      <div class="shawls-block">
        <div class="copy-and-image">
          <div class="image-block">
            <img src="./images/scarf_knot.jpg" alt="picture" >
          </div>
          <div id="asymmetrical" class="copy-block">
            <div class="spacer20"></div>
            <div class="small-heading-row">
              Open Weave Knotweed Scarf<span class="dev">6M</span>
            </div>
            <div class="spacer10"></div>
            <div class="content-text-block">
              <div>Soft cotton and wool scarf is hand dyed</div>
              <div>using local plants. Black walnut shells</div>
              <div>color the cotton and the wool/tencel</div>
              <div>blend is dyed using locally gathered knotweed plant. </div>
              <div>Each one unique as color varies in shades of warm linen. </div>
              <br>
              <br>
              <div class="description-and-price">
                <span></span>
                <span id="OpenWeaveKnotweedScarfM" class="price OpenWeaveKnotweedScarf">???</span>
              </div>
              <br>
              <div class="add-to-cart">
                <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="98MJLASZK2MZY">
                  <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                  <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>
              </div>
            </div>
          </div> <!-- end copy-block -->
        </div> <!-- end  copy-and-image -->
      </div>
      <br>
      <br>

      <!-- BLOCK 7M -->
      <div class="shawls-block">
        <div class="copy-and-image">
          <div class="image-block">
            <img src="./images/scarf_sea_glass.jpg" alt="picture" >
          </div>
          <div id="asymmetrical" class="copy-block">
            <div class="spacer20"></div>
            <div class="small-heading-row">
              Sea Glass Scarf<span class="dev">7M</span>
            </div>
            <div class="spacer10"></div>
            <div class="content-text-block">
              <div>The greens and blues of beach</div>
              <div>sea glass are woven together</div>
              <div>to create this lovely scarf.</div>
              <div>Cotton/merino rayon boucle. </div>
              <div>Hand wash.</div>
              <br>
              <div class="description-and-price">
                <span>12 by 90 inches </span>
                <span id="SeaGlassScarfM" class="price SeaGlassScarf">???</span>
              </div>
              <br>
              <br>
              <div class="add-to-cart">
                <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="7JKAR8CNBQS5Q">
                  <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                  <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>
              </div>
            </div>
          </div> <!-- end copy-block -->
        </div> <!-- end  copy-and-image -->
      </div>
      <br>
      <br>

    </div> <!-- end shawls-container-mobile -->


    <div id="footer"></div>


    <script>
      const topImg0 = document.getElementById('img-top-0');
      const topImg1 = document.getElementById('img-top-1');
      topImg0.style.display = 'none';

      function isMobileDevice() {
        //return (typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf('IEMobile') !== -1);
        return true;
      };
      
      const mobile1 = document.getElementById('mobile-device-msg1');
      if ( !isMobileDevice() ) {
        mobile1.hidden = true;
      }
      
      topImg0.onclick = function() {
        if ( isMobileDevice() ) {
          topImg0.style.display = 'none';
          topImg1.style.display = 'inline-block';
        }
      };

      topImg1.onclick = function() {
        if ( isMobileDevice() ) {
          topImg1.style.display = 'none';
          topImg0.style.display = 'inline';
        }
      };
      
    </script>

    
  </body>
</html>
