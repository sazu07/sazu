<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\AdvertiserController;
use App\Http\Controllers\Website\AdformatsController;
use App\Http\Controllers\Website\CookiesController;
use App\Http\Controllers\Website\PublishersController;
use App\Http\Controllers\Website\LegalController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\PortfolioImageController;


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

Route::get('/', [HomeController::class, 'index']);
Route::get('advertiser', [AdvertiserController::class, 'index']);
Route::get('adformats', [AdformatsController::class, 'index']);
Route::get('publishers', [PublishersController::class, 'index']);
Route::get('legal', [LegalController::class, 'index']);
Route::get('cookies', [CookiesController::class, 'index']);


Route::group(['middleware' => ['auth']], function(){
 
   Route::get('master', [AdminController::class, 'index']);
   Route::resource('user', UserController::class);
   Route::resource('profile', ProfileController::class);
   Route::resource('feature', FeatureController::class);
   Route::resource('portfolio', PortfolioController::class);
   Route::resource('portfolioImage', PortfolioImageController::class);


});

