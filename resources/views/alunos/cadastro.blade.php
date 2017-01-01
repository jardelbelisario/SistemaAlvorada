@extends('app')

@section('htmlheader_title')
    Alunos
@endsection

@section('contentheader_title')
	Listagem de alunos
@endsection

@section('breadcrumb_level_1')
	<a href="{{ url('home') }}">Home</a>
@endsection

@section('breadcrumb_level_2')
	Alunos
@endsection


@section('main-content')

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-danger">
        <!-- form start -->
        <form action="/home/alunos/cadastrar" method="GET" enctype="multipart/form-data" role="form">
          {!! csrf_field() !!}
          <div class="box-header with-border">
            <h3 class="box-title">ADICIONAR USUÁRIO</h3>
            <!--
            <a href="/panel/usuarios" class="btn btn-primary pull-right">Listar Usuários</a>  -->
          </div><!-- /.box-header -->

          <div class="box-body">
            <div class="col-md-12">
             <a href="/panel/usuarios"class="btn btn-default pull-left" >
              <i class="fa fa-list"></i> Ir para listagem de Usuários
            </a>
          </div>

          <br><br>


          <div class="col-xs-5">

           @if( count( $errors) > 0)
           <div class="alert alert-danger-claro" role="alert">
            @foreach( $errors->all()  as $error)
            <h4><b>{{ $error }}</b></h4>
            @endforeach
          </div>
          @endif


          @if(session('mensagem'))
          <div class="alert alert-success-claro" role="alert">
            <h4><b>{{ session('mensagem')}}</b></h4>
          </div>
          @endif


          <div class="col-xs-12">
            <div class="form-group">
              <label for="exampleInputEmail1">Nome:</label>
              <input type="text" name="name" value="" placeholder="Nome" id="exampleInputNome" class="form-control">
            </div>
          </div>

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
          
          </div>


          <div class="col-xs-4">

          <div class="col-xs-12">
            <div class="form-group">
              <label for="exampleInputTelefone">Telefone:</label>
              <input type="text" name="telefone" value=""  placeholder="Telefone" id="exampleInputTelefone" class="form-control">
            </div>
          </div>

          <div class="col-xs-12">
            <div class="form-group">
              <label>Unidade Básica de Saúde (UBS)</label>
              <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" aria-hidden="true" name="id_ubs">

                <option selected="selected">Selecione uma UBS</option>

                <option value="">opção 1</option>
             

              </select>
            </div>
          </div>

          <div class="col-xs-12">
            <div class="form-group">
              <label>Nível de Usuário</label>

              <select class="form-control select2 select2-hidden-accessible" style="width: 100%;"  aria-hidden="true" name="permissao">
                <option value="3" >Enfermeiro(a)</option>
                <option value="2">Administrador</option>
                <option value="1">Desenvolvedor</option>
              </select>
            </div>
          </div>

          </div><!-- ./col-xs-4 -->

          <div class="col-xs-3">
            <div class="form-group">   
              <label for="exampleInputFile">Foto</label>           
           
              <img src="/img2/avatar.png" id="img-photo" class="tamanho-foto"><br>
              <div style="display:none"><canvas class="canvas-area" id="canvas" width="400" height="300"></canvas></div>
              <br>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-block" data-toggle="modal" data-target="#myModal" id="get-user-media" href="#" >Abrir Webcam
              </button>
              <p class="help-block">Insira uma fotografia no perfil.</p>
            </div>


          </div> <!-- ./col-xs-4 -->
  

          <div class="col-xs-12">
          <div class="box-footer">
            <div class="form-group">
              <button type="submit" class="btn btn-success btn-block btn-lg" type="submit">Enviar Dados</button>

            </div>
          </div>
          </div>

        </form>

      </div><!-- /.box primary-->
    </div><!-- /.col-md-12 --> 
  </div><!-- /.row -->



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <video id="user-media" class="video-area" autoplay="autoplay" width="550" height="300" ></video>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="takephoto" onClick="snapshot();"  data-dismiss="modal">Salvar Foto</button>
      </div>
    </div>
  </div>
</div>

</section><!-- /.content -->
@endsection
