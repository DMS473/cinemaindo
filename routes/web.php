<?php

use Illuminate\Support\Facades\Route;

use App\Models\Category;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [HomeController::class, 'index']);

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "active" => "about",
        "name" => "Cinendoggo",
        "desc" => "Cinema Indonesia",
        "image" => "genshin.jpg"
    ]);
});



Route::get('/posts', [PostController::class, 'index']);

// halaman single post
Route::get('/posts/{post:slug}', [PostController::class, 'show'] );

Route::get('/posts/{post:slug}/order', [PostController::class, 'order'] );
Route::post('/posts/{post:slug}/order', [PostController::class, 'calculate']);
Route::get('/selesai', function(){
    return view('selesai',[
        "title" => "Selesai",
        "active" => "selesai",
    ]);
});


Route::get('/categories', function()
{
    return view('categories',[
        "title" => "Categories",
        "active" => "categories",
        "categories" => Category::all()
    ]);
});
// halaman category
Route::get('/categories/{category:slug}', function (Category $category)
{
    return view('category', [
        "title" => $category->name,
        "active" => "categories",
        // "post" => Post::find('slug', $slug)->first()
        "posts" => $category->posts,
        "category" => $category->name
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login') ->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

// Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
// Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index',[
        "title" => "Dashboard",
        "active" => "dashboard"
    ]);
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');