<?php
use App\Http\Controllers\Crudcontroller;
use Illuminate\Support\Facades\Route;



  Route::get('index',[Crudcontroller::class,'index']);
  Route::post('store',[Crudcontroller::class,'store']);
  Route::get('show',[Crudcontroller::class,'show']);
  Route::get('edit{id}',[Crudcontroller::class,'edit'])->name('edit');
  Route::post('update{id',[Crudcontroller::class,'update'])->name('update');
  Route::delete('delete{id',[Crudcontroller::class,'delete'])->name('delete');