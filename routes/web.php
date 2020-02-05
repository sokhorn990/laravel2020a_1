<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/our_action', 'pagesController@action');
Route::get('/join_us', 'pagesController@join_us');
Route::get('/news', 'pagesController@news');
Route::get('/contact_us', 'pagesController@contact_us');
Route::get('/about_us', 'pagesController@about_us');

Route::get('/customer', 'pagesController@showCustomer');
// Route::get('/student','StudentsController@showStudent');
// Route::get('/student/{name}','StudentsController@searchStudent');
Route::get('/subject', 'SubjectsController@showSubject');
Route::get('/student', 'StudentController@student');

Route::get('/form', 'StudentController@getForm');
Route::post('/insert', 'StudentController@insertData');

//EDIT DATA
Route::get('/editStudents/{id}', 'StudentController@editForm')->name('edit');
Route::patch('/update/{id}', 'StudentController@updateStudent')->name('update');
//DELETE
Route::get('/update/{id}', 'StudentController@deleteStudent')->name('delete');







// Route::get('/student','StudentsController@searchStudent ');

// Route::get('/customer','pagesController@listCustomer');
// Route::get('/contact_us',function(){
//     return view('pages.contact_us');
// });
// Route::get('/join_us',function(){
//     return view('pages.join_us');
// });
// Route::get('/news',function(){
//     return view('pages.news');
// });
// Route::get('/our_action',function(){
//     return view('pages.our_action');
// });

// //Chapter2 for Basic Route

// Route::get('/array',function(){
//     return ["hello","bello","cutecute"];
// });
// //1
// Route::get('/show.student',function(){
//     return "Hello Student WEP2020A";
// });
// //2
// Route::get('/student',function(){
//     return "this is a like";
// });
// //3
// Route::get('/route/{id}',function($id){
//     return "this is a like" .$id;
// });
//4
// Route::get('/name/{id}',function($id){
//     return "hello sokhorn".$id ."wep 2020A";
// })->name("name");


//other homework is a homework2





// create new route
// Route::get('/teacher/{index}', function ($index) {
//     // create new array
//     $teachers = array("Channak", "Ronan", "Shieha", "Rady", "Rith");
//     if ($index < sizeof($teachers)) {
//         echo "This teacher is : " . $teachers[$index];
//     } else {
//         echo "This array is :";
//         for ($i = 0; $i < sizeof($teachers); $i++) {
//             $countIndex = sizeof($teachers) - 1;
//             if ($i < $countIndex) {
//                 echo "[$i] " . $teachers[$i] . ", ";
//             } else {
//                 echo "[$i] " . $teachers[$i];
//             }
//         }
//         echo "<br>";
//         echo "No Teacher with this index: " . $index;
//         echo "<br>";
//         echo "The largest index is :" . $countIndex;
        
//     }
// });
