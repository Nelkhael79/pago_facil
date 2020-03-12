<?php

use App\Producto;




Route::get('/', function () {
    return view('welcome');
});
/*
// Ruta para arreglos multidimensionales
Route::get('arreglosMD',function(){
    $paises = [ "Colombia" => [
                        "Capital" => "Bogota D.C.",
                        "Moneda" => "Peso",
                        "Poblacion" => 50,
                        "CiudadesImportantes" =>["Cali" , "Medellin" , "Barranquilla"]
                                ],  
                "Peru" => [
                    "Capital" => "Lima",
                    "Moneda" => "Sol",
                    "Poblacion" => 32,
                    "CiudadesImportantes" =>["Arequipa" , "Trujillo" , "Chiclayo"]
                ],
                "Bolivia" => [
                    "Capital" => "Sucre",
                    "Moneda" => "Boliviano",
                    "Poblacion" => 12,
                    "CiudadesImportantes" =>["Santa Cruz de la Sierra" , "El Alto" , "Cochabamba"]
                ] 
            ];
                
                /*
                //Recorrer el arreglo
                foreach($paises as $pais => $informacion){
                    echo "<h1> $pais:</h1>";
                    foreach($informacion as $clave => $valor){
                        echo "$clave: $valor", "<br/>";
                    }
                };
                */
                    /*
                //MOSTRAR LA VISTA

                return view('paises')
                    ->with ('paises' , $paises);
                */
            



Route::get('prueba', function (){

            // Insetar Productos
            $producto = new Producto();
            
            $p -> nombre = "Bicicleta";
            // Crear Atributos
            $p -> valor_unitario = 450.897;
            // Guardar en DB
            $p -> save();


} );

Route::get('NuevoProducto', function(){

    //mostrar el formulario de guardar producto
    return view('Productos.create');
});

Route::post('GuardarProducto',function(){

    //recibir los datos que vienen desde formulario

    $p = new Producto();
            


            $p -> nombre = $_POST["nombre"];
            // Crear Atributos
            $p -> valorunitario = $_POST["valor"];
            // Guardar en DB
            $p -> save();
            echo "Producto Registrado";
    echo "<pre>";
    var_dump($_POST); 
    echo "</pre>";

});