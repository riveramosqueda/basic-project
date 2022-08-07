<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\LogController;
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
    return view('welcome');
});


Route::get('/change_language', function (Request $request) {
    if($request->locale && in_array($request->locale, config('app.available_locales'))){
        \App::setLocale($request->locale);
        \Session::put('locale',$request->locale);
    }

    return redirect()->back();
})->name('change_language');


Route::middleware(['auth'])->group(function () {
    /*Dashboard*/
    Route::get('/dashboard', [LogController::class, 'index'])->name('dashboard');

    /*Simple translations route for JS AJAX */
    Route::get('/getTranslations',function(\Illuminate\Http\Request $request){
        $translations=[];
        foreach($request->translations as $translation){
            $translations[$translation]=trans($translation);
        }
        return response()->json($translations);
    });

    /*User related routes*/
    Route::controller(UserController::class)->prefix('users')->name('users.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::patch('/update/{id}', 'update')->name('update');
        Route::delete('/destroy/{id}', 'destroy')->name('destroy');
    });
});



require __DIR__.'/auth.php';
