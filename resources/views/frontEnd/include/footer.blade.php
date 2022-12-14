<footer class="footer_widgets">
    <div class="container">
        <div class="footer_top">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="widgets_container contact_us">
                        <h3>About Monsta</h3>
                        <div class="footer_contact">
                            <p>Address: Your address goes here.</p>
                            <p>Phone: <a href="tel:0123456789">0123456789</a></p>
                            <p>Email: demo@example.com</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-rss"></i></a></li>
                                <li><a href="#"><i class="ion-social-googleplus"></i></a></li>

                                <li><a href="#"><i class="ion-social-youtube"></i></a></li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-4 col-6">
                    <div class="widgets_container widget_menu">
                        <h3>Information</h3>
                        <div class="footer_menu">
                            <ul>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="{{route('blog')}}">blog</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="#">Sample Page</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-5 col-6">
                    <div class="widgets_container widget_menu">
                        <h3>My Account</h3>
                        <div class="footer_menu">
                            <ul>
                                <li><a href="{{route('myAccount')}}">My Account</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="{{route('wishlist')}}">Wishlist</a></li>
                                <li><a href="portfolio.html">Portfolio</a></li>
                                <li><a href="{{route('checkout')}}">Checkout</a></li>
                                <li><a href="faq.html">Frequently Questions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-7">
                    <div class="widgets_container product_widget">
                        <h3>Top Rated Products</h3>
                        <div class="simple_product">
                            <div class="simple_product_items">
                                <div class="simple_product_thumb">
                                    <a href="#"><img src="{{asset('frontEndAsset')}}/assets/img/s-product/product5.jpg" alt=""></a>
                                </div>
                                <div class="simple_product_content">
                                    <div class="tag_cate">
                                        <a href="#">Clothing,</a>
                                        <a href="#">Potato chips</a>
                                    </div>
                                    <div class="product_name">
                                        <h3><a href="#">Donec eu animal</a></h3>
                                    </div>
                                    <div class="product_price">
                                        <span class="old_price">$86.00</span>
                                        <span class="current_price">$70.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="simple_product_items">
                                <div class="simple_product_thumb">
                                    <a href="#"><img src="{{asset('frontEndAsset')}}/assets/img/s-product/product6.jpg" alt=""></a>
                                </div>
                                <div class="simple_product_content">
                                    <div class="tag_cate">
                                        <a href="#">Women</a>
                                    </div>
                                    <div class="product_name">
                                        <h3><a href="#">Dummy animal</a></h3>
                                    </div>
                                    <div class="product_price">
                                        <span class="old_price">$74.00</span>
                                        <span class="current_price">$69.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_middel">
            <div class="row">
                <div class="col-12">
                    <div class="footer_middel_menu">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Online Store</a></li>
                            <li><a href="#">Promotion</a></li>
                            <li><a href="#">Privacu Policy</a></li>
                            <li><a href="#">Terms Of Use</a></li>
                            <li><a href="#">Sitemap</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="row">
                <div class="col-12">
                    <div class="copyright_area">
                        <p>&copy; 2021 <a href="index.html" class="text-uppercase">MONSTA</a>. Made with <i class="fa fa-heart"></i> by <a target="_blank" href="https://www.hasthemes.com/">HasThemes</a></p>
                        <img src="{{asset('frontEndAsset')}}/assets/img/icon/papyel2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--footer area end-->

<!-- modal area start-->
<div class="modal fade" id="modal_box" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal_body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-12">
                            <div class="modal_tab">
                                <div class="tab-content product-details-large">
                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel" >
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="{{asset('frontEndAsset')}}/assets/img/product/product1.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab2" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="{{asset('frontEndAsset')}}/assets/img/product/product2.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab3" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="{{asset('frontEndAsset')}}/assets/img/product/product3.jpg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab4" role="tabpanel">
                                        <div class="modal_tab_img">
                                            <a href="#"><img src="{{asset('frontEndAsset')}}/assets/img/product/product5.jpg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal_tab_button">
                                    <ul class="nav product_navactive owl-carousel" role="tablist">
                                        <li >
                                            <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="{{asset('frontEndAsset')}}/assets/img/product/product1.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="{{asset('frontEndAsset')}}/assets/img/product/product2.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="nav-link button_three" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="{{asset('frontEndAsset')}}/assets/img/product/product3.jpg" alt=""></a>
                                        </li>
                                        <li>
                                            <a class="nav-link" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="{{asset('frontEndAsset')}}/assets/img/product/product5.jpg" alt=""></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <div class="modal_right">
                                <div class="modal_title mb-10">
                                    <h2>Donec eu furniture</h2>
                                </div>
                                <div class="modal_price mb-10">
                                    <span class="new_price">$64.99</span>
                                    <span class="old_price" >$78.99</span>
                                </div>
                                <div class="see_all">
                                    <a href="product-details.html">See all features</a>
                                </div>
                                <div class="modal_add_to_cart mb-15">
                                    <form action="#">
                                        <input min="0" max="100" step="2" value="1" type="number">
                                        <button type="submit">add to cart</button>
                                    </form>
                                </div>
                                <div class="modal_description mb-15">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                </div>
                                <div class="modal_social">
                                    <h2>Share this product</h2>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal area start-->
