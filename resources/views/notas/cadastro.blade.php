@extends('app')

@section('htmlheader_title')
@section('contentheader_title')
  Notas
@endsection

@section('breadcrumb_level_1')
<a href="{{ url('home') }}">Home</a>
@endsection

@section('breadcrumb_level_2')
Notas
@endsection


@section('main-content')


@section('main-content')
<div class="container-wrapper">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <!--<div class="panel-heading">Alunos - Pesquise por matrícula, nome, telefone, turma</div>-->
          <div class="panel-body">
            <div class="box box-danger">      
              <div class="box-header with-border">
                <h3 class="box-title">
                  CADASTRO DE NOTAS DA TURMA: <b>AAAAAAAAA</b>
                </h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Nome Aluno</th>
                      <th>Nota 1</th>
                      <th>Nota 2</th>
                      <th>Nota 3</th>
                      <th>Média</th>
                    </tr>
                  </thead>
                  <tbody>
                  <form action="">
                    <?php for ($i=0; $i < 50; $i++) { ?>
                    
                    <tr role="row" class="odd">
                      <td class="sorting_1">Gecko_Fulando de Tal <?= $i ?> da Silva</td>
                      <td> 
                        <input name="nota1" id="status" type="text" value="">
                      </td>
                      <td> 
                        <input name="nota2" id="status" type="text" value="">
                      </td>
                      <td> 
                        <input name="nota3" id="status" type="text" value="">
                      </td>
                      <td> 
                        <input name="media" id="status" type="text" value="" disabled>
                      </td>
                      
                    </tr>
                    
                    <?php } ?>
                    </form>
                  </tbody>
                  <tfoot>       
                   <tr>
                     <th rowspan="1" colspan="1">Nome Aluno</th>
                      <th>Nota 1</th>
                      <th>Nota 2</th>
                      <th>Nota 3</th>
                      <th>Média</th>
                   </tr>
                  </tfoot>
                </table>
               </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
