<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\FrontendController;

// ========================== admin route ====================
use App\Http\Controllers\admin\BlogCategoryController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\BlogAuthorController;


use App\Http\Controllers\AjwanController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\ViewByCategoryController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// --------------------------------- frontend route ---------------------------------------

Route::get('/', [FrontendController::class, 'Index']);

Route::get('/about',[FrontendController::class, 'About']);

//contact route 
Route::get('/contact', [FrontendController::class, 'Contact'])->name('contact');

//blog page 
Route::get('/blogs', [FrontendController::class, 'Blogs'])->name('blogs');
//blog page by category
Route::get('/blogs/category/{category}', [FrontendController::class, 'BlogsByCategory'])->name('blogs.category');
//blog details page 
Route::get('/blog/{slug}', [FrontendController::class, 'BlogDetails']);





// ------------------------ admin route ==============================


Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin',function(){
    return redirect('/dashboard');
});


Route::get('/dashboard',function(){
    return redirect('/admin/dashboard');
});

Route::middleware('auth')->group(function () {
    
    
    // =========================== blog categroy upload==========================

    Route::get('/admin/blog-category',[BlogCategoryController::class,'index'])->name('admin.blog-category');
    Route::post('/admin/blog-category/add',[BlogCategoryController::class,'store'])->name('admin.blog-category.add');
    Route::get('/admin/blog-category/delete/{id}',[BlogCategoryController::class,'delete']);

    // ======================= author route list =========================
    Route::get('/admin/authors',[BlogAuthorController::class,'index'])->name('admin.author.index');
    Route::get('/admin/author/create',[BlogAuthorController::class,'create'])->name('admin.author.create');
    Route::post('/admin/author/store',[BlogAuthorController::class,'store'])->name('admin.author.store');
    Route::get('/admin/author/edit/{id}',[BlogAuthorController::class,'edit']);
    Route::post('/admin/author/update/{id}',[BlogAuthorController::class,'update']);
    Route::get('/admin/author/delete/{id}',[BlogAuthorController::class,'destroy']);


    // ======================= blog route list =========================
    Route::get('/admin/blogs',[BlogController::class,'index'])->name('admin.blog.index');
    Route::get('/admin/blogs/create',[BlogController::class,'create'])->name('admin.blog.create');
    Route::post('/admin/blogs/store',[BlogController::class,'store'])->name('admin.blog.store');
    Route::get('/admin/blogs/edit/{id}',[BlogController::class,'edit']);
    Route::post('/admin/blogs/update/{id}',[BlogController::class,'update']);
    Route::get('/admin/blogs/delete/{id}',[BlogController::class,'destroy']);

    



});



require __DIR__.'/auth.php';
