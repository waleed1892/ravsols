<?php

use App\Http\Controllers\LoginController;
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

Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::post('messageSend', [\App\Http\Controllers\MessageController::class, 'send'])->name('sendMessage');
Route::get('login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('authenticate', [\App\Http\Controllers\LoginController::class, 'authenticate'])->name('auth');
Route::get('blog', 'App\Http\Controllers\PostController@blogPosts');

Route::get('project', function () {
    $projects = \App\Models\Project::paginate(2);
    return view('projects')->With(['projects' => $projects]);
});
//Route::get('/project', 'App\Http\Controllers\HomeController@allProjects');

Route::redirect('admin', 'admin/posts');
Route::middleware(['authenticate'])->prefix('admin')->group(function () {
    Route::resource('posts', \App\Http\Controllers\PostController::class);
    Route::resource('projects', \App\Http\Controllers\ProjectController::class);
    Route::resource('tags', \App\Http\Controllers\TagController::class);
    Route::resource('technologies', \App\Http\Controllers\TechnologyController::class);
    Route::resource('testimonials', \App\Http\Controllers\TestimonialController::class);
    Route::resource('inquires', \App\Http\Controllers\MessageController::class);
    Route::get('/logout', [LoginController::class, 'logout']);
});
Route::get('/{any}', [\App\Http\Controllers\PostController::class, 'show'])->where('any', '.*');

