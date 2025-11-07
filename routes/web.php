<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\OfferController;
use App\Http\Controllers\Admin\RoleController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/all_cache', function() {

    Artisan::call('cache:clear');
    Artisan::call('optimize');
    Artisan::call('route:cache');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    return '<h1>All cache cleared</h1>';
});

//Clear Cache facade value:
Route::get('/clear_cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:
Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route_cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route_clear', function() {
    $exitCode = Artisan::call('route:clear');
    return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view_clear', function() {
    $exitCode = Artisan::call('view:clear');
    return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config_cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/active-projects', [HomeController::class, 'projects'])->name('active.projects');
Route::get('/upcoming-projects', [HomeController::class, 'upcoming_projects'])->name('upcoming.projects');
Route::get('/project/details/{id}', [HomeController::class, 'project_detail'])->name('project_detail');
Route::get('/research-and-development', [HomeController::class, 'researches'])->name('researches');
Route::get('/research/details/{id}', [HomeController::class, 'research_detail'])->name('research_detail');
Route::get('/awards', [HomeController::class, 'awards'])->name('awards');
Route::get('/award/details/{id}', [HomeController::class, 'award_detail'])->name('award_detail');
Route::get('/competitions', [HomeController::class, 'competitions'])->name('competitions');
Route::get('/competition/details/{id}', [HomeController::class, 'competition_detail'])->name('competition_detail');

Route::get('/workshops/upcoming', [HomeController::class, 'workshops_upcoming'])->name('workshops.upcoming');
Route::get('/workshops/completed', [HomeController::class, 'workshops_completed'])->name('workshops.completed');
Route::get('/workshop/details/{id}', [HomeController::class, 'workshop_detail'])->name('workshop_detail');
Route::get('/events', [HomeController::class, 'events'])->name('events');
Route::get('/event/details/{id}', [HomeController::class, 'event_detail'])->name('event_detail');
Route::get('/campaigns', [HomeController::class, 'campigns'])->name('campigns');
Route::get('/campaign/details/{id}', [HomeController::class, 'campign_detail'])->name('campign_detail');
Route::get('/media', [HomeController::class, 'media'])->name('media');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/urvi-kosa', [HomeController::class, 'urvi_kosa'])->name('urvi_kosa');

Route::get('/test', [HomeController::class, 'test'])->name('test');

// Administrator Dashboard Routes --Start--
Auth::routes(['login' => false]);
Route::prefix('admin')->group(function () {
    Route::get('/login', 'Auth\LoginController@showLoginForm');
    Route::post('/login', 'Auth\LoginController@login')->name('login');
});

Route::get('/admin', ['uses'=> 'Admin\HomeController@index'])->middleware('auth')->name('admin');
Route::group(['as'=>'admin.', 'middleware'=>'auth', 'prefix'=>'admin', 'namespace'=>'Admin'], function() {
    Route::get('/dashboard', ['uses'=> 'HomeController@index'])->name('dashboard');

    Route::group(['prefix'=>'projects', 'as'=>'projects.'], function() {
        Route::get('/',['as' => 'index', 'uses' => 'ProjectController@index']);
        Route::get('/create',['as' => 'create', 'uses' => 'ProjectController@create']);
        Route::post('/store',['as' => 'store', 'uses' => 'ProjectController@store']);
        Route::get('/edit/{id}',['as' => 'edit', 'uses' => 'ProjectController@edit']);
        Route::put('/update',['as' => 'update', 'uses' => 'ProjectController@update']);
        Route::delete('/destroy/{id}',['as' => 'destroy', 'uses' => 'ProjectController@destroy']);
        Route::get('/change-status/{id}',['as' => 'changeStatus', 'uses' => 'ProjectController@changeStatus']);
    });

    Route::group(['prefix'=>'researches', 'as'=>'researches.'], function() {
        Route::get('/',['as' => 'index', 'uses' => 'ResearchController@index']);
        Route::get('/create',['as' => 'create', 'uses' => 'ResearchController@create']);
        Route::post('/store',['as' => 'store', 'uses' => 'ResearchController@store']);
        Route::get('/edit/{id}',['as' => 'edit', 'uses' => 'ResearchController@edit']);
        Route::put('/update',['as' => 'update', 'uses' => 'ResearchController@update']);
        Route::delete('/destroy/{id}',['as' => 'destroy', 'uses' => 'ResearchController@destroy']);
        Route::get('/change-status/{id}',['as' => 'changeStatus', 'uses' => 'ResearchController@changeStatus']);
    });

    Route::group(['prefix'=>'awards', 'as'=>'awards.'], function() {
        Route::get('/',['as' => 'index', 'uses' => 'AwardController@index']);
        Route::get('/create',['as' => 'create', 'uses' => 'AwardController@create']);
        Route::post('/store',['as' => 'store', 'uses' => 'AwardController@store']);
        Route::get('/edit/{id}',['as' => 'edit', 'uses' => 'AwardController@edit']);
        Route::put('/update',['as' => 'update', 'uses' => 'AwardController@update']);
        Route::delete('/destroy/{id}',['as' => 'destroy', 'uses' => 'AwardController@destroy']);
        Route::get('/change-status/{id}',['as' => 'changeStatus', 'uses' => 'AwardController@changeStatus']);
    });

    Route::group(['prefix'=>'competitions', 'as'=>'competitions.'], function() {
        Route::get('/',['as' => 'index', 'uses' => 'CompetitionController@index']);
        Route::get('/create',['as' => 'create', 'uses' => 'CompetitionController@create']);
        Route::post('/store',['as' => 'store', 'uses' => 'CompetitionController@store']);
        Route::get('/edit/{id}',['as' => 'edit', 'uses' => 'CompetitionController@edit']);
        Route::put('/update',['as' => 'update', 'uses' => 'CompetitionController@update']);
        Route::delete('/destroy/{id}',['as' => 'destroy', 'uses' => 'CompetitionController@destroy']);
        Route::get('/change-status/{id}',['as' => 'changeStatus', 'uses' => 'CompetitionController@changeStatus']);
    });

    Route::group(['prefix'=>'events', 'as'=>'events.'], function() {
        Route::get('/',['as' => 'index', 'uses' => 'EventController@index']);
        Route::get('/create',['as' => 'create', 'uses' => 'EventController@create']);
        Route::post('/store',['as' => 'store', 'uses' => 'EventController@store']);
        Route::get('/edit/{id}',['as' => 'edit', 'uses' => 'EventController@edit']);
        Route::put('/update',['as' => 'update', 'uses' => 'EventController@update']);
        Route::delete('/destroy/{id}',['as' => 'destroy', 'uses' => 'EventController@destroy']);
        Route::get('/change-status/{id}',['as' => 'changeStatus', 'uses' => 'EventController@changeStatus']);
    });

    Route::group(['prefix'=>'medias', 'as'=>'medias.'], function() {
        Route::get('/',['as' => 'index', 'uses' => 'MediaController@index']);
        Route::get('/create',['as' => 'create', 'uses' => 'MediaController@create']);
        Route::post('/store',['as' => 'store', 'uses' => 'MediaController@store']);
        Route::get('/edit/{id}',['as' => 'edit', 'uses' => 'MediaController@edit']);
        Route::put('/update',['as' => 'update', 'uses' => 'MediaController@update']);
        Route::delete('/destroy/{id}',['as' => 'destroy', 'uses' => 'MediaController@destroy']);
        Route::get('/change-status/{id}',['as' => 'changeStatus', 'uses' => 'MediaController@changeStatus']);
    });

    Route::group(['prefix'=>'users', 'as'=>'users.'], function() {
        Route::get('/',['as' => 'index', 'uses' => 'UserController@index']);
        Route::get('/create',['as' => 'create', 'uses' => 'UserController@create']);
        Route::post('/store',['as' => 'store', 'uses' => 'UserController@store']);
        Route::get('/edit/{id}',['as' => 'edit', 'uses' => 'UserController@edit']);
        Route::put('/update',['as' => 'update', 'uses' => 'UserController@update']);
        Route::delete('/destroy/{id}',['as' => 'destroy', 'uses' => 'UserController@destroy']);
        Route::get('/change-status/{id}',['as' => 'changeStatus', 'uses' => 'UserController@changeStatus']);
    });


    Route::resource('/roles',RoleController::class);

    Route::group(['prefix'=>'settings', 'as'=>'settings.'], function() {
        Route::get('/',['as' => 'index', 'uses' => 'SettingsController@index']);
        Route::put('/general',['as' => 'update.general', 'uses' => 'SettingsController@update']);
        Route::get('/password/change',['as' => 'change.password', 'uses' => 'ChangePasswordController@edit']);
        Route::put('/password/update',['as' => 'update.password', 'uses' => 'ChangePasswordController@update']);
        Route::resource('/delivery-charge', 'DeliveryChargeController');
        Route::resource('/tax-types', 'TaxtypeController');
    });

});

// Administrator Dashboard Routes --End--










Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index1'])->name('index1');

//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

#Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');



Route::get('/test', [App\Http\Controllers\HomeController::class, 'test'])->name('test');


