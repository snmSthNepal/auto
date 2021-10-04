<div class="popup1" style="display: block;">
    <div class="quick-view-box">
        <img src="images/close-icon.png" alt="close" class="x">
        <div class="product-view product-essential container">
            <div class="row">
                <form action="#" method="post" id="product_addtocart_form">
                    <div class="product-img-box col-lg-6 col-sm-6 col-xs-12">
                        <div class="new-label new-top-left">Hot</div>
                        <div class="sale-label sale-top-left">-15%</div>

                        <!--Product Image Section-->
                        <div class="product-image">
                            <div class="product-full">
                                <img id="product-zoom1" src="products-images/p46.jpg" data-zoom-image="products-images/p46.jpg" alt="product-image"/>
                            </div>
                            <div class="more-views">
                                <div class="slider-items-products">
                                    <div id="gallery_02" class="product-flexslider hidden-buttons product-img-thumb">
                                        <div class="slider-items slider-width-col4 block-content">
                                            <div class="more-views-items">
                                                <a href="#" data-image="products-images/p1.jpg" data-zoom-image="products-images/p1.jpg">
                                                    <img id="product-zoom0"  src="products-images/p1.jpg" alt="product-image"/>
                                                </a>
                                            </div>
                                            <div class="more-views-items">
                                                <a href="#" data-image="products-images/p2.jpg" data-zoom-image="products-images/p2.jpg">
                                                    <img id="product-zoom1"  src="products-images/p2.jpg" alt="product-image"/>
                                                </a>
                                            </div>  
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Product information-->
                <div class="product-shop col-lg- col-sm-6 col-xs-12">
                    <div class="brand">XPERIA</div>
                    <div class="product-name">
                      <h1>Gorgeous Mercedes-Benz E-Class All-Terrain Luxury </h1>
                    </div>
                    <div class="ratings">
                      <div class="rating-box">
                        <div style="width:60%" class="rating"></div>
                      </div>
                      <p class="rating-links"> <a href="#">1 Review</a> <span class="separator">|</span> <a href="#">Add Your Review</a> </p>
                    </div>
                    <div class="price-block">
                      <div class="price-box">
                      <p class="availability in-stock"><span>In Stock</span></p>
                        <p class="special-price"> <span class="price-label">Special Price</span> <span id="product-price-48" class="price"> $309.99 </span> </p>
                      </div>
                    </div>
                    <div class="add-to-box">
                      <div class="add-to-cart">
                        <div class="pull-left">
                          <div class="custom pull-left">
                            <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty > 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="fa fa-minus">&nbsp;</i></button>
                            <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                            <button onclick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="fa fa-plus">&nbsp;</i></button>
                          </div>
                        </div>
                        <button onclick="productAddToCartForm.submit(this)" class="button btn-cart" title="Add to Cart" type="button">Add to Cart</button>
                      </div>
                      
                    </div>
                </div>
              </form>
            </div>
        </div> 
    </div> 
</div>



