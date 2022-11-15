@extends("layout")
@section("conteudo")

  <h3>Carrinho</h3>


  @if(isset($cart) && count($cart) > 0)

  <table class="table table-hover">
    <thead>
        <tr>
            <th></th>
            <th>Nome</th>
            <th>Foto</th>
            <th>Valor</th>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">

        </tr>
    </thead>
    <tbody>
        @php $total = 0; @endphp
        @foreach($cart as $indice => $p)
        <tr>
            <td>
                <a href="{{ route('carrinho_excluir', [ 'indice' => $indice]) }}" class= "btn btn-danger"><i class=""></i>Excluir</a>
            </td>
            <td>{{ $p->nome }}</td>
            <td><img src= "{{ asset ($p->foto) }}" height="50"/></td>
            <td>{{ $p->valor }}</td>

        </tr>
        @php $total += $p->valor; @endphp
        @endforeach
    </tbody>
    <tfooster>
      <tr>
        <td colspan="5">
         -- Total do carrinho R$ {{ $total }}
        </td>
      </tr>
    </tfooster>
  </table>

  <form method="post" action="{{ route('carrinho_finalizar') }}">
    @csrf
    <input type="submit" value="finalizar Compra" class="btn btn-lg btn-success">
    
    
  </form>

  @else 
    <p>Nenhum Item no Carrinho</p>
    

  @endif
  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a href="{{ route ('home') }}" class="btn btn-light" role="button" data-bs-toggle="button">Voltar</a>
<br>

  </div>


@endsection