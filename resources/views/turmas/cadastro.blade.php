@extends('app')

@section('htmlheader_title')
  Turmas
@endsection

@section('contentheader_title')
  Listagem de turmas
@endsection

@section('breadcrumb_level_1')
  <a href="{{ url('home') }}">Home</a>
@endsection

@section('breadcrumb_level_2')
  Turmas
  @endsection


  @section('main-content')

          <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12 col-md-12">
        <!-- general form elements -->

        <div class="box box-danger">
          <!-- form start -->
          <form action="/home/turmas/cadastrar" method="POST" enctype="multipart/form-data" role="form">
            {!! csrf_field() !!}
            <div class="box-header with-border">
              <!--  <h3 class="box-title">
                 <a href="/home/alunos/listagem" class="btn btn-default pull-left" >
                   <i class="fa fa-list"></i> Ir para listagem de Alunos
                 </a>
               </h3> -->
              <h3 class="box-title">DADOS DA TURMA</h3>
            </div><!-- /.box-header -->

            <div class="box-body">

              <div class="col-xs-12 col-md-5">

                <div class="col-xs-12">
                  <div class="form-group">
                    <label for="exampleInputNome1">Nome:</label>
                    <input type="text" name="name" value="" placeholder="Nome" id="oi1" class="form-control">
                  </div>
                </div>

                <div class="col-xs-12">
                  <div class="form-group">
                    <label>Curso</label>
                      <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" aria-hidden="true" name="id_ubs">
                        <option selected="selected">Selecione um Curso</option>                      
                        <option value="">Curso 1</option>
                        <option value="">Curso 2</option>
                        <option value="">Curso 3</option>
                        <option value="">Curso 4</option>
                    </select>
                  </div>
                </div>

                <div class="col-xs-12">
                  <div class="form-group">
                    <label>Turno</label>
                    <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" aria-hidden="true" name="id_ubs">
                      <option selected="selected">Selecione o turno</option>
                      <option value="">Manhã</option>
                      <option value="">Tarde</option>
                      <option value="">Noite</option>
                    </select>
                  </div>
                </div>

              </div>
              <!-- /.col-xs-12 col-md-6 -->


             <!-- <div class="col-xs-12 col-md-4">
                <div class="col-xs-12">
                  <div class="form-group">
                    <label for="exampleInputDisciplina1">Disciplinas</label>
                    <select multiple class="form-control">
                      <?php for ($i=1; $i < 10; $i++) { ?>
                       <option value="" name='teste0<?= $i?>' id='oi'>Disciplina 0<?= $i ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

              </div><!-- ./col-xs-12 col-md-4 -->
              
<div class="col-xs-12 col-md-6">
                <div class="col-xs-12">
        <div class="form-group">
                <label>Disciplinas</label>
                <select class="form-control select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
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
              </div>

              <!--<
              div class="col-xs-12 col-md-3">

                <div class="col-xs-12">
                  <div class="form-group">
                    <label for="exampleInputDisciplina1">Disciplinas</label>
                    <select multiple class="form-control">
                      
                      <option value="0" id="onde_vai"><br/></option><br/>
                      
                    </select>
                  </div>
                </div>

              </div><!-- ./col-xs-12 col-md-4 -->

      </div><!-- /.row -->

      <div class="col-xs-12">
        <div class="box-footer">
          <div class="form-group">
            <button  type="submit" class="btn btn-alvorada btn-block btn-lg" type="submit">
              Enviar Dados
            </button>
          </div>
        </div>
      </div>

      </form>

    </div><!-- /.box primary-->

    </div><!-- /.col-md-12 -->
    </div><!-- /.row -->

  </section><!-- /.content -->
@endsection
