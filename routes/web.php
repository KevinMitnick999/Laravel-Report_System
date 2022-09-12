<?php
Route::get('/', function() {
    return redirect(route('admin.dashboard'));
});

Route::get('home', function() {
    return redirect(route('admin.dashboard'));
});

Route::name('admin.')->prefix('admin')->middleware('auth')->group(function() {
    Route::get('dashboard', 'DashboardController')->name('dashboard');

    Route::get('users/roles', 'UserController@roles')->name('users.roles');
    Route::resource('users', 'UserController', [
        'names' => [
            'index' => 'users'
        ]
    ]);
});

Route::middleware('auth')->get('logout', function() {
    Auth::logout();
    return redirect(route('login'))->withInfo('You have successfully logged out!');
})->name('logout');

Auth::routes(['verify' => true]);

Route::name('js.')->group(function() {
    Route::get('dynamic.js', 'JsController@dynamic')->name('dynamic');
});

// Get authenticated user
Route::get('users/auth', function() {
    return response()->json(['user' => Auth::check() ? Auth::user() : false]);
});

Route::get('/aboutme', 'UserController@aboutme')->name('aboutme');

/////// Report ///////
Route::get('/newctmcol', 'ColumnController@newCustomCol')->name('newctmcol');
Route::get('/createreport', 'ReportController@insertData')->name('createreport');
Route::get('/massudtcol', 'ColumnController@massUpdate')->name('massudtcol');
Route::get('/massdispcombo', 'ColumnController@massdispcombo')->name('massdispcombo');
Route::get('/massupdatecol', 'ColumnController@massUpdateCol')->name('massupdatecol');

Route::get('/autoupdateview', 'ColumnController@autoupdateview')->name('autoupdateview');
Route::get('/reorderview', 'ColumnController@reorderview')->name('reorderview');
Route::get('/hideview', 'ColumnController@hideview')->name('hideview');

