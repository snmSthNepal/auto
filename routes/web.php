<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\Auth\Access\Gate;

//Load Service and Evaluate Forms
    Route::get('/service', [App\Http\Controllers\ServiceController::class, 'loadServicePage'])->name('service');
    Route::get('/evaluate', [App\Http\Controllers\EvaluateController::class, 'loadEvaluatePage'])->name('evaluate');

//SuperAdmin Backend THIS SHOOULD BE SAME FOR BUSINESS ACCOUNTS AS WELL
    Route::get('/superAdmin', [App\Http\Controllers\AdminController::class, 'loadAdminPage'])->name('superAdmin');
    Route::get('/evaluateRecord', [App\Http\Controllers\AdminController::class, 'loadEvaluateRecord'])->name('evaluateRecord');
    Route::get('/servicingRecord', [App\Http\Controllers\AdminController::class, 'loadServicingRecord'])->name('servicingRecord');
    Route::get('/validateShowroom', [App\Http\Controllers\ShowroomController::class, 'loadValidationPage'])->name('validationPage');
    
//Business Backend homepage
    Route::get('/businessDashboard', [App\Http\Controllers\AdminController::class, 'loadAdminPage'])->name('businessDashboard');
    Route::get('/getShowroom', [App\Http\Controllers\ShowroomController::class, 'loadShowroomPage'])->name('showroomPage');

//User Backend
    Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'loadDashboard'])->name('dashboard');
    Route::get('/userEvaluate', [App\Http\Controllers\AdminController::class, 'loadUserEvaluate'])->name('userEvaluate');
    Route::get('/userService', [App\Http\Controllers\AdminController::class, 'loadUserService'])->name('userService');

//Mail Getters
    Route::get('/sendEvaluateMail', [App\Http\Controllers\MailController::class, 'sendEvaluateMail'])->name('sendEvaluateMail');
    Route::get('/sendServiceMail', [App\Http\Controllers\MailController::class, 'sendServiceMail'])->name('sendServiceMail');

//Post Requests
    Route::post('/newServicing', 'App\Http\Controllers\ServiceController@create')->name('newServicing'); //Add new Service
    Route::post('/newEvaluation', 'App\Http\Controllers\EvaluateController@create')->name('newEvaluation'); //Add new Evaluation

    Route::post('/replyEvaluation', 'App\Http\Controllers\EvaluateController@reply')->name('replyEvaluation'); //Reply Evaluation
    Route::post('/servicingStatus', 'App\Http\Controllers\ServiceController@changeStatus')->name('servicingStatus'); //Reply Servicing

    //Showroom Post Request
    Route::post('/showroom', [App\Http\Controllers\ShowroomController::class, 'updateShowroom'])->name('serviceQuota');
    Route::post('/changeShowroomStatus', [App\Http\Controllers\ShowroomController::class, 'changeShowroomStatus'])->name('changeShowroomStatus');

//Default Routes
    Auth::routes();
    //Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/', [App\Http\Controllers\HomeController::class, 'loginPage'])->name('default');

//Tests
    Route::get('/test', function () {
        return view('test');
    })->name('test');
    Route::get('/', function () {
        return view('auth.login');
    })->name('default');

