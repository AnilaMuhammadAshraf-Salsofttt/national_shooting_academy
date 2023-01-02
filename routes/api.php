<?php

use App\Http\Controllers\Trainer\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['prefix' => 'trainer'], function () {


    //Trainer
    Route::post('/register', 'App\Http\Controllers\Trainer\UserController@signup');
    Route::post('/login', 'App\Http\Controllers\Trainer\AuthController@login');
    Route::post('/forgot', 'App\Http\Controllers\Trainer\AuthController@forgotPassword');
    Route::post('/verify-code', 'App\Http\Controllers\Trainer\AuthController@verifyCode');
    Route::post('/reset', 'App\Http\Controllers\Trainer\AuthController@updatePassword');
    Route::get('/get-packages', 'App\Http\Controllers\Trainer\SubscriptionController@retrievePlans');
    // Route::get('/getPackages', 'App\Http\Controllers\Trainer\SubscriptionController@showSubscription');


    Route::group(['middleware' => ['auth:api'], 'namespace' => 'App\Http\Controllers\Trainer'], function () {

        //General
        Route::post('/contactAdmin', 'GeneralController@contact_admin');
        Route::get('/sortByDate', 'GeneralController@sortByDate');
        Route::get('/notifications', 'NotificationController@allNotifications');
        Route::get('/generalData', 'GeneralController@generalData');

        //User
        Route::post('/logout', 'AuthController@logout');
        Route::get('/user', 'UserController@user');
        Route::post('/user', 'UserController@editUser');
        Route::post('/update-password', 'UserController@changepassword');

        //Package Subscription
        Route::post('/subscribe', 'SubscriptionController@processSubscription');
        Route::get('/subscriptionLog', 'SubscriptionController@allSubscriptions');
        Route::post('/toggle-recurring', 'SubscriptionController@toggle_recurring');

        //Product
        Route::get('/getProduct', 'ProductController@index');

        //License
        Route::get('/getCourseQuiz', 'LicenseController@getquiz');
        Route::post('/checkQuiz', 'LicenseController@checkQuiz');

        //Course
        Route::post('/createCourse', 'CourseController@createCourse');
        Route::get('/getCourse', 'CourseController@getCourse');
        Route::get('/getCourses', 'CourseController@getCourses');
        Route::post('/editCourse', 'CourseController@editCourse');
        Route::get('/lectureDetail', 'CourseController@lectureDetail');
        Route::get('/getEnrolledUsers', 'CourseController@getEnrolledUsers');
        Route::get('/getEnrolledUsersDetail', 'CourseController@getEnrolledUsersDetail');
        Route::get('/paymentLog', 'CourseController@paymentLog');
    });
    Route::get('/download_certificate', 'App\Http\Controllers\Trainer\LicenseController@download_certificate');
});
