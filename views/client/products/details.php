<?php
include_once ROOT_DIR . "views/client/header.php"
?>
<<<<<<< HEAD:views/client/products/details.php

<main class="main-wrapper">
        <!-- Start Shop Area  -->
        <div class="axil-single-product-area bg-color-white">
            <div class="single-product-thumb axil-section-gap pb--20 pb_sm--0 bg-vista-white">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mb--40">
                            <div class="row">   
                                <div class="col-lg-10 order-lg-2">
                                    <div class="single-product-thumbnail-wrap zoom-gallery">
                                        <div class="product-large-thumbnail single-product-thumbnail axil-product">
                                            <div class="thumbnail">
                                                <a href="<?= ROOT_URL . 'images/' . $product['img_product'] ?>" class="popup-zoom">
                                                    <img src="<?= ROOT_URL . 'images/' . $product['img_product'] ?>" alt="Product Images">
                                                </a>
                                            </div>
                                            
                                        </div>
                                        <div class="label-block">
                                            <div class="product-badget">20% OFF</div>
                                        </div>
                                        <div class="product-quick-view position-view">
                                            <a href="<?= ROOT_URL . 'images/' . $product['img_product'] ?>" class="popup-zoom">
                                                <i class="far fa-search-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 order-lg-1">
                                    <!-- <div class="product-small-thumb small-thumb-wrapper small-thumb-style-two">
                                        <div class="small-thumb-img ">
                                            <img src="assets/images/product/product-thumb/thumb-01.png" alt="thumb image">
                                        </div>
                                        <div class="small-thumb-img">
                                            <img src="assets/images/product/product-thumb/thumb-02.png" alt="thumb image">
                                        </div>
                                        <div class="small-thumb-img active">
                                            <img src="assets/images/product/product-thumb/thumb-03.png" alt="thumb image">
                                        </div>
                                        <div class="small-thumb-img">
                                            <img src="assets/images/product/product-thumb/thumb-04.png" alt="thumb image">
                                        </div>
                                        <div class="small-thumb-img">
                                            <img src="assets/images/product/product-thumb/thumb-05.png" alt="thumb image">
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb--40">
                            <div class="single-product-content">
                                <div class="inner">
                                    <h2 class="product-title"><?= $product['product_name'] ?></h2>
                                    <span class="price-amount">$155.00 - $255.00</span>
                                    <div class="product-rating">
                                        <div class="star-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <div class="review-link">
                                            <a href="#">(<span>2</span> customer reviews)</a>
                                        </div>
                                    </div>
                                    <ul class="product-meta">
                                        <li></i><?= $product['status'] ? 'Còn hàng' : 'Ngừng kinh doanh' ?></li>
                                        <li><i class="fal fa-check"></i>Free delivery available</li>
                                        
                                    </ul>
                                    <p class="description"><h4>Miêu tả :</h4><?= $product['description'] ?></p>

                                    <div class="product-variations-wrapper">

                                        <!-- Start Product Variation  -->
                                        <!-- <div class="product-variation">
                                            <h6 class="title">Colors:</h6>
                                            <div class="color-variant-wrapper">
                                                <ul class="color-variant mt--0">
                                                    <li class="color-extra-01 active"><span><span class="color"></span></span>
                                                    </li>
                                                    <li class="color-extra-02"><span><span class="color"></span></span>
                                                    </li>
                                                    <li class="color-extra-03"><span><span class="color"></span></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div> -->
                                        <!-- End Product Variation  -->

                                        <!-- Start Product Variation  -->
                                        <div class="product-variation product-size-variation">
                                            <h6 class="title">Size:</h6>
                                            <ul class="range-variant">
                                                <li>xs</li>
                                                <li>s</li>
                                                <li>m</li>
                                                <li>l</li>
                                                <li>xl</li>
                                            </ul>
                                        </div>
                                        <!-- End Product Variation  -->

                                    </div>

                                    <!-- Start Product Action Wrapper  -->
                                    <div class="product-action-wrapper d-flex-center">
                                        <!-- Start Quentity Action  -->
                                        <div class="pro-qty mr--20"><input type="text" value="1"></div>
                                        <!-- End Quentity Action  -->

                                        <!-- Start Product Action  -->
                                        <ul class="product-action d-flex-center mb--0">
                                            <li class="add-to-cart"><a href="cart.html" class="axil-btn btn-bg-primary">Add to Cart</a></li>
                                            <li class="wishlist"><a href="wishlist.html" class="axil-btn wishlist-btn"><i class="far fa-heart"></i></a></li>
                                        </ul>
                                        <!-- End Product Action  -->

                                    </div>
                                    <!-- End Product Action Wrapper  -->

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .single-product-thumb -->

        </div>
        <!-- End Shop Area  -->

        <!-- Start Recently Viewed Product Area  -->
        <div class="axil-product-area bg-color-white axil-section-gap pb--50 pb_sm--30">
            <div class="container">
                <div class="section-title-wrapper">
                    <span class="title-highlighter highlighter-primary"><i class="far fa-shopping-basket"></i> Your Recently</span>
                    <h2 class="title">Viewed Items</h2>
                </div>
                <div class="recent-product-activation slick-layout-wrapper--15 axil-slick-arrow arrow-top-slide">
                    <div class="slick-single-layout">
                        <div class="axil-product">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img src="assets/images/product/electric/product-01.png" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">20% OFF</div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                        <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                        <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="single-product.html">3D™ wireless headset</a></h5>
                                    <div class="product-price-variant">
                                        <span class="price old-price">$30</span>
                                        <span class="price current-price">$30</span>
                                    </div>
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="axil-product">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img src="assets/images/product/electric/product-02.png" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">40% OFF</div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                        <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                        <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="single-product.html">Media remote</a></h5>
                                    <div class="product-price-variant">
                                        <span class="price old-price">$80</span>
                                        <span class="price current-price">$50</span>
                                    </div>
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="axil-product">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img src="assets/images/product/electric/product-03.png" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">30% OFF</div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                        <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                        <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="single-product.html">HD camera</a></h5>
                                    <div class="product-price-variant">
                                        <span class="price old-price">$60</span>
                                        <span class="price current-price">$45</span>
                                    </div>
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="axil-product">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img src="assets/images/product/electric/product-04.png" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">50% OFF</div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                        <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                        <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="single-product.html">PS Remote Control</a></h5>
                                    <div class="product-price-variant">
                                        <span class="price old-price">$70</span>
                                        <span class="price current-price">$35</span>
                                    </div>
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="axil-product">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img src="assets/images/product/electric/product-05.png" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">25% OFF</div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                        <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                        <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="single-product.html">PS Remote Control</a></h5>
                                    <div class="product-price-variant">
                                        <span class="price old-price">$50</span>
                                        <span class="price current-price">$38</span>
                                    </div>
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .slick-single-layout -->
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="axil-product">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img src="assets/images/product/electric/product-03.png" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">30% OFF</div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                        <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                        <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="single-product.html">HD camera</a></h5>
                                    <div class="product-price-variant">
                                        <span class="price old-price">$60</span>
                                        <span class="price current-price">$45</span>
                                    </div>
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="axil-product">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img src="assets/images/product/electric/product-04.png" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">50% OFF</div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                        <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                        <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="single-product.html">PS Remote Control</a></h5>
                                    <div class="product-price-variant">
                                        <span class="price old-price">$70</span>
                                        <span class="price current-price">$35</span>
                                    </div>
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .slick-single-layout -->
                    <div class="slick-single-layout">
                        <div class="axil-product">
                            <div class="thumbnail">
                                <a href="single-product.html">
                                    <img src="assets/images/product/electric/product-05.png" alt="Product Images">
                                </a>
                                <div class="label-block label-right">
                                    <div class="product-badget">25% OFF</div>
                                </div>
                                <div class="product-hover-action">
                                    <ul class="cart-action">
                                        <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                                        <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                                        <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="inner">
                                    <h5 class="title"><a href="single-product.html">PS5 Remote Control</a></h5>
                                    <div class="product-price-variant">
                                        <span class="price old-price">$50</span>
                                        <span class="price current-price">$38</span>
                                    </div>
                                    <div class="color-variant-wrapper">
                                        <ul class="color-variant">
                                            <li class="color-extra-01 active"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-02"><span><span class="color"></span></span>
                                            </li>
                                            <li class="color-extra-03"><span><span class="color"></span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .slick-single-layout -->

                </div>
            </div>
        </div>
        <!-- End Recently Viewed Product Area  -->
        <!-- Start Axil Newsletter Area  -->
        <div class="axil-newsletter-area axil-section-gap pt--0">
            <div class="container">
                <div class="etrade-newsletter-wrapper bg_image bg_image--5">
                    <div class="newsletter-content">
                        <span class="title-highlighter highlighter-primary2"><i class="fas fa-envelope-open"></i>Newsletter</span>
                        <h2 class="title mb--40 mb_sm--30">Get weekly update</h2>
                        <div class="input-group newsletter-form">
                            <div class="position-relative newsletter-inner mb--15">
                                <input placeholder="example@gmail.com" type="text">
                            </div>
                            <button type="submit" class="axil-btn mb--15">Subscribe</button>
                        </div>
                    </div>
=======
<main class="main-wrapper">
  <!-- Start Breadcrumb Area  -->
  <div class="axil-breadcrumb-area">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-8">
          <div class="inner">
            <ul class="axil-breadcrumb">
              <li class="axil-breadcrumb-item"><a href="index.html">Trang chủ</a></li>
              <li class="separator"></li>
              <li class="axil-breadcrumb-item active" aria-current="page">Cửa hàng</li>
            </ul>
            <h1 class="title">Khám phá tất cả sản phẩm</h1>
          </div>
        </div>
        <div class="col-lg-6 col-md-4">
          <!--  -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Breadcrumb Area  -->
  <!-- Start Shop Area  -->
  <div class="axil-shop-area axil-section-gap bg-color-white">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="axil-shop-top">
            <div class="row">
              <div class="col-lg-9">
                <div class="category-select">

                  <!-- Start Single Select  -->
                  <select class="single-select">
                    <option>Categories</option>
                    <option>Fashion</option>
                    <option>Electronics</option>
                    <option>Furniture</option>
                    <option>Beauty</option>
                  </select>
                  <!-- End Single Select  -->

                  <!-- End Single Select  -->

                  <!-- Start Single Select  -->
                  <select class="single-select">
                    <option>Price Range</option>
                    <option>0 - 100</option>
                    <option>100 - 500</option>
                    <option>500 - 1000</option>
                    <option>1000 - 1500</option>
                  </select>
                  <!-- End Single Select  -->

>>>>>>> 552f2c61625c2b9bf2b0160468e0831f7c15e49a:views/client/shop/shop.php
                </div>
              </div>
              <div class="col-lg-3">
                <div class="category-select mt_md--10 mt_sm--10 justify-content-lg-end">
                  <!-- Start Single Select  -->
                  <select class="single-select">
                    <option>Sort by Latest</option>
                    <option>Sort by Name</option>
                    <option>Sort by Price</option>
                    <option>Sort by Viewed</option>
                  </select>
                  <!-- End Single Select  -->
                </div>
              </div>
            </div>
          </div>
        </div>
<<<<<<< HEAD:views/client/products/details.php
        <!-- End Axil Newsletter Area  -->
    </main>

=======
      </div>
      <div class="row row--15">
        <div class="row">
          <?php
          for ($i = 0; $i < count($products); $i++):
            $product = $products[$i];
          ?>
            <div class="col-xl-3 col-lg-4 col-sm-6">
              <div class="axil-product product-style-one has-color-pick mt--40">
                <div class="thumbnail">
                  <a href="?ctl=single-product">
                    <img src=" <?= ROOT_URL .  "/images/" . $product['img_product']; ?>" alt="Product Image">
                  </a>
                  <div class="label-block label-right">
                  </div>
                  <div class="product-hover-action">
                    <ul class="cart-action">
                      <li class="wishlist"><a href="wishlist.html"><i class="far fa-heart"></i></a></li>
                      <li class="select-option"><a href="cart.html">Add to Cart</a></li>
                      <li class="quickview"><a href="#" data-bs-toggle="modal" data-bs-target="#quick-view-modal"><i class="far fa-eye"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="product-content">
                  <div class="inner">
                    <h5 class="title"><a href="?ctl=single-product"><?= $product['product_name']; ?></a></h5>
                    <div class="product-price-variant">
                      <span class="price current-price">$<?= $product['price']; ?></span>
                    </div>
                    <div class="color-variant-wrapper">
                      <ul class="color-variant">
                        <li class="color-extra-01 active"><span><span class="color"></span></span></li>
                        <li class="color-extra-02"><span><span class="color"></span></span></li>
                        <li class="color-extra-03"><span><span class="color"></span></span></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endfor; ?>
        </div>

      </div>
      <div class="text-center pt--30">
        <a href="#" class="axil-btn btn-bg-lighter btn-load-more">Tải thêm</a>
      </div>
    </div>
    <!-- End .container -->
  </div>
  <!-- End Shop Area  -->
  <!-- Start Axil Newsletter Area  -->
  <div class="axil-newsletter-area axil-section-gap pt--0">
    <div class="container">
      <div class="etrade-newsletter-wrapper bg_image bg_image--5">
        <div class="newsletter-content">
          <span class="title-highlighter highlighter-primary2"><i
              class="fas fa-envelope-open"></i>Newsletter</span>
          <h2 class="title mb--40 mb_sm--30">Get weekly update</h2>
          <div class="input-group newsletter-form">
            <div class="position-relative newsletter-inner mb--15">
              <input placeholder="example@gmail.com" type="text">
            </div>
            <button type="submit" class="axil-btn mb--15">Subscribe</button>
          </div>
        </div>
      </div>
    </div>
    <!-- End .container -->
  </div>
  <!-- End Axil Newsletter Area  -->
</main>
>>>>>>> 552f2c61625c2b9bf2b0160468e0831f7c15e49a:views/client/shop/shop.php
<?php
include_once ROOT_DIR . "views/client/footer.php"
?>