<?php
include_once ROOT_DIR . "views/client/header.php"
?>

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
                                <p class="description">
                                <h4>Miêu tả :</h4><?= $product['description'] ?></p>

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
                    <!-- comment -->
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8 col-lg-6">
                            <div class="card shadow-0 border" style="background-color: #f0f2f5;">
                                <div class="card-body p-4">
                                    <!-- Form tạo bình luận -->
                                    <form action="?ctl=createComment" method="POST">
                                        <div data-mdb-input-init class="form-outline mb-4">
                                            <input type="text" name="content" class="form-control" placeholder="Type comment..." />
                                            <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
                                            <input type="hidden" name="product_id" value="<?php echo $_GET['id']; ?>">
                                            <?php
                                            if (!isset($_SESSION['user_id'])) {
                                                echo "<p>Bạn cần đăng nhập để bình luận</p>";
                                            } else {
                                                echo '<button type="submit" class="form-label btn btn-primary mt-2">Create Comment</button>';
                                            }
                                            ?>
                                        </div>
                                    </form>

                                    <!-- Hiển thị danh sách bình luận -->
                                    <?php foreach ($commentListByProducts as $comment): ?>
                                        <div class="card mb-4">
                                            <div class="card-body">
                                                <p><?php echo htmlspecialchars($comment['content']); ?></p>

                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex flex-row align-items-center">
                                                        <img src="<?= ROOT_URL . 'images/users/' . $user['image'] ?>" width="100" height="100" alt="">
                                                        <p class="small mb-0 ms-2"><?php echo htmlspecialchars($user['username']); ?></p>
                                                    </div>
                                                    <div class="d-flex flex-row align-items-center">
                                                        <p class="small text-muted mb-0">Upvote?</p>
                                                        <i class="far fa-thumbs-up mx-2 fa-xs text-body" style="margin-top: -0.16rem;"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
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

                <?php
                include_once ROOT_DIR . "views/client/footer.php"
                ?>