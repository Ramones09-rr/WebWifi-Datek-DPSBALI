<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatekController;
use App\Http\Controllers\DatinController;
use App\Http\Controllers\RehabController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\NodeController;
use App\Http\Controllers\OloController;
use App\Models\Datek;
use Illuminate\Support\Facades\Request;

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
    return redirect('/login');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/datek/getData', [DatekController::class, 'getData'])->name('datek.getData');
    Route::resource('/datek', DatekController::class);
    Route::get('/exportdatek', [DatekController::class, 'datekexport'])->name('exportdatek');
    Route::post('/importdatek', [DatekController::class, 'datekimport'])->name('importdatek');

    Route::get('/laporan/getData', [LaporanController::class, 'getData'])->name('laporan.getData');
    Route::resource('/laporan', LaporanController::class);
    Route::get('/exportlaporan', [LaporanController::class, 'laporanexport'])->name('exportlaporan');
    Route::post('/importlaporan', [LaporanController::class, 'laporanimport'])->name('importlaporan');

    Route::get('/rehab/getData', [RehabController::class, 'getData'])->name('rehab.getData');
    Route::get('/rehab/download/{file}', [RehabController::class, 'download'])->name('rehab.download');
    Route::resource('/rehab', RehabController::class);

    Route::get('/datin/getData', [DatinController::class, 'getData'])->name('datin.getData');
    Route::resource('/datin', DatinController::class);
    Route::get('/exportdatin', [DatinController::class, 'datinexport'])->name('exportdatin');
    Route::post('/importdatin', [DatinController::class, 'datinimport'])->name('importdatin');

    Route::get('/olo/getData', [OloController::class, 'getData'])->name('olo.getData');
    Route::resource('/olo', OloController::class);
    Route::get('/exportolo', [OloController::class, 'oloexport'])->name('exportolo');
    Route::post('/importolo', [OloController::class, 'oloimport'])->name('importolo');

    Route::get('/node/getData', [NodeController::class, 'getData'])->name('node.getData');
    Route::resource('/node', NodeController::class);
    Route::get('/exportnode', [NodeController::class, 'nodeexport'])->name('exportnode');
    Route::post('/importnode', [NodeController::class, 'nodeimport'])->name('importnode');
});

Route::any('/search', function(){
    $sn = Request::get('sn');
    if($sn != ""){
        $data = Datek::where('sn', 'LIKE', '%' . $sn . '%')->first();
        if($data != ""){
            return view('home')->withDetails($data)->withQuerry($sn);
        }
        else{
            return view('home')->withMessage("No Details Found!");
        }
    }
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
