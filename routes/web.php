<?php

use App\Articulo;

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

/*Route::get('/', function () {
    return view('welcome');
});
*/


Route::get("/", "MiController@index");
Route::get("/crear", "MiController@create");
Route::get("/articulos", "MiController@store");
Route::get("/mostrar", "MiController@show");
Route::get("/balaguer", "MiController@balaguer");
Route::get("/contacto", "MiController@contactar");
Route::get("/galeria", "MiController@fotos");
Route::get("/prueba", "MiController@prueba");

/*Route::get("/insertar", function(){

BD::insert("INSERT INTO articulos (NOMBRE_ARTICULO, PRECIO, PAIS_ORIGEN, SECCION, OBSERVACIONES) 
VALUES (?,?,?,?,?)", ["JARRONa", 115.2, "JAPONA", "CERAMICA", "GANGAY"]);


});
*/


Route:: get("/leer", function(){

   
/*$articulos=Articulo::all();

foreach ($articulos as $articulo) {
   
echo "Nombre de articulo: " . $articulo->Nombre_Articulo . 
"Precio de articulos: " . $articulo->Precio . "<br>";

}*/

$articulos=Articulo::where("seccion","ceramica")->get();
return $articulos ;



});