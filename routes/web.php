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
    function recursion($left, $last = 1 , $ar = []) {
        if($left == 0) {
            foreach ($ar as $key  => $n) {
                if($key == count($ar)-1){
                    printf("%d", $n);
                }
                else{
                    printf("%d + ", $n);
                }
            }
            print "<br>";
            return;
        }
        for($n = $last; $n <= $left; $n++) {
            $b = $ar;
            array_push($b, $n);
            recursion($left - $n, $n, $b);
        }
    }
    recursion($request->number);
});

Route::get('/byte_swap',function(\Illuminate\Http\Request $request){
    $collect = collect(str_split($request->number));
    $chunk = $collect->splice(4);
    $collect->each(function($c) use ($chunk){
        $chunk->push($c);
    });
    return implode($chunk->toArray());
});

Route::get('unique',function(\Illuminate\Http\Request $request){
    return implode(collect(str_split($request->word))->unique()->toArray());
});