@extends('frontEnd.sub_master')
@section('title')
    Compare
@endsection
@section('content')

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{route('/')}}">home</a></li>
                            <li>compare</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!-- main-content-wrap start -->
    <div class="main-content-wrap compaer-page">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="#">

                        <!-- Compare Table -->
                        <div class="compare-table table-responsive">
                            <table class="table mb-0">
                                <tbody>
                                <tr>
                                    <td class="first-column">Product</td>
                                    <td class="product-image-title">
                                        <a href="#" class="image"><img src="{{asset('frontEndAsset')}}/assets/img/product/product4.jpg" alt="Compare Product"></a>
                                        <a href="#" class="category">Furniture</a>
                                        <a href="#" class="title">Rinosin title</a>
                                    </td>
                                    <td class="product-image-title">
                                        <a href="#" class="image"><img src="{{asset('frontEndAsset')}}/assets/img/product/product8.jpg" alt="Compare Product"></a>
                                        <a href="#" class="category">Furniture</a>
                                        <a href="#" class="title">Macro title</a>
                                    </td>
                                    <td class="product-image-title">
                                        <a href="#" class="image"><img src="{{asset('frontEndAsset')}}/assets/img/product/product9.jpg" alt="Compare Product"></a>
                                        <a href="#" class="category">Furniture</a>
                                        <a href="#" class="title">Oakley title</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="first-column">Description</td>
                                    <td class="pro-desc">
                                        <p>Eye glasses are very important for thos whos have some difficult in their eye to see every hing clearly and perfectly</p>
                                    </td>
                                    <td class="pro-desc">
                                        <p>Eye glasses are very important for thos whos have some difficult in their eye to see every hing clearly and perfectly</p>
                                    </td>
                                    <td class="pro-desc">
                                        <p>Eye glasses are very important for thos whos have some difficult in their eye to see every hing clearly and perfectly</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="first-column">Price</td>
                                    <td class="pro-price">$295</td>
                                    <td class="pro-price">$275</td>
                                    <td class="pro-price">$395</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Color</td>
                                    <td class="pro-color">Black</td>
                                    <td class="pro-color">Black</td>
                                    <td class="pro-color">Black</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Stock</td>
                                    <td class="pro-stock">In Stock</td>
                                    <td class="pro-stock">In Stock</td>
                                    <td class="pro-stock">In Stock</td>
                                </tr>
                                <tr>
                                    <td class="first-column">Add to cart</td>
                                    <td class="pro-addtocart"><a href="#" class="add-to-cart" tabindex="0"><span>ADD TO CART</span></a></td>
                                    <td class="pro-addtocart"><a href="#" class="add-to-cart" tabindex="0"><span>ADD TO CART</span></a></td>
                                    <td class="pro-addtocart"><a href="#" class="add-to-cart" tabindex="0"><span>ADD TO CART</span></a></td>
                                </tr>
                                <tr>
                                    <td class="first-column">Delete</td>
                                    <td class="pro-remove"><button><i class="fa fa-trash-o"></i></button></td>
                                    <td class="pro-remove"><button><i class="fa fa-trash-o"></i></button></td>
                                    <td class="pro-remove"><button><i class="fa fa-trash-o"></i></button></td>
                                </tr>
                                <tr>
                                    <td class="first-column">Rating</td>
                                    <td class="pro-ratting">
                                        <a href="#"><i class="ion-star"></i></a>
                                        <a href="#"><i class="ion-star"></i></a>
                                        <a href="#"><i class="ion-star"></i></a>
                                        <a href="#"><i class="ion-star"></i></a>
                                        <a href="#"><i class="ion-star"></i></a>
                                    </td>
                                    <td class="pro-ratting">
                                        <a href="#"><i class="ion-star"></i></a>
                                        <a href="#"><i class="ion-star"></i></a>
                                        <a href="#"><i class="ion-star"></i></a>
                                        <a href="#"><i class="ion-star"></i></a>
                                        <a href="#"><i class="ion-star"></i></a>
                                    </td>
                                    <td class="pro-ratting">
                                        <a href="#"><i class="ion-star"></i></a>
                                        <a href="#"><i class="ion-star"></i></a>
                                        <a href="#"><i class="ion-star"></i></a>
                                        <a href="#"><i class="ion-star"></i></a>
                                        <a href="#"><i class="ion-star"></i></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- main-content-wrap end -->

@endsection
