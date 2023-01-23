<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

{{-- @forelse ($libros as $libro)
    <p><h3>{{$libro['titulo']}}</h3>({{$libro['autor']}})</p>
@empty
    <p>No hay libros</p>
@endforelse --}}

@each('partials.fichalibro', $libros, 'libro', 'libro.vacio')
</body>
</html>
