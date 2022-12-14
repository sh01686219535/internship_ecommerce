<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        return view('frontEnd.home.home');
    }
    public function shop(){
        return view('frontEnd.shop.shop');
    }
    public function blog(){
        return view('frontEnd.blog.blog');
    }
    public function blogDetails(){
        return view('frontEnd.blog.blog-details');
    }
    public function productDetails(){
        return view('frontEnd.shop.product-details');
    }
    public function contact(){
        return view('frontEnd.contact.contact');
    }
    public function loginRegister(){
        return view('frontEnd.loginRegister.loginRegister');
    }
    public function checkout(){
        return view('frontEnd.checkout.checkout');
    }
    public function cart(){
        return view('frontEnd.cart.cart');
    }
    public function wishlist(){
        return view('frontEnd.wishlist.wishlist');
    }
    public function myAccount(){
        return view('frontEnd.myAccount.myAccount');
    }
    public function compare(){
        return view('frontEnd.compare.compare');
    }
}
