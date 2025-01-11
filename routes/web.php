<?php

use App\Http\Controllers\AdminManagerController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

//////////////////////////////////////////////  WEBSITE ROUTES
Route::get('/', [WebsiteController::class, 'index'])->name('home');

// kuhusu sisi
Route::get('historia', [WebsiteController::class, 'historia'])->name('historia');
Route::get('wasifu', [WebsiteController::class, 'wasifu'])->name('wasifu');
Route::get('dira-na-dhamira', [WebsiteController::class, 'dira_dhamira'])->name('dira-na-dhamira');
Route::get('muundo', [WebsiteController::class, 'muundo'])->name('muundo');

// Utawala
Route::get('idara', [WebsiteController::class, 'idara'])->name('idara');
Route::get('vitengo', [WebsiteController::class, 'vitengo'])->name('vitengo');

// Huduma
Route::get('huduma', [WebsiteController::class, 'huduma'])->name('huduma');

// Machapisho
Route::get('machapisho', [WebsiteController::class, 'machapisho'])->name('machapisho');

// Madiwani
Route::get('madiwani', [WebsiteController::class, 'madiwani'])->name('madiwani');
Route::get('kamati', [WebsiteController::class, 'kamati'])->name('kamati');
Route::get('bodi', [WebsiteController::class, 'bodi'])->name('bodi');

// Kituo cha habari
Route::get('taarifa-kwa-vyombo-vya-habari', [WebsiteController::class, 'taarifa_kwa_vyombo'])->name('taarifa-kwa-vyombo-vya-habari');
Route::get('picha', [WebsiteController::class, 'picha'])->name('picha');
Route::get('video', [WebsiteController::class, 'video'])->name('video');
Route::get('matukio', [WebsiteController::class, 'matukio'])->name('matukio');
Route::get('maelezo-zaidi/{id}', [WebsiteController::class, 'maelezo_zaidi'])->name('maelezo-zaidi');

Route::get('mawasiliano', [WebsiteController::class, 'mawasiliano'])->name('mawasiliano');






///////////////////////////////////////////////  ADMN ROUTES
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/profile', [AdminManagerController::class, 'profile'])->name('profile');
    Route::get('/dashboard', [AdminManagerController::class, 'home'])->name('dashboard');
    Route::get('/admin-historia', [AdminManagerController::class, 'historia'])->name('admin-historia');
    Route::get('/admin-wasifu', [AdminManagerController::class, 'wasifu'])->name('admin-wasifu');
    Route::get('/admin-dira-dhamira-mikakati', [AdminManagerController::class, 'DiraDhamiraMikakati'])->name('admin-dira-dhamira-mikakati');
    Route::get('/admin-muundo', [AdminManagerController::class, 'muundo'])->name('admin-muundo');
    Route::get('/admin-idara', [AdminManagerController::class, 'idara'])->name('admin-idara');
    Route::get('/admin-vitengo', [AdminManagerController::class, 'vitengo'])->name('admin-vitengo');
    Route::get('/admin-huduma', [AdminManagerController::class, 'huduma'])->name('admin-huduma');
    Route::get('/admin-machapisho', [AdminManagerController::class, 'machapisho'])->name('admin-machapisho');

    Route::get('/admin-orodha-ya-madiwani', [AdminManagerController::class, 'orodhaYaMadiwani'])->name('admin-orodha-ya-madiwani');
    Route::get('/admin-kamati-za-kudumu', [AdminManagerController::class, 'kamatiZaKudumu'])->name('admin-kamati-za-kudumu');
    Route::get('/admin-bodi-za-usimamizi', [AdminManagerController::class, 'bodiZaUsimamizi'])->name('admin-bodi-za-usimamizi');

    Route::get('/admin-taarifa-kwa-vyombo', [AdminManagerController::class, 'taarifaKwaVyombo'])->name('admin-taarifa-kwa-vyombo');
    Route::get('/admin-picha', [AdminManagerController::class, 'picha'])->name('admin-picha');
    Route::get('/admin-video', [AdminManagerController::class, 'video'])->name('admin-video');
    Route::get('/admin-matukio', [AdminManagerController::class, 'matukio'])->name('admin-matukio');
    Route::get('/admin-slideshow', [AdminManagerController::class, 'slideshow'])->name('admin-slideshow');
    Route::get('/admin-mawasiliano', [AdminManagerController::class, 'mawasiliano'])->name('admin-mawasiliano');
    Route::get('/admin-socials', [AdminManagerController::class, 'socials'])->name('admin-socials');


    // Processor
    Route::post('/admin-process-huduma', [FormController::class, 'processHuduma'])->name('admin-process-huduma');
    Route::post('/admin-process-chapisho', [FormController::class, 'processChapisho'])->name('admin-process-chapisho');
    Route::post('/admin-process-kuhusu/{type}', [FormController::class, 'processKuhusu'])->name('admin-process-kuhusu');
    Route::post('/admin-process-idara', [FormController::class, 'processIdara'])->name('admin-process-idara');
    Route::post('/admin-process-vitengo', action: [FormController::class, 'processVitengo'])->name('admin-process-vitengo');
    Route::post('/admin-process-madiwani', action: [FormController::class, 'processMadiwani'])->name('admin-process-madiwani');
    Route::post('/admin-process-kamati-za-kudumu', action: [FormController::class, 'processkamatiZaKudumu'])->name('admin-process-kamati-za-kudumu');
    Route::post('/admin-process-bodi-za-usimamizi', action: [FormController::class, 'processBodiZaUsimamizi'])->name('admin-process-bodi-za-usimamizi');
    Route::post('/admin-process-taarifa-kwa-vyombo', action: [FormController::class, 'processTaarifaKwaVyombo'])->name('admin-process-taarifa-kwa-vyombo');
    Route::post('/admin-process-picha-video', action: [FormController::class, 'processPichaVideo'])->name('admin-process-picha-video');
    Route::post('/admin-process-matukio', action: [FormController::class, 'processMatukio'])->name('admin-process-matukio');
    Route::post('/admin-process-slaidi', action: [FormController::class, 'processSlideshow'])->name('admin-process-slaidi');
    
});
