<h1>Crear Producto </h1>
<form action= "{{url ('GuardarProducto') }}" method="post">
        @csrf
        Nombre:<input type="text" name="nombre"/>
        </br>
        Valor Unitario: <input type="text" name="valor"/>
        </br>

        <button type="submit">
            Guardar
        </button>
    

</form>