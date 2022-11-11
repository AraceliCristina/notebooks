<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notebox - Ecommerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    

  </head>
<body>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="{{url('imagens/banner.jpg')}}" class="d-block w-100" alt="...">
          </div>
        </div>
      </div>     
  <nav class="navbar navbar-light navbar-expand-md bg-light pl-5 pr-5 mb-5">
  <a href="#" class="navbar-brand">Notebox</a>
    <div class="collapse navbar-collapse">
        <div class="navbar-nav">
            <a class="nav-link" href="{{ route('home') }}">HOME</a>
            <a class="nav-link" href="{{ route('categoria') }}">Categorias</a>
            <a class="nav-link" href="{{ route('cadastrar') }}">Cadastrar</a>
          
        </div>
    </div>   
 
   
    <a href="{{ route ('ver_carrinho') }}" class="btn btn-warning"> <i class="bi bi-glyphicon glyphicon-shopping-cart">Carrinho</i></a> 
    

    

  </nav>

  <div class="conteiner">
    <div class="row">
        @yield ("conteudo")
    </div>
  </div>

</body>
</html>