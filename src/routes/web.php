<?php

Route::get('/test/{name}')
    ->uses('Aheenam\Awesome\Controllers\TestController@index');
