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
<section class="container-wrapper">

  <!-- form start -->
  <form action="/home/alunos/cadastrar" method="POST" enctype="multipart/form-data" role="form">
  {!! csrf_field() !!}
  <div class="row">
    <div class="col-xs-12 col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">DADOS PESSOAIS</div>
          <div class="panel-body">
            <div class="col-xs-12 col-md-5">

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

            </div><!-- /.col-xs-12 col-md-5 -->


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

            </div><!-- ./col-xs-12 col-md-4 -->

            <div class="col-xs-12 col-md-3">
              <div class="form-group">   
                <label for="exampleInputFile">Foto</label> 
                <img src="/img2/avatar.png" id="img-photo" class="tamanho-foto"><br>
                <div style="display:none"><canvas class="canvas-area" id="canvas" width="400" height="300"></canvas></div>
               
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-block" data-toggle="modal" data-target="#myModal" id="get-user-media" href="#" >Abrir Webcam
                </button>
                <p class="help-block">Insira uma fotografia no perfil.</p>
              </div>
            </div> <!-- ./col-xs-3 -->
          </div><!-- /.panel-bod-->
        </div><!-- /.panel panel-defaul -->
      </div><!-- /.col-xs-12 col-md-12 -->
  </div><!-- /.row -->

  <div class="row">
    <div class="col-xs-12 col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">DADOS DE ENDEREÇO</div>
          <div class="panel-body">
            <div class="col-xs-12 col-md-4">
              <div class="col-xs-12">
                  <div class="form-group">
                    <label for="exampleInputEmail1">CEP:</label>
                    <input type="text" name="name" value="" placeholder="Nome" id="exampleInputNome" class="form-control">
                  </div>
              </div>

              <div class="col-xs-12">
                  <div class="form-group">
                    <label>Estado</label>
                    <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" aria-hidden="true" name="id_ubs">
                      <option selected="selected">Selecione um Estado</option>
                      <option value="">opção 1</option>
                      <option value="">opção 1</option>
                      <option value="">opção 1</option>
                      <option value="">opção 1</option>
                    </select>
                  </div>
              </div>

              <div class="col-xs-12">
                <div class="form-group">
                  <label>Cidade</label>

                  <select class="form-control select2 select2-hidden-accessible" style="width: 100%;"  aria-hidden="true" name="permissao">
                  <option selected="selected">Selecione uma Cidade</option>
                    <option value="3">opção 1</option>
                    <option value="2">opção 1</option>
                    <option value="1">opção 1</option>
                  </select>
                </div>
              </div>

            </div><!-- ./col-xs-12 col-md-6 -->


            <div class="col-xs-12 col-md-4">
            
              <div class="col-xs-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Bairro</label>
                  <input type="email" name="email" value="" placeholder="Insira o email" id="exampleInputEmail1" class="form-control">
                </div>
              </div>

              <div class="col-xs-12">
                <div class="form-group">
                  <label for="exampleInputPassword1">Rua</label>
                  <input type="password" name="password"  placeholder="Digite um password" id="exampleInputPassword1" class="form-control">
                </div>
              </div>

              <div class="col-xs-12">
                <div class="form-group">
                  <label for="exampleInputTelefone">Número:</label>
                  <input type="text" name="telefone" value=""  placeholder="Telefone" id="exampleInputTelefone" class="form-control">
                </div>
              </div>

            </div><!-- ./col-xs-12 col-md-4 -->

            <div class="col-xs-12 col-md-4">
              
              <div class="col-xs-12">
                <div class="form-group">
                  <label for="exampleInputEmail1">Complemento</label>
                  <input type="text" name="complemento" value="" placeholder="Complemento" id="exampleInputEmail1" class="form-control">
                </div>
              </div>

            </div><!-- ./col-xs-12 col-md-4 -->

          </div><!-- /.panel-body-->
        </div>
      </div>
    </div><!-- /.row -->

    <div class="row">
    <div class="col-xs-12 col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">DADOS DE MATRÍCULA</div>
          <div class="panel-body">
            <div class="col-xs-12 col-md-12">
              
              <div class="col-xs-12 col-md-6">
                  <div class="form-group">
                    <label>Curso</label>
                    <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" aria-hidden="true" name="id_ubs">
                      <option selected="selected">Selecione um Curso</option>
                      <option value="">opção 1</option>
                      <option value="">opção 1</option>
                      <option value="">opção 1</option>
                      <option value="">opção 1</option>
                    </select>
                  </div>
              </div>

              <div class="col-xs-12 col-md-6">
                <div class="form-group">
                  <label>Turma</label>

                  <select class="form-control select2 select2-hidden-accessible" style="width: 100%;"  aria-hidden="true" name="permissao">
                  <option selected="selected">Selecione uma Turma</option>
                    <option value="3">opção 1</option>
                    <option value="2">opção 1</option>
                    <option value="1">opção 1</option>
                  </select>
                </div>
              </div>

            </div><!-- ./col-xs-12 col-md-12 -->

          </div><!-- /.panel-body-->
        </div>
      </div>
      <div class="col-xs-12">
        <div class="box-footer">
          <div class="form-group">
            <button  type="submit" class="btn btn-alvorada btn-block btn-lg" type="submit">
              Enviar Dados
            </button>
          </div>
        </div>
      </div>
    </div><!-- /.row -->
    </form>



    

    <!-- Modal Chamando a tela Video -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
            <video id="user-media" class="video-area tamanho-video" autoplay="autoplay" ></video>
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
