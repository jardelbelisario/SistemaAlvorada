<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="{{ url('home') }}"><i class='fa   fa-dashboard'></i> <span>Home</span></a></li>
            <li class="treeview">
                <a href=""><i class='fa  fa-graduation-cap'></i> <span>Alunos</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('home/alunos/cadastrar') }}">Cadastrar</a></li>
                    <li><a href="{{ url('home/alunos/listagem') }}">Visualizar</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class='fa fa-group'></i> <span>Professores</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('home/professores/cadastrar') }}">Cadastrar</a></li>
                    <li><a href="{{ url('home/professores/listagem') }}">Visualizar</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class='fa fa-folder-open'></i> <span>Cursos</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('home/alunos/cadastrar') }}">Cadastrar</a></li>
                    <li><a href="{{ url('home/alunos/listagem') }}">Visualizar</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class='fa fa-institution'></i> <span>Turmas</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('home/alunos/cadastrar') }}">Cadastrar</a></li>
                    <li><a href="{{ url('home/alunos/listagem') }}">Visualizar</a></li>
                    <li><a href="#">Notas</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class='fa fa-book'></i> <span>Disciplinas</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('home/disciplinas/cadastrar') }}">Cadastrar</a></li>
                    <li><a href="{{ url('home/disciplinas/listagem') }}">Visualizar</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"><i class='fa fa-tasks'></i> <span>Notas</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('home/notas/cadastrar') }}"> Cadastrar</a></li>
                    <li><a href="{{ url('home/notas/listagem') }}">Visualizar</a></li>
                </ul>
            </li>

            
        </ul><!--
         /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
