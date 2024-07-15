<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    authController,
    fetchController,
    faqController,
    notifyController,
};

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/ 

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::put('/change_password', [AuthController::class, 'newPassword']);
Route::post('/me', [AuthController::class, 'me']);


Route::group(['middleware' => ['jwt.verify']], function() {

    Route::get('/api_list', [fetchController::class, 'index']);

    Route::get('/onboarding/{key?}', [fetchController::class, 'getOnboarding']);
    Route::get('/call/{key?}', [fetchController::class, 'getCall']);
    Route::get('/home/{key?}', [fetchController::class, 'getHome']);
    Route::get('/loading_screen/{key?}', [fetchController::class, 'getLoadingScreen']);
    Route::get('/menu_settings/{key?}', [fetchController::class, 'getMenuSettings']);
    Route::get('/notification/{key?}', [fetchController::class, 'getNotification']);
    Route::get('/packages/{key?}', [fetchController::class, 'getPackages']);
    Route::get('/recharge/{key?}', [fetchController::class, 'getRecharge']);
    Route::get('/sign_in_forgot_password/{key?}', [fetchController::class, 'getSignInFp']);
    Route::get('/sign_up/{key?}', [fetchController::class, 'getSignUp']);
    Route::get('/transaction_history/{key?}', [fetchController::class, 'getTransactionHistory']);
    Route::get('/vas/{key?}', [fetchController::class, 'getVas']);

    Route::get('/search_faq/{title?}', [faqController::class, 'fetchData']);
    Route::post('/insert_faq', [faqController::class, 'insertData']);
    Route::put('/update_faq', [faqController::class, 'updateData']);

    Route::get('/search_info/{title?}', [notifyController::class, 'fetchData']);
    Route::post('/insert_info', [notifyController::class, 'insertData']);
    Route::put('/update_info', [notifyController::class, 'updateData']);

});
