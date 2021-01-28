<?php

use App\Models\About;
use App\Models\category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\UserPostController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AboutController as AdminAboutController;
use App\Http\Controllers\Admin\ChartsController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\DeathController;
use App\Http\Controllers\Admin\DiseaseController;
use App\Http\Controllers\Admin\HospitalsController;
use App\Http\Controllers\HospitalController;
use App\Models\City;
use App\Models\Death;
use App\Models\Disease;
use App\Models\Hospitals;
use App\Models\User;
use Illuminate\Support\Facades\DB;

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
    return view('auth.login');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth','admin']], function () {
    Route::get('/dashboard', function () {

        $user=User::count();
        $hospital=Hospitals::count();
        $death=Death::count();
        $city=City::count();
        $dis=Disease::count();

        return view('admin.dashboard',compact('city','dis','death','user','hospital'));
    });

    Route::get('/dashboard', [ChartsController::class, 'index'])->name('dash');


    //User Role Routes
    Route::get('/rolereg', [DashboardController::class,'index'])->name('role');
    Route::get('/roleedit/{id}', [DashboardController::class,'edit'])->name('r.edit');
    Route::post('/roleupdate/{id}', [DashboardController::class,'update'])->name('r.update');
    Route::get('/roledelete/{id}', [DashboardController::class,'destroy'])->name('r.delete');

    // Posts Routes

    Route::get('/about', [PostController::class,'index'])->name('post');
    Route::get('/about/create', [PostController::class,'create'])->name('p.create');
     Route::post('/about/store', [PostController::class,'store'])->name('p.store');
    Route::get('/about/{id}', [PostController::class,'edit'])->name('p.edit');
    Route::post('/about/update/{id}', [PostController::class,'update'])->name('p.update');
    Route::get('/about/delete/{id}', [PostController::class,'destroy'])->name('p.delete');

     // Hospitals Routes

     Route::get('/hospital', [HospitalsController::class,'index'])->name('hospital');
     Route::get('/hospital/create', [HospitalsController::class,'create'])->name('h.create');
     Route::post('/hospital/store', [HospitalsController::class,'store'])->name('h.store');
     Route::get('/hospital/edit/{id}', [HospitalsController::class,'edit'])->name('h.edit');
     Route::post('/hospital/update/{id}', [HospitalsController::class,'update'])->name('h.update');
     Route::get('/hospital/delete/{id}', [HospitalsController::class,'destroy'])->name('h.delete');

     // Cities Routes

     Route::get('/city', [CityController::class,'index'])->name('city');
     Route::get('/city/create', [CityController::class,'create'])->name('c.create');
     Route::post('/city/store', [CityController::class,'store'])->name('c.store');
     Route::get('/city/edit/{id}', [CityController::class,'edit'])->name('c.edit');
     Route::post('/city/update/{id}', [CityController::class,'update'])->name('c.update');
     Route::get('/city/delete/{id}', [CityController::class,'destroy'])->name('c.delete');


     // Disease Routes

     Route::get('/diseas', [DiseaseController::class,'index'])->name('diseas');
     Route::get('/diseas/create', [DiseaseController::class,'create'])->name('dis.create');

     Route::post('/diseas/store', [DiseaseController::class,'store'])->name('dis.store');
     Route::get('/diseas/edit/{id}', [DiseaseController::class,'edit'])->name('dis.edit');
     Route::post('/diseas/update/{id}', [DiseaseController::class,'update'])->name('dis.update');
     Route::get('/diseas/delete/{id}', [DiseaseController::class,'destroy'])->name('dis.delete');


      // Disease Routes

      Route::get('/death', [DeathController::class,'index'])->name('death');
      Route::get('/death/create', [DeathController::class,'create'])->name('d.create');

      Route::post('/death/store', [DeathController::class,'store'])->name('d.store');
      Route::get('/death/edit/{id}', [DeathController::class,'edit'])->name('d.edit');
      Route::post('/death/update/{id}', [DeathController::class,'update'])->name('d.update');
      Route::get('/death/delete/{id}', [DeathController::class,'destroy'])->name('d.delete');

});

Route::group(['middleware' => ['auth']], function () {


    Route::get('/upost', [UserPostController::class, 'index'])->name('userpost');
});
