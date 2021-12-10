<?php
//Ruta a la raíz del proyecto laravel
Route::get('/',function (){
 return "Haciendo una pruwba de ruta desde la raíz";
});
/*Ruta que accede a la web contactos si tenemos que hacer mas rutas especificas hay que cambiar
las rutas en función del destino*/
Route::get('contactos', function(){
  return "Haciendo prueba desde la ruta desde la web contactos";

});

Route::post(); // en función del método que estamos usando en el formulario,
Route::put();
Route::path();
Route::delete();

//Pasar un parámetro a la ruta que ha ser cumplimentado de manera obligada sino error 404 Not Funt
 Route::get('contactos/{nombre}',function ($nombre){
    return "Prueba de ruta con parámetros" .$nombre;
});

 //Ruta con parámetro no obligatorio en caso de no pasar parámetro, lo detectara como invitado

Route::get('contactos/{nombre?}',function ($nombre="Invitado"){
    return "Prueba de ruta con parámetros" .$nombre;
});

//Rpute:get ('pruebas_laravel',function
?>
