<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MedicalController;
use App\Http\Controllers\AgricultureProductController;
use App\Http\Controllers\IndustrielProductController;
use App\Http\Controllers\MetallurgieProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RobotiqueProductController;
use App\Http\Controllers\BtpProductController;
use App\Http\Controllers\MinesProductController;
use App\Http\Controllers\ManutentionProductController;

Route::get('/', function () {
    return view('LandingPage');
});

Route::get('/nos-catalogues', function () {
    return view('catalogues');
});

Route::get('/mentions-legales', function () {
    return view('mentionsLegales');
})->name('mentionsLegales');

Route::get('/aProposNous', function () {
    return view('AboutUs');
});
// ------------------------------- équipements industriel ----------------------------------
// -----------------------------------------------------------------------------------------

Route::get('/industriel', [IndustrielProductController::class, 'index'])->name('industrielProducts.index');
Route::get('/industrielProducts/byCategory{category}', [IndustrielProductController::class, 'filterByCategory'])
->name('industrielProducts.filterByCategory');
Route::get('/industrielProducts/all', [IndustrielProductController::class, 'productsList']);
Route::get('/industrielProductsSearch', [IndustrielProductController::class, 'search'])->name('industrielProducts.search');


// ---------------------------------- metallurgie ------------------------------------
// -----------------------------------------------------------------------------------

Route::get('/metallurgie', [MetallurgieProductController::class, 'index'])->name('metallurgieProducts.index');
Route::get('/metallurgieProducts/byCategory{category}', [MetallurgieProductController::class, 'filterByCategory'])
->name('metallurgieProducts.filterByCategory');
Route::get('/metallurgieProducts/all', [MetallurgieProductController::class, 'productsList']);
Route::get('/metallurgieProductsSearch', [MetallurgieProductController::class, 'search'])->name('metallurgieProducts.search');

// ------------------------------- Agriculture ----------------------------------
// -----------------------------------------------------------------------------------------

Route::get('/agriculture', [AgricultureProductController::class, 'index'])->name('agricultureProducts.index');
Route::get('/agricultureProducts/byCategory{category}', [AgricultureProductController::class, 'filterByCategory'])
->name('agricultureProducts.filterByCategory');
Route::get('/agricultureProducts/all', [AgricultureProductController::class, 'productsList']);
Route::get('/agricultureProductsSearch', [AgricultureProductController::class, 'search'])->name('agricultureProducts.search');

// ------------------------------- robotique ----------------------------------
// -----------------------------------------------------------------------------------------

Route::get('/robotiques', [RobotiqueProductController::class, 'index'])->name('robotiques');
Route::get('/robotiqueProducts/byCategory{category}', [RobotiqueProductController::class, 'filterByCategory'])->name('robotiqueProducts.filterByCategory');
Route::get('/robotiqueProductsSearch', [RobotiqueProductController::class, 'search'])->name('robotiqueProducts.search');
Route::get('/m', [MedicalController::class, 'm'])->name('m');
Route::get('/agroalimentaire', [MedicalController::class, 'agroalimentaire'])->name('agroalimentaire');
Route::get('/automobile', [MedicalController::class, 'automobile'])->name('automobile');
Route::get('/electronique-electromecanique-electromenager', [MedicalController::class, 'electronique'])->name('electronique-electromecanique-electromenager');
Route::get('/mecanique-energie-plasturgie-biens-de-consommation', [MedicalController::class, 'energie'])->name('mecanique-energie-plasturgie-biens-de-consommation');


// ------------------------------- BTP ----------------------------------
// -----------------------------------------------------------------------------------------

Route::get('/btp', [BtpProductController::class, 'index'])->name('btp');
Route::get('/btpProducts/byCategory{category}', [BtpProductController::class, 'filterByCategory'])
->name('btpProducts.filterByCategory');
Route::get('/btpProducts/all', [BtpProductController::class, 'productsList']);
Route::get('/btpProductsSearch', [BtpProductController::class, 'search'])->name('btpProducts.search');

// ------------------------------- Mines ----------------------------------
// -----------------------------------------------------------------------------------------

Route::get('/mines', [MinesProductController::class, 'index'])->name('mines');
Route::get('/minesProducts/byCategory{category}', [MinesProductController::class, 'filterByCategory'])
->name('minesProducts.filterByCategory');
Route::get('/minesProducts/all', [MinesProductController::class, 'productsList']);
Route::get('/minesProductsSearch', [MinesProductController::class, 'search'])->name('minesProducts.search');

// ------------------------------- Manutention ----------------------------------
// -----------------------------------------------------------------------------------------

Route::get('/manutention', [ManutentionProductController::class, 'index'])->name('manutention');
Route::get('/manutentionProducts/byCategory{category}', [ManutentionProductController::class, 'filterByCategory'])
->name('manutentionProducts.filterByCategory');
Route::get('/manutentionProducts/all', [ManutentionProductController::class, 'productsList']);
Route::get('/manutentionProductsSearch', [ManutentionProductController::class, 'search'])->name('manutentionProducts.search');

Route::get('/contact', [ContactController::class,'showContactForm'])->name('contactShow');
Route::post('/contact', [ContactController::class, 'submitContactForm'])->name('contactSend');