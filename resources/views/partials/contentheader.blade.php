<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
<!--         @yield('contentheader_title', 'Cabeçalho da página vem aqui')
        <small>@yield('contentheader_description')</small> -->
        {{$contentheader_title}} 
        <small>| {{$contentheader_description}}</small>
    </h1>
    <ol class="breadcrumb">
        <li>
        	<a href="#"><i class="fa fa-dashboard"></i> @yield('breadcrumb_level_1')</a>
        </li>
        <li class="active">@yield('breadcrumb_level_2')</li>
    </ol>
</section>