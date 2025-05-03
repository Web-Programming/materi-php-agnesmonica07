<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('beranda',
    ['name' => 'Agnes Monica','email' => 'agnesmonica071205@gmail.com', 'address' => 'jln perindustrian 2 Griya Villa Sukarami']
    );
});

Route::get('/berita/{id}/{judul?}', function ($id, $judul = null) {
    return view('berita',
    ['id' => $id, 'judul' => $judul]
    );
});

//membuat route ke hlm prodi index melalui controller proses
Route::get('/prodi/index', [ProdiController::class,'index']);
