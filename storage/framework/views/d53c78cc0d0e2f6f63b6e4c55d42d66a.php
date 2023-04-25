<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/franklin-gothic-demi-2" rel="stylesheet">
    
    <title>Inicio</title>
</head>
<body>
    <style>
        h1,h2 {
            font-family: 'Franklin Gothic Demi', sans-serif;
        }

        .btn-primary{
            font-size: 25px;
            transition: .25s ease-in-out;  
        }

        
        .btn-primary:hover {
            background-color: green;
        }

        button a {
            text-decoration: none;
            color: white;
        }
       
        
        </style>
    <div class="card">
    <h1 align="left">CALENDARIO ACADÉMICO</h1>
</div>
<br>
<br>
<div class= "card-container">
    <h2 align="left">Inicio y Finalización de Cursada por Cuatrimestre</h2>
    <button class="btn btn-primary"><a href="<?php echo e(url('index/calendario')); ?>">Calendario</a></button>
    </div>
    <br>
    <br>
    <div class="card">
        <h1 align="left">CARRERAS</h1>
    </div>
    <br>
    <br>
    <div class= "card-container">
        <h2 align="left">Oferta Académica 2023</h2>
        <button class= "btn btn-primary"><a href= "<?php echo e(url('index/carreras')); ?>">Carreras</a></button>
    </div>
</body>
</html><?php /**PATH D:\laragon\www\prueba\resources\views/index.blade.php ENDPATH**/ ?>