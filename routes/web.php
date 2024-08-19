<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\EmailVerificationController;


use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\BlogController as FrontendBlogController;
use App\Http\Controllers\Frontend\SingleController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\ClientController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\EducationController;
use App\Http\Controllers\Backend\ExperienceController;
use App\Http\Controllers\Backend\PortfolioController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\SkillController;
use App\Http\Controllers\Backend\FunController;
use App\Http\Controllers\Backend\FooterController;
use App\Http\Controllers\Backend\BlogController as BackendBlogController;
use App\Http\Controllers\Backend\SocialController;

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

// Authentication Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Password Reset Routes
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

// Email Verification Routes
Route::get('email/verify', [EmailVerificationController::class, 'show'])->name('verification.notice');
Route::get('email/verify/{id}/{hash}', [EmailVerificationController::class, 'verify'])->name('verification.verify');
Route::post('email/resend', [EmailVerificationController::class, 'resend'])->name('verification.resend');

// Admin Routes
Route::group([
    'prefix' => 'admin',
    'as' => 'admin.'
], function () {
    Route::get('/', [App\Http\Controllers\Backend\HomeController::class, 'index'])->name('home');

    // Blog routes
    Route::get('/blog', [BackendBlogController::class, 'index'])->name('blog.index');
    Route::post('/blog', [BackendBlogController::class, 'store'])->name('blog.store');
    Route::get('/blog/create', [BackendBlogController::class, 'create'])->name('blog.create');
    Route::get('/blog/edit/{blog}', [BackendBlogController::class, 'edit'])->name('blog.edit');
    Route::put('/blog/{blog}', [BackendBlogController::class, 'update'])->name('blog.update');
    Route::delete('/blog/{blog}', [BackendBlogController::class, 'destroy'])->name('blog.destroy');


    // Route::get('/port-client-re', [ClientController::class, 'index']);

    // Resource routes for ClientController
    Route::get('port-client-re', [ClientController::class, 'index'])->name('port-client-re.index');
    Route::post('port-client-re', [ClientController::class, 'store'])->name('port-client-re.store');
    Route::get('port-client-re/{clientReview}/edit', [ClientController::class, 'edit'])->name('port-client-re.edit');
    Route::put('port-client-re/{clientReview}', [ClientController::class, 'update'])->name('port-client-re.update');
    Route::delete('port-client-re/{clientReview}', [ClientController::class, 'destroy'])->name('port-client-re.destroy');




    // Contact Routes
    Route::get('/contact-page', [ContactController::class, 'index'])->name('contact-page');
    Route::post('/contact-page', [ContactController::class, 'store'])->name('contact.store');
    Route::get('/contact-page/edit/{contact}', [ContactController::class, 'edit'])->name('contact.edit');
    Route::put('/contact-page/{contact}', [ContactController::class, 'update'])->name('contact.update');
    Route::delete('/contact-page/{contact}', [ContactController::class, 'destroy'])->name('contact.destroy');

    // Route::get('/about', [AboutController::class, 'index']);

    Route::get('/about', [AboutController::class, 'index'])->name('about');
    Route::post('/about', [AboutController::class, 'store'])->name('about.store');
    Route::get('/about/edit/{about}', [AboutController::class, 'edit'])->name('about.edit');
    Route::put('/about/{about}', [AboutController::class, 'update'])->name('about.update');
    Route::delete('/about/{about}', [AboutController::class, 'destroy'])->name('about.destroy');


    // Route::get('/education', [EducationController::class, 'index']);

    // Education Routes
    Route::get('/education', [EducationController::class, 'index'])->name('admin.education');
    Route::post('/education', [EducationController::class, 'store'])->name('admin.education.store');
    Route::get('/education/edit/{education}', [EducationController::class, 'edit'])->name('admin.education.edit');
    Route::put('/education/{education}', [EducationController::class, 'update'])->name('admin.education.update');
    Route::delete('/education/{education}', [EducationController::class, 'destroy'])->name('admin.education.destroy');


    // Route::get('/experience', [ExperienceController::class, 'index']); 

    // Experience Routes
    Route::get('/experience', [ExperienceController::class, 'index'])->name('experience.index');
    Route::post('/experience', [ExperienceController::class, 'store'])->name('experience.store');
    Route::get('/experience/edit/{experience}', [ExperienceController::class, 'edit'])->name('experience.edit');
    Route::put('/experience/{experience}', [ExperienceController::class, 'update'])->name('experience.update');
    Route::delete('/experience/{experience}', [ExperienceController::class, 'destroy'])->name('experience.destroy');




    // Route::get('/portfolio-m', [PortfolioController::class, 'index']);

     // Portfolio Routes
    Route::get('/portfolio-m', [PortfolioController::class, 'index'])->name('portfolio.index');
    Route::post('/portfolio-m', [PortfolioController::class, 'store'])->name('portfolio.store');
    Route::get('/portfolio-m/edit/{portfolio}', [PortfolioController::class, 'edit'])->name('portfolio.edit');
    Route::put('/portfolio-m/{portfolio}', [PortfolioController::class, 'update'])->name('portfolio.update');
    Route::delete('/portfolio-m/{portfolio}', [PortfolioController::class, 'destroy'])->name('portfolio.destroy');


    // Route::get('/service', [ServiceController::class, 'index']);
    Route::get('service', [ServiceController::class, 'index'])->name('service.index');
    Route::get('service/create', [ServiceController::class, 'create'])->name('service.create');
    Route::post('service', [ServiceController::class, 'store'])->name('service.store');
    Route::get('service/{service}/edit', [ServiceController::class, 'edit'])->name('service.edit');
    Route::put('service/{service}', [ServiceController::class, 'update'])->name('service.update');
    Route::delete('service/{service}', [ServiceController::class, 'destroy'])->name('service.destroy');




    // Route::get('/slider', [SliderController::class, 'index']);
    // Slider Routes
    Route::get('/slider', [SliderController::class, 'index'])->name('slider.index');
    Route::post('/slider', [SliderController::class, 'store'])->name('slider.store');
    Route::get('/slider/edit/{slider}', [SliderController::class, 'edit'])->name('slider.edit');
    Route::put('/slider/{slider}', [SliderController::class, 'update'])->name('slider.update');
    Route::delete('/slider/{slider}', [SliderController::class, 'destroy'])->name('slider.destroy');



    // Route::get('/skill', [SkillController::class, 'index']);

    Route::get('/skill', [SkillController::class, 'index'])->name('skill.index');
    Route::post('/skill', [SkillController::class, 'store'])->name('skill.store');
    Route::get('/skill/edit/{skill}', [SkillController::class, 'edit'])->name('skill.edit');
    Route::put('/skill/{skill}', [SkillController::class, 'update'])->name('skill.update');
    Route::delete('/skill/{skill}', [SkillController::class, 'destroy'])->name('skill.destroy');


    // Route::get('/fun', [FunController::class, 'index']);

    Route::get('/fun', [FunController::class, 'index'])->name('fun.index');
    Route::post('/fun', [FunController::class, 'store'])->name('fun.store');
    Route::get('/fun/edit/{id}', [FunController::class, 'edit'])->name('fun.edit');
    Route::put('/fun/{id}', [FunController::class, 'update'])->name('fun.update');
    Route::delete('/fun/{id}', [FunController::class, 'destroy'])->name('fun.destroy');




    // Social Media Routes
    Route::get('/social-media', [SocialController::class, 'index'])->name('social-media');
    Route::post('/social-media', [SocialController::class, 'store'])->name('social-media.store');
    Route::get('/social-media/edit/{socialMedia}', [SocialController::class, 'edit'])->name('social-media.edit');
    Route::put('/social-media/{socialMedia}', [SocialController::class, 'update'])->name('social-media.update');
    Route::delete('/social-media/{socialMedia}', [SocialController::class, 'destroy'])->name('social-media.destroy');
});

// Frontend Routes
Route::get('/', [App\Http\Controllers\Frontend\HomeController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/blog', [FrontendBlogController::class, 'index']);
Route::get('/single', [SingleController::class, 'index']);
