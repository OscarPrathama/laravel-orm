<?php

use Illuminate\Support\Facades\Route;
use App\Models\{Comment, User, Post, Contact};

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
    // $users = User::with('posts.comments')->get(); // Nested Eager Loading 1
    $users = User::with('posts.categories', 'posts.comments', 'userMetas', 'contact')->get(); // Nested Eager Loading 2
    // $users = User::with(['posts', 'usermetas'])->get();
    // $users = User::withOnly('posts')->get();
    // User::factory()->count(1)->create();

    // get user phone
    // $phone = User::find(1)->contact->phone;
    // dd($phone);

    return view('users.index', compact('users', 'title'));

})->name('users.index');

Route::get('/posts', function(){

    $title = 'Posts';

    // get all posts relations (comments, users, categories, tags)
    // $posts = Post::with('comments', 'users', 'categories', 'tags')->paginate(10); // with pagination
    $posts = Post::with('comments', 'users', 'categories', 'tags')->get();

    // get single post and their comments
    // $post = Post::find(1);
    // $comments = $post->comments;

    // create records
    // $post = Post::find(1);
    // $comment = new Comment;
    // $comment->status = "approved";
    // $comment->comment = "It'/s new comment";
    // $post = $post->comments()->save($comment);

    // create multiple records
    // $post = Post::find(1);
    // $comment1 = new Comment;
    // $comment1->comment = "This is comment number 1";
    // $comment1->status = "approved";
    // $comment2 = new Comment;
    // $comment2->comment = "This is comment number 2";
    // $comment2->status = "approved";
    // $post = $post->comments()->saveMany([$comment1, $comment2]);

    // ???
    // $comment = Comment::find(1);
    // $post = Post::find(2);
    // $comment->post()->associate($post)->save();

    // dd($comment->post()->associate($post)->save());

    return view('posts.index', compact('posts', 'title'));

})->name('posts.index');

Route::get('/categories', function(){



})->name('categories.index');;

Route::get('/tags', function(){

})->name('tags.index');;

Route::get('/comments', function(){

    $comment = Comment::find(1);
    $post = $comment->post;
    dd($post);

})->name('comments.index');

Route::get('/contacts', function(){
    // get specific user
    // $user = Contact::find(1)->user;

    // create record
    // $user = User::find(1);
    // $contact = new Contact;
    // $contact->phone = '081522224444';
    // $user->contact()->save($contact);

    $contact = Contact::find(2);
    $user = User::find(4);
    $associate = $contact->user()->associate($user)->save();

    dd($associate);

})->name('contacts.index');