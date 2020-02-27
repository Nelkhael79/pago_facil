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
// Ruta para arreglos multidimensionales
Route::get('arreglosMD',function(){
    $paises = [ "Colombia" => [
                        "Capital :" => "Bogota D.C.",
                        "Moneda " => "Peso",
                        "Poblacion :" => 50
                                ],  
                "Peru" => [
                    "Capital :" => "Lima",
                    "Moneda " => "Sol",
                    "Poblacion :" => 32
                ],
                "Bolivia" => [
                    "Capital :" => "Sucre",
                    "Moneda " => "Boliviano",
                    "Poblacion :" => 12
                ] 
            ];
                echo "<pre>";
                var_dump($paises);
                echo "</pre>";

                //Recorrer el arreglo
                foreach($paises as $pais => $informacion){
                    echo "<h1> $pais:</h1>";
                    foreach($informacion as $clave => $valor){
                        echo "$clave: $valor", "<br/>";
                    }
                };
    

});