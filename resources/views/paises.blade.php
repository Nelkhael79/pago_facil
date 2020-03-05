<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/css/bootstrap.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Paises </h1>
    <table class = "table-bordered">
        <thead>
            <tr>
            <th> País </th>
            <th> Capital </th>
            <th> Moneda </th>
            <th> Población </th>
            <th> Ciudades </th>
            </tr>
        </thead>

        <tbody>
            @foreach($paises as $pais => $informacion)
                <tr>
                    
                    <td rowspan ="3"> {{ $pais}} </td>
                    <td rowspan ="3"> {{ $informacion ['Capital']   }} </td>
                    <td rowspan ="3"> {{ $informacion ['Moneda']   }} </td>
                    <td rowspan ="3"> {{ $informacion ['Poblacion'] }} </td>
                    <td  class="bg-secondary" > {{ $informacion ['CiudadesImportantes'][0] }} </td>
                                       
                </tr>
                <tr> 
                    <td class="bg-secondary"> {{ $informacion ['CiudadesImportantes'][1] }} </td>
                </tr>
                <tr> 
                    <td class="bg-secondary"> {{ $informacion ['CiudadesImportantes'][2] }} </td>
                </tr>

            @endforeach
        </tbody>

    </table>
</body>
</html>