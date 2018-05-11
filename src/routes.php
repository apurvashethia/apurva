<?php

Route::get('mypackage', function(){
	echo 'Hello from the calculator package!';
});

Route::get('packageview', function(){
	return view('mypackage::pview');
});

Route::get('packagecontroller', 'Apurvashethia\Mypackage\MypackageController@display');  