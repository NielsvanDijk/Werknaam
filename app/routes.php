<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function() {
    
	return View::make('index');
    // $pdf = PDF::make();
    // $pdf->addPage('<html><head></head><body><b>Hello World</b></body></html>');
    // $pdf->send();
});
