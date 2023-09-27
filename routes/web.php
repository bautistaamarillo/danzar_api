<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TutorController;
use App\Models\Payment;


Route::get('/', function () {
    return view('welcome');
});

/////////CORS, TESTING BAUTISTA////////////////////////////////////////
//  function headerCors ( $response ){
//      $response->header('Access-Control-Allow-Origin', '*');
//     $response->header('Access-Control-Allow-Methods', 'GET');
//     $response->header('Access-Control-Allow-Headers', 'Content-Type');
//  }
///////////////////////////////////////////////////////////////////////

//TESTING BAUTISTA.
Route::get('/paymentjson',function (){
    $payment = Payment::all();
    $response = response()->json($payment);
    headerCors($response);
    return $response;
})->name('paymentjson'); 

Route::get('/token',function() {
   
    $response = response()->json($token);
    headerCors($response);
    return $response;
    // return csrf_token();
});

Route::get('/token',function() {
    $response = response()->json();
    headerCors($response);
    return $response;
   
});

Route::resource('categories', CategoryController::class);
Route::resource('items', ItemController::class);
///////////////////////////////////////////////////////////////////////

//TESTING GIANELLA.


Route::resource('students', StudentController::class);

///////////////////////////////////////////////////////////////////////
Route::resource('tutors', TutorController::class);
Route::resource('settings', SettingController::class);
