<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CategoryController;


Route::get('/', function () {
    return view('welcome');
});

/////////CORS, TESTING BAUTISTA////////////////////////////////////////
function headerCors ( $response ){
    $response->header('Access-Control-Allow-Origin', '*');
    $response->header('Access-Control-Allow-Methods', 'GET');
    $response->header('Access-Control-Allow-Headers', 'Content-Type');
}
///////////////////////////////////////////////////////////////////////

//TESTING BAUTISTA.
Route::get('/paymentjson',function (){
    $payment = Payment::all();
    $response = response()->json($payment);
    headerCors($response);
    return $response;
})->name('paymentjson'); 

Route::get('/token',function() {
    return csrf_token();
});

Route::resource('categories', CategoryController::class);
///////////////////////////////////////////////////////////////////////