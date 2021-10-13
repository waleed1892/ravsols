<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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
    $posts = \App\Models\Post::where('published', 1)->get();
    return view('index')->with(['posts' => $posts]);
});

Route::get('/del', function () {

    $date = Carbon::now();
    $currentdate =$date->toDateString();
    $posts = \App\Models\Post::where('schedule_post', $currentdate)->get() ;

    foreach ($posts as $post){
        $post->update(['published'=> '1']);
    }

});
Route::post('message', [\App\Http\Controllers\MessageController::class, 'send'])->name('sendMessage');

Route::redirect('admin', 'admin/posts');
Route::prefix('admin')->group(function () {
    Route::resource('posts', \App\Http\Controllers\PostController::class);
});

Route::resource('blog', \App\Http\Controllers\PostController::class)->only('index', 'show');
Route::get('/{any}', [\App\Http\Controllers\PostController::class, 'show'])->where('any', '.*');
