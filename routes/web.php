<?php

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

//Language Translation
Route::get('/about', [App\Http\Controllers\Frontend\AboutController::class, 'index'])->name('about');

Route::get('/', [App\Http\Controllers\Frontend\AboutController::class, 'home'])->name('home');
Route::get('/contact', [App\Http\Controllers\Frontend\ContactController::class, 'index'])->name('contact');

Route::get('/services-details', [App\Http\Controllers\Frontend\ServicesController::class, 'index'])->name('services-details');

Route::get('/gallery', [App\Http\Controllers\Frontend\GalleryController::class, 'index'])->name('gallery');
Route::get('/testimonials', [App\Http\Controllers\Frontend\TestimonialsController::class, 'index'])->name('testimonials');

Route::get('/services', [App\Http\Controllers\Frontend\ServicesController::class, 'index'])->name('services');

Route::get('/skidpackages', [App\Http\Controllers\Frontend\SkidPackagesController::class, 'index'])->name('skidpackages');


Route::get('/pipingsystems', [App\Http\Controllers\Frontend\PipingSystemsController::class, 'index'])->name('pipingsystems');


Route::get('/pressurevessels', [App\Http\Controllers\Frontend\PressureVesselsController::class, 'index'])->name('pressurevessels');



Route::get('/heatexchangers', [App\Http\Controllers\Frontend\HeatExchangersController::class, 'index'])->name('heatexchangers');



Route::get('/storagetanks', [App\Http\Controllers\Frontend\StorageTanksController::class, 'index'])->name('storagetanks');


Route::get('/staticequipment', [App\Http\Controllers\Frontend\StaticEquipmentController::class, 'index'])->name('staticequipment');



Route::get('/steelstructures', [App\Http\Controllers\Frontend\SteelStructuresController::class, 'index'])->name('steelstructures');



Route::get('/ansysFEA', [App\Http\Controllers\Frontend\AnsysFEAController::class, 'index'])->name('ansysFEA');




Route::get('/client', [App\Http\Controllers\Frontend\ClientController::class, 'index'])->name('client');



Route::get('/projects', [App\Http\Controllers\Frontend\ProjectsController ::class, 'index'])->name('projects');















