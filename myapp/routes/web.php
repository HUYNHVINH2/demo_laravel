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

Route::get('/', function () {

    return view('welcome');
});
// Route::get('/user/{name}', function ( $name) { 
//     return $name;
// });


// from
//getCoockies
// Route::get('/setcookies', 'sum@setCoockies');
// Route::get('/getcookies', 'sum@getCoockies');



Route::get('/sum', function () {
    return view('sum');
});
//get  data from form to route mapping to controller 
Route::post('handle-form','sum@sumTwoNumber');







//get data json 
Route::get('json','sum@getJson');
//dinh danh route de goi lai o route khac
// Route::get('/myname', [
//     'as' =>'newname',
//     function ( ) { 
//     return 'doi ten';
//     }
// ]);

// Route::get('/myname',function () { 
//     return 'doi ten';
// })->name('newname');

// Route::get('/call-name',function () { 
//     return redirect()->route('newname');
//     }
// );
// gruop route
// Route::group(['prefix'=>'my-group'], function(){
//     Route::get('/route1',function () { 
//         return ' route 1';
//         });
//     Route::get('/route2',function () { 
//         return ' route 2';
//         });
//     Route::get('/route3',function () { 
//         return ' route 3';
//         });
  
// });
//call to controller
// Route::get('/sum-two-number2/{number}','sum@sumTwoNumber');
// Route::group(['prefix'=>'my-group'], function(){
//     Route::get('/route1',function () { 
//         return ' route 1';
//         });
//     Route::get('/route2',function () { 
//         return ' route 2';
//         });
//     Route::get('/route3',function () { 
//         return ' route 3';
//         });
// )

//==================================================NEWSpaper======================================
Route::get('/create-product', function () {
    // $checkCreate = Schema :: create('product', function($table){
    //     $table->increments('id');
    //     $table->string('name', 200);
    // });
    // if(!$checkCreate) return'cant add user';
    return 'add user success';
});
Route::get('/add-product', function () {
    // DB::table('product')->insert([
    //     'name'=>'iphone5'
    // ]);
});  
// Route::get('/home', function () {
//     return view('newspaper/index');
// });


