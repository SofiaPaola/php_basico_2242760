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
    $estudiantes = [ "LU" => "Luis" , "DA" => "Daniel", "SA" => "Santiago"];
    print_r($estudiantes);
    echo "</pre>";
});

Route::get('paises', function () {
    $paises = [
        "Colombia" => [
            "capital" => "Bogotá",
            "moneda" => "Peso",
            "poblacion" => 50.34
        ],
        "Peru" => [
            "capital" => "Lima",
            "moneda" => "Sol",
            "poblacion" => 60.34
        ],
        "Paraguay" => [
            "capital" => "Asunción",
            "moneda" => "Guarani",
            "poblacion" => 70.34
        ]

    ];

    //invocar la vista
    //Llevando los datos a la vista
    return view("paises")->with("naciones" , $paises);
    return view("capital")->with("naciones" , $paises);
    return view("moneda")->with("naciones" , $paises);
    return view("poblacion")->with("naciones" , $paises);

});
