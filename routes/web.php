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
