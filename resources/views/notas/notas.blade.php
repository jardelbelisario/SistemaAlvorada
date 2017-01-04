@extends('app')

@section('htmlheader_title')
    Notas
@endsection

@section('contentheader_description')
  Todos os notas cadastrados no Sistema Alvorada
@endsection

@section('breadcrumb_level_2')
  Notas
@endsection

@section('breadcrumb_level_1')
  <a href="{{ url('home') }}">Home</a>
@endsection

@section('breadcrumb_level_2')
  Notas
@endsection




@section('main-content')
<section class="container-wrapper">
  <div class="row">
    <div class="col-xs-12 col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          Home
        </div>
        <div class="panel-body">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Nome do Aluno</th>
                <th class="centered">Qnt Faltas</th>
                <th class="centered">Nota 1</th>
                <th class="centered">Nota 2</th>
                <th class="centered">Recuperação</th>
                <th class="centered">Nota Final</th>
              </tr>
            </thead>
            <tbody>
              <?php for ($i=0; $i < 50; $i++) { ?>
              
              <tr role="row" class="odd">
                <td class="sorting_1">Gecko_<?= $i ?> </td>
                <td class="centered"><?= $i ?></td>
                <td class="centered">0<?= $i ?>.00</td>
                <td class="centered">0<?= $i ?>.00</td>
                <td class="centered">0<?= $i ?>.00</td>
                <td class="centered">0<?= $i ?>.00</td>
              </tr>
              
              <?php } ?>
            
            </tbody>
            <tfoot>       
             <tr>
                <th  rowspan="1" colspan="1">Nome do Aluno</th>
                <th class="centered" rowspan="1" colspan="1">Qnt Faltas</th>
                <th class="centered" rowspan="1" colspan="1">Nota 1</th>
                <th class="centered" rowspan="1" colspan="1">Nota 2</th>
                <th class="centered" rowspan="1" colspan="1">Recuperação</th>
                <th class="centered" rowspan="1" colspan="1">Nota Final</th>
             </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
   </div>
</section>
</div>
@endsection
