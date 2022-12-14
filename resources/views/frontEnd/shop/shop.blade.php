@extends('frontEnd.sub_master')
@section('title')
    Shop
@endsection
@section('content')
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{route('/')}}">home</a></li>
                            <li>></li>
                            <li>shop</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--shop  area start-->
    <div class="shop_area shop_reverse">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <!--sidebar widget start-->
                    <div class="sidebar_widget">
                        <div class="widget_list widget_categories">
                            <h2>Categories</h2>
                            <ul>
                                <li><a href="#">Clothing</a> </li>
                                <li><a href="#"> Men</a> </li>
                                <li><a href="#">Women</a> </li>

                            </ul>
                        </div>
                        <div class="widget_list widget_filter">
                            <h2>Filter by price</h2>
                            <form action="#">
                                <div id="slider-range"></div>
                                <input type="text" name="text" id="amount" />
                                <button type="submit">Filter</button>
                            </form>
                        </div>


                        <div class="widget_list widget_brands">
                            <h2>Brands</h2>
                            <ul>
                                <li><a href="#">SamSung</a> <span>(1)</span> </li>
                            </ul>
                        </div>
                        <div class="widget_list widget_color">
                            <h2>Color</h2>
                            <ul>
                                <li><a href="#">Gold </a> <span>(4)</span></li>
                                <li><a href="#"> Green </a> <span>(6)</span></li>
                                <li><a href="#">White </a> <span>(10)</span></li>

                            </ul>
                        </div>
                        <div class="widget_list tag-cloud">
                            <h2>Tags</h2>
                            <div class="tag_widget">
                                <ul>
                                    <li><a href="#">asian</a></li>
                                    <li><a href="#">brown</a></li>
                                    <li><a href="#">euro</a></li>
                                    <li><a href="#">fashion</a></li>
                                    <li><a href="#">france</a></li>
                                    <li><a href="#">hat</a></li>
                                    <li><a href="#">t-shirt</a></li>
                                    <li><a href="#">travel</a></li>
                                    <li><a href="#">white</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget_list compare_p">
                            <h2>Compare Products</h2>
                            <div class="compare_item">
                                <div class="compare_img">
                                    <a href="#"><img src="{{asset('frontEndAsset')}}/assets/img/s-product/product.jpg" alt=""></a>
                                </div>
                                <div class="compare_info">
                                    <h3><a href="#">Letraset animal</a></h3>
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="price_box">
                                        <span class="old_price">$65.00</span>
                                        <span class="current_price">$60.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="compare_item ">
                                <div class="compare_img">
                                    <a href="#"><img src="{{asset('frontEndAsset')}}/assets/img/s-product/product2.jpg" alt=""></a>
                                </div>
                                <div class="compare_info">
                                    <h3><a href="#">Letraset animal</a></h3>
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="price_box">
                                        <span class="old_price">$65.00</span>
                                        <span class="current_price">$60.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="compare_btn">
                                <a href="#">compare<i class="ion-checkmark-round"></i></a>
                            </div>
                        </div>
                        <div class="widget_list Featured_p">
                            <h2>Featured Products</h2>
                            <div class="Featured_item">
                                <div class="Featured_img">
                                    <a href="#"><img src="{{asset('frontEndAsset')}}/assets/img/s-product/product5.jpg" alt=""></a>
                                </div>
                                <div class="Featured_info">
                                    <h3><a href="#">Letraset animal</a></h3>
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="price_box">
                                        <span class="old_price">$65.00</span>
                                        <span class="current_price">$60.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="Featured_item">
                                <div class="Featured_img">
                                    <a href="#"><img src="{{asset('frontEndAsset')}}/assets/img/s-product/product6.jpg" alt=""></a>
                                </div>
                                <div class="Featured_info">
                                    <h3><a href="#">Donec eu furniture</a></h3>
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="price_box">
                                        <span class="old_price">$65.00</span>
                                        <span class="current_price">$60.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="Featured_item bottom">
                                <div class="Featured_img">
                                    <a href="#"><img src="{{asset('frontEndAsset')}}/assets/img/s-product/product2.jpg" alt=""></a>
                                </div>
                                <div class="Featured_info">
                                    <h3><a href="#">Letraset animal</a></h3>
                                    <div class="product_ratings">
                                        <ul>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                            <li><a href="#"><i class="ion-ios-star-outline"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="price_box">
                                        <span class="old_price">$65.00</span>
                                        <span class="current_price">$60.00</span>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!--sidebar widget end-->
                </div>
                <div class="col-lg-9 col-md-12">
                    <!--shop wrapper start-->
                    <!--shop toolbar start-->
                    <div class="shop_toolbar">
                        <div class="list_button">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-toggle="tab" href="#large" role="tab" aria-controls="large" aria-selected="true"><i class="ion-grid"></i></a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false"><i class="ion-ios-list-outline"></i> </a>
                                </li>
                            </ul>
                        </div>
                        <div class="orderby_wrapper">
                            <h3>Sort By : </h3>
                            <div class=" niceselect_option">

                                <form class="select_option" action="#">

                                    <select name="orderby" id="short">
                                        <option selected value="1">Sort by popularity</option>
                                        <option  value="2">Sort by popularity</option>
                                        <option value="3">Sort by newness</option>
                                        <option value="4">Sort by price: low to high</option>
                                        <option value="5">Sort by price: high to low</option>
                                        <option value="6">Product Name: Z</option>
                                    </select>
                                </form>


                            </div>
                            <div class="page_amount">
                                <p>Showing 1–9 of 21 results</p>
                            </div>
                        </div>
                    </div>
                    <!--shop toolbar end-->

                    <!--shop tab product start-->
                    <div class="tab-content">
                        <div class="tab-pane grid_view fade show active" id="large" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product10.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product11.jpg" alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="tag_cate">
                                                <a href="#">Clothing,</a>
                                                <a href="#">Potato chips</a>
                                            </div>
                                            <h3><a href="product-details.html">Aliquam furniture</a></h3>
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
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product9.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product8.jpg" alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="tag_cate">
                                                <a href="#">Clothing,</a>
                                                <a href="#">Potato chips</a>
                                            </div>
                                            <h3><a href="product-details.html">Dummy animal</a></h3>
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
                                                        <li><a href="#" title="" data-original-title="Add to Wishlist"><span class="icon icon-Heart"></span></a></li>
                                                        <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                        <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product7.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product6.jpg" alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="tag_cate">
                                                <a href="#">Women</a>
                                            </div>
                                            <h3><a href="product-details.html">Furniture</a></h3>
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
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product5.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product4.jpg" alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="tag_cate">
                                                <a href="#">Men,</a>
                                            </div>
                                            <h3><a href="product-details.html">Letraset animal</a></h3>
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
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product3.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product2.jpg" alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="tag_cate">
                                                <a href="#">Women</a>
                                            </div>
                                            <h3><a href="product-details.html">Aliquam furniture</a></h3>
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
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product1.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product13.jpg" alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="tag_cate">
                                                <a href="#">Clothing,</a>
                                                <a href="#">Potato chips</a>
                                            </div>
                                            <h3><a href="product-details.html">Natural Lorem Ipsum</a></h3>
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
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product3.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product6.jpg" alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="tag_cate">
                                                <a href="#">Clothing,</a>
                                            </div>
                                            <h3><a href="product-details.html">Furniture</a></h3>
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
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product4.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product5.jpg" alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="tag_cate">
                                                <a href="#">Clothing,</a>
                                                <a href="#">Potato chips</a>
                                            </div>
                                            <h3><a href="product-details.html">Letraset animal</a></h3>
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
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product5.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product6.jpg" alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="tag_cate">
                                                <a href="#">men</a>
                                                <a href="#">Potato chips</a>
                                            </div>
                                            <h3><a href="product-details.html">Aliquam furniture</a></h3>
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
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product11.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product6.jpg" alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="tag_cate">
                                                <a href="#">men</a>
                                                <a href="#">Potato chips</a>
                                            </div>
                                            <h3><a href="product-details.html">Natural Contrary</a></h3>
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
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product13.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product12.jpg" alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="tag_cate">
                                                <a href="#">Clothing,</a>
                                                <a href="#">Potato chips</a>
                                            </div>
                                            <h3><a href="product-details.html">Donec eu furniture</a></h3>
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
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="single_product">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product6.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product5.jpg" alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box" data-placement="top" data-original-title="quick view"> quick view</a>
                                            </div>
                                        </div>
                                        <div class="product_content">
                                            <div class="tag_cate">
                                                <a href="#">Women</a>
                                            </div>
                                            <h3><a href="product-details.html">Duis pulvinar</a></h3>
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
                        <div class="tab-pane list_view fade" id="list" role="tabpanel">
                            <div class="single_product product_list_item">
                                <div class="row">
                                    <div class="col-lg-4 col-md-5">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product6.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product5.jpg" alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box"  data-original-title="quick view"> quick view</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-7">
                                        <div class="product_content">
                                            <h3><a href="product-details.html">Aliquam furniture</a></h3>
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
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et </p>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$70.00</span>
                                                <span class="current_price">$75.00</span>
                                            </div>

                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                    <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>

                                                    <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_product product_list_item">
                                <div class="row">
                                    <div class="col-lg-4 col-md-5">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product1.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product2.jpg" alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box"  data-original-title="quick view"> quick view</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-7">
                                        <div class="product_content">
                                            <h3><a href="product-details.html">Donec eu animal</a></h3>
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
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et </p>
                                            </div>
                                            <div class="price_box">
                                                <span class="current_price">$65.00</span>
                                            </div>

                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                    <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>

                                                    <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_product product_list_item">
                                <div class="row">
                                    <div class="col-lg-4 col-md-5">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product3.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product4.jpg" alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box"  data-original-title="quick view"> quick view</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-7">
                                        <div class="product_content">
                                            <h3><a href="product-details.html">Donec eu furniture</a></h3>
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
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et </p>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$70.00</span>
                                                <span class="current_price">$75.00</span>
                                            </div>

                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                    <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>

                                                    <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_product product_list_item">
                                <div class="row">
                                    <div class="col-lg-4 col-md-5">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product7.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product8.jpg" alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box"  data-original-title="quick view"> quick view</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-7">
                                        <div class="product_content">
                                            <h3><a href="product-details.html">Duis pulvinar</a></h3>
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
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et </p>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$70.00</span>
                                                <span class="current_price">$60.00</span>
                                            </div>

                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                    <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>

                                                    <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_product product_list_item">
                                <div class="row">
                                    <div class="col-lg-4 col-md-5">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product9.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product10.jpg" alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box"  data-original-title="quick view"> quick view</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-7">
                                        <div class="product_content">
                                            <h3><a href="product-details.html">Dummy animal</a></h3>
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
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et </p>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$70.00</span>
                                                <span class="current_price">$75.00</span>
                                            </div>

                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                    <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>

                                                    <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_product product_list_item">
                                <div class="row">
                                    <div class="col-lg-4 col-md-5">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product10.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product11.jpg" alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box"  data-original-title="quick view"> quick view</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-7">
                                        <div class="product_content">
                                            <h3><a href="product-details.html">Furniture</a></h3>
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
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et </p>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$70.00</span>
                                                <span class="current_price">$75.00</span>
                                            </div>

                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                    <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>

                                                    <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_product product_list_item">
                                <div class="row">
                                    <div class="col-lg-4 col-md-5">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product12.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product13.jpg" alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box"  data-original-title="quick view"> quick view</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-7">
                                        <div class="product_content">
                                            <h3><a href="product-details.html">Letraset animal</a></h3>
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
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et </p>
                                            </div>
                                            <div class="price_box">
                                                <span class="current_price">$55.00</span>
                                            </div>

                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                    <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>

                                                    <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_product product_list_item">
                                <div class="row">
                                    <div class="col-lg-4 col-md-5">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product14.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product15.jpg" alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box"  data-original-title="quick view"> quick view</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-7">
                                        <div class="product_content">
                                            <h3><a href="product-details.html">Natural Contrary</a></h3>
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
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et </p>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$70.00</span>
                                                <span class="current_price">$75.00</span>
                                            </div>

                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                    <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>

                                                    <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_product product_list_item">
                                <div class="row">
                                    <div class="col-lg-4 col-md-5">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product16.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product17.jpg" alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box"  data-original-title="quick view"> quick view</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-7">
                                        <div class="product_content">
                                            <h3><a href="product-details.html"> Lorem Ipsum</a></h3>
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
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et </p>
                                            </div>
                                            <div class="price_box">
                                                <span class="current_price">$75.00</span>
                                            </div>

                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                    <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>

                                                    <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_product product_list_item">
                                <div class="row">
                                    <div class="col-lg-4 col-md-5">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product18.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product19.jpg" alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box"  data-original-title="quick view"> quick view</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-7">
                                        <div class="product_content">
                                            <h3><a href="product-details.html">Natural passages</a></h3>
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
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et </p>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$70.00</span>
                                                <span class="current_price">$75.00</span>
                                            </div>

                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                    <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>

                                                    <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_product product_list_item">
                                <div class="row">
                                    <div class="col-lg-4 col-md-5">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product20.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product2.jpg" alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box"  data-original-title="quick view"> quick view</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-7">
                                        <div class="product_content">
                                            <h3><a href="product-details.html">Natural popularised</a></h3>
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
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et </p>
                                            </div>
                                            <div class="price_box">
                                                <span class="current_price">$70.00</span>
                                            </div>

                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                    <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>

                                                    <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_product product_list_item">
                                <div class="row">
                                    <div class="col-lg-4 col-md-5">
                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product19.jpg" alt=""></a>
                                            <a class="secondary_img" href="product-details.html"><img src="{{asset('frontEndAsset')}}/assets/img/product/product3.jpg" alt=""></a>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box"  data-original-title="quick view"> quick view</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-7">
                                        <div class="product_content">
                                            <h3><a href="product-details.html">Aliquam furniture</a></h3>
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
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et </p>
                                            </div>
                                            <div class="price_box">
                                                <span class="old_price">$70.00</span>
                                                <span class="current_price">$75.00</span>
                                            </div>

                                            <div class="action_links">
                                                <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="add to cart">add to cart</a></li>
                                                    <li><a href="wishlist.html" title="Wishlist"><span class="icon icon-Heart"></span></a></li>

                                                    <li><a href="compare.html" title="compare"><i class="ion-ios-settings-strong"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--shop tab product end-->
                    <!--shop toolbar start-->
                    <div class="shop_toolbar t_bottom">
                        <div class="pagination">
                            <ul>
                                <li class="current">1</li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="next"><a href="#">next</a></li>
                                <li><a href="#">>></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--shop toolbar end-->
                    <!--shop wrapper end-->
                </div>
            </div>
        </div>
    </div>
@endsection
