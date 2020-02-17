<?php
use Illuminate\Support\Facades\Route;
use App\Models\Post;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello_world', function () {

    $posts = factory(Post::class,2)->make();

    dd($posts);

    return view('hello_world',[
        'posts' => $posts,
    ]);
})->name('home.hello_world');
