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

use App\Mail\CustomerInvitation;

Route::get('/email', function () {
    return new CustomerInvitation("123");
});


// Route::get('/', function () {
//     return redirect('/due-diligence-staging');
// });