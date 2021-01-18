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

/*
|--------------------------------------------------------------------------
| Routes des posts
|--------------------------------------------------------------------------
*/
use App\Http\Controllers\Posts;

// ROUTE PAR DEFAUT
// PATTERN: /
// CTRL: Posts
// ACTION: index
  Route::get('/', [Posts::class, 'index'])->name('blog');

// LISTE DES POSTS
// PATTERN: /posts
// CTRL: Posts
// ACTION: index
  Route::get('/posts', [Posts::class, 'index'])->name('posts.index');

// DETAILS D'UN POST
// PATTERN: /posts/post/slug
// CTRL: Posts
// ACTION: show
  Route::get('/posts/{post}/{slug}', [Posts::class, 'show'])
       ->where('post', '[1-9][0-9]*')
       ->where('slug', '[a-z0-9][a-z0-9\-]*')
       ->name('posts.show');


 /*
 |--------------------------------------------------------------------------
 | Routes des pages
 |--------------------------------------------------------------------------
 */
 use App\Http\Controllers\Contacts;

// CONTACT PAGE
// PATTERN: /contact
// CTRL: Contacts
// ACTION: form
  Route::get('/contact', [Contacts::class, 'form'])->name('contacts.form');
