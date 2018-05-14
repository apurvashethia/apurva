<?php

Route::get('mypackage', function(){
	echo 'Hello from the package!';
});

Route::get('packageview', function(){
	return view('mypackage::pview');
});

Route::get('packagecontroller', 'Apurva\Mypackage\MypackageController@display');  
