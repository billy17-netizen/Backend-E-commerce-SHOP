<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*Get Visitor Route*/
Route::get('/getVisitors', [\App\Http\Controllers\Admin\VisitorController::class, 'GetVisitors']);
/*Contact Page Route*/
Route::post('/postContact', [\App\Http\Controllers\Admin\ContactController::class, 'PostContact']);
/*Get Site Info Route*/
Route::get('/getSiteInfo', [\App\Http\Controllers\Admin\SiteInfoController::class, 'getSiteInfo']);
/*Get All Category*/
Route::get('/getCategory', [\App\Http\Controllers\Admin\CategoriesController::class, 'getCategory']);
/*Get All ProductList BY Remark*/
Route::get('/getProductByRemark/{remark}', [\App\Http\Controllers\Admin\ProductListController::class, 'getProductListByRemark']);
/*Get All ProductList BY Category*/
Route::get('/getProductByCategory/{category}', [\App\Http\Controllers\Admin\ProductListController::class, 'getProductListByCategory']);
/*Get All ProductList BY SubCategory*/
Route::get('/getProductBySubCategory/{category}/{SubCategory}', [\App\Http\Controllers\Admin\ProductListController::class, 'getProductListBySubCategory']);
/*Get Image Slider Data*/
Route::get('/getImageSlider', [\App\Http\Controllers\Admin\SliderController::class, 'getImageSlider']);
/*Get Product Details Data*/
Route::get('/getProductDetails/{id}', [\App\Http\Controllers\Admin\ProductDetailsController::class, 'getProductDetails']);
/*Get Notification*/
Route::get('/getNotification', [\App\Http\Controllers\Admin\NotificationController::class, 'getNotification']);
/*Search Route*/
Route::get('/search/{key}', [\App\Http\Controllers\Admin\ProductListController::class, 'ProductSearch']);
/*Get Similar Product Route*/
Route::get('/similar/{subcategory}', [\App\Http\Controllers\Admin\ProductListController::class, 'SimilarProduct']);
/*Get Product Review Route */
Route::get('/reviewList/{id}', [\App\Http\Controllers\Admin\ProductReviewController::class, 'ReviewList']);
/*Post Product Cart Route */
Route::post('/addToCart', [\App\Http\Controllers\Admin\ProductCartController::class, 'addToCart']);
/*Get Product Cart Count Route */
Route::get('/cartCount/{product_code}', [\App\Http\Controllers\Admin\ProductCartController::class, 'cartCount']);
/*Get Favourite Product Route */
Route::get('/favourite/{product_code}/{email}', [\App\Http\Controllers\Admin\FavouriteController::class, 'addFavourite']);
/*Get Favourite Product List Route */
Route::get('/favourite/{email}', [\App\Http\Controllers\Admin\FavouriteController::class, 'favouriteList']);
/*Remove Favourite Product List Route */
Route::get('/favouriteRemove/{product_code}/{email}', [\App\Http\Controllers\Admin\FavouriteController::class, 'favouriteRemove']);

// Login Routes
Route::post('/login', [\App\Http\Controllers\User\AuthController::class, 'Login']);
// Register Route
Route::post('/register', [App\Http\Controllers\User\AuthController::class, 'Register']);
// Forget Password Routes
Route::post('/forgetPassword', [App\Http\Controllers\User\ForgetController::class, 'ForgetPassword']);
// Reset Password Routes
Route::post('/resetPassword', [App\Http\Controllers\User\ResetController::class, 'ResetPassword']);
// Current User Route
Route::get('/user', [App\Http\Controllers\User\UserController::class, 'User'])->middleware('auth:api');
