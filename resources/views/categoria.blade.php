@extends("layout")
@section("conteudo")

            
    @if(isset ($listaCategoria) && count($listaCategoria) > 0)
            <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="{{ route('categoria') }}">Todas</a>
    @foreach($listaCategoria as $cat)
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url($cat->id.'/categoria')}}">{{ $cat->categoria }}</a>
  </li>
  @endforeach
</ul>
 
    @endif
    </div>

    <div class="col-10">  
    @include ("_produtos", [ 'lista' => $lista])
    
    </div>
@endsection

