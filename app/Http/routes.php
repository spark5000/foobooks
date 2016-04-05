<?php



Route::group(['middleware' => ['web']], function(){


    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/books', 'BookController@getIndex');

    Route::get('/book/create', 'BookController@getCreate');

    Route::post('book/create', 'BookController@postCreate');

    Route::get('/book/{id}', 'BookController@getShow');

    Route::get('/practice', function() {

        //$data = Array('foo' => 'bar');
        //Debugbar::info($data);
        //Debugbar::error('Error!');
        //Debugbar::warning('Watch out…');
        //Debugbar::addMessage('Another message', 'mylabel');
        $random = new Random();
        return $random->getRandomString(8);

        //return 'Practice';
    });

});
