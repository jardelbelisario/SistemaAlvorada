@extends('app')

@section('htmlheader_title')
Professores
@endsection

@section('contentheader_title')
Listagem de professores
@endsection

@section('breadcrumb_level_1')
<a href="{{ url('home') }}">Home</a>
@endsection

@section('breadcrumb_level_2')
professores
@endsection


@section('main-content')
<section class="container-wrapper">
<!-- form start -->
<form action="/home/professores/cadastrar" method="POST" enctype="multipart/form-data" role="form">
{!! csrf_field() !!}
  <div class="row">
    <div class="col-xs-12 col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          Home
        </div>
        <div class="panel-body">

          <div class="col-xs-12 col-md-4">

            <div class="col-xs-12">
              <div class="form-group">
                <label for="exampleInputEmail1">Nome:</label>
                <input type="text" name="name" value="" placeholder="Nome" id="exampleInputNome" class="form-control">
              </div>
            </div>

            <div class="col-xs-12">
              <div class="form-group">
                <label for="exampleInputTelefone">Telefone:</label>
                <input type="text" name="telefone" value=""  placeholder="Telefone" id="exampleInputTelefone" class="form-control">
              </div>
            </div>         
            

            <div class="col-xs-12">
              <div class="form-group">
                <label for="exampleInputTelefone">CPF:</label>
                <input type="text" name="cpf" value=""  placeholder="CPF" id="exampleInputTelefone" class="form-control">
              </div>
            </div>   

            <div class="col-xs-12">
              <div class="form-group">
                <label for="exampleInputTelefone">Data de nascimento:</label>
                <input type="text" name="data_nascimento" value=""  placeholder="Data de nascimento" id="exampleInputTelefone" class="form-control">
              </div>
            </div> 
          </div><!-- /.col-xs-12 col-md-4 -->

          <div class="col-xs-12 col-md-4">
            
            <div class="col-xs-12">
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="email" value="" placeholder="Insira o email" id="exampleInputEmail1" class="form-control">
              </div>
            </div>

            <div class="col-xs-12">
              <div class="form-group">
                <label for="exampleInputPassword1">Password(Senha)</label>
                <input type="password" name="password"  placeholder="Digite um password" id="exampleInputPassword1" class="form-control">
              </div>
            </div>
            
            <div class="col-xs-12">
              <div class="form-group">
                <label>Disciplina</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" aria-hidden="true" name="id_ubs">
                  <option selected="selected">Selecione uma disciplina</option>
                  <option value="">opção 1</option>
                  <option value="">opção 2</option>
                  <option value="">opção 3</option>
                </select>
              </div>
            </div> 
          </div><!-- ./col-xs-12 col-md-4 -->

          <div class="col-xs-12 col-md-4">
            
            <div class="col-xs-12">
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="email" value="" placeholder="Insira o email" id="exampleInputEmail1" class="form-control">
              </div>
            </div>

            <div class="col-xs-12">
              <div class="form-group">
                <label for="exampleInputPassword1">Password(Senha)</label>
                <input type="password" name="password"  placeholder="Digite um password" id="exampleInputPassword1" class="form-control">
              </div>
            </div>
          </div> <!-- ./col-xs-4 -->

        </div><!-- /.panel-body-->
      </div><!-- /.panel-default-->
    </div><!-- /.col-xs-12 col-md-12-->
    <div class="col-xs-12 col-md-12">
      <div class="box-footer">
        <div class="form-group">
          <button  type="submit" class="btn btn-alvorada btn-block btn-lg" type="submit">
            Enviar Dados
          </button>
        </div>
      </div>
    </div><!-- /.col-xs-12 col-md-12-->
  </div><!-- /.row -->
</form>
</section><!-- /.content -->
@endsection
