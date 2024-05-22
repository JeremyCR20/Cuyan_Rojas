<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear productos</title>
</head>
<body>
    <form action="{{route('producto.store')}}" method="post">
        @csrf
        <label for="codigo">Código</label>
        <input type="text" name="codigo" id="codigo">
        
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">
        
        <label for="descripcion">Descripción</label>
        <input type="text" name="descripcion" id="descripcion">
        
        <label for="precio">Precio</label>
        <input type="number" step="0.01" name="precio" id="precio">
        
        <label for="stock">Stock</label>
        <input type="number" name="stock" id="stock">
        
        <input type="submit" value="Guardar">
    </form>
</body>
</html>
