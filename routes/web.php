<?php


use App\Http\Controllers\dashboard\AdmincategoriesController;

use App\Http\Livewire\Articlelikes;
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
use App\Http\Controllers\Authers\AutherController;
use App\Http\Livewire\Admin\SentEmails\SentEmails;
use App\Http\Controllers\Articles\ArticleController;
use App\Http\Livewire\Admin\SentEmails\SentEmailsBody;
use App\Http\Controllers\Categories\CategoriesController;
use App\Http\Controllers\dashboard\AdminArticlesController;

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
           //users / Authers
    Route::prefix('users')->group(function () {
        Route::get('/', Users::class)->name('admin.users.index');
        Route::get('{user}/edit', EditUser::class)->name('admin.users.edit');
        Route::get('{user}', ShowUser::class)->name('admin.users.show');
    });
    //articles dashboard
    Route::prefix('dashboard')->group(function(){
        Route::get('/articles',[AdminArticlesController::class,'index'])->name('admin.articles.index');
        Route::get('/articles/create',[AdminArticlesController::class,'create'])->name('admin.articles.create');
        Route::post('/articles/store',[AdminArticlesController::class,'store'])->name('admin.articles.store');
        Route::get('/articles/{id}/edit',[AdminArticlesController::class,'edit'])->name('admin.articles.edit');
        Route::patch('/articles/update/{id}',[AdminArticlesController::class,'update'])->name('admin.articles.update');
        Route::delete('/articles/destroy/{id}',[AdminArticlesController::class,'destroy'])->name('admin.articles.destroy');
        Route::get('/articles/auther/manage',[AutherController::class,'manageAutherArticles'])->name('admin.articles.manage');

    });
    //admin categories & Tags
    Route::prefix('dashboardcategories')->group(function(){
        Route::resource('/categories',AdmincategoriesController::class);
    });

});
//articles
Route::prefix('articles')->group(function(){
    Route::get('/',[ArticleController::class,'index'])->name('articles.index');
    //Show Article
    Route::get('/{slug}',[ArticleController::class,'show'])->name('articles.show');
});

//categories
Route::prefix('categories')->group(function(){
    Route::get('/',[CategoriesController::class,'index'])->name('frontend.categories.index');
});
//tags
Route::prefix('tags')->group(function(){
    Route::get('/',[TagsController::class,'index'])->name('tags.index');
});


//Routes to like Article
Route::post('/articles/{article}/likes', [Articlelikes::class, 'store'])->name('article.likes');
Route::delete('/articles/{article}/destroy', [Articlelikes::class, 'destroy'])->name('article.destroy');

//Auther articles
Route::get('auther/{user:slug}/articles',[AutherController::class,'index'])->name('auther.articles');










require __DIR__.'/auth.php';
