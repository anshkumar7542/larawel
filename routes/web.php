<?php

use Illuminate\Support\Facades\Route;

// Route::get('/username/{name}/{id}', function ($name,$id) {
//     return "The name and id is :" .$name .$id;
// });

//constraint based routing with numbers
// Route::get('/home/{id}', function ($id) {
//     return "The value of id is: " . $id;
// })->where('id', '[0-9]{2-5}');//range

// //constraint based routing with alphabets
// Route::get('/home/{id}', function ($name) {
//     return "The value of name is: " . $name;
// })->where('id', '[Kk]');//range


// //Fallback routing
// Route::get('/about', function () {
//     return "I am inside about";
// });
// Route::Fallback(function()
// {
//     return "OPPS...BETTER LUCK NEXT TIME";
// });



// // group routing with prefix
// Route::prefix('master')->group(function () {

//     Route::get('/about', function () {
//         return "I am inside about";
//     });

//     Route::get('/home', function () {
//         return "I am inside home";
//     });

//     Route::get('/profile', function () {
//         return "I am inside profile";
//     });

// });

// // fallback route
// Route::fallback(function () {
//     return "OPPS...BETTER LUCK NEXT TIME";
// });




//group routing without prefix

// Route::get('/home', function () {
//     for ($i = 0; $i <= 9; $i++) {
//         echo "The value is: " . $i . "<br>";
//     }
// });





  
//question 2

// Route::get('/event/{name}', function ($name) {

//     $events = ["coding", "hackathon", "workshop", "techtalk"];

//     if (in_array($name, $events)) {
//         return "Event available: " . $name;
//     } 
//     else {
//         return "Event not Available";
//     }

// });



//named routing
//step 1 :create of view
//step 2:php artisan make:view student
//create of  route with view
//add value of name in second route view that can be accessed in the main page
//make use of blade template syntax{{}}in the welcome page


// Route::view('/','welcome');
// Route::view('/cse/scai/27block/web/cabin7','student')->name('details');


//question
// create one route with option parameter which will showcase unknown if you are entering nothing 
// in the url and if you enter details in the url decode then it will display palindrome number



// Route::get('/palindrome/{num?}', function ($num = null) {

//     if ($num == null) {
//         return "Unknown";
//     }

//     $reverse = strrev($num);

//     if ($num == $reverse) {
//         return "$num is a Palindrome Number";
//     } else {
//         return "$num is not a Palindrome Number";
//     }

// });






//Pass the value to view(associative array)

// Route::get('/',function()
// {
//     $courses=["php","c","c++","html"];
//     return view('student',['courses'=>$courses]);
// });


//compact

// Route::get('/',function()
// {
//     $courses = ["php","c","c++","html"];
//     return view('student', compact('courses'));
// });



//with

// Route::get('/',function()
// {
//     $courses = ["php","c","c++","html"];
//     return view('student')->with ('courses',$courses);
// });




//implode


Route::get('/', function () {
    $courses = ["php","c","c++","html"];
    return implode($courses);
});