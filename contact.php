<?php
 
$message = null;

if(isset($_POST['submit'])){
$name = $_POST['name'];
$fabric = $_POST['fabric'];
$phone = $_POST['phone'];
$address = $_POST['address'];

         $to = "lemonchusle@usa.com";
         $subject = "Query Contact Form";
         
         $formcontent="From: $name  <br> Phone: $phone <br> Fabric: $fabric <br> Address: $address <br>";
         
         $header = "From:info@quicksboxaccounting.xyz \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$formcontent,$header) or die("Error!");
         $message = "Thank you for connecting with us. Contact You Soon";
}
      ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - AB Siulas | Linen Experts | Linen Fashion</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styletwo.css">
    <link rel="stylesheet" href="form.css"></head>
    <body>
    <div id="code_block-86-8612" class="ct-code-block">
    </div>
    <header id="MainHeader1" class="oxy-header-wrapper oxy-sticky-header oxy-overlay-header oxy-header ">
      <div id="HeaderRow1" class="oxygen-hide-in-sticky oxy-header-row SiteSize">
        <div class="oxy-header-container">
          <div id="_header_left-98-8612" class="oxy-header-left"><a id="link-95-8612" class="ct-link"
               href="https://www.linenfashion.com/">
              <div id="code_block-373-45248" class="ct-code-block"><img 
                  src="https://cdn-5f6388f6c1ac190fbc55ecdb.closte.com/wp-content/uploads/2020/03/Linen-Fashion-by-Siulas-logo2.png"
                  id="ImageLogoSet" alt="" style="max-width: 200px;"
                  class="ct-image entered litespeed-loaded" ></div>
            </a></div>
          <div id="_header_center-99-8612" class="oxy-header-center">
            <div id="YITHSearch01" class="ct-div-block YITHSearchClass">
              <div id="YITHSearch01513" class="ct-widget YITHSearchMain">
                <div class="widget woocommerce widget_product_search yith_woocommerce_ajax_search">
                  <div class="yith-ajaxsearchform-container ">
                    <form role="search" method="get" id="yith-ajaxsearchform" action="">
                      <div class="yith-ajaxsearchform-container">
                        <div class="yith-ajaxsearchform-select">
                          <input type="hidden" name="post_type" class="yit_wcas_post_type" id="yit_wcas_post_type"
                            value="product">
  
                        </div>
                        <div class="search-navigation">
                          <label class="screen-reader-text" for="yith-s">Search for:</label>
                          <input type="search" value="" name="s" id="yith-s" class="yith-s"
                            placeholder="Search for products" data-append-to=".search-navigation"
                            data-loader-icon="https://www.linenfashion.com/wp-content/plugins/yith-woocommerce-ajax-search-premium/assets/images/preloader.gif"
                            data-min-chars="3" autocomplete="off">
                          <div class="autocomplete-suggestions" style="position: absolute; display: none; z-index: 9999;">
                          </div>
                        </div>
                        <input type="submit" id="yith-searchsubmit" value="Search">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="_header_right-100-8612" class="oxy-header-right">
            <nav id="div_block-163-8612" class="ct-div-block">
              <div id="div_block-164-8612" class="ct-div-block submenDiv">
                <div id="code_block-199-8612" class="ct-code-block">
                </div>
                <div id="searchIcon01" class="ct-fancy-icon IconHover SearchOpen"><svg id="svg-searchIcon01">
                    <use xlink:href="#FontAwesomeicon-search"></use>
                  </svg></div>
              </div><a id="link-477-54589" class="ct-link" href="https://www.linenfashion.com/cart/" target="_self">
                <div id="fancy_icon-478-54589" class="ct-fancy-icon IconHover"><svg id="svg-fancy_icon-478-54589">
                    <use xlink:href="#FontAwesomeicon-shopping-cart"></use>
                  </svg></div>
                <div id="code_block-479-54589" class="ct-code-block"></div>
              </a>
              <div id="div_block-170-8612" class="ct-div-block submenDiv"><a id="link-171-8612" class="ct-link"
                  href="https://www.linenfashion.com/my-account/" target="_self">
                  <div id="fancy_icon-172-8612" class="ct-fancy-icon IconHover"><svg id="svg-fancy_icon-172-8612">
                      <use xlink:href="#FontAwesomeicon-user"></use>
                    </svg></div>
                </a></div>
              <div id="div_block-485-54589" class="ct-div-block submenDiv">
                <div id="shortcode-486-54589" class="ct-shortcode">
                  <form action="" method="post"><select name="wcj-currency" id="wcj-currency-select" style="" class=""
                      onchange="this.form.submit()">
                      <option value="EUR" selected="">EUR (€)</option>
                      <option value="USD">USD ($)</option>
                    </select></form>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
      <div id="MainMeniuContainer1" class="oxy-header-row SiteSize">
        <div class="oxy-header-container">
          <div id="_header_left-107-8612" class="oxy-header-left"></div>
          <div id="_header_center-108-8612" class="oxy-header-center">
            <nav id="desktopmeniu01" class="oxy-nav-menu  oxy-nav-menu-dropdowns oxy-nav-menu-dropdown-arrow">
              <div class="oxy-menu-toggle">
                <div class="oxy-nav-menu-hamburger-wrap">
                  <div class="oxy-nav-menu-hamburger">
                    <div class="oxy-nav-menu-hamburger-line"></div>
                    <div class="oxy-nav-menu-hamburger-line"></div>
                    <div class="oxy-nav-menu-hamburger-line"></div>
                  </div>
                </div>
              </div>
              <div class="menu-production-container">
                <ul id="menu-production" class="oxy-nav-menu-list">
                  <li id="menu-item-47462"
                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-47462"><a
                      href="https://www.linenfashion.com/linen-clothes/">Linen Clothes</a></li>
                  <li id="menu-item-47463"
                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-47463"><a
                      href="https://www.linenfashion.com/table-linen/">Table Linen</a></li>
                  <li id="menu-item-47461"
                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-47461"><a
                      href="https://www.linenfashion.com/kitchen-linen/">Kitchen Linen</a></li>
                  <li id="menu-item-47460"
                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-47460"><a
                      href="https://www.linenfashion.com/kids-linen/">Kids Linen</a></li>
                  <li id="menu-item-47458"
                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-47458"><a
                      href="https://www.linenfashion.com/bath-sauna/">Bath &amp; Sauna</a></li>
                  <li id="menu-item-47459"
                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-47459"><a
                      href="https://www.linenfashion.com/bed-linen/">Bed Linen</a></li>
                  <li id="menu-item-54647"
                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-54647"><a
                      href="https://www.linenfashion.com/curtains/">Curtains</a></li>
                  <li id="menu-item-8416"
                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-8416"><a
                      href="https://www.linenfashion.com/linen-fabrics/">Linen Fabrics</a></li>
                  <li id="menu-item-8417"
                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-8417"><a
                      href="https://www.linenfashion.com/linen-lace/">Linen Lace</a></li>
                  <li id="menu-item-8418"
                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-8418"><a
                      href="https://www.linenfashion.com/linen-yarns/">Linen Yarns</a></li>
                </ul>
              </div>
            </nav>
            <div id="ManiProMeniu" class="oxy-pro-menu  ">
              <div class="oxy-pro-menu-mobile-open-icon " data-off-canvas-alignment=""><svg id="ManiProMeniu-open-icon">
                  <use xlink:href="#FontAwesomeicon-ellipsis-v"></use>
                </svg>Menu</div>
  
  
              <div
                class="oxy-pro-menu-container oxy-pro-menu-dropdown-links-visible-on-mobile oxy-pro-menu-dropdown-links-toggle oxy-pro-menu-init"
                data-aos-duration="400" data-oxy-pro-menu-dropdown-animation="fade-up"
                data-oxy-pro-menu-dropdown-animation-duration="0.4" data-entire-parent-toggles-dropdown="true"
                data-oxy-pro-menu-dropdown-links-on-mobile="toggle">
  
                <div class="menu-production-container">
                  <ul id="menu-production-1" class="oxy-pro-menu-list">
                    <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-47462"><a
                        href="https://www.linenfashion.com/linen-clothes/">Linen Clothes</a></li>
                    <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-47463"><a
                        href="https://www.linenfashion.com/table-linen/">Table Linen</a></li>
                    <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-47461"><a
                        href="https://www.linenfashion.com/kitchen-linen/">Kitchen Linen</a></li>
                    <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-47460"><a
                        href="https://www.linenfashion.com/kids-linen/">Kids Linen</a></li>
                    <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-47458"><a
                        href="https://www.linenfashion.com/bath-sauna/">Bath &amp; Sauna</a></li>
                    <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-47459"><a
                        href="https://www.linenfashion.com/bed-linen/">Bed Linen</a></li>
                    <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-54647"><a
                        href="https://www.linenfashion.com/curtains/">Curtains</a></li>
                    <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-8416"><a
                        href="https://www.linenfashion.com/linen-fabrics/">Linen Fabrics</a></li>
                    <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-8417"><a
                        href="https://www.linenfashion.com/linen-lace/">Linen Lace</a></li>
                    <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-8418"><a
                        href="https://www.linenfashion.com/linen-yarns/">Linen Yarns</a></li>
                  </ul>
                </div>
                <div class="oxy-pro-menu-mobile-close-icon"><svg id="svg-ManiProMeniu">
                    <use xlink:href="#FontAwesomeicon-close"></use>
                  </svg>close</div>
  
              </div>
  
            </div>
  
          </div>
          <div id="_header_right-109-8612" class="oxy-header-right"></div>
        </div>
      </div>
      <div id="HeaderRow2" class="oxygen-hide-in-sticky oxy-header-row SiteSize">
        <div class="oxy-header-container">
          <div id="_header_left-490-45248" class="oxy-header-left"></div>
          <div id="_header_center-493-45248" class="oxy-header-center"></div>
          <div id="_header_right-496-45248" class="oxy-header-right">
            <nav id="div_block-497-45248" class="ct-div-block">
              <div id="div_block-498-45248" class="ct-div-block submenDiv" data-aos-offset="-74"
                data-aos-anchor-placement="top-top" data-aos-once="false">
                <div id="fancy_icon-500-45248" class="ct-fancy-icon IconHover SearchOpen"><svg
                    id="svg-fancy_icon-500-45248">
                    <use xlink:href="#FontAwesomeicon-search"></use>
                  </svg></div>
              </div><a id="link-501-45248" class="ct-link" href="https://www.linenfashion.com/cart/" target="_self"
                data-aos-offset="-74" data-aos-anchor-placement="top-top" data-aos-once="false">
                <div id="fancy_icon-502-45248" class="ct-fancy-icon IconHover"><svg id="svg-fancy_icon-502-45248">
                    <use xlink:href="#FontAwesomeicon-shopping-cart"></use>
                  </svg></div>
                <div id="code_block-503-45248" class="ct-code-block"></div>
              </a>
              <div id="div_block-508-45248" class="ct-div-block submenDiv" data-aos-offset="-74"
                data-aos-anchor-placement="top-top" data-aos-once="false"><a id="link-509-45248" class="ct-link"
                  href="https://www.linenfashion.com/my-account/" target="_self">
                  <div id="fancy_icon-510-45248" class="ct-fancy-icon IconHover"><svg id="svg-fancy_icon-510-45248">
                      <use xlink:href="#FontAwesomeicon-user"></use>
                    </svg></div>
                </a></div>
              <div id="div_block-511-45248" class="ct-div-block submenDiv" data-aos-offset="-74"
                data-aos-anchor-placement="top-top" data-aos-once="false">
                <div id="shortcode-512-45248" class="ct-shortcode">
                  <form action="" method="post"><select name="wcj-currency" id="wcj-currency-select" style="" class=""
                      onchange="this.form.submit()">
                      <option value="EUR" selected="">EUR (€)</option>
                      <option value="USD">USD ($)</option>
                    </select></form>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <header id="MobileHeaderDivs" class="oxy-header-wrapper oxy-sticky-header oxy-overlay-header oxy-header ">
      <div id="_header_row-449-45248" class="oxy-header-row SiteSize">
        <div class="oxy-header-container">
          <div id="_header_left-450-45248" class="oxy-header-left">
            <div id="-pro-menu-Mobile" class="oxy-pro-menu ">
              <div class="oxy-pro-menu-mobile-open-icon  oxy-pro-menu-off-canvas-trigger oxy-pro-menu-off-canvas-left"
                data-off-canvas-alignment="left"><svg id="-pro-menu-Mobile-open-icon">
                  <use xlink:href="#FontAwesomeicon-bars"></use>
                </svg></div>
  
  
              <div class="oxy-pro-menu-container oxy-pro-menu-show-dropdown oxy-pro-menu-init" data-aos-duration="50"
                data-oxy-pro-menu-dropdown-animation="zoom-in-down" data-oxy-pro-menu-dropdown-animation-duration="0.4"
                data-entire-parent-toggles-dropdown="false" data-oxy-pro-menu-off-canvas-animation="slide-right"
                data-oxy-pro-menu-dropdown-links-on-mobile="hide" data-aos="slide-right">
  
                <div class="menu-production-container">
                  <ul id="menu-production-2" class="oxy-pro-menu-list">
                    <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-47462"><a
                        href="https://www.linenfashion.com/linen-clothes/">Linen Clothes<div
                          class="oxy-pro-menu-dropdown-icon-click-area"></div></a></li>
                    <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-47463"><a
                        href="https://www.linenfashion.com/table-linen/">Table Linen<div
                          class="oxy-pro-menu-dropdown-icon-click-area"></div></a></li>
                    <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-47461"><a
                        href="https://www.linenfashion.com/kitchen-linen/">Kitchen Linen<div
                          class="oxy-pro-menu-dropdown-icon-click-area"></div></a></li>
                    <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-47460"><a
                        href="https://www.linenfashion.com/kids-linen/">Kids Linen<div
                          class="oxy-pro-menu-dropdown-icon-click-area"></div></a></li>
                    <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-47458"><a
                        href="https://www.linenfashion.com/bath-sauna/">Bath &amp; Sauna<div
                          class="oxy-pro-menu-dropdown-icon-click-area"></div></a></li>
                    <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-47459"><a
                        href="https://www.linenfashion.com/bed-linen/">Bed Linen<div
                          class="oxy-pro-menu-dropdown-icon-click-area"></div></a></li>
                    <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-54647"><a
                        href="https://www.linenfashion.com/curtains/">Curtains<div
                          class="oxy-pro-menu-dropdown-icon-click-area"></div></a></li>
                    <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-8416"><a
                        href="https://www.linenfashion.com/linen-fabrics/">Linen Fabrics<div
                          class="oxy-pro-menu-dropdown-icon-click-area"></div></a></li>
                    <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-8417"><a
                        href="https://www.linenfashion.com/linen-lace/">Linen Lace<div
                          class="oxy-pro-menu-dropdown-icon-click-area"></div></a></li>
                    <li class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-8418"><a
                        href="https://www.linenfashion.com/linen-yarns/">Linen Yarns<div
                          class="oxy-pro-menu-dropdown-icon-click-area"></div></a></li>
                  </ul>
                </div>
                <div class="oxy-pro-menu-mobile-close-icon"><svg id="svg--pro-menu-Mobile">
                    <use xlink:href="#Lineariconsicon-cross-circle"></use>
                  </svg></div>
  
              </div>
  
            </div>

            </a>
          </div>
          <div id="_header_center-453-45248" class="oxy-header-center">
            <div id="div_block-513-87106" class="ct-div-block submenDiv"><a id="link-517-87106" class="ct-link" href="#"
                target="_self">
                <div id="fancy_icon-515-87106" class="ct-fancy-icon IconHover SearchOpen"><svg
                    id="svg-fancy_icon-515-87106">
                    <use xlink:href="#FontAwesomeicon-search"></use>
                  </svg></div>
              </a></div>
          </div>
          <div id="_header_right-456-45248" class="oxy-header-right"><a id="link-211-45248" class="ct-link"
              href="https://www.linenfashion.com/cart/" target="_self">
              <div id="fancy_icon-212-45248" class="ct-fancy-icon IconHover"><svg id="svg-fancy_icon-212-45248">
                  <use xlink:href="#FontAwesomeicon-shopping-cart"></use>
                </svg></div>
              <div id="code_block-213-45248" class="ct-code-block"></div>
            </a></div>
        </div>
      </div>
    </header>
    <header id="AditionalHeader" class="oxy-header-wrapper oxy-overlay-header oxy-header ToggleInteraction">
      <div id="SeconderyHeader" class="oxy-header-row SiteSize">
        <div class="oxy-header-container">
          <div id="_header_left-157-8612" class="oxy-header-left">
            <div id="div_block-203-8612" class="ct-div-block"></div>
          </div>
          <div id="_header_center-160-8612" class="oxy-header-center"></div>
          <div id="_header_right-161-8612" class="oxy-header-right">
            <nav id="DivSlideButtons01" class="ct-div-block" data-aos-offset="-50" data-aos-anchor-placement="top-top"
              data-aos-once="false">
              <div id="div_block-175-8612" class="ct-div-block submenDiv">
                <div id="fancy_icon-176-8612" class="ct-fancy-icon IconHover SearchOpen"><svg
                    id="svg-fancy_icon-176-8612">
                    <use xlink:href="#FontAwesomeicon-search"></use>
                  </svg></div>
              </div><a id="link-481-54589" class="ct-link" href="https://www.linenfashion.com/cart/" target="_self">
                <div id="fancy_icon-482-54589" class="ct-fancy-icon IconHover"><svg id="svg-fancy_icon-482-54589">
                    <use xlink:href="#FontAwesomeicon-shopping-cart"></use>
                  </svg></div>
                <div id="code_block-483-54589" class="ct-code-block"></div>
              </a>
              <div id="div_block-179-8612" class="ct-div-block submenDiv"><a id="link-180-8612" class="ct-link"
                  href="https://www.linenfashion.com/my-account/" target="_self">
                  <div id="fancy_icon-181-8612" class="ct-fancy-icon IconHover"><svg id="svg-fancy_icon-181-8612">
                      <use xlink:href="#FontAwesomeicon-user"></use>
                    </svg></div>
                </a></div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <main id="section-380-45248" class=" ct-section appearingmedia">
      <div class="ct-section-inner-wrap">
        <div id="div_block-3-15024" class="ct-div-block SiteSize">
          <div id="inner_content-2-15024" class="ct-inner-content">
            <h2>Contact Us</h2>
  
            <div class="container">
              <form id="contact" action="" method="post">
                <h3>Al-Sultan</h3>
                <fieldset>
                  <input placeholder="Your name" type="text" name="name" tabindex="1" required autofocus>
                </fieldset>
                <fieldset>
                  <input placeholder="Your Phone Number" name="phone" type="tel" tabindex="3" required>
                </fieldset>
                <fieldset>
                    <select name="fabric" id="cars" tabindex="6" >
                      <option value="Choose Fabric">Choose Fabric</option>
                        <option value="Pure Linen Fabrics">Pure Linen Fabrics</option>
                        <option value="Washed Linen Fabrics">Washed Linen Fabrics</option>
                        <option value="Wide Linen Fabrics">Wide Linen Fabrics</option>
                        <option value="Linen - Cotton Fabrics"> Linen - Cotton Fabrics</option>
                        <option value="Wide Linen Cotton Fabrics"> Wide Linen Cotton Fabrics</option>
                        <option value="Linen Wool Fabrics"> Linen Wool Fabrics</option>
                      </select>
                </fieldset>
                
                <fieldset>
                  <textarea name="address" placeholder="Type your Address here...." tabindex="5" required></textarea>
                </fieldset>
                <fieldset> 

                <p class="mb-4">
                  <?php
                echo $message
                  ?>
                </p>
                  <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                </fieldset>
              </form>
            </div>
  
            <h4>AB "Siulas" - "Linen fashion" department</h4>
  
  
  
            <div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
  
  
  
            <div class="wp-block-columns">
              <div class="wp-block-column">
                <p><strong>AB “Siulas”</strong><br>www.siulas.com<br>Astravas 17,<br>LT-41190<br>Birzai,<br>Lithuania</p>
              </div>
  
  
  
              <div class="wp-block-column">
                <p>phone: +370 450 31389<br>email: info@linenfashion.com</p>
  
  
  
                <p>OFFICE WORKING HOURS:<br>mon – fri (7.40AM – 4.10PM)</p>
              </div>
  
  
  
              <div class="wp-block-column">
                <p>VAT code: LT547560410<br>Company code: 154756041</p>
  
  
  
                <p>Bank: SWEDBANK AB<br>Account / IBAN: LT08 7300 0100 9963 7148<br>Bank code: 73000<br>SWIFT / BIC:
                  HABALT22</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <div id="BottomBanner01" class="ct-code-block"><a id="Gift-card-banner-01" class="ct-link SiteSize"
        href="https://www.linenfashion.com/gift-cards/gift-card/">
        <h4 id="headline-3-55737" class="ct-headline">Gift card</h4>
      </a></div>
    <div id="Allrightsresv" class="ct-code-block SiteSize"><a id="link_text-69-8612"
        class="ct-link-text FooterContainer110" href="" target="_self">© 2022 AB "Siulas". All rights reserved.</a></div>
    <footer id="section-29-8612" class=" ct-section FooterSec">
      <div class="ct-section-inner-wrap">
        <div id="code_block-271-45248" class="ct-code-block SiteSize">
        </div>
        <div id="new_columns-30-8612" class="ct-new-columns FooterSinc SiteSize">
          <div id="div_block-31-8612" class="ct-div-block FooterContainer110">
            <div id="_toggle-242-45248" class="oxy-toggle toggle-5648 toggle-5648-expanded"
              data-oxy-toggle-target=".CotnactsItem" data-oxy-toggle-initial-state="open"
              data-oxy-toggle-active-class="toggle-5648-expanded">
              <div class="oxy-expand-collapse-icon" href="#"></div>
              <div class="oxy-toggle-content">
                <div id="code_block-283-45248" class="ct-code-block">
                  <h4 id="capitalizetext">CONTACT US</h4>
                </div>
              </div>
            </div>
            <div id="div_block-33-8612" class="ct-div-block Footerpaditem CotnactsItem">
              <div id="fancy_icon-34-8612" class="ct-fancy-icon contactIcons"><svg id="svg-fancy_icon-34-8612">
                  <use xlink:href="#FontAwesomeicon-phone"></use>
                </svg></div>
              <div id="code_block-334-45248" class="ct-code-block CUPadding">+370 450 31389</div>
            </div>
            <div id="div_block-36-8612" class="ct-div-block Footerpaditem CotnactsItem">
              <div id="fancy_icon-37-8612" class="ct-fancy-icon contactIcons"><svg id="svg-fancy_icon-37-8612">
                  <use xlink:href="#FontAwesomeicon-envelope"></use>
                </svg></div>
              <div id="code_block-338-45248" class="ct-code-block CUPadding">info@linenfashion.com</div>
            </div>
            <div id="div_block-39-8612" class="ct-div-block Footerpaditem CotnactsItem">
              <div id="fancy_icon-40-8612" class="ct-fancy-icon contactIcons"><svg id="svg-fancy_icon-40-8612">
                  <use xlink:href="#FontAwesomeicon-map-marker"></use>
                </svg></div>
              <div id="code_block-340-45248" class="ct-code-block CUPadding">Astravo str. 17, LT – 41190</div>
            </div>
            <div id="div_block-42-8612" class="ct-div-block Footerpaditem CotnactsItem">
              <div id="fancy_icon-43-8612" class="ct-fancy-icon contactIcons"><svg id="svg-fancy_icon-43-8612">
                  <use xlink:href="#FontAwesomeicon-caret-right"></use>
                </svg></div>
              <div id="code_block-342-45248" class="ct-code-block CUPadding">Birzai, Lithuania</div>
            </div>
          </div>
          <div id="div_block-45-8612" class="ct-div-block FooterContainer110">
            <div id="_toggle-255-45248" class="oxy-toggle toggle-5648 toggle-5648-expanded"
              data-oxy-toggle-target=".ALFItem" data-oxy-toggle-initial-state="open"
              data-oxy-toggle-active-class="toggle-5648-expanded">
              <div class="oxy-expand-collapse-icon" href="#"></div>
              <div class="oxy-toggle-content">
                <div id="code_block-295-45248" class="ct-code-block">
                  <h4 id="capitalizetext">About Linen Fashion</h4>
                </div>
              </div>
            </div>
            <div id="MesiuSubMeniu" class="ct-code-block ">
              <div class="ALFItem Footerpaditem"><a id="alsLink" 
                  href="https://www.linenfashion.com/about-us/" target="_self">About Us</a></div>
              <div class="ALFItem Footerpaditem"><a id="alsLink" 
                  href="https://www.linenfashion.com/contact-us/" target="_self">Contact Us</a></div>
              <div class="ALFItem Footerpaditem"><a id="alsLink" 
                  href="https://www.linenfashion.com/terms-and-conditions/" target="_self">Terms and Conditions</a></div>
              <div class="ALFItem Footerpaditem"><a id="alsLink" 
                  href="https://www.linenfashion.com/privacy-policy/" target="_self">Privacy Policy</a></div>
            </div>
          </div>
          <div id="div_block-51-8612" class="ct-div-block FooterContainer110">
            <div id="_toggle-260-45248" class="oxy-toggle toggle-5648 toggle-5648-expanded"
              data-oxy-toggle-target=".AssistanceItem" data-oxy-toggle-initial-state="open"
              data-oxy-toggle-active-class="toggle-5648-expanded">
              <div class="oxy-expand-collapse-icon" href="#"></div>
              <div class="oxy-toggle-content">
                <div id="code_block-287-45248" class="ct-code-block">
                  <h4 id="capitalizetext">Assistance</h4>
                </div>
              </div>
            </div>
            <div id="code_block-438-45248" class="ct-code-block ">
              <div class="AssistanceItem Footerpaditem"><a id="alsLink" 
                  href="https://www.linenfashion.com/returns-and-exchanges/" target="_self">Returns and Exchanges</a>
              </div>
              <div class="AssistanceItem Footerpaditem"><a id="alsLink" 
                  href="https://www.linenfashion.com/shipping-and-delivery/" target="_self">Shipping and Delivery</a>
              </div>
              <div class="AssistanceItem Footerpaditem"><a id="alsLink" 
                  href="https://www.linenfashion.com/payment-information/" target="_self">Payment Information</a></div>
            </div>
          </div>
          <div id="div_block-56-8612" class="ct-div-block FooterContainer110">
            <div id="_toggle-266-45248" class="oxy-toggle toggle-5648 toggle-5648-expanded"
              data-oxy-toggle-target=".InfoItem" data-oxy-toggle-initial-state="open"
              data-oxy-toggle-active-class="toggle-5648-expanded">
              <div class="oxy-expand-collapse-icon" href="#"></div>
              <div class="oxy-toggle-content">
                <div id="code_block-289-45248" class="ct-code-block">
                  <h4 id="capitalizetext">Info</h4>
                </div>
              </div>
            </div>
            <div id="code_block-441-45248" class="ct-code-block ">
              <div class="InfoItem Footerpaditem"><a id="alsLink" 
                  href="https://www.linenfashion.com/news/" target="_self">News</a></div>
              <div class="InfoItem Footerpaditem"><a id="alsLink" 
                  href="https://www.linenfashion.com/about-linen/" target="_self">About Linen</a></div>
              <div class="InfoItem Footerpaditem"><a id="alsLink" 
                  href="https://www.linenfashion.com/linen-care/" target="_self">Linen Care</a></div>
            </div>
          </div>
          <div id="div_block-60-8612" class="ct-div-block FooterContainer110">
            <div id="code_block-369-45248" class="ct-code-block"><a target="_blank" id="fblink" class="ct-link FooterIcon"
                style="display: inline;" href="https://www.facebook.com/LinenFashion/">
                <div id="fancy_icon-62-8612" class="ct-fancy-icon"><svg id="svg-fancy_icon-62-8612">
                    <use xlink:href="#FontAwesomeicon-facebook-square"></use>
                  </svg></div>
              </a>
            </div><a id="fblink" class="ct-link FooterIcon" href="http://" target="_self">
              <div id="fancy_icon-62-8612" class="ct-fancy-icon"><svg id="svg-fancy_icon-62-8612">
                  <use xlink:href="#FontAwesomeicon-facebook-square"></use>
                </svg></div>
            </a>
            <div id="code_block-371-45248" class="ct-code-block"><a target="_blank" id="link-65-8612"
                class="ct-link FooterIcon" style="display: inline;" href="https://www.instagram.com/linenfashion/">
                <div id="fancy_icon-66-8612" class="ct-fancy-icon"><svg id="svg-fancy_icon-66-8612">
                    <use xlink:href="#FontAwesomeicon-instagram"></use>
                  </svg></div>
              </a></div><a id="instalink" class="ct-link FooterIcon" href="https://www.instagram.com/linenfashion/"
              target="_self">
              <div id="fancy_icon-66-8612" class="ct-fancy-icon"><svg id="svg-fancy_icon-66-8612">
                  <use xlink:href="#FontAwesomeicon-instagram"></use>
                </svg></div>
            </a>
          </div>
        </div>
        <div id="div_block-382-45248" class="ct-div-block FooterSinc SiteSize"></div>
      </div>
    </footer> <!-- WP_FOOTER -->
   
    <div id="cookie-law-info-again" data-nosnippet="true"
      style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0); position: fixed; font-family: inherit; width: auto; bottom: 0px; right: 100px; display: none;">
      <span id="cookie_hdr_showagain">Privacy &amp; Cookies Policy</span></div>
    <div class="cli-modal" data-nosnippet="true" id="cliSettingsPopup" tabindex="-1" role="dialog"
      aria-labelledby="cliSettingsPopup" aria-hidden="true">
      <div class="cli-modal-dialog" role="document">
        <div class="cli-modal-content cli-bar-popup">
          <button type="button" class="cli-modal-close" id="cliModalClose">
            <svg class="" viewBox="0 0 24 24">
              <path
                d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z">
              </path>
              <path d="M0 0h24v24h-24z" fill="none"></path>
            </svg>
            <span class="wt-cli-sr-only">Close</span>
          </button>
          <div class="cli-modal-body">
            <div class="cli-container-fluid cli-tab-container">
              <div class="cli-row">
                <div class="cli-col-12 cli-align-items-stretch cli-px-0">
                  <div class="cli-privacy-overview">
                    <h4>Privacy Overview</h4>
                    <div class="cli-privacy-content">
                      <div class="cli-privacy-content-text">This website uses cookies to improve your experience while you
                        navigate through the website. Out of these cookies, the cookies that are categorized as necessary
                        are stored on your browser as they are essential for the working of basic functionalities...</div>
                    </div>
                    <a class="cli-privacy-readmore" aria-label="Show more" role="button" data-readmore-text="Show more"
                      data-readless-text="Show less"></a>
                  </div>
                </div>
                <div class="cli-col-12 cli-align-items-stretch cli-px-0 cli-tab-section-container">
                  <div class="cli-tab-section">
                    <div class="cli-tab-header">
                      <a role="button" tabindex="0" class="cli-nav-link cli-settings-mobile" data-target="necessary"
                        data-toggle="cli-toggle-tab">
                        Necessary </a>
                      <div class="wt-cli-necessary-checkbox">
                        <input type="checkbox" class="cli-user-preference-checkbox" id="wt-cli-checkbox-necessary"
                          data-id="checkbox-necessary" checked="checked">
                        <label class="form-check-label" for="wt-cli-checkbox-necessary">Necessary</label>
                      </div>
                      <span class="cli-necessary-caption">Always Enabled</span>
                    </div>
                    <div class="cli-tab-content">
                      <div class="cli-tab-pane cli-fade" data-id="necessary">
                        <div class="wt-cli-cookie-description">
                          Necessary cookies are absolutely essential for the website to function properly. This category
                          only includes cookies that ensures basic functionalities and security features of the website.
                          These cookies do not store any personal information. </div>
                      </div>
                    </div>
                  </div>
                  <div class="cli-tab-section">
                    <div class="cli-tab-header">
                      <a role="button" tabindex="0" class="cli-nav-link cli-settings-mobile" data-target="non-necessary"
                        data-toggle="cli-toggle-tab">
                        Non-necessary </a>
                      <div class="cli-switch">
                        <input type="checkbox" id="wt-cli-checkbox-non-necessary" class="cli-user-preference-checkbox"
                          data-id="checkbox-non-necessary" checked="checked">
                        <label for="wt-cli-checkbox-non-necessary" class="cli-slider" data-cli-enable="Enabled"
                          data-cli-disable="Disabled"><span class="wt-cli-sr-only">Non-necessary</span></label>
                      </div>
                    </div>
                    <div class="cli-tab-content">
                      <div class="cli-tab-pane cli-fade" data-id="non-necessary">
                        <div class="wt-cli-cookie-description">
                          Any cookies that may not be particularly necessary for the website to function and is used
                          specifically to collect user personal data via analytics, ads, other embedded contents are
                          termed as non-necessary cookies. It is mandatory to procure user consent prior to running these
                          cookies on your website. </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="cli-modal-footer">
            <div class="wt-cli-element cli-container-fluid cli-tab-container">
              <div class="cli-row">
                <div class="cli-col-12 cli-align-items-stretch cli-px-0">
                  <div class="cli-tab-footer wt-cli-privacy-overview-actions">
  
                    <a id="wt-cli-privacy-save-btn" role="button" tabindex="0" data-cli-action="accept"
                      class="wt-cli-privacy-btn cli_setting_save_button wt-cli-privacy-accept-btn cli-btn">SAVE &amp;
                      ACCEPT</a>
                  </div>
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cli-modal-backdrop cli-fade cli-settings-overlay"></div>
    <div class="cli-modal-backdrop cli-fade cli-popupbar-overlay"></div>
    <!--googleon: all-->
  
    <!--?xml version="1.0"?--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
      aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1">
      <defs>
        <symbol id="FontAwesomeicon-search" viewBox="0 0 26 28">
          <title>search</title>
          <path
            d="M18 13c0-3.859-3.141-7-7-7s-7 3.141-7 7 3.141 7 7 7 7-3.141 7-7zM26 26c0 1.094-0.906 2-2 2-0.531 0-1.047-0.219-1.406-0.594l-5.359-5.344c-1.828 1.266-4.016 1.937-6.234 1.937-6.078 0-11-4.922-11-11s4.922-11 11-11 11 4.922 11 11c0 2.219-0.672 4.406-1.937 6.234l5.359 5.359c0.359 0.359 0.578 0.875 0.578 1.406z">
          </path>
        </symbol>
        <symbol id="FontAwesomeicon-user" viewBox="0 0 20 28">
          <title>user</title>
          <path
            d="M20 21.859c0 2.281-1.5 4.141-3.328 4.141h-13.344c-1.828 0-3.328-1.859-3.328-4.141 0-4.109 1.016-8.859 5.109-8.859 1.266 1.234 2.984 2 4.891 2s3.625-0.766 4.891-2c4.094 0 5.109 4.75 5.109 8.859zM16 8c0 3.313-2.688 6-6 6s-6-2.688-6-6 2.688-6 6-6 6 2.688 6 6z">
          </path>
        </symbol>
        <symbol id="FontAwesomeicon-close" viewBox="0 0 22 28">
          <title>close</title>
          <path
            d="M20.281 20.656c0 0.391-0.156 0.781-0.438 1.062l-2.125 2.125c-0.281 0.281-0.672 0.438-1.062 0.438s-0.781-0.156-1.062-0.438l-4.594-4.594-4.594 4.594c-0.281 0.281-0.672 0.438-1.062 0.438s-0.781-0.156-1.062-0.438l-2.125-2.125c-0.281-0.281-0.438-0.672-0.438-1.062s0.156-0.781 0.438-1.062l4.594-4.594-4.594-4.594c-0.281-0.281-0.438-0.672-0.438-1.062s0.156-0.781 0.438-1.062l2.125-2.125c0.281-0.281 0.672-0.438 1.062-0.438s0.781 0.156 1.062 0.438l4.594 4.594 4.594-4.594c0.281-0.281 0.672-0.438 1.062-0.438s0.781 0.156 1.062 0.438l2.125 2.125c0.281 0.281 0.438 0.672 0.438 1.062s-0.156 0.781-0.438 1.062l-4.594 4.594 4.594 4.594c0.281 0.281 0.438 0.672 0.438 1.062z">
          </path>
        </symbol>
        <symbol id="FontAwesomeicon-arrow-circle-o-down" viewBox="0 0 24 28">
          <title>arrow-circle-o-down</title>
          <path
            d="M17.5 14.5c0 0.141-0.063 0.266-0.156 0.375l-4.984 4.984c-0.109 0.094-0.234 0.141-0.359 0.141s-0.25-0.047-0.359-0.141l-5-5c-0.141-0.156-0.187-0.359-0.109-0.547s0.266-0.313 0.469-0.313h3v-5.5c0-0.281 0.219-0.5 0.5-0.5h3c0.281 0 0.5 0.219 0.5 0.5v5.5h3c0.281 0 0.5 0.219 0.5 0.5zM12 5.5c-4.688 0-8.5 3.813-8.5 8.5s3.813 8.5 8.5 8.5 8.5-3.813 8.5-8.5-3.813-8.5-8.5-8.5zM24 14c0 6.625-5.375 12-12 12s-12-5.375-12-12 5.375-12 12-12v0c6.625 0 12 5.375 12 12z">
          </path>
        </symbol>
        <symbol id="FontAwesomeicon-map-marker" viewBox="0 0 16 28">
          <title>map-marker</title>
          <path
            d="M12 10c0-2.203-1.797-4-4-4s-4 1.797-4 4 1.797 4 4 4 4-1.797 4-4zM16 10c0 0.953-0.109 1.937-0.516 2.797l-5.688 12.094c-0.328 0.688-1.047 1.109-1.797 1.109s-1.469-0.422-1.781-1.109l-5.703-12.094c-0.406-0.859-0.516-1.844-0.516-2.797 0-4.422 3.578-8 8-8s8 3.578 8 8z">
          </path>
        </symbol>
        <symbol id="FontAwesomeicon-chevron-down" viewBox="0 0 28 28">
          <title>chevron-down</title>
          <path
            d="M26.297 12.625l-11.594 11.578c-0.391 0.391-1.016 0.391-1.406 0l-11.594-11.578c-0.391-0.391-0.391-1.031 0-1.422l2.594-2.578c0.391-0.391 1.016-0.391 1.406 0l8.297 8.297 8.297-8.297c0.391-0.391 1.016-0.391 1.406 0l2.594 2.578c0.391 0.391 0.391 1.031 0 1.422z">
          </path>
        </symbol>
        <symbol id="FontAwesomeicon-shopping-cart" viewBox="0 0 26 28">
          <title>shopping-cart</title>
          <path
            d="M10 24c0 1.094-0.906 2-2 2s-2-0.906-2-2 0.906-2 2-2 2 0.906 2 2zM24 24c0 1.094-0.906 2-2 2s-2-0.906-2-2 0.906-2 2-2 2 0.906 2 2zM26 7v8c0 0.5-0.391 0.938-0.891 1l-16.312 1.906c0.078 0.359 0.203 0.719 0.203 1.094 0 0.359-0.219 0.688-0.375 1h14.375c0.547 0 1 0.453 1 1s-0.453 1-1 1h-16c-0.547 0-1-0.453-1-1 0-0.484 0.703-1.656 0.953-2.141l-2.766-12.859h-3.187c-0.547 0-1-0.453-1-1s0.453-1 1-1h4c1.047 0 1.078 1.25 1.234 2h18.766c0.547 0 1 0.453 1 1z">
          </path>
        </symbol>
        <symbol id="FontAwesomeicon-facebook-square" viewBox="0 0 24 28">
          <title>facebook-square</title>
          <path
            d="M19.5 2c2.484 0 4.5 2.016 4.5 4.5v15c0 2.484-2.016 4.5-4.5 4.5h-2.938v-9.297h3.109l0.469-3.625h-3.578v-2.312c0-1.047 0.281-1.75 1.797-1.75l1.906-0.016v-3.234c-0.328-0.047-1.469-0.141-2.781-0.141-2.766 0-4.672 1.687-4.672 4.781v2.672h-3.125v3.625h3.125v9.297h-8.313c-2.484 0-4.5-2.016-4.5-4.5v-15c0-2.484 2.016-4.5 4.5-4.5h15z">
          </path>
        </symbol>
        <symbol id="FontAwesomeicon-phone" viewBox="0 0 22 28">
          <title>phone</title>
          <path
            d="M22 19.375c0 0.562-0.25 1.656-0.484 2.172-0.328 0.766-1.203 1.266-1.906 1.656-0.922 0.5-1.859 0.797-2.906 0.797-1.453 0-2.766-0.594-4.094-1.078-0.953-0.344-1.875-0.766-2.734-1.297-2.656-1.641-5.859-4.844-7.5-7.5-0.531-0.859-0.953-1.781-1.297-2.734-0.484-1.328-1.078-2.641-1.078-4.094 0-1.047 0.297-1.984 0.797-2.906 0.391-0.703 0.891-1.578 1.656-1.906 0.516-0.234 1.609-0.484 2.172-0.484 0.109 0 0.219 0 0.328 0.047 0.328 0.109 0.672 0.875 0.828 1.188 0.5 0.891 0.984 1.797 1.5 2.672 0.25 0.406 0.719 0.906 0.719 1.391 0 0.953-2.828 2.344-2.828 3.187 0 0.422 0.391 0.969 0.609 1.344 1.578 2.844 3.547 4.813 6.391 6.391 0.375 0.219 0.922 0.609 1.344 0.609 0.844 0 2.234-2.828 3.187-2.828 0.484 0 0.984 0.469 1.391 0.719 0.875 0.516 1.781 1 2.672 1.5 0.313 0.156 1.078 0.5 1.188 0.828 0.047 0.109 0.047 0.219 0.047 0.328z">
          </path>
        </symbol>
        <symbol id="FontAwesomeicon-bars" viewBox="0 0 24 28">
          <title>bars</title>
          <path
            d="M24 21v2c0 0.547-0.453 1-1 1h-22c-0.547 0-1-0.453-1-1v-2c0-0.547 0.453-1 1-1h22c0.547 0 1 0.453 1 1zM24 13v2c0 0.547-0.453 1-1 1h-22c-0.547 0-1-0.453-1-1v-2c0-0.547 0.453-1 1-1h22c0.547 0 1 0.453 1 1zM24 5v2c0 0.547-0.453 1-1 1h-22c-0.547 0-1-0.453-1-1v-2c0-0.547 0.453-1 1-1h22c0.547 0 1 0.453 1 1z">
          </path>
        </symbol>
        <symbol id="FontAwesomeicon-caret-right" viewBox="0 0 9 28">
          <title>caret-right</title>
          <path
            d="M9 14c0 0.266-0.109 0.516-0.297 0.703l-7 7c-0.187 0.187-0.438 0.297-0.703 0.297-0.547 0-1-0.453-1-1v-14c0-0.547 0.453-1 1-1 0.266 0 0.516 0.109 0.703 0.297l7 7c0.187 0.187 0.297 0.438 0.297 0.703z">
          </path>
        </symbol>
        <symbol id="FontAwesomeicon-envelope" viewBox="0 0 28 28">
          <title>envelope</title>
          <path
            d="M28 11.094v12.406c0 1.375-1.125 2.5-2.5 2.5h-23c-1.375 0-2.5-1.125-2.5-2.5v-12.406c0.469 0.516 1 0.969 1.578 1.359 2.594 1.766 5.219 3.531 7.766 5.391 1.313 0.969 2.938 2.156 4.641 2.156h0.031c1.703 0 3.328-1.188 4.641-2.156 2.547-1.844 5.172-3.625 7.781-5.391 0.562-0.391 1.094-0.844 1.563-1.359zM28 6.5c0 1.75-1.297 3.328-2.672 4.281-2.438 1.687-4.891 3.375-7.313 5.078-1.016 0.703-2.734 2.141-4 2.141h-0.031c-1.266 0-2.984-1.437-4-2.141-2.422-1.703-4.875-3.391-7.297-5.078-1.109-0.75-2.688-2.516-2.688-3.938 0-1.531 0.828-2.844 2.5-2.844h23c1.359 0 2.5 1.125 2.5 2.5z">
          </path>
        </symbol>
        <symbol id="FontAwesomeicon-ellipsis-v" viewBox="0 0 6 28">
          <title>ellipsis-v</title>
          <path
            d="M6 19.5v3c0 0.828-0.672 1.5-1.5 1.5h-3c-0.828 0-1.5-0.672-1.5-1.5v-3c0-0.828 0.672-1.5 1.5-1.5h3c0.828 0 1.5 0.672 1.5 1.5zM6 11.5v3c0 0.828-0.672 1.5-1.5 1.5h-3c-0.828 0-1.5-0.672-1.5-1.5v-3c0-0.828 0.672-1.5 1.5-1.5h3c0.828 0 1.5 0.672 1.5 1.5zM6 3.5v3c0 0.828-0.672 1.5-1.5 1.5h-3c-0.828 0-1.5-0.672-1.5-1.5v-3c0-0.828 0.672-1.5 1.5-1.5h3c0.828 0 1.5 0.672 1.5 1.5z">
          </path>
        </symbol>
        <symbol id="FontAwesomeicon-instagram" viewBox="0 0 24 28">
          <title>instagram</title>
          <path
            d="M16 14c0-2.203-1.797-4-4-4s-4 1.797-4 4 1.797 4 4 4 4-1.797 4-4zM18.156 14c0 3.406-2.75 6.156-6.156 6.156s-6.156-2.75-6.156-6.156 2.75-6.156 6.156-6.156 6.156 2.75 6.156 6.156zM19.844 7.594c0 0.797-0.641 1.437-1.437 1.437s-1.437-0.641-1.437-1.437 0.641-1.437 1.437-1.437 1.437 0.641 1.437 1.437zM12 4.156c-1.75 0-5.5-0.141-7.078 0.484-0.547 0.219-0.953 0.484-1.375 0.906s-0.688 0.828-0.906 1.375c-0.625 1.578-0.484 5.328-0.484 7.078s-0.141 5.5 0.484 7.078c0.219 0.547 0.484 0.953 0.906 1.375s0.828 0.688 1.375 0.906c1.578 0.625 5.328 0.484 7.078 0.484s5.5 0.141 7.078-0.484c0.547-0.219 0.953-0.484 1.375-0.906s0.688-0.828 0.906-1.375c0.625-1.578 0.484-5.328 0.484-7.078s0.141-5.5-0.484-7.078c-0.219-0.547-0.484-0.953-0.906-1.375s-0.828-0.688-1.375-0.906c-1.578-0.625-5.328-0.484-7.078-0.484zM24 14c0 1.656 0.016 3.297-0.078 4.953-0.094 1.922-0.531 3.625-1.937 5.031s-3.109 1.844-5.031 1.937c-1.656 0.094-3.297 0.078-4.953 0.078s-3.297 0.016-4.953-0.078c-1.922-0.094-3.625-0.531-5.031-1.937s-1.844-3.109-1.937-5.031c-0.094-1.656-0.078-3.297-0.078-4.953s-0.016-3.297 0.078-4.953c0.094-1.922 0.531-3.625 1.937-5.031s3.109-1.844 5.031-1.937c1.656-0.094 3.297-0.078 4.953-0.078s3.297-0.016 4.953 0.078c1.922 0.094 3.625 0.531 5.031 1.937s1.844 3.109 1.937 5.031c0.094 1.656 0.078 3.297 0.078 4.953z">
          </path>
        </symbol>
      </defs>
    </svg>
    <!--?xml version="1.0"?--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
      style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1">
      <defs>
        <symbol id="Lineariconsicon-cross-circle" viewBox="0 0 20 20">
          <title>cross-circle</title>
          <path class="path1"
            d="M14.332 14.126l-4.080-3.626 4.080-3.626c0.206-0.183 0.225-0.499 0.042-0.706s-0.499-0.225-0.706-0.042l-4.168 3.705-4.168-3.705c-0.206-0.183-0.522-0.165-0.706 0.042s-0.165 0.522 0.042 0.706l4.080 3.626-4.080 3.626c-0.206 0.183-0.225 0.499-0.042 0.706 0.099 0.111 0.236 0.168 0.374 0.168 0.118 0 0.237-0.042 0.332-0.126l4.168-3.705 4.168 3.705c0.095 0.085 0.214 0.126 0.332 0.126 0.138 0 0.275-0.057 0.374-0.168 0.183-0.206 0.165-0.522-0.042-0.706z">
          </path>
          <path class="path2"
            d="M9.5 20c-2.538 0-4.923-0.988-6.718-2.782s-2.782-4.18-2.782-6.717c0-2.538 0.988-4.923 2.782-6.718s4.18-2.783 6.718-2.783c2.538 0 4.923 0.988 6.718 2.783s2.782 4.18 2.782 6.718-0.988 4.923-2.782 6.717c-1.794 1.794-4.18 2.782-6.718 2.782zM9.5 2c-4.687 0-8.5 3.813-8.5 8.5s3.813 8.5 8.5 8.5 8.5-3.813 8.5-8.5-3.813-8.5-8.5-8.5z">
          </path>
        </symbol>
      </defs>
    </svg>
  
    <div id="yith-ywgc">
      <div class="yith-ywgc-overlay close-on-click"></div>
      <div class="yith-ywgc-popup-wrapper">
        <div class="yith-ywgc-popup-wrapper-region">
          <div class="yith-ywgc-popup" data-animation-in="fadeIn" data-animation-out="fadeOut">
            <div class="yith-ywgc-popup-inner">
              <div class="yith-ywgc-popup-close">
              </div>
              <div class="yith-ywgc-popup-content-wrapper"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="pswp__bg"></div>
      <div class="pswp__scroll-wrap">
        <div class="pswp__container">
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
          <div class="pswp__top-bar">
            <div class="pswp__counter"></div>
            <button class="pswp__button pswp__button--close" aria-label="Close (Esc)"></button>
            <button class="pswp__button pswp__button--share" aria-label="Share"></button>
            <button class="pswp__button pswp__button--fs" aria-label="Toggle fullscreen"></button>
            <button class="pswp__button pswp__button--zoom" aria-label="Zoom in/out"></button>
            <div class="pswp__preloader">
              <div class="pswp__preloader__icn">
                <div class="pswp__preloader__cut">
                  <div class="pswp__preloader__donut"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
            <div class="pswp__share-tooltip"></div>
          </div>
          <button class="pswp__button pswp__button--arrow--left" aria-label="Previous (arrow left)"></button>
          <button class="pswp__button pswp__button--arrow--right" aria-label="Next (arrow right)"></button>
          <div class="pswp__caption">
            <div class="pswp__caption__center"></div>
          </div>
        </div>
      </div>
    </div>
                    </main>
    <a href="https://api.whatsapp.com/send?phone=971562412725&text=Hello">
    <div class="whatsappbtn">
      <img src="whatsapp.png" alt="">
    </div>
    </a>
  </body>
</html>