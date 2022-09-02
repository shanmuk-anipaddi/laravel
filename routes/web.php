<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostControllerResource;
use App\Models\Post;


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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/about',function(){
//     //return view('About us ')
//     return "Hi this about!";
// });

// Route::get('post/{id}/{name}',function($id,$name){
//     return "This is parameter route".$id." and name is ".$name;
// });

// Route::get('admin/posts/example',array('as'=>'admin.home',function(){
//     $url=route('admin.home');
//     return "this url is ".$url;
// }));

Route::get('/post/{id}/{name}/{pwd}',[PostControllerResource::class, 'post']);

Route::get('/contact',[PostControllerResource::class,'contact']);

//Route::get('/post/{id}',[PostControllerResource::class, 'show']);
//Route::get('/post','PostControllerResource@index');

Route::get('/Read',function(){
    $posts = Post::all();
    foreach($posts as $post){
        //echo "<pre>";print_r($posts);echo "</pre>";        
        echo  $post->title."<br>";
    }
});

Route::get('/find',function(){
    $posts = Post::find(2);
    //foreach($posts as $post){
        //echo "<pre>";print_r($posts);echo "</pre>";        
        echo  $posts->title."<br>";
    //}
});

Route::get('/findmore',function(){
    $posts = Post::findOrFail(2);

    return $posts;
});