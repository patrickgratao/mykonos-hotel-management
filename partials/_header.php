<!doctype html>
<html class="no-js" lang="pt_BR">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mykonos | Sistema de Cadastro de Hóspedes</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <!-- meanmenu CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/animate.css">
     <!-- summernote CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/summernote/summernote.css">
    <!-- Range Slider CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/themesaller-forms.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/normalize.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- jvectormap CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- notika icon CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/notika-custom-icon.css">
    <!-- bootstrap select CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/bootstrap-select/bootstrap-select.css">
    <!-- datapicker CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/datapicker/datepicker3.css">
    <!-- dialog CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/dialog/sweetalert2.min.css">
    <link rel="stylesheet" href="assets/css/dialog/dialog.css">
    <!-- Color Picker CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/color-picker/farbtastic.css">
    <!-- Chosen CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/chosen/chosen.css">
    <!-- notification CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/notification/notification.css">
    <!-- dropzone CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/dropzone/dropzone.css">
    <!-- wave CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/wave/waves.min.css">
    <!-- Data Table JS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">
    <!-- wave CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/wave/waves.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <link rel="stylesheet" href="assets/css/mykonos.css">

  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">


<!-- Código que verifica e preenche o CEP automaticamente -->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

  <script type="text/javascript"><?php include("assets/js/buscaCep.js") ?></script> 
  <!-- fim do código -->
  
<script type="text/javascript" src="assets/js/info-reserva.js"> </script>

  <!-- Código para funcionamento do tinymce -->
  <script src='assets/js/tinymce/tinymce.min.js'></script>

    <script>
      tinymce.init({
        selector: '#informacoesAdicionais',
        menubar: false,
        language: 'pt_BR',
        plugins: [
          'advlist autolink lists link image charmap print preview anchor textcolor',
          'searchreplace visualblocks code fullscreen',
          'insertdatetime media table contextmenu paste code help wordcount'
        ],
        toolbar: 'insert | undo redo | sizeselect |  fontsizeselect | formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
      });
  </script>
  <!-- fim do código tinymce -->

    
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
                            <form class="form-inline my-2 my-lg-0 pesquisaHospede" action="pesquisar.php">
                              <input class="form-control mr-sm-2" type="text" placeholder="Pesquisar hóspede..." aria-label="Pesquisar" name="pesquisaHospede">
                              <button class="btn nk-amber" type="submit"><img src="assets/img/search.png"></button>
                            </form>
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