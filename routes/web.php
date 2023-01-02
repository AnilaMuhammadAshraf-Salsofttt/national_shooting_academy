<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\CourseController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\PackageController;
use App\Http\Controllers\admin\PlanController;
use App\Http\Controllers\admin\TrainerController;
use App\Http\Controllers\admin\PaymentController;
use App\Http\Controllers\admin\FeedbackController;
use App\Http\Controllers\admin\NotificationController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\LicenseController;

use App\Http\Controllers\user\IndexController;
use App\Http\Controllers\user\ProductController as UserProductController;
use App\Http\Controllers\user\CartController;
use App\Http\Controllers\user\CheckoutController;
use App\Http\Controllers\user\CategoryController as UserCategoryController;
use App\Http\Controllers\user\CourseController as UserCourseController;
use App\Http\Controllers\user\NotificationController as UserNotificationController;
use App\Http\Controllers\user\PaymentController as UserPaymentController;
use App\Http\Controllers\user\LicenseController as UserLicenseController;
use App\Http\Controllers\user\OrderController;
use App\Http\Controllers\user\SubscriptionController;

use App\Http\Controllers\TrainerFront\AuthController as TrainerAuthController;
use App\Http\Controllers\TrainerFront\IndexController as TrainerIndexController;
use App\Http\Controllers\TrainerFront\SubscriptionController as TrainerSubscriptionController;
use App\Http\Controllers\TrainerFront\CourseController as TrainerCourseController;
use App\Http\Controllers\TrainerFront\PaymentController as TrainerPaymentController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('admin', 'App\Http\Controllers\admin\AdminController@index')->name('admin');
Route::post('login', 'App\Http\Controllers\admin\AdminController@auth');
Route::get('password_recovery', 'App\Http\Controllers\admin\AdminController@password_recovery');
Route::post('forgotPassword', 'App\Http\Controllers\admin\AdminController@forgotPassword');
Route::get('verifyCode/{email}', 'App\Http\Controllers\admin\AdminController@verifyCode');
Route::post('verified_code', 'App\Http\Controllers\admin\AdminController@verified_code');
Route::post('updatePassword', 'App\Http\Controllers\admin\AdminController@updatePassword');

Route::group(['middleware' => ['auth:admin']], function () {

    Route::get('/subscribe', 'App\Http\Controllers\Trainer\SubscriptionController@showSubscription');
    Route::post('/subscribe', 'App\Http\Controllers\Trainer\SubscriptionController@processSubscription');
// welcome page only for subscribed users
    Route::get('/welcome', 'App\Http\Controllers\Trainer\SubscriptionController@showWelcome')->middleware('subscribed');
    Route::get('/testing', 'App\Http\Controllers\Trainer\SubscriptionController@showSubscription');

// admin login
    Route::get('logout', 'App\Http\Controllers\admin\AdminController@logout');
    Route::get('dashboard', 'App\Http\Controllers\admin\AdminController@dashboard');
    Route::get('profile', 'App\Http\Controllers\admin\AdminController@profile');
    Route::get('edit_profile', 'App\Http\Controllers\admin\AdminController@edit_profile');

    Route::post('update_admin', 'App\Http\Controllers\admin\AdminController@update_admin');
    Route::get('edit_password', 'App\Http\Controllers\admin\AdminController@edit_password');
    Route::post('update_password', 'App\Http\Controllers\admin\AdminController@update_password');

// admin login
    Route::get('users', 'App\Http\Controllers\admin\UserController@index');
    Route::get('block_user', 'App\Http\Controllers\admin\UserController@block_user');
    Route::get('user_profile/{id}', 'App\Http\Controllers\admin\UserController@user_profile');
    Route::get('user_edit_profile/{id}', 'App\Http\Controllers\admin\UserController@user_edit_profile');
    Route::post('update_profile', 'App\Http\Controllers\admin\UserController@update_profile');
    Route::get('chnage_status_block', 'App\Http\Controllers\admin\UserController@chnage_status_block');

// Route::get('user_sub_logs', 'App\Http\Controllers\admin\SubscriptionController@user_sub_logs');

// payment
    Route::get('user_sub_logs/{id}', [PlanController::class, 'user_sub_logs']);
    Route::get('trainer_sub_logs/{id}', [PlanController::class, 'trainer_sub_logs']);
    Route::get('subscription_logs_user', [PlanController::class, 'subscription_logs_user']);
    Route::get('subscription_logs_trainer', [PlanController::class, 'subscription_logs_trainer']);
// payment

// course
    Route::get('course/{id}', 'App\Http\Controllers\admin\CourseController@course');
    Route::get('trainer_course/{id}', 'App\Http\Controllers\admin\CourseController@trainer_course');
    Route::get('course_detail/{course_id}', 'App\Http\Controllers\admin\CourseController@course_detail');
    Route::get('change_course_status', 'App\Http\Controllers\admin\CourseController@change_course_status');
    Route::get('course_log', 'App\Http\Controllers\admin\CourseController@course_log');
    Route::get('course_log_detail/{course_id}', 'App\Http\Controllers\admin\CourseController@course_log_detail');
    Route::get('course_enroll_user/{course_id}', 'App\Http\Controllers\admin\CourseController@course_enroll_user');
    Route::get('course_quiz/{course_id}', [CourseController::class, 'course_quiz']);
// course

// payment
    Route::get('user_pay_logs/{id}', [PaymentController::class, 'user_pay_logs']);
    Route::get('payment_logs', [PaymentController::class, 'payment_logs']);
    Route::get('payment_logs_course', [PaymentController::class, 'payment_logs_course']);
// payment

// trainer
    Route::get('trainer', [TrainerController::class, 'index']);
    Route::get('block_trainer_user', [TrainerController::class, 'block_trainer_user']);
    Route::get('user_trainer_profile/{id}', [TrainerController::class, 'user_trainer_profile']);
    Route::get('user_edit_trainer_profile/{id}', [TrainerController::class, 'user_edit_trainer_profile']);
    Route::post('update_trainer_profile', [TrainerController::class, 'update_trainer_profile']);
    Route::get('chnage_status_trainer_block', [TrainerController::class, 'chnage_status_trainer_block']);
// trainer

// inventory and product
    Route::get('inventory_management', [ProductController::class, 'index'])->name('inventory_management');
    Route::get('add_product', [ProductController::class, 'add_product']);
    Route::post('create_product', [ProductController::class, 'create_product'])->name('create_product');
    Route::get('view_product/{id}', [ProductController::class, 'view_product']);
    Route::get('edit_product/{id}', [ProductController::class, 'edit_product']);
    Route::get('delete_product/{id}', [ProductController::class, 'delete_product']);
    Route::post('update_product', [ProductController::class, 'update_product']);

// inventory and product


// package

    Route::get('package_management', [PackageController::class, 'index']);
    Route::get('edit_package/{id}', [PackageController::class, 'edit_package']);
    Route::post('update_package', [PackageController::class, 'update_package']);

// package


//Feedbacks
    Route::get('feedback', [FeedbackController::class, 'feedback']);
    Route::get('trainer_feedback', [FeedbackController::class, 'trainer_feedback']);
    Route::get('feedback_user_view/{id}', [FeedbackController::class, 'feedback_user_view']);
    Route::get('feedback_trainer_view/{id}', [FeedbackController::class, 'feedback_trainer_view']);
    Route::get('feedback_delete/{id}', [FeedbackController::class, 'feedback_delete']);

//Feedback

    Route::get('notifications', [NotificationController::class, 'index']);
    Route::get('read_notification/{id}', [NotificationController::class, 'read_notification']);

    Route::get('category', [CategoryController::class, 'index']);
    Route::get('category_add', [CategoryController::class, 'category_add']);
    Route::post('category_insert', [CategoryController::class, 'category_insert']);
    Route::get('category_edit/{id}', [CategoryController::class, 'category_edit']);
    Route::post('category_update', [CategoryController::class, 'category_update']);
    Route::get('category_delete/{id}', [CategoryController::class, 'category_delete']);


    Route::get('license', [LicenseController::class, 'index']);
    Route::get('license_add', [LicenseController::class, 'license_add']);
    Route::post('license_insert', [LicenseController::class, 'license_insert']);
    Route::get('license_edit/{id}', [LicenseController::class, 'license_edit']);
    Route::post('license_update', [LicenseController::class, 'license_update']);
    Route::get('license_delete/{id}', [LicenseController::class, 'license_delete']);
    Route::post('change_status', [LicenseController::class, 'change_status']);
    Route::get('license_question_delete/{id}/{page_id}', [LicenseController::class, 'license_question_delete']);
    Route::get('license_view/{id}', [LicenseController::class, 'license_view']);


});

Route::post('footer-contact-us', [\App\Http\Controllers\ContactController::class, 'footerSendMail'])->name('contact-footer');
Route::get('/', [IndexController::class, 'index']);
Route::get('/blog', [IndexController::class, 'blog'])->name('web.blog');
Route::get('user_login', [IndexController::class, 'login']);

// user recover password
Route::get('password_recovery', [IndexController::class, 'password_recovery'])->name('user.recover.password');
Route::post('forgotPassword', [IndexController::class, 'forgotPassword'])->name('user.forgot.password');
Route::get('verifyCode/{email}', [IndexController::class, 'verifyCode'])->name('user.verify.code');
Route::post('updatePassword', [IndexController::class, 'updatePassword'])->name('user.update.password');

Route::get('register_1', [IndexController::class, 'register_1']);

Route::get('register_2/{id}', [IndexController::class, 'register_2']);
Route::post('register_1_insert', [IndexController::class, 'register_1_insert']);

Route::get('register_3/{id}', [IndexController::class, 'register_3']);
Route::post('register_2_insert', [IndexController::class, 'register_2_insert']);

Route::get('register_4', [IndexController::class, 'register_4']);
Route::post('register_4_insert', [IndexController::class, 'register_4_insert']);

Route::post('user_auth', [IndexController::class, 'user_auth']);
Route::get('user_front_profile', [IndexController::class, 'user_front_profile']);
Route::get('user_front_edit_profile', [IndexController::class, 'user_front_edit_profile']);
Route::post('user_front_update', [IndexController::class, 'user_front_update']);

Route::get('user_contact', [IndexController::class, 'user_contact']);
Route::get('user_about', [IndexController::class, 'user_about']);
Route::post('user_contact_insert', [IndexController::class, 'user_contact_insert']);

Route::get('/user/license', [IndexController::class, 'license'])->name('web.license');
Route::group(['middleware' => ['auth']], function () {


    Route::get('user_front_logout', [IndexController::class, 'user_front_logout']);
    Route::get('user_front_change_password', [IndexController::class, 'user_front_change_password']);
    Route::post('user_front_update_password', [IndexController::class, 'user_front_update_password']);


    Route::get('add_to_wishlist/{product_id}', [UserProductController::class, 'add_to_wishlist']);
    Route::get('remove_to_wishlist/{product_id}', [UserProductController::class, 'remove_to_wishlist']);
    Route::get('wishlist', [UserProductController::class, 'wishlist']);

    Route::get('user_course', [UserCourseController::class, 'user_course']);
    Route::get('user_course_detail/{id}', [UserCourseController::class, 'user_course_detail']);
    Route::get('user_course_logs', [UserCourseController::class, 'user_course_logs'])->name('course.logs');
    Route::get('booked_course_view/{id}', [UserCourseController::class, 'booked_course_view']);
    Route::get('booked_course_detail/{id}', [UserCourseController::class, 'booked_course_detail']);
    Route::get('quiz_view/{id}', [UserCourseController::class, 'quiz_view'])->name('quiz.view');

    Route::post('quiz_submit', [UserCourseController::class, 'quiz_submit'])->name('quiz.submit');

    Route::get('htmlpdf',[UserCourseController::class, 'htmlPDF']);
    Route::post('generatePDF',[UserCourseController::class,'generatePDF'])->name('generate.certificate');
    Route::post('syllabi_mark_completed', [UserCourseController::class, 'syllabi_mark_completed'])->name('syllabi.complete.mark');

    Route::get('notification', [UserNotificationController::class, 'notification']);
    Route::get('read_notification/{id}', [UserNotificationController::class, 'read_notification']);

    Route::get('user_payment_logs', [UserPaymentController::class, 'payment_logs'])->name('pay.logs');
    Route::post('book_course', [UserPaymentController::class, 'book_course'])->name('course.book');
    Route::post('license_book', [UserPaymentController::class, 'license_book'])->name('license.book');

    Route::get('user_license', [UserLicenseController::class, 'user_license'])->name('license.view');
    Route::get('user_license_detail/{id}', [UserLicenseController::class, 'user_license_detail']);
    Route::get('user_license_logs', [UserLicenseController::class, 'user_license_logs'])->name('license.logs');
    Route::get('booked_license_view/{id}', [UserLicenseController::class, 'booked_license_view'])->name('license.booked');
    Route::get('license_quiz_view/{id}', [UserLicenseController::class, 'license_quiz_view']);

    Route::get('user_order_logs', [OrderController::class, 'user_order_logs'])->name('order.logs');
    Route::get('user_order_detail/{id}', [OrderController::class, 'user_order_detail'])->name('order.detail');

    Route::get('user_subscription_logs', [SubscriptionController::class, 'user_subscription_logs'])->name('subscription.logs');

    Route::post('subscription_recurring', [SubscriptionController::class, 'subscription_recurring'])->name('subscription.recurring');


});

Route::get('view_cart', [CartController::class, 'view_cart']);
Route::post('addToCart', [CartController::class, 'addToCart']);
Route::post('updateCart', [CartController::class, 'updateCart']);
Route::post('removeCart', [CartController::class, 'removeCart']);
Route::post('clearAllCart', [CartController::class, 'clearAllCart']);

Route::get('checkout', [CheckoutController::class, 'checkout']);
Route::post('checkout_insert', [CheckoutController::class, 'checkout_insert']);
Route::get('thanks', [CheckoutController::class, 'thanks']);


Route::get('user_category', [UserCategoryController::class, 'user_category']);
Route::get('user_inner_category/{id}', [UserCategoryController::class, 'user_inner_category']);
Route::get('user_inner_category_filter', [UserCategoryController::class, 'user_inner_category_filter']);
Route::get('user_inner_product/{id}/{category_id}', [UserCategoryController::class, 'user_inner_product']);
Route::post('filter_product', [UserCategoryController::class, 'filter_product']);
Route::get('user_inner_product/image',[UserCategoryController::class, 'getColorImage'])->name('color.image');

Route::prefix('trainer')->group(function () {
    Route::group(['middleware' => ['auth']], function () {
        Route::get('home', [TrainerIndexController::class, 'index']);
        Route::get('trainer', [TrainerAuthController::class, 'index']);

        Route::get('trainer_register_1', [TrainerAuthController::class, 'trainer_register_1'])->name('trainer.register');

        Route::get('trainer_register_2/{id}', [TrainerAuthController::class, 'trainer_register_2']);
        Route::post('trainer_register_1_insert', [TrainerAuthController::class, 'trainer_register_1_insert']);

        Route::get('trainer_register_3/{id}', [TrainerAuthController::class, 'trainer_register_3']);
        Route::post('trainer_register_2_insert', [TrainerAuthController::class, 'trainer_register_2_insert']);

        Route::get('trainer_register_4', [TrainerAuthController::class, 'trainer_register_4']);
        Route::post('trainer_register_4_insert', [TrainerAuthController::class, 'trainer_register_4_insert']);

        Route::post('trainer_auth', [TrainerAuthController::class, 'trainer_auth']);
        Route::get('trainer_front_profile', [TrainerAuthController::class, 'trainer_front_profile']);
        Route::get('trainer_front_edit_profile', [TrainerAuthController::class, 'trainer_front_edit_profile']);
        Route::post('trainer_front_update', [TrainerAuthController::class, 'trainer_front_update']);

        Route::get('trainer_subscription_logs', [TrainerSubscriptionController::class, 'trainer_subscription_logs']);
        Route::get('get_package', [TrainerSubscriptionController::class, 'get_package']);
        Route::post('pay_for_package', [TrainerSubscriptionController::class, 'pay_for_package']);


        Route::get('trainer_course_logs', [TrainerCourseController::class, 'trainer_course_logs']);
        Route::get('course-trainer/{id?}', [TrainerCourseController::class, 'course_add'])->name('course.create');
        Route::post('course-insert', [TrainerCourseController::class, 'course_insert'])->name('course.course_insert');
        Route::post('course-quiz-remove', [TrainerCourseController::class, 'quiz_question_remove'])->name('course.quiz_question_remove');


        Route::post('course-feature-insert/{id}', [TrainerCourseController::class, 'course_feature_insert'])->name('course.feature_insert');
        Route::post('course-feature-remove', [TrainerCourseController::class, 'course_feature_remove'])->name('course.feature_remove');

        Route::post('course-lecture-insert/{id}', [TrainerCourseController::class, 'course_lecture_insert'])->name('course.lecture_insert');
        Route::post('course-file-insert/{id}', [TrainerCourseController::class, 'course_file_insert'])->name('course.file_insert');

        Route::post('course-image-insert/{id}', [TrainerCourseController::class, 'course_image_insert'])->name('course.image_insert');

        Route::post('course-video-remove', [TrainerCourseController::class, 'course_video_remove'])->name('course.video_remove');
        Route::post('course-lecture-remove', [TrainerCourseController::class, 'course_lecture_remove'])->name('course.lecture_remove');

        Route::post('course-file-remove', [TrainerCourseController::class, 'course_file_remove'])->name('course.file_remove');


        Route::post('course-quiz-insert/{id}', [TrainerCourseController::class, 'course_quiz_insert'])->name('course.quiz_insert');


        Route::get('course-enrolled-users/{id}', [TrainerCourseController::class, 'course_enrolled_users'])->name('course.enrolled_user');
        Route::get('course-enrolled-users-details/{id}', [TrainerCourseController::class, 'course_enrolled_users_details'])->name('course.enrolled_user_detail');
        Route::get('course-view-quiz/{id}', [TrainerCourseController::class, 'course_view_quiz'])->name('course.view_quiz');

        Route::get('pay_logs', [TrainerPaymentController::class, 'index']);


    });
});
