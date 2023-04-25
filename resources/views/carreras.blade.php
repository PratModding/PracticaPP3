<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/franklin-gothic-demi-2" rel="stylesheet">
    <title>Carreras</title>
</head>
<body>
    <style> 
h1 {
    font-family: 'Franklin Gothic',sans-serif;
    font-size: 25px;
}
ul {
    font-family: 'Raleway','sans-serif';
    font-weight: 1000;
}
ul a{
    text-decoration: none;
}
</style>
<div class= "card">
<h1 align="left">CARRERAS</h1>
<ul>
    <li>
        <a href= "{{route('carrera','Tecnicatura Superior en Logistica')}}">Tecnicatura Superior en Logística</a>
</li>
<li>
    <a href="{{route('carrera','Tecnicatura Superior en Analista de Sistemas')}}">Tecnicatura Superior en Analista de Sistemas</a>
</li>
<li>
    <a href="{{route('carrera','Tecnicatura Superior en Mantenimiento Industrial')}}">Tecnicatura Superior en Mantenimiento Industrial</a>
</li>
<li> 
    <a href="{{route('carrera','Tecnicatura Superior en Gestión Ambiental')}}">Tecnicatura Superior en Gestión Ambiental</a>
 </li>
</ul>
</div>
</body>
</html>