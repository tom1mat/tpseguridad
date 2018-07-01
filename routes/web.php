<?php

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

// Raiz
Route::get('/', function () {
    return view('home');
});

// FAQ (Ayuda)
Route::get('/faq', function () {
    return view('faq');
})->name('faq');

// Groups:All Users
Route::group(["prefix" => "user", "middleware" => "auth"],function(){

    // LogOut
    Route::get('/logout', [
        'as' => 'logout',
        'uses' => 'Auth\LoginController@logout'
    ]);

    // Group:Paciente
    Route::group(["prefix" => "patient", "middleware" => "isAllowed"],function(){
        Route::get("/",[ // Shifts
            "as" => "patient.shifts.index",
            "uses" => "PatientController@index",
        ]);
        Route::get("/create",[ // Create Shift
            "as" => "patient.shifts.create",
            "uses" => "PatientController@create",
        ]);
        Route::get("/edit/{id}",[ // Edit Shift
            "as" => "patient.shifts.edit",
            "uses" => "PatientController@edit",
        ]);
        Route::put("/update/{id}",[ // Update Action
            "as" => "patient.shifts.update",
            "uses" => "PatientController@update",
        ]);
        Route::post("/store",[ // New Shift
            "as" => "patient.shifts.store",
            "uses" => "PatientController@store",
        ]);
        Route::delete("/destroy/{id}",[ // Delete Action
            "as" => "patient.shifts.destroy",
            "uses" => "PatientController@destroy",
        ]);
    });

    // Group:Secretaria
    Route::group(["prefix" => "secretary", "middleware" => "isAllowed"],function(){
        Route::get("/",[ // Users
            "as" => "secretary.users.index",
            "uses" => "SecretaryController@index",
        ]);
        Route::get("/edit/{id}",[ // Edit User (Data)
            "as" => "secretary.users.edit",
            "uses" => "SecretaryController@edit",
        ]);
        Route::put("/update/{id}",[ // Update Action
            "as" => "secretary.users.update",
            "uses" => "SecretaryController@update",
        ]);
    });

    // Group:Médico
    Route::group(["prefix" => "doctor", "middleware" => "isAllowed"],function(){
        Route::get("/",[ // Users
            "as" => "doctor.users.index",
            "uses" => "DoctorController@index",
        ]);
        Route::get("/edit/{id}",[ // Edit User (Clinic History)
            "as" => "doctor.users.edit",
            "uses" => "DoctorController@edit",
        ]);
        Route::put("/update/{id}",[ // Update Action
            "as" => "doctor.users.update",
            "uses" => "DoctorController@update",
        ]);
    });

    // Group:Administrador
    Route::group(["prefix" => "admin", "middleware" => "isAllowed"],function(){
        Route::get("/",[ // Users
            "as" => "admin.users.index",
            "uses" => "AdminController@index",
        ]);
        Route::get("/create",[ // Create User
            "as" => "admin.users.create",
            "uses" => "AdminController@create",
        ]);
        Route::get("/edit/{id}",[ // Edit User (All)
            "as" => "admin.users.edit",
            "uses" => "AdminController@edit",
        ]);
        Route::put("/update/{id}",[ // Update Action
            "as" => "admin.users.update",
            "uses" => "AdminController@update",
        ]);
        Route::post("/store",[ // New User
            "as" => "admin.users.store",
            "uses" => "AdminController@store",
        ]);
        Route::delete("/destroy/{id}",[ // Destroy Action
            "as" => "admin.users.destroy",
            "uses" => "AdminController@destroy",
        ]);
    });

});

// Default Authentication
Auth::routes();
