<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Pagina de saludo | Saludo</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div>
<!-- Valores de controlador Https\Controllers/HelloWorkController-->
            <h3>Mensaje obtenido desde el controlador : {{$mensaje}}</h3>
            <p> Valor obtenido desde el controladro {{$valores}}</p>    
<!-- El name de  la ruta creada  ejemplo : Route::get("/producto",[HelloW...::class,'funproducto'])->name('producto'); -->
            <a href="{{ route ('producto')}}">Ver Pagina Producto!</a>
    </div>
 
  <!-- Bootstrap JS and dependencies (Popper.js) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
