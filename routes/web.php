<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


 //1st method
 Route::get('/post', function () {
     return view('post');           
 });

// 2nd method
// Route::get('/post', function () {
//    return "<h1>PostPage<h1>";     //direct html view
// });

// 3rd method

//Route::view('post','/post');


//route name and view name different

//Route::get('/hello', function () {
//    return view('post');
//});


// to create sub route

//Route::get('/post/firstpost', function () {
  //  return view('firstpost');           
//});


// To create route parameter

//Route::get('/post/{id}', function (string $id) {
  //  return "<h1>Post Id : ". $id ."</h1>";           
//});

// To create route parameter to be optional

//Route::get('/post/{id?}', function (string $id=null) {
  //  if ($id) {
    //   return "<h1>Post Id : ". $id ."</h1>"; 
    //} else {
      //  return "<h1> No Id Found</h1>";
    //}
               
//});

// To take multiple parameter from user & Routing Constraints

//Route::get('/post/{id}/comment/{commentid}', function (string $id=null, string $comment) {
  //  if ($id) {
    //   return "<h1>Post Id : ". $id ."& comment : ". $comment ."</h1>";
    //} else {
      //  return "<h1> No Id Found </h1>";
   // }
// })->where('id', '[0-9]+')->whereAlpha('commentid');


// Controller Parametrer
//Route::get('/post/test/{name}', [TestController::class, 'test']);