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

          <div class="col-xs-12 col-md-6">

            <div class="col-xs-12">
              <div class="form-group">
                <label for="exampleInputEmail1">Nome:</label>
                 <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-user"></i>
                  </div>
                <input type="text" name="name" value="" placeholder="Nome" id="exampleInputNome" class="form-control">
                </div>
              </div>
            </div>

            <div class="col-xs-12">
              <div class="form-group">
                <label for="exampleInputTelefone">Telefone:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <input type="text" class="form-control" data-inputmask='"mask": "(99) 99999-9999"' data-mask>
                </div>
                <!-- /.input group -->
              </div>
            </div>         
            

            <div class="col-xs-12">
              <div class="form-group">
                <label for="exampleInputTelefone">CPF:</label>
                 <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-warning"></i>
                  </div>
                  <input type="text" class="form-control" data-inputmask='"mask": "(99) 99999-9999"' data-mask>
                </div>
              </div>
            </div>   

            <div class="col-xs-12">
              <div class="form-group">
                <label for="exampleInputTelefone">Data de nascimento:</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                </div>
              </div>
            </div> 
          </div><!-- /.col-xs-12 col-md-6 -->

          <div class="col-xs-12 col-md-6">
            
            <div class="col-xs-12">
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-envelope"></i>
                  </div>
                <input type="email" name="email" value="" placeholder="Insira o email" id="exampleInputEmail1" class="form-control">
                </div>
              </div>
            </div>

            <div class="col-xs-12">
              <div class="form-group">
                <label for="exampleInputPassword1">Password(Senha)</label>
                  <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-lock"></i>
                  </div>
                    <input type="password" name="password"  placeholder="Digite um password" id="exampleInputPassword1" class="form-control">
                  </div>
              </div>
            </div>
            
            <div class="col-xs-12">
              <div class="form-group">
                <label>Disciplinas a ser(em) ministrada(s) pelo professor</label>
                <select class="form-control select2" multiple="multiple" data-placeholder="Selecione a(s) disciplina(s)" style="width: 100%;">
                  <option>Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
             </div>
            </div> 
          </div><!-- ./col-xs-12 col-md-4 -->

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
