<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\FrontendController;

// ========================== admin route ====================
use App\Http\Controllers\admin\ProjectCategoryController;
use App\Http\Controllers\admin\ProjectController;
// use App\Http\Controllers\admin\BlogAuthorController;







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

Route::get('/', function () {
    return redirect('https://mahim-portfolio.vercel.app/');
});







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
    
    
    // =========================== project categroy upload==========================

    Route::get('/admin/project-category',[ProjectCategoryController::class,'index'])->name('admin.project-category');
    Route::post('/admin/project-category/add',[ProjectCategoryController::class,'store'])->name('admin.project-category.add');
    Route::get('/admin/project-category/delete/{id}',[ProjectCategoryController::class,'delete']);

    // // ======================= author route list =========================
    // Route::get('/admin/authors',[BlogAuthorController::class,'index'])->name('admin.author.index');
    // Route::get('/admin/author/create',[BlogAuthorController::class,'create'])->name('admin.author.create');
    // Route::post('/admin/author/store',[BlogAuthorController::class,'store'])->name('admin.author.store');
    // Route::get('/admin/author/edit/{id}',[BlogAuthorController::class,'edit']);
    // Route::post('/admin/author/update/{id}',[BlogAuthorController::class,'update']);
    // Route::get('/admin/author/delete/{id}',[BlogAuthorController::class,'destroy']);


    // ======================= blog route list =========================
    Route::get('/admin/projects',[ProjectController::class,'index'])->name('admin.project.index');
    Route::get('/admin/projects/create',[ProjectController::class,'create'])->name('admin.project.create');
    Route::post('/admin/projects/store',[ProjectController::class,'store'])->name('admin.project.store');
    Route::get('/admin/projects/edit/{id}',[ProjectController::class,'edit']);
    Route::post('/admin/projects/update/{id}',[ProjectController::class,'update']);
    Route::get('/admin/projects/delete/{id}',[ProjectController::class,'destroy']);

    



});



require __DIR__.'/auth.php';
