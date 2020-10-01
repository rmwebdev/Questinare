<?php

Route::redirect('/', '/selfHealthDeclaration/harian');

Route::redirect('/surveys/1-covid-19', '/selfHealthDeclaration/harian');
// Route::get('/home', function () {
//     if (session('status')) {
//         return redirect()->route('admin.home')->with('status', session('status'));
//     }

//     return redirect()->route('admin.home');
// });

Auth::routes(['register' => false]);
// Admin

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

   
    // Messages
    Route::get('messenger', 'MessengerController@index')->name('messenger.index');
    Route::get('messenger/create', 'MessengerController@createTopic')->name('messenger.createTopic');
    Route::post('messenger', 'MessengerController@storeTopic')->name('messenger.storeTopic');
    Route::get('messenger/inbox', 'MessengerController@showInbox')->name('messenger.showInbox');
    Route::get('messenger/outbox', 'MessengerController@showOutbox')->name('messenger.showOutbox');
    Route::get('messenger/{topic}', 'MessengerController@showMessages')->name('messenger.showMessages');
    Route::delete('messenger/{topic}', 'MessengerController@destroyTopic')->name('messenger.destroyTopic');
    Route::post('messenger/{topic}/reply', 'MessengerController@replyToTopic')->name('messenger.reply');
    Route::get('messenger/{topic}/reply', 'MessengerController@showReply')->name('messenger.showReply');

    
    //Questionares
    Route::delete('questionares/destroy', 'QuestionareController@massDestroy')->name('questionares.massDestroy');
    Route::resource('questionares', 'QuestionareController');
    Route::get('/questionares/{questionare}', 'QuestionareController@show');
    Route::get('/questionares/{questionare}/questions/create', 'QuestionController@create');
    Route::post('/questionares/{questionare}/questions', 'QuestionController@store');
    Route::delete('/questionares/{questionare}/questions/{question}', 'QuestionController@destroy');
    
    
    Route::resource('questions', 'QuestionController');

    Route::get('report', 'ReportQuesionare@index')->name('report.index');
    Route::post('getData', 'ReportQuesionare@getDataReport')->name('getData');

    Route::post('getDataDashboard', 'HomeController@dataDashboard')->name('getDataDashboard');

});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
// Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
    }
});



Route::get('/selfHealthDeclaration/harian', 'Admin\SurveyController@show');  
Route::post('/kuisioner-1-harian-step-2','Admin\SurveyController@survey_absen')->name('kuisioner-1-harian-step-2');
Route::post('/kuisioner-1-harian-step-final', 'Admin\SurveyController@save_data_response_wfh')->name('kuisioner-1-harian-step-final');
Route::post('/kuisioner-1-harian-step-3','Admin\SurveyController@save_survey_wfo_absen')->name('kuisioner-1-harian-step-3');





