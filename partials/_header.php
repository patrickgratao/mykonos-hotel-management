<?php 
       error_reporting(E_ALL ^ E_NOTICE); //Ignora os erros do tipo notice
       include ("helpers/mensagens.php"); //Inclusão das mensagens de erro ou sucesso
?> 

<!doctype html>
<html class="no-js" lang="pt_BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mykonos | Sistema de Cadastro de Hóspedes</title>
    <meta name="description" content="">
    <?php include('partials/_estilos.php'); ?>
    
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <!-- logo image<a href="index.php"><img src="assets/img/logo/logo.png" alt="" /></a> -->
                        <h1 class="logo-text"><a href="index.php">Mykonos</a></h1>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

                    <div class="header-top-menu">
                        <!-- area para search bar no topo -->
                        <ul class="nav navbar-nav notika-top-nav mykonos-search">
                            <li class="nav-item dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-search"></i></span></a>
                                <div role="menu" class="dropdown-menu search-dd animated fadeIn" id="pesquisar">
                                    <form class="search-input" action="pesquisar.php">
                                        <i class="notika-icon notika-left-arrow"></i>
                                        <input class="form-control" type="text" placeholder="Pesquisar hóspede..." aria-label="Pesquisar" name="pesquisaHospede" autofocus="true">
                                    </form>
                                </div>
                            </li>

                            <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-menus"></i></span></a>
                                <div role="menu" class="dropdown-menu message-dd task-dd animated zoomIn">
                                    <div class="hd-mg-tt">
                                        <h2>Painel de Controle</h2>
                                    </div>
                                    <div class="hd-message-info hd-task-info">
                                        <a href="logout.php">Sair do Sistema</a>
                                    </div>
                                </div>
                            </li> 
                        </ul>
                    </div>
                </div>
            </div> 
        </div>
    </div>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" data-target="#Home" href="index.php">Início</a>

                                </li>
                                <li><a data-toggle="collapse" data-target="#demoevent" href="#">Hóspedes</a>
                                    <ul id="demoevent" class="collapse dropdown-header-top">
                                        <li><a href="listar-hospedes.php">Hóspedes Cadastrados</a></li>
                                        <li><a href="cadastrar-hospede.php">Cadastrar Hóspede</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#democrou" href="#">Categorias</a>
                                    <ul id="democrou" class="collapse dropdown-header-top">
                                        <li><a href="listar-categorias.php">Listar categorias</a></li>
                                        <li><a href="cadastrar-categoria.php">Cadastrar nova categoria</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li class=""><a href="index.php"><i class="notika-icon notika-house"></i> Início</a>
                        </li>
                        <li><a data-toggle="tab" href="#menuHospedes"><i class="notika-icon notika-support"></i> Hóspedes</a>
                        </li>
                        <li><a data-toggle="tab" href="#menuCategorias"><i class="notika-icon notika-edit"></i> Categorias</a>
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="menuHospedes" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="listar-hospedes.php">Hóspedes Cadastrados</a>
                                </li>
                                <li><a href="cadastrar-hospede.php">Cadastrar Hóspede</a>
                                </li>
                            </ul>
                        </div>
                        <div id="menuCategorias" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="listar-categorias.php">Ver todas categorias</a>
                                </li>
                                <li><a href="cadastrar-categoria.php">Cadastrar categoria</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Menu area End-->
    <!-- Start Status area -->
    <div class="notika-status-area">
        <div class="container">
            <?php 
                mostraAlerta('danger');
                mostraAlerta('success');
           ?>