<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\Roles\Edit;
use App\Http\Livewire\Admin\AuditTrails;
use App\Http\Livewire\Admin\Roles\Roles;
use App\Http\Livewire\Admin\Users\Users;
use App\Http\Controllers\WelcomeController;
use App\Http\Livewire\Admin\Users\EditUser;
use App\Http\Livewire\Admin\Users\ShowUser;
use App\Http\Controllers\Tags\TagsController;
use App\Http\Controllers\Auth\TwoFaController;
use App\Http\Livewire\Admin\Settings\Settings;
use App\Http\Controllers\Pages\PagesController;
use App\Http\Livewire\Admin\SentEmails\SentEmails;
use App\Http\Controllers\Articles\ArticleController;
use App\Http\Livewire\Admin\SentEmails\SentEmailsBody;
use App\Http\Controllers\Categories\CategoriesController;

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


//Home Page
Route::get('/', [PagesController::class,'index'])->name('pages.home');
//Pages
Route::prefix('pages')->group(function(){
    Route::get('contact',[PagesController::class,'contact'])->name('pages.contact');
});



Route::prefix(config('admintw.prefix'))->middleware(['auth', 'activeUser', 'IpCheckMiddleware'])->group(function () {
    Route::get('/', Dashboard::class)->name('dashboard');// 'verified',->to be added later in middleware above

    Route::get('2fa', [TwoFaController::class, 'index'])->name('2fa');
    Route::post('2fa', [TwoFaController::class, 'update'])->name('2fa.update');
    Route::get('2fa-setup', [TwoFaController::class, 'setup'])->name('2fa-setup');
    Route::post('2fa-setup', [TwoFaController::class, 'setupUpdate'])->name('2fa-setup.update');

    Route::prefix('settings')->group(function () {
        Route::get('audit-trails', AuditTrails::class)->name('admin.settings.audit-trails.index');
        Route::get('system-settings', Settings::class)->name('admin.settings');
        Route::get('roles', Roles::class)->name('admin.settings.roles.index');
        Route::get('roles/{role}/edit', Edit::class)->name('admin.settings.roles.edit');
    });

    Route::prefix('users')->group(function () {
        Route::get('/', Users::class)->name('admin.users.index');
        Route::get('{user}/edit', EditUser::class)->name('admin.users.edit');
        Route::get('{user}', ShowUser::class)->name('admin.users.show');
    });
});
//articles
Route::prefix('articles')->group(function(){
    Route::get('/',[ArticleController::class,'index'])->name('articles.index');
});

//categories
Route::prefix('categories')->group(function(){
    Route::get('/',[CategoriesController::class,'index'])->name('categories.index');
});
//tags
Route::prefix('tags')->group(function(){
    Route::get('/',[TagsController::class,'index'])->name('tags.index');
});
 









require __DIR__.'/auth.php';
