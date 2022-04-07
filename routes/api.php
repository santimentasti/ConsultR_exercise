<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Superhero;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('superheroes/{id}', function($id) {
    return Superhero::find($id);
});

Route::get('/superheroes', function(Request $request) {	
	$publisher = $request->query('publisher');
	$hairColor = $request->query('hairColor');
	$eyeColor = $request->query('eyeColor');
	
	$query = DB::table('superheroes');
	
	$query = $eyeColor != '' ? $query->where('eyeColor', $eyeColor) : $query;	
	$query = $hairColor != '' ? $query->where('hairColor', $hairColor) : $query;	
	$query = $publisher != '' ? $query->where('publisher', $publisher) : $query;	
	
    return $query->orderBy('id', 'asc')->paginate(10);
});

