<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::post('contact',function(Request $request){
    $data = $request->all();
    return view('pages.contact')->with('mydata',$data);
});
Route::get('/{name?}/{color?}', function($name='home',$color='blue'){
   // return view('pages/'.$name,["fname"=>"seelan","lname"=>"yoga"]);
    return view('pages/'.$name)->with('fname','selvan')->with('lname','siva')->with('color1',$color);
});

/*
Route::get('home',function(){
    return view('pages.home');
});
Route::get('home',function(){
    return view('pages.contact');
});
Route::get('home',function(){
    return view('pages.services');
});
*/
/*
$myFunction = function(){
    return view('layout.master');
};
Route::get('/master', $myFunction);

$homePage = function(){
    return view('pages.home');
};

Route::get('/home', $homePage);

$aboutPage = function(){
    return view('pages.about');
};

Route::get('/about', $aboutPage);

$servicesPage = function(){
    return view('pages.services');
};

Route::get('/services', $servicesPage);

$galleryPage = function(){
    return view('pages.gallery');
};

Route::get('/gallery', $galleryPage);

$contactPage = function(){
    return view('pages.contact');
};

Route::get('/contact', $contactPage);
*/