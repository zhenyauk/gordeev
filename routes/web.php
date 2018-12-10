<?php

//Админка
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

//Кабинет
Route::group(['prefix' => 'cabinet'], function () {
    Route::get('/', 'cabinet\CabinetController@index');
    Route::get('/login', 'cabinet\CabinetController@index');
    Route::get('/register', 'cabinet\CabinetController@index');

});

Route::post('form', 'PageController@forms');

Route::post('order', 'PageController@order');


Route::get('/404', function(){
    abort(404);
});


Route::post('/addcomment', 'CommentsController@add');




Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],
function()
    {
        /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/

        Route::get('/', 'PageController@index')->name('home');

        Route::post('/blog/search', 'BlogController@search');

        //BLOG Routes Must be last
        Route::get('/blog', 'BlogController@all');
        Route::get('{category}', 'BlogController@getCat');

        Route::get('{category}/{subcategory}', 'BlogController@getCatWithSubcats');
        Route::get('{category}/{subcategory}/{alias}', 'BlogController@getArticle');

//End translations path
    }
);

