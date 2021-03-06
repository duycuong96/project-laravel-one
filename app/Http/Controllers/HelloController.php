<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Auth;

class HelloController extends Controller
{
    public function __invoke()
    {
        if (Auth::check() === false) {
            return redirect()->route('auth.login');
        }

        $posts = factory(Post::class, 10)->make();

        return view('hello_world', [
            'posts' => $posts,
        ]);
    }
}
