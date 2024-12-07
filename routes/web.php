<?php

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Modules\Discount\Http\Controllers\Frontend\DisableAbleController;
use App\Http\Middleware\adminmiddleware;

use OpenApi\Annotations\Patch;

Route::get('/download',[\App\Http\Controllers\HomeController::class,'download'])->name('download');
Route::get('/home',[\App\Http\Controllers\HomeController::class,'index'])->name('index');
Route::get('/',[\App\Http\Controllers\HomeController::class,'index'])->name('index');

Route::get('/about',[\App\Http\Controllers\HomeController::class,'about'])->name('about');

Route::get('/contact',[\App\Http\Controllers\HomeController::class,'contact'])->name('contact');
Route::post('/contact_p',[\App\Http\Controllers\HomeController::class,'contact_post'])->name('contact_post');



Route::get('/faq',[\App\Http\Controllers\HomeController::class,'faq'])->name('faq');

Route::get('/products',[\App\Http\Controllers\ProductListcontroller::class,'products'])->name('products');

Route::get('/product-{id}',[\App\Http\Controllers\HomeController::class,'product'])->name('product');


Route::get('/Pro-{name}',[\App\Http\Controllers\ProductListcontroller::class,'Cat_products'])->name('Cat_products');

// Route::get('/compare',[\App\Http\Controllers\HomeController::class,'compare'])->name('compare');

Route::get('/cart',[\App\Http\Controllers\HomeController::class,'cart'])->name('cart')->middleware(['auth','password.confirm']);

Route::get('/checkout',[\App\Http\Controllers\PaymentController::class,'checkout'])->name('checkout')->middleware('auth');

Route::post('/checkout',[\App\Http\Controllers\PaymentController::class,'checkout_post'])->name('checkout_post')->middleware('auth');

Route::get('/auth2',[\App\Http\Controllers\HomeController::class,'getauth2'])->name('auth2');
Route::post('/auth2',[\App\Http\Controllers\HomeController::class,'postauth2'])->name('postauth2');

Route::get('/t_auth2',[\App\Http\Controllers\HomeController::class,'tokengetauth2'])->name('t_auth2');
Route::post('/t_auth2',[\App\Http\Controllers\HomeController::class,'tokenpostauth2']);


Route::get('/Addresses',[\App\Http\Controllers\ProfileController::class,'adresses'])->name('adresses')->middleware('auth');
Route::post('/Addresses',[\App\Http\Controllers\ProfileController::class,'adresses_post'])->name('adresses_post')->middleware('auth');
Route::post('/deleteadresses/{id}', [\App\Http\Controllers\ProfileController::class, 'delete_adresses'])
    ->name('delete_adresses')
    ->middleware('auth');

Route::post('/selectadresses{id}',[\App\Http\Controllers\HomeController::class,'selectadresses'])->name('selectadresses')->middleware('auth');

Route::get('/factors',[\App\Http\Controllers\ProfileController::class,'factors'])->name('factors')->middleware('auth');

Route::get('/favorites',[\App\Http\Controllers\ProfileController::class,'favorites'])->name('favorites')->middleware('auth');

Route::get('/personal',[\App\Http\Controllers\ProfileController::class,'personal'])->middleware('auth')->name('personal');


// Auth::routes();


// Route::get('/auth/google',[\App\Http\Controllers\Auth\googleAuthcontroller::class,'redirect'])->name('auth.google');
// Route::get('/auth/google/callback',[\App\Http\Controllers\Auth\googleAuthcontroller::class,'callback']);


Route::post('/create_comment',[\App\Http\Controllers\HomeController::class,'craete_comment'])->name('create_comment')->middleware('auth');


Route::get('/blog',[\App\Http\Controllers\HomeController::class,'blog_list'])->name('blog_list');

Route::get('/blog-single-{id}',[\App\Http\Controllers\HomeController::class,'blog_single'])->name('blog_single');


Route::get('/edit',[\App\Http\Controllers\HomeController::class,'edit_user'])->name('edit_user')->middleware('auth');
Route::patch('/edit_post{id}',[\App\Http\Controllers\HomeController::class,'edit_user_post'])->name('aaaaaaaaaa')->middleware('auth');
// Route::resource('edit_user', App\Http\Controllers\authcontroll\edit_user::class);


Route::post('/like',[\App\Http\Controllers\HomeController::class,'like_post'])->name('like_post')->middleware('auth');

Route::post('/dislike',[\App\Http\Controllers\HomeController::class,'dislike_post'])->name('dislike_post')->middleware('auth');

Route::get('/blogs-{category}',[\App\Http\Controllers\HomeController::class,'blog_category'])->name('blog_category');


// Route::get('/show/{user}/file' , function($file){
//     return Storage::download(request('path'));
// }
// )->name('categorys');


Route::post('/add_to_card{product}',[\App\Http\Controllers\cartcontroller::class,'addToCart'])->name('add_to_card');


Route::post('/login_step2',[\App\Http\Controllers\AuthController::class,'login_step1_post'])->middleware('guest')->name('perp');

Route::get('/login_step2',[\App\Http\Controllers\AuthController::class,'enter2'])->middleware('guest');

Route::get('/login',[\App\Http\Controllers\AuthController::class,'login'])->name('login')->middleware('guest');
Route::get('/logout',[\App\Http\Controllers\AuthController::class,'logout'])->name('logout')->middleware('auth');

// //Route::get('/y',[\App\Http\Controllers\authcontroll\authcontorel::class,'log'])->name('x');

// Route::post('/pvc',[\App\Http\Controllers\authcontroll\authcontorel::class,'mm'])->middleware('guest')->name('mm');





//


Route::get('/products-list',[\App\Http\Controllers\ProductListcontroller::class,'products_list'])->name('products-list');
Route::get('/products',[\App\Http\Controllers\ProductListcontroller::class,'products'])->name('products');



//











Route::delete('/delete_cart{product}',[\App\Http\Controllers\cartcontroller::class,'deleteFromCart'])->name('delete_cart');

Route::post('/delete_cartAll',[\App\Http\Controllers\cartcontroller::class,'deleteAll'])->name('delete_cart_All');

Route::get('/cart',[\App\Http\Controllers\cartcontroller::class,'Cart'])->name('cart');
















Route::get('/sitemap.xml', function () {
    return response()->file(public_path('sitemap.xml'));
});


// Route::withoutMiddleware([VerifyCsrfToken::class])->group(function () {

//     // Route::post('/graphql', [GraphQLController::class, 'query']);
//     // Route::post('Login_step2',App\Http\Controllers\Api\LoginController::class);
//     Route::delete('Logoutt',App\Http\Controllers\Api\LogoutController::class)->middleware('auth:sanctum');
// });

Route::post('/ajax-request', [\App\Http\Controllers\ProductListcontroller::class, 'handleRequest'])->name('ajax.request');


Route::get('/filter-by-price', action: [\App\Http\Controllers\ProductListcontroller::class, 'filterByPrice'])->name('products.filter');

Route::get('/UpdateCart', action: [\App\Http\Controllers\ProductListcontroller::class, 'UpdateCart'])->name('products.UpdateCart');


// Route::get('current_user',App\Http\Controllers\Api\GetCurrentUserController::class)->middleware('auth:sanctum');
// Route::get('able', [DisableAbleController::class,'able'])->name('discount.able');