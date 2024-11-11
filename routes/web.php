<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UsersController ;
use App\Http\Controllers\Admin\EventsAdminController ;
use App\Http\Controllers\Organisateur\EventsController ;
use App\Http\Controllers\Organisateur\ProfileController ;
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
    return view('welcome2');
})->name('home');

Route::middleware(['auth','admin'])->group (function(){
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    });
    
    Route::controller(UsersController::class )->group(function(){
        Route::get('/users', 'show')->name('showusers');
    }) ;
    Route::controller(UsersController::class )->group(function(){
        Route::delete('/users/delete/{id}', 'deleteUser')->name('deleteUser');
    }) ;
    Route::controller(EventsAdminController::class )->group(function(){
        Route::get('/admin/dashboard/events', 'getAll')->name('showALL');
    }) ;
    Route::controller(EventsAdminController::class )->group(function(){
        Route::get('/admin/dashboard/archive', 'adminarchive')->name('historiqueA');
    }) ;
    Route::controller(EventsAdminController::class )->group(function(){
        Route::get('/admin/dashboard/downloadpdf', 'downloadPdf')->name('downloadAllPdf');
    }) ;
   
});
Route::middleware(['auth','client'])->group (function(){
   
});
Route::middleware(['auth','organisateur'])->group (function(){
    Route::controller(EventsController::class )->group(function(){
        Route::get('/organisateur/dashboard', 'dashboard');
    }) ;
    Route::controller(EventsController::class )->group(function(){
        Route::get('/organisateur/dashboard/index', 'indexEvents')->name('events.index');
    }) ;
    Route::controller(ProfileController::class )->group(function(){
        Route::get('/organisateur/dashboard/profile/', 'profile')->name('profile');
    }) ;
    Route::controller(EventsController::class )->group(function(){
        Route::get('/organisateur/dashboard/myEvents', 'myEvents')->name('MyEvents');
    }) ;
    Route::controller(EventsController::class )->group(function(){
        Route::get('/organisateur/dashboard/archive', 'archive')->name('historique');
    }) ;
    Route::controller(EventsController::class )->group(function(){
        Route::get('/organisateur/dashboard/create', 'create')->name('create');
    }) ;
    Route::controller(EventsController::class )->group(function(){
        Route::post('/storeEvent','store')->name('Eventstore') ;
    }) ;
    Route::controller(EventsController::class )->group(function(){
        Route::get('/editEvent/{id}','edit')->name('editEvent') ;
    }) ;
    Route::controller(EventsController::class )->group(function(){
        Route::put('/updateEvent/{id}','update')->name('updateEvent') ;
    }) ;
    Route::controller(ProfileController::class )->group(function(){
        Route::put('/updateProfile/{id}','updateProfile')->name('updateProfil') ;
    }) ;
    Route::controller(EventsController::class )->group(function(){
        Route::get('/destroyEvent/{id}','destroy')->name('Eventdestroy') ;
    }) ;




});

// Fallback route
// Route::fallback(function () {
//     return view('errors.404'); // You can customize the 404 view or redirect to a specific page
// });


require __DIR__.'/auth.php';
