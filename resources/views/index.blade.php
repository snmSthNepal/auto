<!DOCTYPE html>
<html lang="en">
<head>
    @include('common.topNav')
    <title>AutoPoint Homepage</title>
</head>
<body>
    <div id="page">
        @include('common.header')
        <!--container-->
        <div class="content">
            <div class="container-fluid">
                <div class="container"> 
                    <div class="row">
                        <div class="section-filter">
                            <div class="b-filter__inner bg-grey">
                                <h2>Find a ride</h2>
                                <form>
                                    <select class="" id="company" data-width="100%" tabindex="-98">
                                        <option value="">Select Company</option>
                                        <option value="hero">Hero</option>
                                        <option value="honda">Honda</option>
                                        <option value="suzuki">Suzuki</option>
                                        <option value="tvs">TVS</option>
                                        <option value="yamaha">Yamaha</option>
                                    </select>        
                                    <select class="" data-width="100%" tabindex="-98">
                                            <option>Select ride</option>
                                            <optgroup id="rideOption" label="Select a company first">
                                            </optgroup>
                                            <optgroup id="hero" label="hero" hidden>
                                                <option value="impulse">Impulse</option>
                                                <option value="xtreme">Xtreme</option>
                                            </optgroup>
                                            <optgroup id="honda" label="honda" hidden>
                                                <option value="unicorn">Unicorn</option>
                                                <option value="dio">Dio</option>
                                            </optgroup>
                                            <optgroup id="suzuki" label="suzuki" hidden>
                                                <option value="suzuki1">suzuki1</option>
                                                <option value="suzuki2">suzuki2</option>
                                            </optgroup>
                                            <optgroup id="tvs" label="tvs" hidden>
                                                <option value="tvs1">tvs1</option>
                                                <option value="tvs2">tvs2</option>
                                            </optgroup>
                                            <optgroup id="yamaha" label="yamaha" hidden>
                                                <option value="v1">R15 v1</option>
                                                <option value="v2">R15 v2</option>
                                                <option value="v3">R15 v3</option>
                                            </optgroup>
                                    </select>    
                                    <select class="" data-width="100%" tabindex="-98">
                                        <option>Condition</option>
                                        <option>New</option>
                                        <option>Like new</option>
                                        <option>Used</option>
                                    </select>
                                    <select class="" data-width="100%" tabindex="-98">
                                        <option>Select Model</option>
                                        <option>2010 </option>
                                        <option>2011</option>
                                        <option>2012</option>
                                        <option>2013 </option>
                                        <option>2014</option>
                                        <option>2015</option>
                                        <option>2016 </option>
                                        <option>2017</option>
                                        <option>2018</option>
                                    </select>
                                    <div class="ui-filter-slider">
                                        <div class="sidebar-widget-body m-t-10">
                                            <div class="price-range-holder">
                                                <span><b>Price range</b></span>
                                                <br>
                                                <span class="min-max"> <span class="pull-left">Nrs. 20000</span> <span class="pull-right">Nrs.500000</span> </span>
                                                <input type="text" class="price-slider" value="" style="display:block">
                                            </div>
                                            <!-- /.price-range-holder -->
                                        </div>
                                    </div>
                                    <div>
                                        <div class="b-filter__btns">
                                            <button class="btn btn-lg btn-primary">search vehicle</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Slider -->
                    <div class="home-slider5">
                        <div id="thmg-slideshow" class="thmg-slideshow">
                            <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container'>
                                <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
                                    <ul>
                                        <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='images/slider1.jpg'>
                                            <img src='../images/slider1.jpg' data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner" />
                                            <div class="container">
                                                <div class="content_slideshow">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-sm-3 col-md-3 "> &nbsp; </div>
                                                        <div class="col-lg-9 col-sm-9 col-md-9">
                                                            <div class="info">
                                                                <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'><span>Top watchlist</span> </div>
                                                                <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'><span style="font-weight:normal; display:block">Modern-classic</span> incredible </div>
                                                                <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1450' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'>Have a member of our team look-up your ride</div>
                                                                <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="buy-btn">Book a Free Appointment</a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='images/slide-img2.jpg'>
                                            <img src='../images/slider2.jpg' data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner" />
                                            <div class="container">
                                                <div class="content_slideshow">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-sm-3 col-md-3">&nbsp;</div>
                                                        <div class="col-lg-9 col-sm-9 col-md-9">
                                                            <div class="info">
                                                                <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'><span>Buy or Sell</span> </div>
                                                                <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'><span style="font-weight:normal; display:block">All Rides</span> One Place </div>
                                                                <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1450' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'>Get 40% OFF on selected items.</div>
                                                                <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="buy-btn">Book a free Appointment</a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='images/slide-img2.jpg'>
                                            <img src='../images/slider3.jpg' data-bgfit='cover' data-bgrepeat='no-repeat' alt="banner" />
                                            <div class="container">
                                                <div class="content_slideshow">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-sm-3 col-md-3">&nbsp;</div>
                                                        <div class="col-lg-9 col-sm-9 col-md-9">
                                                            <div class="info">
                                                                <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'><span>Buy or Sell</span> </div>
                                                                <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'><span style="font-weight:normal; display:block">All Rides</span> One Place </div>
                                                                <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1450' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'>Get 40% OFF on selected items.</div>
                                                                <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="buy-btn">Book a free Appointment</a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="tp-bannertimer"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Category slider Start-->
            <div class="top-cate">
                <div class="featured-pro container">
                    <div>
                        <div class="slider-items-products">
                            <div class="new_title">
                                <h2>Best Value Products </h2>
                            </div>
                            <div id="top-categories" class="product-flexslider hidden-buttons">
                                <div class="slider-items slider-width-col4 products-grid">
                                    <div class="item">
                                        <div class="pro-img">
                                            <img src="../images/car-type1.png" alt="Retis lapen casen">
                                            <div class="pro-info">Sedans</div>
                                        </div>
                                    </div>
                                    <!-- Item -->
                                    <div class="item">
                                        <div class="pro-img">
                                            <img src="../images/car-type2.png" alt="Retis lapen casen">
                                            <div class="pro-info">Trucks</div>
                                        </div>
                                    </div>
                                    <!-- End Item -->
                                    <!-- Item -->
                                    <div class="item">
                                        <div class="pro-img">
                                            <img src="../images/car-type7.png" alt="Retis lapen casen">
                                            <div class="pro-info">SUVS‎</div>
                                        </div>
                                    </div>
                                    <!-- End Item -->
                                    <!-- Item -->
                                    <div class="item">
                                        <div class="pro-img">
                                            <img src="../images/car-type3.png" alt="Retis lapen casen">
                                            <div class="pro-info">Convertibles</div>
                                        </div>
                                    </div>
                                    <!-- End Item -->
                                    <!-- Item -->
                                    <div class="item">
                                        <div class="pro-img">
                                            <img src="../images/car-type5.png" alt="Retis lapen casen">
                                            <div class="pro-info">Hybrids</div>
                                        </div>
                                    </div>
                                    <!-- End Item -->
                                    <!-- Item -->
                                    <div class="item">
                                        <div class="pro-img">
                                            <img src="../images/car-type9.png" alt="Retis lapen casen">
                                            <div class="pro-info">Hatchbacks</div>
                                        </div>
                                    </div>
                                    <!-- End Item -->
                                    <!-- Item -->
                                    <div class="item">
                                        <div class="pro-img">
                                            <img src="../images/car-type6.png" alt="Retis lapen casen">
                                            <div class="pro-info">Coupes</div>
                                        </div>
                                    </div>
                                    <!-- End Item -->
                                    <!-- Item -->
                                    <div class="item">
                                        <div class="pro-img">
                                            <img src="../images/car-type8.png" alt="Retis lapen casen">
                                            <div class="pro-info">Wagons</div>
                                        </div>
                                    </div>
                                    <!-- End Item -->
                                    <!-- Item -->
                                    <div class="item">
                                        <div class="pro-img">
                                            <img src="../images/car-type10.png" alt="Retis lapen casen">
                                            <div class="pro-info">Luxury</div>
                                        </div>
                                    </div>
                                    <!-- End Item -->
                                    <!-- Item -->
                                    <div class="item">
                                        <div class="pro-img">
                                            <img src="../images/car-type12.png" alt="Retis lapen casen">
                                            <div class="pro-info">Pickup</div>
                                        </div>
                                    </div>
                                    <!-- End Item -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Category silder End-->

            <div id="top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> <a href="#" data-scroll-goto="1"> <img src="../images/speakers.png" alt="promotion-banner1"> </a> </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"> <a href="#" data-scroll-goto="2"> <img src="../images/schedule.png" alt="promotion-banner2"> </a> </div>
                    </div>
                </div>
            </div>

            <!-- best Pro Slider -->
            <section class=" wow bounceInUp animated">
                <div class="hot_deals slider-items-products container">
                    <div class="new_title">
                        <h2>Deals of the Week</h2>
                        <div class="box-timer">
                            <div class="countbox_1 timer-grid"></div>
                        </div>
                    </div>
                    <div id="hot_deals" class="product-flexslider hidden-buttons">
                        <div class="slider-items slider-width-col4 products-grid">
                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info">
                                            <a href="accessories-detail.html" title="Retis lapen casen" class="product-image"><img src="../products-images/p1.jpg" alt="Retis lapen casen"></a>
                                            <div class="new-label new-top-left">Used</div>
                                            <div class="sale-label sale-top-left">-15%</div>
                                            <div class="item-box-hover">
                                                <div class="box-inner">
                                                    <div class="add_cart">
                                                        <button class="button btn-cart" type="button"></button>
                                                    </div>
                                                    <div class="product-detail-bnt">
                                                        <a href="../quickview" class="button detail-bnt">
                                                            <span>Quick View</span>
                                                        </a>
                                                    </div>
                                                    <div class="actions">
                                                        <span class="add-to-links">
                                                            <a href="#" class="link-wishlist" title="Add to Wishlist">
                                                                <span>Add to Wishlist</span>
                                                            </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"><a href="accessories-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
                                            <div class="item-content">
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating" style="width:80%"></div>
                                                        </div>
                                                        <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                    </div>
                                                </div>
                                                <div class="item-price">
                                                    <div class="price-box"><span class="regular-price"><span class="price">$49000.00</span> </span> </div>
                                                </div>
                                                <div class="other-info">
                                                    <div class="col-km"><i class="fa fa-tachometer"></i> 4875km</div>
                                                    <div class="col-engine"><i class="fa fa-gear"></i> Automatic</div>
                                                    <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2018</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info">
                                            <a href="accessories-detail.html" title="Retis lapen casen" class="product-image"><img src="../products-images/p2.jpg" alt="Retis lapen casen"></a>
                                            <div class="item-box-hover">
                                                <div class="box-inner">
                                                    <div class="add_cart">
                                                        <button class="button btn-cart" type="button"></button>
                                                    </div>
                                                    <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                                    <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"><a href="accessories-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
                                            <div class="item-content">
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating" style="width:80%"></div>
                                                        </div>
                                                        <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                    </div>
                                                </div>
                                                <div class="item-price">
                                                    <div class="price-box"><span class="regular-price"><span class="price">$39000.00</span> </span> </div>
                                                </div>
                                                <div class="other-info">
                                                    <div class="col-km"><i class="fa fa-tachometer"></i> 847km</div>
                                                    <div class="col-engine"><i class="fa fa-gear"></i> Manual</div>
                                                    <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2018</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Item -->
                            <!-- Item -->
                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info">
                                            <a href="accessories-detail.html" title="Retis lapen casen" class="product-image"><img src="../products-images/p3.jpg" alt="Retis lapen casen"></a>
                                            <div class="item-box-hover">
                                                <div class="box-inner">
                                                    <div class="add_cart">
                                                        <button class="button btn-cart" type="button"></button>
                                                    </div>
                                                    <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                                    <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"><a href="accessories-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
                                            <div class="item-content">
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating" style="width:80%"></div>
                                                        </div>
                                                        <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                    </div>
                                                </div>
                                                <div class="item-price">
                                                    <div class="price-box"><span class="regular-price"><span class="price">$99000.00</span> </span> </div>
                                                </div>
                                                <div class="other-info">
                                                    <div class="col-km"><i class="fa fa-tachometer"></i>687km</div>
                                                    <div class="col-engine"><i class="fa fa-gear"></i> Manual</div>
                                                    <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2019</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Item -->

                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info">
                                            <a href="accessories-detail.html" title="Retis lapen casen" class="product-image"><img src="../products-images/p12.jpg" alt="Retis lapen casen"></a>
                                            <div class="item-box-hover">
                                                <div class="box-inner">
                                                    <div class="add_cart">
                                                        <button class="button btn-cart" type="button"></button>
                                                    </div>
                                                    <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                                    <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"><a href="accessories-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
                                            <div class="item-content">
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating" style="width:80%"></div>
                                                        </div>
                                                        <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                    </div>
                                                </div>
                                                <div class="item-price">
                                                    <div class="price-box"><span class="regular-price"><span class="price">$59000.00</span> </span> </div>
                                                </div>
                                                <div class="other-info">
                                                    <div class="col-km"><i class="fa fa-tachometer"></i> 10587km</div>
                                                    <div class="col-engine"><i class="fa fa-gear"></i> Manual</div>
                                                    <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2017</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Item -->
                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info">
                                            <a href="accessories-detail.html" title="Retis lapen casen" class="product-image"><img src="../products-images/p8.jpg" alt="Retis lapen casen"></a>
                                            <div class="new-label new-top-left">New</div>
                                            <div class="item-box-hover">
                                                <div class="box-inner">
                                                    <div class="add_cart">
                                                        <button class="button btn-cart" type="button"></button>
                                                    </div>
                                                    <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                                    <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"><a href="accessories-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
                                            <div class="item-content">
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating" style="width:80%"></div>
                                                        </div>
                                                        <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                    </div>
                                                </div>
                                                <div class="item-price">
                                                    <div class="price-box"><span class="regular-price"><span class="price">$47000.00</span> </span> </div>
                                                </div>
                                                <div class="other-info">
                                                    <div class="col-km"><i class="fa fa-tachometer"></i> 0km</div>
                                                    <div class="col-engine"><i class="fa fa-gear"></i> Manual</div>
                                                    <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2019</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Item -->
                            <!-- Item -->
                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="item-img-info">
                                            <a href="accessories-detail.html" title="Retis lapen casen" class="product-image"><img src="../products-images/p6.jpg" alt="Retis lapen casen"></a>
                                            <div class="new-label new-top-left">New</div>
                                            <div class="item-box-hover">
                                                <div class="box-inner">
                                                    <div class="add_cart">
                                                        <button class="button btn-cart" type="button"></button>
                                                    </div>
                                                    <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                                    <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"><a href="accessories-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
                                            <div class="item-content">
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating" style="width:80%"></div>
                                                        </div>
                                                        <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                    </div>
                                                </div>
                                                <div class="item-price">
                                                    <div class="price-box"><span class="regular-price"><span class="price">$67000.00</span> </span> </div>
                                                </div>
                                                <div class="other-info">
                                                    <div class="col-km"><i class="fa fa-tachometer"></i> 847km</div>
                                                    <div class="col-engine"><i class="fa fa-gear"></i> Semi</div>
                                                    <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2016</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Item -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- Logo Brand Block -->
        </div>

        <!-- Recently Sold Products -->
        <section class=" wow bounceInUp animated">
            <div class="best-pro slider-items-products container">
                <div class="new_title">
                    <h2>Recently Sold Products</h2>
                </div>
                <div id="best-seller" class="product-flexslider hidden-buttons">
                    <div class="slider-items slider-width-col4 products-grid">
                        <div class="item">
                            <div class="item-inner">
                                <div class="item-img">
                                    <div class="item-img-info">
                                        <a href="accessories-detail.html" title="Retis lapen casen" class="product-image"><img src="../products-images/p13.jpg" alt="Retis lapen casen"></a>
                                        <div class="new-label new-top-left">Hot</div>
                                        <div class="sale-label sale-top-left">-15%</div>
                                        <div class="item-box-hover">
                                            <div class="box-inner">
                                                <div class="add_cart">
                                                    <button class="button btn-cart" type="button"></button>
                                                </div>
                                                <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                                <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-info">
                                    <div class="info-inner">
                                        <div class="item-title"><a href="accessories-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
                                        <div class="item-content">
                                            <div class="rating">
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:80%"></div>
                                                    </div>
                                                    <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                </div>
                                            </div>
                                            <div class="item-price">
                                                <div class="price-box"><span class="regular-price"><span class="price">$49000.00</span> </span> </div>
                                            </div>
                                            <div class="other-info">
                                                <div class="col-km"><i class="fa fa-tachometer"></i> 4875km</div>
                                                <div class="col-engine"><i class="fa fa-gear"></i> Automatic</div>
                                                <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2018</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="item">
                            <div class="item-inner">
                                <div class="item-img">
                                    <div class="item-img-info">
                                        <a href="accessories-detail.html" title="Retis lapen casen" class="product-image"><img src="../products-images/p14.jpg" alt="Retis lapen casen"></a>
                                        <div class="item-box-hover">
                                            <div class="box-inner">
                                                <div class="add_cart">
                                                    <button class="button btn-cart" type="button"></button>
                                                </div>
                                                <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                                <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-info">
                                    <div class="info-inner">
                                        <div class="item-title"><a href="accessories-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
                                        <div class="item-content">
                                            <div class="rating">
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:80%"></div>
                                                    </div>
                                                    <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                </div>
                                            </div>
                                            <div class="item-price">
                                                <div class="price-box"><span class="regular-price"><span class="price">$39000.00</span> </span> </div>
                                            </div>
                                            <div class="other-info">
                                                <div class="col-km"><i class="fa fa-tachometer"></i> 847km</div>
                                                <div class="col-engine"><i class="fa fa-gear"></i> Manual</div>
                                                <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2018</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Item -->
                        <!-- Item -->
                        <div class="item">
                            <div class="item-inner">
                                <div class="item-img">
                                    <div class="item-img-info">
                                        <a href="accessories-detail.html" title="Retis lapen casen" class="product-image"><img src="../products-images/p15.jpg" alt="Retis lapen casen"></a>
                                        <div class="item-box-hover">
                                            <div class="box-inner">
                                                <div class="add_cart">
                                                    <button class="button btn-cart" type="button"></button>
                                                </div>
                                                <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                                <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-info">
                                    <div class="info-inner">
                                        <div class="item-title"><a href="accessories-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
                                        <div class="item-content">
                                            <div class="rating">
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:80%"></div>
                                                    </div>
                                                    <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                </div>
                                            </div>
                                            <div class="item-price">
                                                <div class="price-box"><span class="regular-price"><span class="price">$99000.00</span> </span> </div>
                                            </div>
                                            <div class="other-info">
                                                <div class="col-km"><i class="fa fa-tachometer"></i>687km</div>
                                                <div class="col-engine"><i class="fa fa-gear"></i> Manual</div>
                                                <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2019</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Item -->

                        <div class="item">
                            <div class="item-inner">
                                <div class="item-img">
                                    <div class="item-img-info">
                                        <a href="accessories-detail.html" title="Retis lapen casen" class="product-image"><img src="../products-images/p16.jpg" alt="Retis lapen casen"></a>
                                        <div class="item-box-hover">
                                            <div class="box-inner">
                                                <div class="add_cart">
                                                    <button class="button btn-cart" type="button"></button>
                                                </div>
                                                <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                                <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-info">
                                    <div class="info-inner">
                                        <div class="item-title"><a href="accessories-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
                                        <div class="item-content">
                                            <div class="rating">
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:80%"></div>
                                                    </div>
                                                    <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                </div>
                                            </div>
                                            <div class="item-price">
                                                <div class="price-box"><span class="regular-price"><span class="price">$59000.00</span> </span> </div>
                                            </div>
                                            <div class="other-info">
                                                <div class="col-km"><i class="fa fa-tachometer"></i> 10587km</div>
                                                <div class="col-engine"><i class="fa fa-gear"></i> Manual</div>
                                                <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2017</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="item">
                            <div class="item-inner">
                                <div class="item-img">
                                    <div class="item-img-info">
                                        <a href="accessories-detail.html" title="Retis lapen casen" class="product-image"><img src="../products-images/p17.jpg" alt="Retis lapen casen"></a>
                                        <div class="new-label new-top-left">New</div>
                                        <div class="item-box-hover">
                                            <div class="box-inner">
                                                <div class="add_cart">
                                                    <button class="button btn-cart" type="button"></button>
                                                </div>
                                                <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                                <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-info">
                                    <div class="info-inner">
                                        <div class="item-title"><a href="accessories-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
                                        <div class="item-content">
                                            <div class="rating">
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:80%"></div>
                                                    </div>
                                                    <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                </div>
                                            </div>
                                            <div class="item-price">
                                                <div class="price-box"><span class="regular-price"><span class="price">$47000.00</span> </span> </div>
                                            </div>
                                            <div class="other-info">
                                                <div class="col-km"><i class="fa fa-tachometer"></i> 0km</div>
                                                <div class="col-engine"><i class="fa fa-gear"></i> Manual</div>
                                                <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2019</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Item -->
                        <!-- Item -->
                        <div class="item">
                            <div class="item-inner">
                                <div class="item-img">
                                    <div class="item-img-info">
                                        <a href="accessories-detail.html" title="Retis lapen casen" class="product-image"><img src="../products-images/p18.jpg" alt="Retis lapen casen"></a>
                                        <div class="new-label new-top-left">New</div>
                                        <div class="item-box-hover">
                                            <div class="box-inner">
                                                <div class="add_cart">
                                                    <button class="button btn-cart" type="button"></button>
                                                </div>
                                                <div class="product-detail-bnt"><a class="button detail-bnt"><span>Quick View</span></a></div>
                                                <div class="actions"><span class="add-to-links"><a href="#" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a> </span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-info">
                                    <div class="info-inner">
                                        <div class="item-title"><a href="accessories-detail.html" title="Retis lapen casen">Gorgeous Mercedes-Benz E-Class All-Terrain Luxury</a> </div>
                                        <div class="item-content">
                                            <div class="rating">
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:80%"></div>
                                                    </div>
                                                    <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                </div>
                                            </div>
                                            <div class="item-price">
                                                <div class="price-box"><span class="regular-price"><span class="price">$67000.00</span> </span> </div>
                                            </div>
                                            <div class="other-info">
                                                <div class="col-km"><i class="fa fa-tachometer"></i> 847km</div>
                                                <div class="col-engine"><i class="fa fa-gear"></i> Semi</div>
                                                <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i> 2016</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Item -->
                    </div>
                </div>
            </div>
        </section>

        <!--Blog post-->
        <div class="latest-blog wow bounceInUp animated animated container">
            <!--exclude For version 6 -->
            <div class="blog-home-inner">
                <div class="blog-title">
                    <h2>Latest Blog post</h2>
                </div>
                <!--For version 1,2,3,4,5,6,8 -->
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-4 blog-post">
                        <div class="blog_inner">
                            <div class="blog-img"> <a href="blog-detail.html"> <img src="../images/blog-img1.jpg" alt="blog image"> </a> </div>
                            <!--blog-img-->
                            <div class="blog-info">
                                <div class="post-date"> <span class="entry-date">14  Jan, 2019</span> </div>
                                <ul class="post-meta">
                                    <li><i class="fa fa-user"></i>Posted by <a href="#">admin</a> </li>
                                    <li><i class="fa fa-comments"></i><a href="#">4 comments</a> </li>
                                </ul>
                                <h3><a href="blog-detail.html">Powerful and flexible premium Ecommerce themes</a></h3>
                                <p>Fusce ac pharetra urna. Duis non lacus sit amet lacus interdum facilisis sed non est. Ut mi metus, semper eu dictum nec...</p>
                            </div>
                        </div>
                        <!--blog_inner-->
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-4 blog-post">
                        <div class="blog_inner">
                            <div class="blog-img"> <a href="blog-detail.html"> <img src="../images/blog-img2.jpg" alt="blog image"> </a> </div>
                            <!--blog-img-->
                            <div class="blog-info">
                                <div class="post-date"> <span class="entry-date">23  Dec, 2018</span> </div>
                                <ul class="post-meta">
                                    <li><i class="fa fa-user"></i>Posted by <a href="#">admin</a> </li>
                                    <li><i class="fa fa-comments"></i><a href="#">8 comments</a> </li>
                                </ul>
                                <h3><a href="blog-detail.html">Awesome template with lot's of features on the board!</a></h3>
                                <p>Aliquam laoreet consequat malesuada. Integer vitae diam sed dolor euismod laoreet eget ac felis erat sed elit bibendum ...</p>
                            </div>
                        </div>
                        <!--blog_inner-->
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-12 col-sm-4 blog-post">
                        <div class="blog_inner">
                            <div class="blog-img"> <a href="blog-detail.html"> <img src="../images/blog-img3.jpg" alt="blog image"> </a> </div>
                            <!--blog-img-->
                            <div class="blog-info">
                                <div class="post-date"> <span class="entry-date">23  Dec, 2018</span> </div>
                                <ul class="post-meta">
                                    <li><i class="fa fa-user"></i>Posted by <a href="#">admin</a> </li>
                                    <li><i class="fa fa-comments"></i><a href="#">8 comments</a> </li>
                                </ul>
                                <h3><a href="blog-detail.html">Awesome template with lot's of features on the board!</a></h3>
                                <p>Aliquam laoreet consequat malesuada. Integer vitae diam sed dolor euismod laoreet eget ac felis erat sed elit bibendum ...</p>
                            </div>
                        </div>
                        <!--blog_inner-->
                    </div>
                </div>
            </div>
            <!--END For version 1,2,3,4,5,6,8 -->
            <!--exclude For version 6 -->
            <!--container-->
        </div>

        <div class="brand-logo wow bounceInUp animated">
            <div class="container">
                <div class="row">
                    <div class="home-banner col-lg-2 hidden-md col-xs-12 hidden-sm"> </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <div class="testimonials-section">
                            <div class="offer-slider parallax parallax-2">
                                <ul class="bxslider">
                                    <li>
                                        <div class="avatar"><img src="../images/member1.png" alt="Image"></div>
                                        <div class="testimonials">Perfect Themes and the best of all that you have many options to choose! Very fast responding! I highly recommend this theme and these people!</div>
                                        <div class="clients_author">Smith John <span>Happy Customer</span> </div>
                                    </li>
                                    <li>
                                        <div class="avatar"><img src="../images/member2.png" alt="Image"></div>
                                        <div class="testimonials">Code, template and others are very good. The support has served me immediately and solved my problems when I need help. Are to be congratulated.</div>
                                        <div class="clients_author">Sahara Anderson <span>Happy Customer</span> </div>
                                    </li>
                                    <li>
                                        <div class="avatar"><img src="../images/member3.png" alt="Image"></div>
                                        <div class="testimonials">Our support and response has been amazing, helping me with several issues I came across and got them solved almost the same day. A pleasure to work with them! </div>
                                        <div class="clients_author">Stephen Smith <span>Happy Customer</span> </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @include('common/footer')
        <!-- End For version 1,2,3,4,6 -->

    </div>
    <!--page-->
    <!-- Mobile Menu-->
    @include('common/mobileMenu')


    
   <!--NewsLetter-->
    <div class="popup1" style="display: block;">
        <div class="newsletter-sign-box">
            <h3>Newsletter Sign up</h3>
            <img src="../images/close-icon.png" alt="close" class="x" onClick="HideMe();">
            <div class="newsletter">
                <div class="newsletter_img"> <img alt="newsletter" src="../images/newsletter_img.png"></div>
                <form method="post" id="popup-newsletter" name="popup-newsletter" class="email-form">
                    <h4>sign up for our exclusive email list and be the first to hear of special offers.</h4>
                    <div class="newsletter-form">
                        <div class="input-box">
                            <input type="text" name="email" id="newsletter2" title="Sign up for our newsletter" placeholder="Enter your email address" class="input-text required-entry validate-email">
                            <button type="submit" title="Subscribe" class="button subscribe"><span>Subscribe</span></button>
                        </div>
                        <!--input-box-->
                    </div>
                    <!--newsletter-form-->
                    <label class="subscribe-bottom">
                        <input type="checkbox" name="notshowpopup" id="notshowpopup">
                        Don’t show this popup again
                    </label>
                </form>
            </div>
            <!--newsletter-->
        </div>
        <!--newsletter-sign-box-->
    </div>
    <div id="fade" style="display: block;"></div>

    <!-- JavaScript -->
    @include('common/script')
    <script>
        var dthen1 = new Date("12/25/17 11:59:00 PM");
        start = "08/04/15 03:02:11 AM";
        start_date = Date.parse(start);
        var dnow1 = new Date(start_date);
        if (CountStepper > 0)
            ddiff = new Date((dnow1) - (dthen1));
        else
            ddiff = new Date((dthen1) - (dnow1));
        gsecs1 = Math.floor(ddiff.valueOf() / 1000);

        var iid1 = "countbox_1";
        CountBack_slider(gsecs1, "countbox_1", 1);
    </script>
<script>
$(document).ready(function(){
    $("#company").change(function(){
        var selectedCompany = $(this).children("option:selected").val();
        if (selectedCompany == "hero") {
            hideRide(selectedCompany, "honda", "suzuki", "tvs", "yamaha");
        }else if (selectedCompany == "honda") {
            hideRide(selectedCompany, "hero", "suzuki", "tvs", "yamaha");
        }else if(selectedCompany == "suzuki"){
            hideRide(selectedCompany, "hero", "honda", "tvs", "yamaha");
        }else if(selectedCompany == "tvs"){
            hideRide(selectedCompany, "hero", "honda", "suzuki", "yamaha");
        }else if(selectedCompany == "yamaha"){
            hideRide(selectedCompany, "hero", "honda", "suzuki", "tvs");
        }
    });
    function hideRide(selectedCompany, com1, com2, com3, com4){
        $('#rideOption').hide();
        $('#' + selectedCompany).show();
        $('#' + com1).hide();
        $('#' + com2).hide();
        $('#' + com3).hide();
        $('#' + com4).hide();
    }
});
</script>

</body>
</html>
