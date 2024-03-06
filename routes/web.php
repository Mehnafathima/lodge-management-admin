<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\unitController;
use App\Http\Controllers\brandController;
use App\Http\Controllers\productController;
use App\Http\Controllers\branchController;
use App\Http\Controllers\staffController;

Route::resource('jobs', JobController::class)->except(['show']);
Route::resource('units', unitController::class)->except(['show']);
Route::resource('brands', brandController::class)->except(['show']);
Route::resource('products', productController::class)->except(['show']);
Route::resource('users', AdminController::class)->except(['show']);
Route::resource('branches', branchController::class)->except(['show']);
Route::resource('staffs', staffController::class)->except(['show']);


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



Route::get('/', [App\Http\Controllers\Authentication\LoginController::class, 'login'])->name('auth.login');
// Route::get('/404', [App\Http\Controllers\Authentication\LoginController::class, 'error'])->name('error');
Route::post('/doLogin', [App\Http\Controllers\Authentication\LoginController::class, 'doLogin'])->name('auth.doLogin');

//middleware
Route::middleware(['auth'])->prefix('admin')->group(function () {

    Route::get('/dashboard', [App\Http\Controllers\userController::class, 'dashboard'])->name('dashboard');
    Route::post('/logout', [App\Http\Controllers\Authentication\LoginController::class, 'logout'])->name('logout');
    
    //for admin
    Route::get('/users', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('users.index');
    Route::get('/users/create', [App\Http\Controllers\Admin\AdminController::class, 'create'])->name('users.create');
    Route::get('/users/datatables', [App\Http\Controllers\Admin\AdminController::class, 'datatables'])->name('users.datatables');
    Route::get('/users/edit/{id}', [App\Http\Controllers\Admin\AdminController::class, 'edit'])->name('users.edit');
    Route::get('/users/delete/{id}', [App\Http\Controllers\Admin\AdminController::class, 'delete'])->name('users.delete');
    Route::post('/users/{id}', [App\Http\Controllers\Admin\AdminController::class, 'update'])->name('users.update');
  // for staffs
  Route::get('/staffs', [App\Http\Controllers\staffController::class, 'index'])->name('staffs.index');
  Route::get('/staffs/create', [App\Http\Controllers\staffController::class, 'create'])->name('staffs.create');
  Route::get('/staffs/datatables', [App\Http\Controllers\staffController::class, 'datatables'])->name('staffs.datatables');
  Route::get('/staffs/edit/{id}', [App\Http\Controllers\staffController::class, 'edit'])->name('staffs.edit');
  Route::get('/staffs/delete/{id}', [App\Http\Controllers\staffController::class, 'delete'])->name('staffs.delete');
  Route::post('/staffs/{id}', [App\Http\Controllers\staffController::class, 'update'])->name('staffs.update');

    //for branches
    Route::get('/branches', [App\Http\Controllers\branchController::class, 'index'])->name('branches.index');
    Route::get('/branches/create', [App\Http\Controllers\branchController::class, 'create'])->name('branches.create');
    Route::get('/branches/datatables', [App\Http\Controllers\branchController::class, 'datatables'])->name('branches.datatables');
    Route::get('/branches/edit/{id}', [App\Http\Controllers\branchController::class, 'edit'])->name('branches.edit');
    Route::get('/branches/delete/{id}', [App\Http\Controllers\branchController::class, 'delete'])->name('branches.delete');
    Route::post('/branches/{id}', [App\Http\Controllers\branchController::class, 'update'])->name('branches.update');
    //for units
    //for jobs
    Route::get('/jobs', [App\Http\Controllers\JobController::class, 'index'])->name('jobs.index');
    Route::get('/jobs/create', [App\Http\Controllers\JobController::class, 'create'])->name('jobs.create');
    Route::get('/jobs/datatables', [App\Http\Controllers\JobController::class, 'datatables'])->name('jobs.datatables');
    Route::get('/jobs/edit/{id}', [App\Http\Controllers\JobController::class, 'edit'])->name('jobs.edit');
    Route::get('/jobs/delete/{id}', [App\Http\Controllers\JobController::class, 'delete'])->name('jobs.delete');
    Route::post('/jobs/{id}', [App\Http\Controllers\JobController::class, 'update'])->name('jobs.update');
    //for units
    Route::get('/units', [App\Http\Controllers\unitController::class, 'index'])->name('units.index');
    Route::get('/units/create', [App\Http\Controllers\unitController::class, 'create'])->name('units.create');
    Route::get('/units/datatables', [App\Http\Controllers\unitController::class, 'datatables'])->name('units.datatables');
    Route::get('/units/edit/{id}', [App\Http\Controllers\unitController::class, 'edit'])->name('units.edit');
    Route::get('/units/delete/{id}', [App\Http\Controllers\unitController::class, 'delete'])->name('units.delete');
    Route::post('/units/{id}', [App\Http\Controllers\unitController::class, 'update'])->name('units.update');
    //for Brand
    Route::get('/brands', [App\Http\Controllers\brandController::class, 'index'])->name('brands.index');
    Route::get('/brands/create', [App\Http\Controllers\brandController::class, 'create'])->name('brands.create');
    Route::get('/brands/datatables', [App\Http\Controllers\brandController::class, 'datatables'])->name('brands.datatables');
    Route::get('/brands/edit/{id}', [App\Http\Controllers\brandController::class, 'edit'])->name('brands.edit');
    Route::get('/brands/delete/{id}', [App\Http\Controllers\brandController::class, 'delete'])->name('brands.delete');
    Route::post('/brands/{id}', [App\Http\Controllers\brandController::class, 'update'])->name('brands.update');
    //for Product
    Route::get('/products', [App\Http\Controllers\productController::class, 'index'])->name('products.index');
    Route::get('/products/create', [App\Http\Controllers\productController::class, 'create'])->name('products.create');
    Route::get('/products/datatables', [App\Http\Controllers\productController::class, 'datatables'])->name('products.datatables');
    Route::get('/products/edit/{id}', [App\Http\Controllers\productController::class, 'edit'])->name('products.edit');
    Route::get('/products/delete/{id}', [App\Http\Controllers\productController::class, 'delete'])->name('products.delete');
    Route::post('/products/{id}', [App\Http\Controllers\productController::class, 'update'])->name('products.update');

    Route::get('/customers', [App\Http\Controllers\userController::class, 'customer'])->name('customers.index');
    Route::get('/customers/datatables', [App\Http\Controllers\Authentication\LoginController::class, 'datatables'])->name('customers.datatables');
});
