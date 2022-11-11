@extends("layout")
@section("conteudo")
    <div class="col-12">
    <h2 class="mb-3"> Cadastrar Cliente</h2>

    <form action="{{ route('salvarCliente') }}" method="POST">
      @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
              <label for="nome">Nome</label>
              <input type="nome" class="form-control" name="nome" id="nome" placeholder="Nome">
            </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Senha</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Senha">
          </div>
        </div>
        <div class="row">
          <div class="col-5">
          <label for="inputAddress">Endereço</label>
          <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Rua dos Bobos, Bairro ...">
        </div>
        
        <div class="col-1">
          <label for="inputAddress">Numero</label>
          <input type="text" class="form-control" name="numero" id="numero" placeholder="nº 0">
        </div>
        </div>
        <div class="row">
          <div class="col-2">
            <label for="inputCity">Cidade</label>
            <input type="text" class="form-control" name="cidade" id="cidade">
          </div>
          <div class="col-2">
            <label for="inputEstado">Estado</label>
            <input type="text" class="form-control" name="estado" id="estado">
          </div>
          <div class="col-2">
            <label for="inputCEP">CEP</label>
            <input type="text" class="form-control" name="cep" id="cep">
            
          </div>
        </div>
    <br>
        
        <button type="submit" class="btn btn-primary">Salvar</button>
      </form>

    
@endsection