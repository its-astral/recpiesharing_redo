<?php


use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('frontend.index');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/testindex', function () {
    return view('frontend.index');
});
    

Route::get('/check', function () {
    return view('frontend.login');
});

Route::get('/check2',function(){
    return view('frontend.registration');
});

Route::get('/create',function()
{
    return view('crud.create');
});

require __DIR__.'/auth.php';

Auth::routes(); 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/afterloginpage', [App\Http\Controllers\AfterLoginPage::class, 'afterloginpage'])->name('loggedin');

Route::get('/afterloginpage', function()
   {
    return view('afterloginpage.index');
   } 
)->middleware('auth');

Route::get('/about', function()
{
    return view('afterloginpage.about');
});
Route::get('/recpie', function()
{
    return view('afterloginpage.menu');
});

Route::get('/team', function()
{
    return view('afterloginpage.team');
});

Route::get('/contact', function()
{
    return view('afterloginpage.contact');
});
Route::get('/userprofile', function()
{
    return view('afterloginpage.userprofile');
});
Route::get('/create', function()
{
    return view('afterloginpage.create');
});


