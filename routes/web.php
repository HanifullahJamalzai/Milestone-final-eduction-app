<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\CommentController;
use App\Http\Controllers\admin\CourseController;
use App\Http\Controllers\admin\TrainerController;
use App\Http\Controllers\admin\WCMController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\LogoutController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\auth\ResetPasswordController;
use App\Http\Controllers\auth\VerifyController;
use App\Http\Controllers\landing\LandingController;
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

Route::group(['middleware' => ['settingMiddleware', 'LanguageChanger']], function(){
    Route::get('/', [LandingController::class, 'index'])->name('landing.index');
    Route::get('/about', [LandingController::class, 'about'])->name('landing.about');
    Route::get('/contact', [LandingController::class, 'contact'])->name('landing.contact');
    Route::get('/course', [LandingController::class, 'course'])->name('landing.course');
    Route::get('/event', [LandingController::class, 'event'])->name('landing.event');
    Route::get('/trainer', [LandingController::class, 'trainer'])->name('landing.trainer');
    Route::get('/course-detail/{id}/{slug}', [LandingController::class, 'courseDetail'])->name('courseDetail');
    
    Route::get('/language/{language}', function($language){
        // app()->setLocale($language);
        session()->put('language', $language);
        return back();
    })->name('language');
});


Route::middleware(['guest'])->group(function(){
    Route::get('/login', [LoginController::class, 'index'])->name('login.index');
    Route::post('/login', [LoginController::class, 'login'])->name('login');
    Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
    Route::post('/register/store', [RegisterController::class, 'register'])->name('register');
    Route::get('verify/{token}', [VerifyController::class, 'verify']);
    Route::get('/reset', [ResetPasswordController::class, 'index'])->name('reset.index');
    Route::post('/resetEmail', [ResetPasswordController::class, 'resetEmail'])->name('reset.email');
    Route::get('/reset/{token}', [ResetPasswordController::class, 'resetToken']);
    Route::post('/resetSubmit', [ResetPasswordController::class, 'resetSubmit'])->name('reset.submit');
});




// Route::prefix('admin')->group(function () {

//     Route::middleware(['auth'])->group(function () {

//         Route::resource('wcm', WCMController::class);
//         Route::resource('trainer', TrainerController::class);
    
//     });  

// });


Route::get('/logout', [LogoutController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index')->middleware('auth');

// Route::get('/wcm', [WCMController::class, 'index'])->name('wcm')->middleware('auth');
// Route::get('/wcm/create', [WCMController::class, 'create'])->name('wcm.create')->middleware('auth');
// Route::post('/wcm/store', [WCMController::class, 'store'])->name('wcm.store')->middleware('auth');
// Route::delete('/wcm/{wcm}/delete', [WCMController::class, 'destroy'])->name('wcm.delete')->middleware('auth');
// Route::get('/wcm/{wcm}/edit', [WCMController::class, 'edit'])->name('wcm.edit')->middleware('auth');
// Route::put('/wcm/{wcm}/update', [WCMController::class, 'update'])->name('wcm.update')->middleware('auth');

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function(){
    Route::resource('wcm', WCMController::class);
    Route::post('trainer/search', [TrainerController::class, 'search'])->name('trainer.search');
    Route::resource('trainer', TrainerController::class);
    Route::post('course/search', [CourseController::class, 'search'])->name('course.search');
    Route::get('/course/trash', [CourseController::class, 'trash'])->name('course.trash');
    Route::get('/course/{course}/restore', [CourseController::class, 'restore'])->name('course.restore');
    Route::get('/course/{course}/forcedelete', [CourseController::class, 'forcedelete'])->name('course.forcedelete');
    Route::resource('course', CourseController::class);
    Route::post('/comment/store/{courseId}', [CommentController::class, 'storeComment'])->name('storeComment');
    Route::get('/comment/{id}/delete', [CommentController::class, 'comment_destroy'])->name('comment.destroy');

});






