<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::inertia('/', 'welcome')->name('home');

Route::get('/hello',function(){
  return "Hello World!";
});


Route::get('/about',function(){
  return "This is about page";
});

Route::get('/contact',function(){
  return "This is contact page";
});

Route::get('/user/{name}',function($name){
  return "Hello {$name}";
});

Route::get('/hotel/{name}/room/{id}',function($name , $id ){
  return "This is hotel {$name} and room number {$id}";
});


Route::get('/booking/{id?}',function($id=null){
  if(!$id){
    return "This is booking page";
  }else{
    return "This is booking : {$id} number .";
  }
});


Route::prefix('/admin')->group(function(){
  route::get('/dashboard',function(){
    return "Admin -> Dashboard";
  });

  route::get('/boooking',function(){
    return "Admin -> booking";
  });
});




Route::get('/bookings', function () {
    return "This is a named route";
})->named('routing');

// Route::get('/home', function () {
//     return redirect()->route('routing');
// });




Route::post('/post',function(){
  return "this is post methid";
});

Route::post('/booking',function(){
  return "Your Form submited sucessfuly";
});


Route::get('/form', function () {
    return view('form');
});


// Route::get('/product/{id}',function($id){
//   return "Product id : {$id}";
// })->where('$id','[1-9]+');

// Route::get('/product/{id}',function($id=10){
//   return "this is route with name {$id}";
// })->named('product.show');


// Route::get('/home', function () {
//     return redirect()->route('product.show',['id' =>10]);
// });


// Route::get('/product/{id?}', function($id=null) {

//     return "this is route with name {$id}";

// })->name('product.show');


// Route::get('/home', function () {

//     return redirect()->route('product.show', ['id' => 25]);

// });


// Route::get('/product',[ProductController::class,'show']);


Route::get('/product/{id}',[ProductController::class,'show']);





