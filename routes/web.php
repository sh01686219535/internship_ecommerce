<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\SizeController;


//----FrontEnd Route------

Route::get('/',[FrontEndController::class,'index'])->name('/');
Route::get('/shop',[FrontEndController::class,'shop'])->name('shop');
Route::get('/blog',[FrontEndController::class,'blog'])->name('blog');
Route::get('/blog-details',[FrontEndController::class,'blogDetails'])->name('blog-details');
Route::get('/product-details',[FrontEndController::class,'productDetails'])->name('product-details');
Route::get('/contact',[FrontEndController::class,'contact'])->name('contact');
Route::get('/loginRegister',[FrontEndController::class,'loginRegister'])->name('loginRegister');
Route::get('/checkout',[FrontEndController::class,'checkout'])->name('checkout');
Route::get('/cart',[FrontEndController::class,'cart'])->name('cart');
Route::get('/wishlist',[FrontEndController::class,'wishlist'])->name('wishlist');
Route::get('/myAccount',[FrontEndController::class,'myAccount'])->name('myAccount');
Route::get('/compare',[FrontEndController::class,'compare'])->name('compare');

//---AdminPanel route----

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');

    //----Category Route-----

    Route::get('/category',[CategoryController::class,'category'])->name('category');
    Route::post('/add-category',[CategoryController::class,'addCategory'])->name('add-category');
    Route::get('/cat-status/{id}',[CategoryController::class,'catStatus'])->name('cat-status');
    Route::get('/cat-edit/{id}',[CategoryController::class,'catEdit'])->name('cat-edit');
    Route::post('/update-category',[CategoryController::class,'updateCategory'])->name('update-category');
    Route::post('/cat-delete',[CategoryController::class,'deleteCategory'])->name('cat-delete');

    //----subCategory Route-----

    Route::get('/subCategory',[SubCategoryController::class,'subCategory'])->name('subCategory');
    Route::post('/add-subCat',[SubCategoryController::class,'addSubCategory'])->name('add-subCat');

    //----Brand Route-----

    Route::get('/brand',[BrandController::class,'brand'])->name('brand');
    Route::post('/add-brand',[BrandController::class,'addBrand'])->name('add-brand');
    Route::get('/brand-status/{id}',[BrandController::class,'brandStatus'])->name('brand-status');
    Route::get('/brand-edit/{id}',[BrandController::class,'brandEdit'])->name('brand-edit');
    Route::post('/brand-delete',[BrandController::class,'brandDelete'])->name('brand-delete');
    Route::post('/update-brand',[BrandController::class,'brandUpdate'])->name('update-brand');

    //----Color Route-----

    Route::get('/color',[ColorController::class,'color'])->name('color');
    Route::post('/add-color',[ColorController::class,'addColor'])->name('add-color');
    Route::get('/color-status/{id}',[ColorController::class,'ColorStatus'])->name('color-status');
    Route::get('/color-edit/{id}',[ColorController::class,'ColorEdit'])->name('color-edit');
    Route::post('/color-delete',[ColorController::class,'ColorDelete'])->name('color-delete');
    Route::post('/update-color',[ColorController::class,'ColorUpdate'])->name('update-color');

    //----Color Size-----

    Route::get('/size',[SizeController::class,'size'])->name('size');
    Route::post('/add-size',[SizeController::class,'addSize'])->name('add-size');
    Route::get('/size-edit/{id}',[SizeController::class,'sizeEdit'])->name('size-edit');
    Route::post('/update-size',[SizeController::class,'updateSize'])->name('update-size');
    Route::post('/size-delete',[SizeController::class,'deleteSize'])->name('size-delete');

});
