<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UnitController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('view-products', [ProductController::class, 'index'])->name('view-products');

// Route::get('view-units', [UnitController::class, 'index'])->name('units.index');

Route::group(['prefix' => 'products'], function() {
    Route::get('/', [ProductController::class, 'index'])->name('products.index');
    Route::get('/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/create', [ProductController::class, 'store'])->name('products.store');
    Route::get('/{product}/show', [ProductController::class, 'show'])->name('products.show');
    Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::patch('/{product}/update', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/{product}/delete', [ProductController::class, 'destroy'])->name('products.destroy');

    Route::get('/trashed', [ProductController::class, 'trashed'])->name('products.trashed');
    Route::post('/{id}/restore', [ProductController::class, 'restore'])->name('products.restore');
    Route::delete('/{id}/force-delete', [ProductController::class, 'forceDelete'])->name('products.force-delete');
    Route::get('/{product}/view-replicate', [ProductController::class, 'viewReplicate'])->name('products.view-replicate');
    Route::post('/{id}/replicate', [ProductController::class, 'replicate'])->name('products.replicate');

    Route::get('/get-trashed-items', [ProductController::class, 'getTrashedItems'])->name('products.get-trashed-items');
    Route::get('/get-all-items', [ProductController::class, 'getTrashedItems'])->name('products.get-all-items');
});

//one to one relationship implementation
use App\Models\User;
Route::get('/getinfo/{user_id}', function($user_id){
    $user = User::find($user_id);
    if($user){
        echo $user->user_name,"<br>",$user->profile->first_name,"<br>",$user->profile->last_name,"<br>",$user->profile->age;
    }else{
        echo "User not foud";
    }
});

//insert should always be done with "post" method
//for simplicity it is done with "get" method here
use App\Models\Profile;
Route::get('/insert', function(){
    $user = new User();
    $user->user_name = "raihan03";
    $user->email = "raihan03@email.com";
    // $user->timestamps();
    $user->save();

    $profile = new Profile();
    $profile->user_id = $user->id;
    $profile->first_name = "Musa";
    $profile->last_name = "Ahmed";
    $profile->age = 29;
    $profile->gender = "Male";
    $profile->save();
});

//update for one to one relationship
//should always be done with "post" method
//for simplicity it is done with "get" method here
Route::get('/update/{user_id}',function($user_id){
    $user = User::find($user_id);
    $user->email = "test@email.com";
    $user->save();

    $profile = $user->profile;
    $profile->age = 24;
    $profile->save();
});

//delete for one to one relationship
//should always be done with "post/delete" method
//for simplicity it is done with "get" method here
Route::get('/delete/{user_id}',function($user_id){
    $user = User::find($user_id);
    if($user){
        $profile = $user->profile;
        if($profile){
            $profile->delete();
        }
        $user->delete();
    }
});

//one to many relationship
//get all the posts of an user
use App\Models\Post;
Route::get('getposts/{user_id}',function($user_id){
    $user = User::find($user_id);
    $allPosts = $user->posts;
    if($allPosts->isEmpty()){
        echo "No posts found!";
    }else{
        foreach($allPosts as $post){
            echo "ID: ",$post->id,"<br>","Ttle: ",$post->title,"<br>","Content: ",$post->content,"<hr>";
        }
    }
});

//get the user of a post
Route::get('getuser/{post_id}', function($postID){
    $post = Post::find($postID);
    if($post){
        $user = $post->user;
        if($user){
            echo "ID: ",$user->id,"<br>","Name: ",$user->user_name,"<hr>";
        }else{
            echo "No user found!";
        }
    }else{
        echo "No posts found!";
    }
});

//create a user and some of his posts
//post method should be used in real apps instead of get method
Route::get('onetomany-insert', function(){
    $user = new User();
    $user->user_name = "Abdur Rahman";
    $user->email = "rahman@email.com";
    $user->save();

    $posts = [
        ['title'=>"The special one", 'content'=>"The content of the special one."],
        ['title'=>"The special two", 'content'=>"The content of the special two."],
        ['title'=>"The special three", 'content'=>"The content of the special three."]
    ];

    foreach($posts as $postData){
        $post = new Post();
        $post->title = $postData['title'];
        $post->content = $postData['content'];
        $post->user_id = $user->id;
        $post->save();
    }
});
//existing user will create some post
//post method should be used in real apps instead of get method
Route::get('onetomany-insert-2/{user_id}',function($userID){
    $user = User::find($userID);
    if($user){
        $posts = [
            ['title'=>"My title one", 'content'=>"The content of my title one."],
            ['title'=>"My title two", 'content'=>"The content of my title two."],
            ['title'=>"My title three", 'content'=>"The content of my title three."]
        ];
        $createdPosts = [];
        foreach($posts as $postData){
            $post = new Post();
            $post->title = $postData['title'];
            $post->content = $postData['content'];
            $post->user()->associate($user);
            $post->save();
            $createdPosts[] = $post;
        }
    }
});
