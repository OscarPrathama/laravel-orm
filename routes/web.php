<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

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
    return redirect()->route('users.index');
});

Route::get('/users', function(){

    $title = 'Users';
    // $users = User::get();
    // $users = User::has('posts')->get();
    // $users = User::with('posts')->get(); // eager loading
    // $users = User::with('posts.comments')->get(); // Nested Eager Loading
    $users = User::with('posts.categories', 'posts.comments')->get();
    // $users = User::with(['posts', 'usermetas'])->get();
    // $users = User::withOnly('posts')->get();
    // User::factory()->count(1)->create();

    return view('users.index', compact('users', 'title'));
})->name('users.index');

Route::get('/posts', function(){

})->name('posts.index');;

Route::get('/categories', function(){

})->name('categories.index');;

Route::get('/tags', function(){

})->name('tags.index');;

Route::get('/comments', function(){

})->name('comments.index');;
