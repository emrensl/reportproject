<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ornek;
use App\Http\Controllers\DB_process;
use App\Http\Controllers\Create_Report;

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/deneme',function(){return view("ornek");});
Route::get("/php",[Ornek::class,'test']);

Route::get("/add",[DB_process::class,'add']);
Route::get("/update",[DB_process::class,'update']);
Route::get("/delete",[DB_process::class,'delete']);
Route::get("/getdata",[DB_process::class,'get_data']);

Route::get("/list",[DB_process::class,'list']);
Route::get("/add_model",[DB_process::class,'add_model']);
Route::get("/update_model",[DB_process::class,'update_model']);
Route::get("/delete_model/{id}",[DB_process::class,'delete_model']);

Route::get("/index",[Create_Report::class,'index']);
Route::get("/get_report",[Create_Report::class,'get_report']);
Route::post("/index_sonuc",[Create_Report::class,'create_report'])->name("index_sonuc");
Route::get("/reports",[Create_Report::class,'reports'])->name("reports");
Route::get('/export_excel', 'App\Http\Controllers\ExportExcelController@index');
Route::get('/export_excel/excel', 'App\Http\Controllers\ExportExcelController@excel');
Route::get('/users/export/', 'App\Http\Controllers\ExportExcelController@exporte')->name('export_excel.excel');