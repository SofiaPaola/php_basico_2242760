<?php

use Illuminate\Support\Facades\Route;

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

//callback: funcion sin nombre
//que haceparte de los parametros de la invocacion de otra
Route::get('variables', function(){
    //JAVA: Fuertemente tipados
    //PHP, JAVASCRIPT, PYTHON; Delimite tipados
    $mensaje = 10;
    var_dump($mensaje);
    echo "<hr />";
    $mensaje = "Sofía Gutiérrez";
    var_dump($mensaje);
    $mensaje = true;
    var_dump($mensaje);
});

Route::get("arreglos", function(){
    //Arreglo: Estructura de datos
    $estudiantes = [ "AN" => "Ana" , "MA" => "María" , "JO" => "Jorge"];
    echo "<pre>";
    print_r($estudiantes);
    echo "</pre>";
    $estudiantes = [ "LU" => "Luis" , "DA" => "Daniel", "SA" => "Santiago"];
    echo "<pre>";
    print_r($estudiantes);
    echo "</pre>";
});

Route::get('paises', function () {
    $paises = [
        "COLOMBIA" => [
            "capital" => "Bogotá <br>",
            "moneda" => "Peso <br>",
            "poblacion" => 50.34
        ],
        "PERU" => [
            "capital" => "Lima <br>",
            "moneda" => "Sol <br>",
            "poblacion" => 60.34
        ],
        "PARAGUAY" => [
            "capital" => "Asunción <br>",
            "moneda" => "Guarani <br>",
            "poblacion" => 70.34
        ]

    ];
    foreach ($paises as $nombrepais=> $pais){
        echo "<h1>$nombrepais</h1>";
        echo "<pre>";
        echo ($pais["capital"]);
        echo ($pais["moneda"]);
        echo ($pais["poblacion"]);
        echo "</pre>";

    }
});
