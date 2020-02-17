<?php
use Illuminate\Support\Facades\Route;


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
use App\Models\Post;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});


Route::get('hello_world', function () {
    // Handle request
    $posts = factory(Post::class, 10)->make();

    return view('hello_world', [
        'posts' => $posts,
    ]);
})->name('home.hello_world');
