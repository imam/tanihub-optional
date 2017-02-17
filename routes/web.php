<?php

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
    return view('welcome');
});

Route::get('/romanconverter',function(\Illuminate\Http\Request $request){
    $converter = new \CrazyCodr\Converters\Roman();
    return response($converter->toRoman($request->number));
});

Route::get('/partition',function(\Illuminate\Http\Request $request){
    function partition($sum, $largest_number){
        if($largest_number == 0) return 0;
        if($sum == 0) return 1;
        if($sum < 0) return 0;
        return partition($sum,$largest_number-1)+partition($sum-$largest_number,$largest_number);
    }

    dd(partition(5,10));
});

Route::get('/byte_swap',function(\Illuminate\Http\Request $request){
    $collect = collect(str_split($request->number));
    $chunk = $collect->splice(4);
    $collect->each(function($c) use ($chunk){
        $chunk->push($c);
    });
    dd(implode($chunk->toArray()));
});