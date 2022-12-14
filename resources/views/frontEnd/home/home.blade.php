@extends('frontEnd.master')
@section('title')
    HOME
@endsection
@section('content')

    <!--slider area start-->
    <div class="slider_area slider_nine owl-carousel">
        <div class="single_slider" data-bgimg="{{asset('frontEndAsset')}}/assets/img/slider/slider2.jpg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="slider_content">
                            <p>exclusive offer -10% off this week</p>
                            <h1>jewelry arrivals</h1>
                            <p class="slider_price">starting at <span>$2.199.oo</span></p>
                            <a class="button" href="shop.html">shopping now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slider" data-bgimg="{{asset('frontEndAsset')}}/assets/img/slider/slider1.jpg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="slider_content">
                            <p>exclusive offer -10% off this week</p>
                            <h1>engagement ring</h1>
                            <p class="slider_price">starting at <span>$2.199.oo</span></p>
                            <a class="button" href="shop.html">shopping now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--slider area end-->

    <!--shipping area start-->
    <div class="shipping_area shipping_two shipping_nine">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-shipping">
                        <div class="shipping_icone icone_1">

                        </div>
                        <div class="shipping_content">
                            <h3>Free Shipping</h3>
                            <p>Free shipping on all order</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-shipping">
                        <div class="shipping_icone icone_2">

                        </div>
                        <div class="shipping_content">
                            <h3>Money Return</h3>
                            <p>Back guarantee under 7 days</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-shipping">
                        <div class="shipping_icone icone_3">

                        </div>
                        <div class="shipping_content">
                            <h3>Member Discount</h3>
                            <p>Onevery order over $120.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-shipping">
                        <div class="shipping_icone icone_4">

                        </div>
                        <div class="shipping_content">
                            <h3>Online Support</h3>
                            <p>Support online 24 hours a day</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--shipping area end-->
    <!--product section area start-->
    <section class="product_section p_section1 product_bottom_two product9_bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_area">
                        <div class="product_tab_button">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-toggle="tab" href="#featured" role="tab" aria-controls="featured" aria-selected="true">Featured</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#arrivals" role="tab" aria-controls="arrivals" aria-selected="false">New Arrivals</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#onsale" role="tab" aria-controls="onsale" aria-selected="false">Onsale</a>
                                </li>

                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="featured" role="tabpanel">
                                <div class="product_container">
                                    <div class="custom-row product_column3">
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product1.jpg" alt=""></a>
                                                    <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product2.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="{{route('product-details')}}">Aliquam furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$86.00</span>
                                                        <span class="current_price">$60.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="#" data-placement="top" title="" data-toggle="tooltip" data-original-title="Add to Wishlist" tabindex="0"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product3.jpg" alt=""></a>
                                                    <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product4.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="{{route('product-details')}}">Dummy animal</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$65.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product5.jpg" alt=""></a>
                                                    <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product6.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Women</a>
                                                    </div>
                                                    <h3><a href="{{route('product-details')}}">Furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$65.00</span>
                                                        <span class="current_price">$60.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product7.jpg" alt=""></a>
                                                    <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product8.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Men,</a>
                                                    </div>
                                                    <h3><a href="{{route('product-details')}}">Letraset animal</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$60.00</span>
                                                        <span class="current_price">$55.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product9.jpg" alt=""></a>
                                                    <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product10.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Women</a>
                                                    </div>
                                                    <h3><a href="{{route('product-details')}}">Aliquam furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$80.00</span>
                                                        <span class="current_price">$60.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product12.jpg" alt=""></a>
                                                    <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product11.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="{{route('product-details')}}">Natural Lorem Ipsum</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$50.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product3.jpg" alt=""></a>
                                                    <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product1.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                    </div>
                                                    <h3><a href="{{route('product-details')}}">Furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$62.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product4.jpg" alt=""></a>
                                                    <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product5.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="{{route('product-details')}}">Letraset animal</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$70.00</span>
                                                        <span class="current_price">$65.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product7.jpg" alt=""></a>
                                                    <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product5.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">men</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="{{route('product-details')}}">Aliquam furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$80.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product11.jpg" alt=""></a>
                                                    <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product6.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">men</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="{{route('product-details')}}">Natural Contrary</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$60.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product13.jpg" alt=""></a>
                                                    <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product12.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="{{route('product-details')}}">Donec eu furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$86.00</span>
                                                        <span class="current_price">$60.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product6.jpg" alt=""></a>
                                                    <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product5.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Women</a>
                                                    </div>
                                                    <h3><a href="{{route('product-details')}}">Duis pulvinar</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$86.00</span>
                                                        <span class="current_price">$60.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="arrivals" role="tabpanel">
                                <div class="product_container">
                                    <div class="custom-row product_column3">
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product10.jpg" alt=""></a>
                                                    <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product11.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="{{route('product-details')}}">Aliquam furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$89.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" data-placement="top" title="Add to Wishlist" data-toggle="tooltip"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product9.jpg" alt=""></a>
                                                    <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product8.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="{{route('product-details')}}">Dummy animal</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$65.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product7.jpg" alt=""></a>
                                                    <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product6.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Women</a>
                                                    </div>
                                                    <h3><a href="{{route('product-details')}}">Furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$65.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product5.jpg" alt=""></a>
                                                    <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product4.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Men,</a>
                                                    </div>
                                                    <h3><a href="{{route('product-details')}}">Letraset animal</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$89.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product3.jpg" alt=""></a>
                                                    <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product2.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Women</a>
                                                    </div>
                                                    <h3><a href="{{route('product-details')}}">Aliquam furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$75.00</span>
                                                        <span class="current_price">$70.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product1.jpg" alt=""></a>
                                                    <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product13.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="{{route('product-details')}}">Natural Lorem Ipsum</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$89.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product3.jpg" alt=""></a>
                                                    <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product6.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                    </div>
                                                    <h3><a href="{{route('product-details')}}">Furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$65.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product4.jpg" alt=""></a>
                                                    <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product5.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="{{route('product-details')}}">Letraset animal</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$70.00</span>
                                                        <span class="current_price">$65.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product5.jpg" alt=""></a>
                                                    <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product6.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">men</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="{{route('product-details')}}">Aliquam furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$89.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product11.jpg" alt=""></a>
                                                    <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product6.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">men</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="{{route('product-details')}}">Natural Contrary</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$55.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product13.jpg" alt=""></a>
                                                    <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product12.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="{{route('product-details')}}">Donec eu furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$89.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product6.jpg" alt=""></a>
                                                    <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product5.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Women</a>
                                                    </div>
                                                    <h3><a href="{{route('product-details')}}">Duis pulvinar</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$70.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="onsale" role="tabpanel">
                                <div class="product_container">
                                    <div class="custom-row product_column3">
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product4.jpg" alt=""></a>
                                                    <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product5.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="{{route('product-details')}}">Aliquam furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$60.00</span>
                                                        <span class="current_price">$65.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" data-placement="top" title="Add to Wishlist" data-toggle="tooltip"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product6.jpg" alt=""></a>
                                                    <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product7.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="{{route('product-details')}}">Dummy animal</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$45.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product8.jpg" alt=""></a>
                                                    <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product9.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Women</a>
                                                    </div>
                                                    <h3><a href="{{route('product-details')}}">Furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$89.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product10.jpg" alt=""></a>
                                                    <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product4.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Men,</a>
                                                    </div>
                                                    <h3><a href="{{route('product-details')}}">Letraset animal</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$62.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product11.jpg" alt=""></a>
                                                    <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product12.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Women</a>
                                                    </div>
                                                    <h3><a href="{{route('product-details')}}">Aliquam furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$80.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product13.jpg" alt=""></a>
                                                    <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product2.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="{{route('product-details')}}">Natural Lorem Ipsum</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product3.jpg" alt=""></a>
                                                    <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product1.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                    </div>
                                                    <h3><a href="{{route('product-details')}}">Furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$89.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product4.jpg" alt=""></a>
                                                    <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product5.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="{{route('product-details')}}">Letraset animal</a></h3>
                                                    <div class="price_box">
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product10.jpg" alt=""></a>
                                                    <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product13.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">men</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="{{route('product-details')}}">Aliquam furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$85.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product11.jpg" alt=""></a>
                                                    <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product6.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">men</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="{{route('product-details')}}">Natural Contrary</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$89.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product13.jpg" alt=""></a>
                                                    <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product12.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Clothing,</a>
                                                        <a href="#">Potato chips</a>
                                                    </div>
                                                    <h3><a href="{{route('product-details')}}">Donec eu furniture</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$70.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-col-5">
                                            <div class="single_product">
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product6.jpg" alt=""></a>
                                                    <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product5.jpg" alt=""></a>
                                                    <div class="quick_button">
                                                        <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                                    </div>
                                                </div>
                                                <div class="product_content">
                                                    <div class="tag_cate">
                                                        <a href="#">Women</a>
                                                    </div>
                                                    <h3><a href="{{route('product-details')}}">Duis pulvinar</a></h3>
                                                    <div class="price_box">
                                                        <span class="old_price">$89.00</span>
                                                        <span class="current_price">$75.00</span>
                                                    </div>
                                                    <div class="product_hover">
                                                        <div class="product_ratings">
                                                            <ul>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                                <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="product_desc">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet</p>
                                                        </div>
                                                        <div class="action_links">
                                                            <ul>
                                                                <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                                <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                                <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
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
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--product section area end-->

    <!--banner area start-->
    <section class="banner_section home_banner_two home_banner9">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6 col-md-6">
                    <div class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="{{asset('frontEndAsset')}}/assets/img/bg/banner5.jpg" alt=""></a>
                            <div class="banner_content">
                                <p>Design Creative</p>
                                <h2>Modern and Clean</h2>
                                <span>From $60.99 – Sale 20%</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single_banner">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="{{asset('frontEndAsset')}}/assets/img/bg/banner6.jpg" alt=""></a>
                            <div class="banner_content">
                                <p>Bestselling Products</p>
                                <h2>Jewelry and Diamonds</h2>
                                <span>Only from $89.00</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--banner area end-->

    <!--product section area start-->
    <section class="product_section p_bottom p_section1">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>Bestselling Products</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="product_area ">
                        <div class="product_container bottom">
                            <div class="custom-row product_row1">
                                <div class="custom-col-5">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product6.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product7.jpg" alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="tag_cate">
                                                <a href="#">Clothing,</a>
                                                <a href="#">Potato chips</a>
                                            </div>
                                            <h3><a href="{{route('product-details')}}">Aliquam furniture</a></h3>
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$60.00</span>
                                            <div class="product_hover">
                                                <div class="product_ratings">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li><a href="wishlist.html" data-placement="top" title="Add to Wishlist" data-toggle="tooltip"><span class="icon icon-Heart"></span></a></li>
                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product8.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product9.jpg" alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="tag_cate">
                                                <a href="#">Clothing,</a>
                                                <a href="#">Potato chips</a>
                                            </div>
                                            <h3><a href="{{route('product-details')}}">Dummy animal</a></h3>
                                            <span class="current_price">$65.00</span>
                                            <div class="product_hover">
                                                <div class="product_ratings">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product10.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product11.jpg" alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="tag_cate">
                                                <a href="#">Women</a>
                                            </div>
                                            <h3><a href="{{route('product-details')}}">Furniture</a></h3>
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$60.00</span>
                                            <div class="product_hover">
                                                <div class="product_ratings">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product12.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product13.jpg" alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="tag_cate">
                                                <a href="#">Men,</a>
                                            </div>
                                            <h3><a href="{{route('product-details')}}">Letraset animal</a></h3>
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$70.00</span>
                                            <div class="product_hover">
                                                <div class="product_ratings">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product15.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product14.jpg" alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="tag_cate">
                                                <a href="#">Women</a>
                                            </div>
                                            <h3><a href="{{route('product-details')}}">Aliquam furniture</a></h3>
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$60.00</span>
                                            <div class="product_hover">
                                                <div class="product_ratings">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product16.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product11.jpg" alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="tag_cate">
                                                <a href="#">Clothing,</a>
                                                <a href="#">Potato chips</a>
                                            </div>
                                            <h3><a href="{{route('product-details')}}">Natural Lorem Ipsum</a></h3>
                                            <span class="current_price">$65.00</span>
                                            <div class="product_hover">
                                                <div class="product_ratings">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product5.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product6.jpg" alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="tag_cate">
                                                <a href="#">Clothing,</a>
                                            </div>
                                            <h3><a href="{{route('product-details')}}">Furniture</a></h3>
                                            <span class="old_price">$86.00</span>
                                            <div class="product_hover">
                                                <div class="product_ratings">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product16.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product15.jpg" alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="tag_cate">
                                                <a href="#">Clothing,</a>
                                                <a href="#">Potato chips</a>
                                            </div>
                                            <h3><a href="{{route('product-details')}}">Letraset animal</a></h3>
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$60.00</span>
                                            <div class="product_hover">
                                                <div class="product_ratings">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product8.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product3.jpg" alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="tag_cate">
                                                <a href="#">men</a>
                                                <a href="#">Potato chips</a>
                                            </div>
                                            <h3><a href="{{route('product-details')}}">Aliquam furniture</a></h3>
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$60.00</span>
                                            <div class="product_hover">
                                                <div class="product_ratings">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product10.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product12.jpg" alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="tag_cate">
                                                <a href="#">men</a>
                                                <a href="#">Potato chips</a>
                                            </div>
                                            <h3><a href="{{route('product-details')}}">Natural Contrary</a></h3>
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$60.00</span>
                                            <div class="product_hover">
                                                <div class="product_ratings">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product3.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product5.jpg" alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="tag_cate">
                                                <a href="#">Clothing,</a>
                                                <a href="#">Potato chips</a>
                                            </div>
                                            <h3><a href="{{route('product-details')}}">Donec eu furniture</a></h3>
                                            <span class="current_price">$62.00</span>
                                            <div class="product_hover">
                                                <div class="product_ratings">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-col-5">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product16.jpg" alt=""></a>
                                            <a class="secondary_img" href="{{route('product-details')}}"><img src="{{asset('frontEndAsset')}}/assets/img/product/product5.jpg" alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="tag_cate">
                                                <a href="#">Women</a>
                                            </div>
                                            <h3><a href="{{route('product-details')}}">Duis pulvinar</a></h3>
                                            <span class="old_price">$86.00</span>
                                            <span class="current_price">$70.00</span>
                                            <div class="product_hover">
                                                <div class="product_ratings">
                                                    <ul>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                        <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="product_desc">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae </p>
                                                </div>
                                                <div class="action_links">
                                                    <ul>
                                                        <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
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
            </div>
        </div>
    </section>
    <!--product section area end-->

    <!--blog section area start-->
    <section class="blog_section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>Monsta News</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog_wrapper blog_column3 owl-carousel">
                    <div class="col-lg-4">
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/blog/blog1.jpg" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <h3><a href="blog-details.html">Blog image post</a></h3>
                                <div class="author_name">
                                    <p>
                                        <span>by</span>
                                        <span class="themes">admin</span>
                                        / 30 Oct 2018
                                    </p>

                                </div>

                                <div class="post_desc">
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent</p>
                                </div>
                                <div class="read_more">
                                    <a href="blog-details.html">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/blog/blog2.jpg" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <h3><a href="blog-details.html">Post with Gallery</a></h3>
                                <div class="author_name">
                                    <p>
                                        <span>by</span>
                                        <span class="themes">admin</span>
                                        / 30 Oct 2018
                                    </p>

                                </div>
                                <div class="post_desc">
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent</p>
                                </div>
                                <div class="read_more">
                                    <a href="blog-details.html">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/blog/blog3.jpg" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <h3><a href="blog-details.html">Post with Video</a></h3>
                                <div class="author_name">
                                    <p>
                                        <span>by</span>
                                        <span class="themes">admin</span>
                                        / 30 Oct 2018
                                    </p>

                                </div>
                                <div class="post_desc">
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent</p>
                                </div>
                                <div class="read_more">
                                    <a href="blog-details.html">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single_blog">
                            <div class="blog_thumb">
                                <a href="blog-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/blog/blog2.jpg" alt=""></a>
                            </div>
                            <div class="blog_content">
                                <h3><a href="blog-details.html">Maecenas ultricies</a></h3>
                                <div class="author_name">
                                    <p>
                                        <span>by</span>
                                        <span class="themes">admin</span>
                                        / 30 Oct 2018
                                    </p>

                                </div>
                                <div class="post_desc">
                                    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent</p>
                                </div>
                                <div class="read_more">
                                    <a href="blog-details.html">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--blog section area end-->

    <!--Newsletter area start-->
    <div class="newsletter_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="newsletter_content">
                        <h2>Our Newsletter</h2>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <div class="subscribe_form">
                            <form id="mc-form" class="mc-form footer-newsletter" >
                                <input id="mc-email" type="email" autocomplete="off" placeholder="Email address..." />
                                <button id="mc-submit">Subscribe</button>
                            </form>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts text-centre">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div><!-- mailchimp-alerts end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Newsletter area start-->
@endsection
