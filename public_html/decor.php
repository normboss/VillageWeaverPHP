<?php
if(!session_id()) session_start();
$_SESSION['pagename'] = "decor";
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
    <title>Village Weaver</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="./css/decor.css" media="screen" rel="stylesheet" type="text/css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="./js/prices1.js"></script>

    <script>
      $(function () {
        $("#banner").load("banner.php");
        $("#main-menu").load("main-menu.php");
        $("#footer").load("footer.php");
        var priceObj = new Prices();
        priceObj.setPrices();
      });
    </script> 

    <script>
      (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
          return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    
<!--    <script type="text/javascript">
      var myWidth = 0, myHeight = 0;
      if (typeof (window.innerWidth) == 'number') {
        myWidth = window.innerWidth;
        myHeight = window.innerHeight;
      } else if (document.documentElement && (document.documentElement.clientWidth || document.documentElement.clientHeight)) {
        myWidth = document.documentElement.clientWidth;
        myHeight = document.documentElement.clientHeight;
      } else if (document.body && (document.body.clientWidth || document.body.clientHeight)) {
        myWidth = document.body.clientWidth;
        myHeight = document.body.clientHeight;
      }
    </script>-->

<!--    <script>
      $(document).ready(function () {
        $(window).resize(function () {
//              $("span").text(x += 1);
          var myWidth = 0, myHeight = 0;
          if (typeof (window.innerWidth) == 'number') {
            myWidth = window.innerWidth;
            myHeight = window.innerHeight;
          } else if (document.documentElement && (document.documentElement.clientWidth || document.documentElement.clientHeight)) {
            myWidth = document.documentElement.clientWidth;
            myHeight = document.documentElement.clientHeight;
          } else if (document.body && (document.body.clientWidth || document.body.clientHeight)) {
            myWidth = document.body.clientWidth;
            myHeight = document.body.clientHeight;
          }
//          if (myWidth < 900)
//            window.location.href = "home-decorM1.html";
        });
      });
    </script>-->
  </head>
  <body>
    <div class="banner">
      <span class="text1">Maine Village Weaver</span><span class="text2">Home Decor</span>
    </div>
    <div id="header-image">
      <!-- Hand woven with love -->
    </div>

    <div id="main-menu" class="home"></div>

    <div class="statement-parent">
      <div class="statement">
        <i>
          "I collaborate with my metal artist husband creating custom window treatments."
        </i>
      </div>
      <div class="signature">Phyllis Leck</div>
    </div>

    <!--
      HOME DECOR CONTAINER
    -->
    <div class="home-decor-container">

      <!--      <div class="home-decor-header">
              <h2>Natural Window Treatments</h2>
              <p>
                Open Weave Curtains and swags are hand dyed for a natural look.
              </p>
            </div>-->
      <div class="large-heading-row">
        <h2>Natural Window Treatments</h2>
      </div>

      <!-- ******************************************************
            BLOCK 1
      ***********************************************************-->
      <div  class="copy-and-image">
        <div class="image-block">
          <a href="popOutSwag.html" target="_blank">
            <div class="swag-image-block home-decor">
              <h4>Click to see full image.</h4>
            </div>
          </a>
        </div>
        <div id="home-decor-block1" class="copy-block home-decor">
          <div class="content-text-block">
            <div class="small-heading-row-centered">
              <h4>Open Weave Knotweed <i>Swags</i></h4>
            </div>
            <div>Maine Village Weaver's signature </div>
            <div>Open Weave Curtains and swags </div>
            <div>are hand dyed for a natural look.</div>
            <div class="spacer10"></div>
            <div>I stain the cotton threads with brown</div>
            <div>walnut and dye the wool yarn with</div>
            <div>knotweed plants I gather locally. </div>
            <div class="spacer10"></div>
            <div class="small-type">Hand Forged <a href="#Brackets">Brackets</a> by Scottish Wrought Iron sold below</div>
          </div> <!-- end content-text-block -->
          <div id="home-decor-block1a">
            <img src="./images/decor_v4.png" alt="picture" >
            <div class="content-text-block">
              <div>Custom length swag measures 150 inches.</div>
            </div>
          </div>

        </div> <!-- end home-decor-block1 -->
      </div>


      <!-- ******************************************************
            BLOCK 1A
      ***********************************************************-->


      <!-- ******************************************************
            BLOCK 1B
      ***********************************************************-->
      <div  class="copy-and-image">
        <div class="image-block">
          <img src="./images/swag_cafe.jpg" alt="picture" >
          <div class="spacer10"></div>
        </div>
        <div id="home-decor-block1b" class="copy-block home-decor">
          <div class="content-text-block">
            <br>
            <span class="small-heading-row">Large Swag:</span>
            <div class="description-and-price">
              <span>Measures 24 x 108 inches</span>
              <span id="LargeSwag" class="price LargeSwag">???</span>
            </div>
            <!--<br>-->
            <div class="add-to-cart">
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="RZNLJ3CS9R9BC">
                <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
              </form>
            </div>
            <br>
            <div><span class="small-heading-row">Small Swag:</span>  Shown on the left with a pair of Open Weave Knotweed cafe curtains.</div>
            <div class="description-and-price">
              <span>Measures 24 x 94 inches</span><span id="SmallSwag" class="price SmallSwag"></span>
            </div>
            <br>
            <div class="add-to-cart">
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="SLVJDCSX3K9RG">
                <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
              </form>
            </div>
          </div> <!-- end content-text-block -->

          <div class="small-heading-row-left">
            <div class="small-heading-row-centered">
              Open Weave Knotweed
            </div>
            <div class="small-heading-row-centered">
              <i>Cafe Curtains</i>
            </div>
            <div class="spacer10"></div>
          </div>
          <div class="content-text-block">
            <div>
              Two panels, in my signature open weave knotweed fabric.
            </div>
            <div class="description-and-price">
              <span>Each panel 24 x 26 inches</span><span id="OpenWeaveKnotweedCafeCurtains" class="price OpenWeaveKnotweedCafeCurtains">???</span>
            </div>
            <br>
            <div class="add-to-cart">
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="DE7F6XSL27F5J">
                <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
              </form>
            </div>
            <br>
          </div>
          <div class="content-text-block">
            <div class="small-type">Custom Lengths made to order</div>
            <div class="small-type">Hand Forged <a href="#Brackets">Brackets</a> by Scottish Wrought Iron sold below</div>
          </div>
        </div> <!-- end home-decor-block1 -->
      </div>
      <!-- ******************************************************
            BLOCK 2
      ***********************************************************-->

      <div class="copy-and-image">
        <div class="image-block">
          <img src="./images/knotweed_panel.jpg" alt="picture" >
        </div>
        <div  id="home-decor-block2" class="copy-block home-decor">
          <div class="content-text-block">
            <br>
            <br>
            <br>
            <div class="small-heading-row-centered">
              Open Knotweed Panel<br>with self valance
            </div>
            <br>
            <div class="content-text-block">
              <div>Shown casually draped over a tension rod. </div>
              <div>Open weave cotton and wool. </div>
              <div>I stain the cotton threads with brown </div>
              <div>walnut and dye the wool yarn with </div>
              <div>knotweed plants I gather locally. </div>
              <br>
              <div>Custom lengths made to order.</div>
              <br>
              <div class="description-and-price">
                <span>measure 24 x 94 inches</span><span id="OpenKnotweedPanelwithselfvalance" class="price OpenKnotweedPanelwithselfvalance">???</span>
              </div>
              <div class="add-to-cart">
                <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="26P9HF4FVFUXW">
                  <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                  <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>
              </div>
              <br>
              <div class="small-type">Hand Forged <a href="#Brackets">Brackets</a> by Scottish Wrought Iron sold below</div>
            </div>
          </div>
        </div>
      </div>

      <!-- ******************************************************
            BLOCK 3
      ***********************************************************-->

      <div class="copy-and-image">
        <div class="image-block home-decor-1 decor3-image1">
          <!--<img src="./images/2panel_curtain1.jpg" alt="picture" >-->
          <!--<br>-->
          <div class="decor3-image-text">Custom lengths made to order</div>
          <div class="decor3-image2">
            <img src="./images/detail_slub_thumb0.jpg">
          </div>
        </div>
        <div id="home-decor-block3" class="copy-block home-decor">
          <div class="content-text-block">
            <br>
            <div class="small-heading-row-centered">
              Open Weave Knotweed Panel<br>with Rod Pocket
            </div>
            <br>
            <div>Displayed on the left of photo. </div>
            <div>2 inch rod pocket  for easy hanging. </div>
            <div>I stain the cotton threads with brown </div>
            <div>walnut and dye the wool yarn with </div>
            <div>knotweed plants I gather locally.</div>
            <div class="spacer10"></div>
            <div class="description-and-price">
              <span>Measures 24 x 72 inches</span><span id="OpenWeaveKnotweedPanelwithRodPocket" class="price OpenWeaveKnotweedPanelwithRodPocket">???</span>
            </div>
            <div class="add-to-cart">
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="STCPWCVZWFXCU">
                <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
              </form>
            </div>
            <div class="small-heading-row">
              <h4>Cotton and Linen Curtain Panel</h4>
            </div>
            <!--            <div>Displayed on right of photo</div>
                        <div>Detail shows texture of linen slubs in the weave.</div>
                        <div>Two inch rod pocket for carefree hanging.</div>-->
            Displayed on right  of photo. Detail shows texture
            of linen slubs in the weave. Two inch rod pocket
            for carefree hanging. 
            <div class="spacer10"></div>
            <div class="description-and-price">
              <span>Measures 24 by 84 inches</span><span id="CottonandLinenCurtainPanel" class="price CottonandLinenCurtainPanel">???</span>
            </div>
            <div></div>
            <div class="add-to-cart">
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="YJYLYTTBGNEKY">
                <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
              </form>
            </div>
            <div class="small-type">Hand Forged <a href="#Brackets">Brackets</a> by Scottish Wrought Iron sold below</div>
          </div>
        </div>
      </div>
      <br>
      <!-- ******************************************************
            BLOCK 4
      ***********************************************************-->

      <div class="large-heading-row">
        <h2>Decorative Touches</h2>
      </div>

      <div class="copy-and-image">
        <div class="image-block home-decor-1">
          <img src="./images/table_runner2.jpg" alt="picture" >
        </div>
        <div id="home-decor-block4" class="copy-block home-decor">
          <br>
          <br>
          <br>
          <div class="content-text-block">
            <div class="small-heading-row-centered">
              Open Weave Knotweed<br>
              Table Runner<br>
            </div>
            <br>
            <div>
              Cotton hand dyed using local walnut husks
              and knotweed. Each one unique as color
              naturally varies.
            </div>
            <br>
            <div class="description-and-price">
              <span>Measures 24 by 94 inches</span><span id="OpenWeaveKnotweedTableRunner" class="price OpenWeaveKnotweedTableRunner">???</span>
            </div>
            <div></div>
            <br>
            <div class="add-to-cart">
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="QH4QVF89249X6">
                <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
              </form>
            </div>
            <div class="spacer30"></div>
            <div class="spacer30"></div>
            <div class="spacer30"></div>
            <div class="small-type">Hand Forged <a href="#Brackets">Brackets</a> by Scottish Wrought Iron sold below</div>
          </div>
        </div>
      </div>

      <!-- ******************************************************
            BLOCK 5
      ***********************************************************-->

      <div class="copy-and-image">
        <!--<h3>Currently unavailable. Please check back again. </h3>-->
        <div class="image-block home-decor-1">
          <img src="./images/folk_flag.jpg" alt="picture" >
        </div>
        <div id="home-decor-block5" class="copy-block home-decor">
          <br>
          <div class="spacer20"></div>
          <div class="spacer20"></div>
          <div class="small-heading-row-centered">
            <h4>Country Folk Art Pillow</h4>
          </div>
          <div class="content-text-block">
            <div class="small-heading-row">
            </div>
            <div>America loves jeans! Made totally from 
recycled 100% cotton jeans of red, white, and
blue. Hand  cut and woven into a flag motif.
Pillow insert is a white duck pillow 
made in the USA.
            </div>
            <br>
            <br>
            <div class="description-and-price">
              <span>Measures 12 by 20 inhes</span><span id="CountryFolkArtPillow" class="price CountryFolkArtPillow">???</span>
            </div>
            <br>
            <div class="add-to-cart">
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="3L8U9RF9783BY">
                <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
              </form>
            </div>
            <br>
            <div class="small-type">Hand Forged <a href="#Brackets">Brackets</a> by Scottish Wrought Iron sold below</div>
          </div>
        </div>
      </div>


      <!-- ******************************************************
            BLOCK 5A
      ***********************************************************-->

      <div class="copy-and-image">
        <div class="image-block home-decor-1">
          <br>
          <br>
          <br>
          <div class="spacer10"></div>
          <img src="./images/flag_wall_large.jpg" alt="picture" >
          <div class="decor5a-image-spacer"></div>
        </div>
        <div id="home-decor-block5a" class="copy-block home-decor5a">
          <div class="content-text-block">
            <br>
            <div class="small-heading-row-centered">
              <h3>Currently unavailable. Please check back again.</h3>
              County Folk Art Wall Hanging
            </div>
            <br>
            <div class="small-heading-row">
            </div>
            <div>Made totally from recycled 100% cotton </div>
            <div> jeans of red, white, and blue. </div>
            <div>Hand  cut and woven into a flag motif.</div>
            <div>A rod pocket in back will </div>
            <div>hold a 1/2 inch rod.</div>
            <div class="spacer10"></div>
            <div class="description-and-price">
              <span>Measures 11 1/2 by 20 inches</span><span id="CountyFolkArtWallHanging" class="price CountyFolkArtWallHanging>???</span>
            </div>
            <br>
            <div class="add-to-cart">
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="RVGHUVBDQWY9U">
                <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
              </form>
            </div>
            <!--Displayed with hand forged backets sold below.-->
            <!--<div class="small-type">Displayed with hand forged <a href="#Brackets">brackets</a> sold below</div>-->
            
          </div>
        </div>
      </div>


      <!--       ******************************************************
                  BLOCK 5B
            ***********************************************************
      
            <div class="shelf-bracket-container">
              <div class="copy-and-image">
                <div class="image-block home-decor-1">
                  <img src="./images/flag_wall_large.jpg" alt="picture" >
                </div>
                <div id="home-decor-block6" class="copy-block home-decor  large-bracket-set">
                  <div class="spacer20"></div>
                  <div class="small-heading-row">
                    <h4>Large Bracket Set</h4>
                  </div>
                  <div class="content-text-block">
                    <div class="small-heading-row">
                    </div>
                    <div>Set of 2 large hand forged 
      wrought iron brackets can 
      hold up to a 3 inch diameter
      rod or branch. 
      Brackets have a 5 inch 
      projection and are dark brown
      with an Oiled Rubbed
      Bronze finish..
      
                    </div>
                    <br>
                    <div class="description-and-price">
                      <span>Set of 2 Large Brackets</span><span class="price">$48</span>
                    </div>
                    <br>
                    <br>
                    <div class="add-to-cart">
      <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
      <input type="hidden" name="cmd" value="_s-xclick">
      <input type="hidden" name="hosted_button_id" value="MQ7GQ5FE929AS">
      <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
      <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
      </form>
                    </div>
                    <br>
                  </div>
                </div>
              </div>
            </div>-->

      <!-- ******************************************************
            BLOCK 6
      ***********************************************************-->
      <div class="large-heading-row forged-brackets">
        <a name="Brackets"><h2>Hand Forged Brackets</h2></a>
      </div>
      <span>by Scottish Wrought Iron</span>
      <div class="spacer20"></div>

      <div class="shelf-bracket-container">
        <div class="copy-and-image">
          <div class="image-block home-decor-1">
            <img src="./images/bracket_B193.jpg" alt="picture" >
          </div>
          <div id="home-decor-block6" class="copy-block home-decor  large-bracket-set">
            <!--<div class="spacer20"></div>-->
            <div class="small-heading-row">
              <h4>Large Bracket Set</h4>
            </div>
            <div class="content-text-block">
              <div class="small-heading-row">
              </div>
              <div>Set of 2 large hand forged 
                wrought iron brackets can 
                hold up to a 3 inch diameter
                rod or branch. 
                Brackets have a 5 inch 
                projection and are dark brown
                with an Oiled Rubbed
                Bronze finish..

              </div>
              <br>
              <div class="description-and-price">
                <span>Set of 2 Large Brackets</span><span id="LargeBracketSet" class="price LargeBracketSet">???</span>
              </div>
              <br>
              <br>
              <div class="add-to-cart">
                <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="MQ7GQ5FE929AS">
                  <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                  <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>
              </div>
              <br>
            </div>
          </div>
        </div>
      </div>
      <!-- ******************************************************
            BLOCK 7
      ***********************************************************-->

      <div class="spacer30"></div>
      <div class="shelf-bracket-container">
        <div class="copy-and-image">
          <div class="image-block home-decor-1">
            <img src="./images/bracket_B19s.jpg" alt="picture" >
          </div>
          <div id="home-decor-block7" class="copy-block home-decor small-bracket-set">
            <div class="spacer20"></div>
            <div class="small-heading-row">
              <h4>Small Bracket Set</h4>
            </div>
            <div class="content-text-block">
              <div class="small-heading-row">
              </div>
              <div>Set of 2 hand forged wrought
                iron brackets hold up
                to a one inch diameter dowel
                suitable for the swag curtain.
                Bracket has 3 inch projection.
                Oiled Rubbed Bronze
                (dark brown) finish.              </div>
              <br>
              <div class="description-and-price">
                <span>Set of 2 brackets</span><span id="SmallBracketSet" class="price SmallBracketSet">???</span>
              </div>
              <br>
              <br>
              <div class="add-to-cart">
                <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="N4NFWE5Z6VK2J">
                  <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                  <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>
              </div>
              <br>
            </div>
          </div>
        </div>
      </div>
      <!-- ******************************************************
            BLOCK 8
      ***********************************************************-->
      <div class="spacer30"></div>
      <div class="shelf-bracket-container">
        <div class="copy-and-image">
          <div class="image-block home-decor-1">
            <img src="./images/bracket_shelf.jpg" alt="picture" >
          </div>
          <div id="home-decor-block8" class="copy-block home-decor shelf-bracket">
            <div class="spacer20"></div>
            <div class="small-heading-row">
              Shelf bracket with<br>
              curtain rod hook<br>
            </div>
            <div class="spacer30"></div>
            <div class="content-text-block">
              <br>
              <div>Set of 2 hand forged wrought
                iron brackets supports a 4 inch
                shelf of wood or glass.
                Rod hook riveted underneath can
                hold a11/4 inch dowel. Comes 
                in plain single scroll.

              </div>
              <div class="spacer10"></div>
              <div>Oiled Rubbed Bronze</div>
              <div>(dark brown) finish.</div>
              <br>
              <br>
              <div class="description-and-price">
                <span>Set of 2 shelf with hook brackets</span><span id="Shelfbracketwithcurtainrodhook" class="price Shelfbracketwithcurtainrodhook">???</span>
              </div>
              <br>
              <div class="add-to-cart">
                <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="ULHL8NMSDD6DS">
                  <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                  <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>
              </div>
              <br>
            </div>
          </div>
        </div>
      </div>
      <h4>Other designs available on <a href="http://www.ScottishWroughtIron.com">Scottish Wrought Iron</a></h4>
    </div> <!-- home-decor-container -->

    <!-- ********************************************************************************
         *
         *            M O B I L E
         *
         ******************************************************************************** -->

<!-- BLOCK 1M -->    
    <div class="decor-container-mobile">
      <!-- BLOCK 1M -->
      <div class="large-heading-row">
        <h2>Natural Window Treatments</h2>
      </div>
      <!--<br>-->

      <div class="shawls-block">
        <div class="copy-and-image">
          <div class="large-heading-row">
            Open Weave Knotweave Swag
          </div>
          <br>
          <img src="./images/decor_v4.png" alt="picture" >
          <div class="image-block">
          </div>
          <div class="copy-block">
            <div class="spacer20"></div>
            <div class="spacer10"></div>
            <div class="content-text-block-centered">
              <div>
                <div>Maine Village Weaver's signature </div>
                <div>Open Weave Curtains and swags </div>
                <div>are hand dyed for a natural look. </div>
              </div>
              <br>
              <div>
                <div>I stain the cotton threads with down </div>
                <div>walnut and dye the wool yarn with </div>
                <div>knotweed plants I gather locally.  </div>
              </div>
              <br>
            </div> <!-- content-text-block -->
          </div> <!-- end copy-block -->
          <div class="image-block">
            <a href="popOutSwag.html" target="_blank">
              <div class="swag-image-block">
                <h4>Click to see full image.</h4>
              </div>
            </a>
          </div>
<!--        </div>
      </div>-->
      <div class="copy-block">
        <div class="content-text-block">
          <br>
          <div>
            <b>Large Swag:</b>
          </div>
          <div class="description-and-price">
            <span>Measures 24 x 108 inches</span>
            <span id="LargeSwag" class="price LargeSwag">???</span>
          </div>
          <!--<br>-->
          <div class="add-to-cart">
            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
              <input type="hidden" name="cmd" value="_s-xclick">
              <input type="hidden" name="hosted_button_id" value="RZNLJ3CS9R9BC">
              <input type="image" src="./images/add_cart_grey.png" name="submit" alt="PayPal - The safer, easier way to pay online!">
              <img alt="" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>
          </div>
          <br>
          <div><b>Small Swag:</b>  Shown below with a pair of Open Weave Knotweed cafe curtains.</div>
          <div class="description-and-price">
            <span>Measures 24 x 94 inches</span><span id="SmallSwag" class="price SmallSwag">???</span>
          </div>
          <br>
          <div class="add-to-cart">
            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
              <input type="hidden" name="cmd" value="_s-xclick">
              <input type="hidden" name="hosted_button_id" value="SLVJDCSX3K9RG">
              <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
              <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>
          </div>
        </div> <!-- end content-text-block -->
        <div class="content-text-block">
          <b>Custom Swags:</b> Custom lengths made to
          order. Custom swag pictued above a 
          kitchen window measures 150 inches.
        </div>
      </div> <!-- end home-decor-block1 -->
      <br>
      <br>
      <div class="image-block">
        <img src="./images/swag_cafe.jpg" alt="picture" >
        <div class="spacer10"></div>
      </div>
      <div class="copy-block">
        <div class="content-text-block">
          <div>
            <div class="small-heading-row-centered">
              Open Weave Knotweed
            </div>
            <div class="small-heading-row-centered">
              <i>Cafe Curtains</i>
            </div>
            <div class="spacer10"></div>
          </div>
          <div class="content-text-block">
            <div>
              Two panels, 
            </div>
            <div class="description-and-price">
              <span>Each panel 24 x 26 inches</span><span id="OpenWeaveKnotweedCafeCurtains" class="price OpenWeaveKnotweedCafeCurtains">???</span>
            </div>
            <div class="spacer10"></div>
            <div class="description-and-price">
              <span>Custom Lengths made to order</span><span class="price"></span>
            </div>
            <div class="add-to-cart">
              <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="DE7F6XSL27F5J">
                <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
              </form>
            </div>
            <br>
            <!--            <div class="spacer20"></div>
                        <div class="spacer20"></div>
                        <div class="spacer10"></div>-->
            <div class="small-type">Hand Forged <a href="#Brackets">Brackets</a> by Scottish Wrought Iron sold below</div>
          </div>
          <br>
        </div>  <!-- end copy-and-image -->
      </div>
    </div> <!-- end shawls-block -->
  </div>
  <br>
  <br>

  <!-- BLOCK 2M -->

  <div class="shawls-block">
    <div class="copy-and-image">
      <div class="image-block">
        <img src="./images/decorM_v5.png" alt="picture" >
      </div>
      <div class="copy-block">
        <div class="spacer20"></div>
        <div class="small-heading-row">
          Open Weave Knotweed Panel
        </div>
        <div class="small-heading-row">
          with self valance<span class="dev">2M</span>
        </div>
        <div class="spacer10"></div>
        <div class="content-text-block">
          Shown casually draped over a tension rod.
          Open weave cotton and wool. I stain the
          cotton threads with bown
          walnut and dye the wool yarn with
          knotweed plants I gather locally. 
          <br>
          <br>
          <div class="description-and-price">
            <span>Measures 24 x 94 inches</span>
            <span id="OpenKnotweedPanelwithselfvalance" class="price OpenKnotweedPanelwithselfvalance">???</span>
          </div>
          <br>
          <div class="add-to-cart">
            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
              <input type="hidden" name="cmd" value="_s-xclick">
              <input type="hidden" name="hosted_button_id" value="26P9HF4FVFUXW">
              <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
              <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>
          </div>
          Custom Lengths made to order!
          <div class="spacer10"></div>
          <div class="small-type">Hand Forged <a href="#Brackets">Brackets</a> by Scottish Wrought Iron sold below</div>
        </div> 
      </div>
    </div>  <!-- end copy-and-image -->
  </div> <!-- shawls-block -->
  <br>
  <br>

  <!-- BLOCK 3M -->

  <div class="shawls-block">
    <div class="copy-and-image">
      <div class="image-block home-decor-1">
        <img src="./images/2panel_curtain1.jpg" alt="picture" >
        <!--<br>-->
      </div>
      <div class="copy-block">
        <div class="spacer20"></div>
        <div class="small-heading-row">
          <div>Open Knotweed Panel</div>
        </div>
        <div class="small-heading-row">
          <div>with Rod Pocket</div>
        </div>
        <div class="spacer10"></div>
        <div class="content-text-block">
          <div>Displayed on the left of photo.</div>
          <div>I stain the 
            cotton threads with brown walnut and dye
            the wool yarn with local knotweed plants. 
            2 inch rod pocket for easy hanging.</div>
          <div class="spacer20"></div>
          <div class="description-and-price">
            <span>Measures 24 by 72 inches</span>
            <span id="OpenWeaveKnotweedPanelwithRodPocket" class="price OpenWeaveKnotweedPanelwithRodPocket">???</span>
          </div>
          <br>
          <div class="add-to-cart">
            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
              <input type="hidden" name="cmd" value="_s-xclick">
              <input type="hidden" name="hosted_button_id" value="STCPWCVZWFXCU">
              <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
              <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>
          </div>

        </div> <!-- end content-text-block -->
        <div class="small-heading-row">
          <div>Cotton and Linen Curtain Panel</div>
        </div>
        <div class="content-text-block">
          <div class="spacer10"></div>

          <div class="try-flex-row">
            <div class="spacer-horizontal10"></div>
            <img src="./images/detail_slub_thumb0.jpg">
            <div class="spacer-horizontal10"></div>
            <div class="content-text-block content-text-block-padded">
              <!--<div>Displayed on right  of photo.</div>-->
              Detail shows texture of linen slubs
              in the weave. Two inch rod pocket
              for carefree hanging.
            </div>
            <div class="spacer-horizontal10"></div>
          </div>

          <div class="spacer10"></div>
          <div class="description-and-price">
            <span>Measures 24 x 84 inches</span><span id="CottonandLinenCurtainPanel" class="price CottonandLinenCurtainPanel">???</span>
          </div>
          <div class="spacer10"></div>
          <div class="add-to-cart">
            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
              <input type="hidden" name="cmd" value="_s-xclick">
              <input type="hidden" name="hosted_button_id" value="STCPWCVZWFXCU">
              <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
              <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>
          </div>
            <div class="small-type">Hand Forged <a href="#Brackets">Brackets</a> by Scottish Wrought Iron sold below</div>
        </div>

      </div>  <!-- end copy-and-image -->
    </div> 
  </div>
  <br>
  <br>
  <br>

  <!-- BLOCK 4M -->

  <div class="large-heading-row">
    Decorative Touches
  </div>
  <br>
  <div class="shawls-block">
    <div class="copy-and-image">
      <div class="image-block home-decor-1">
        <img src="./images/table_runner2.jpg" alt="picture" >
      </div>
      <div id="assymetrical" class="copy-block">
        <div class="spacer10"></div>
        <div class="small-heading-row">
          <div>Open Weave Knotweed</div>
          <div>Table Runner</div>
        </div>
        <!--            <div class="small-heading-row">
                      Open Weave Knotweed<br>
                      Table Runner<br>
                    </div>-->

        <div class="spacer10"></div>
        <div class="content-text-block">
          <div>Cotton hand dyed using local walnut husks
            and knotweed. Each one unique as color
            naturally varies.</div>
          <br>
          <div class="description-and-price">
            <span>Measures 24 by 94 inches</span><span id="OpenWeaveKnotweedTableRunner" class="price OpenWeaveKnotweedTableRunner">???</span>
          </div>
          <div></div>
          <br>
          <div class="add-to-cart">
            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
              <input type="hidden" name="cmd" value="_s-xclick">
              <input type="hidden" name="hosted_button_id" value="QH4QVF89249X6">
              <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
              <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
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
      <div class="image-block home-decor-1">
        <img src="./images/folk_flag.jpg" alt="picture" >
      </div>
      <div id="home-decor-block5-mobile" class="copy-block home-decor">
        <div class="spacer10"></div>
        <div class="small-heading-row">
          <h4>Country Folk Art Pillow</h4>
        </div>
        <div class="content-text-block">
          <div class="small-heading-row">
          </div>
          <div>America loves jeans! Made totally from recycled
            100% cotton jeans and hand woven into
            a red, white and blue flag motif.
            Pillow insert is a white duck pillow made in the USA.
          </div>
          <br>
          <br>
          <div class="description-and-price">
            <span>Measures 12 by 20 inhes</span><span id="CountryFolkArtPillow" class="price CountryFolkArtPillow">???</span>
          </div>
          <br>
          <div class="add-to-cart">
            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
              <input type="hidden" name="cmd" value="_s-xclick">
              <input type="hidden" name="hosted_button_id" value="3L8U9RF9783BY">
              <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
              <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>
          </div>
          <br>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>


  <!-- BLOCK 5MA -->
  <div class="shawls-block decorM5a-block">

    <div class="copy-and-image">
      <div class="image-block home-decor-1">
        <img src="./images/flag_wall.jpg" alt="picture" >
      </div>
      <div id="home-decor-block5-mobile" class="copy-block home-decor">
        <div class="spacer10"></div>
        <div class="small-heading-row">
          <h3>Currently unavailable. Please check back again.</h3>
          <h4>County Folk Art Wall Hanging</h4>
        </div>
        <div class="content-text-block">
          <div class="small-heading-row">
          </div>
          <div>Made totally from recycled 100% cotton
 jeans of red, white, and blue. 
Hand  cut and woven into a flag motif.
A rod pocket in back will hold a 1/2 inch rod.
Measures 12 by  20 inches.
          </div>
          <br>
          <div class="description-and-price">
            <span>Measures 12 by 20 inhes</span><span id="CountyFolkArtWallHanging" class="price CountyFolkArtWallHanging">???</span>
          </div>
          <br>
          <div class="add-to-cart">
            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
              <input type="hidden" name="cmd" value="_s-xclick">
              <input type="hidden" name="hosted_button_id" value="RVGHUVBDQWY9U">
              <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
              <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>
          </div>
          <br>
          <!--<div class="small-type">Displayed with Small <a href="#Brackets">Bracket Set</a> sold below</div>-->
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>

  <!-- BLOCK 6M -->


  <div class="large-heading-row forged-brackets">
    <a name="Brackets"><h2>Hand Forged Brackets</h2></a>
  </div>
  <span>by Scottish Wrought Iron</span>
  <div class="spacer20"></div>

  <div class="shawls-block">
    <!--<div class="shelf-bracket-container">-->
    <div class="copy-and-image">
      <div class="image-block home-decor-1">
        <img src="./images/bracket_B193.jpg" alt="picture" >
      </div>
      <div id="home-decor-block6" class="copy-block home-decor  large-bracket-set-mobile">
        <!--<div class="spacer20"></div>-->
        <div class="small-heading-row">
          <h4>Large Bracket Set</h4>
        </div>
        <div class="content-text-block">
          <div class="small-heading-row">
          </div>
          <div>Set of 2 large hand forged wrought
            iron brackets can hold up to a 3 inch
            diameter rod or branch. 
            Brackets have a 5 inch 
            projection and are dark brown
            with an Oiled Rubbed
            Bronze finish.
          </div>
          <br>
          <div class="description-and-price">
            <span>Set of 2 Large Brackets</span><span id="LargeBracketSet" class="price LargeBracketSet">???</span>
          </div>
          <br>
          <br>
          <div class="add-to-cart">
            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
              <input type="hidden" name="cmd" value="_s-xclick">
              <input type="hidden" name="hosted_button_id" value="MQ7GQ5FE929AS">
              <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
              <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--</div>  end shelf-bracket-container -->
  </div>

  <!-- ******************************************************
        BLOCK 7
  ***********************************************************-->

  <div class="spacer30"></div>
  <div class="shawls-block">
    <!--<div class="shelf-bracket-container">-->
    <div class="copy-and-image">
      <div class="image-block home-decor-1">
        <img src="./images/bracket_B19s.jpg" alt="picture" >
      </div>
      <div id="home-decor-block7" class="copy-block home-decor small-bracket-set-mobile">
        <!--<div class="spacer20"></div>-->
        <div class="small-heading-row">
          <h4>Small Bracket Set</h4>
        </div>
        <div class="content-text-block">
          <div class="small-heading-row">
          </div>
          <div>Set of 2 hand forged wrought
            iron brackets can hold up
            to a one inch diameter dowel
            suitable for the swag curtain.
            Bracket has 3 inch projection.
            Oiled Rubbed Bronze
            (dark brown) finish.
          </div>
          <br>
          <div class="description-and-price">
            <span>Set of 2 brackets</span><span id="SmallBracketSet" class="price SmallBracketSet">???</span>
          </div>
          <br>
          <div class="add-to-cart">
            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
              <input type="hidden" name="cmd" value="_s-xclick">
              <input type="hidden" name="hosted_button_id" value="N4NFWE5Z6VK2J">
              <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
              <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--</div>-->
  </div>        
  <br>
  <br>

  <!-- ******************************************************
        BLOCK 8
  ***********************************************************-->
  <div class="shawls-block">
    <div class="spacer30"></div>
    <!--<div class="shelf-bracket-container">-->
    <div class="copy-and-image">
      <div class="image-block home-decor-1">
        <img src="./images/bracket_shelf.jpg" alt="picture" >
      </div>
      <div id="home-decor-block8" class="copy-block home-decor-mobile">
        <div class="spacer20"></div>
        <div class="small-heading-row">
          Shelf bracket with<br>
          curtain rod hook<br>
        </div>
        <div class="spacer30"></div>
        <div class="content-text-block">
          <br>
          <div>Set of 2 hand forged wrought
            iron brackets supports a 4 inch
            shelf of wood or glass.
            Rod hook riveted underneath can
            hold a11/4 inch  dowel. Comes 
            in plain single scroll.
          </div>
          <div class="spacer10"></div>
          <div>Oiled Rubbed Bronze</div>
          <div>(dark brown) finish.</div>
          <br>
          <div class="description-and-price">
            <span>Set of 2 shelf with hook brackets</span><span id="Shelfbracketwithcurtainrodhook" class="price ShelfbracketwithcurtainrodhookM">???</span>
          </div>
          <br>
          <div class="add-to-cart">
            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
              <input type="hidden" name="cmd" value="_s-xclick">
              <input type="hidden" name="hosted_button_id" value="ULHL8NMSDD6DS">
              <input type="image" src="./images/add_cart_grey.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
              <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--</div>-->
  </div>
  <h4>Other designs available on <a href="http://www.ScottishWroughtIron.com">Scottish Wrought Iron</a></h4>
  <br>
  <br>

</div> <!-- end decor-container-mobile -->

    
    
    <div id="footer"></div>

  </body>
</html>
