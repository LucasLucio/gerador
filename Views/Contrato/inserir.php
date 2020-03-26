<!--
=========================================================
 Material Dashboard - v2.1.1
=========================================================

 Product Page: https://www.creative-tim.com/product/material-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/material-dashboard/blob/master/LICENSE.md)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->

<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../../../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Gerador de Orçamentos
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../../assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../../assets/demo/demo.css" rel="stylesheet" />

  <?php
  include("../../class/ClassCrud.php");
  ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>

  <script type="text/javascript">
  var options = {
      onKeyPress: function (cpf, ev, el, op) {
          var masks = ['000.000.000-000', '00.000.000/0000-00'];
          $('#cpf_cnpj').mask((cpf.length > 14) ? masks[1] : masks[0], op);
      }
  }

  $('#cpf_cnpj').length > 11 ? $('#cpf_cnpj').mask('00.000.000/0000-00', options) : $('#cpf_cnpj').mask('000.000.000-00#', options);
  </script>


</head>


<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          <img src="../../Imagens/Logo_SimplesCor.png" alt="Cia Montagens">
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="./dashboard.html">
              <i class="material-icons">home</i>
              <p>Inicio</p>
            </a>
          </li>
          <li class="nav-item  ">
            <a class="nav-link" href="index.php">
              <i class="material-icons">content_paste</i>
              <p>Meus Orçamentos</p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="./typography.html">
              <i class="material-icons">add_box</i>
              <p>Novo Orçamento</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper" >
            <p class="navbar-brand">Novo Orçamento</p>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="inserir.php">
                  <i class="material-icons">add_box</i>
                  Novo Orçamento
                  <p class="d-lg-none d-md-block">
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Dados Iniciais</h4>
                  <p class="card-category">Insira os dados abaixo para a criação de um novo orçamento</p>
                </div>
<form name="FormularioCadastro" id="FormularioCadastro" method="post" action="../../Controller/ControllerContrato.php">
    <div class="card-body">
      <section>
    <div>

        <h2 class="text-center text-primary">Sobre seu cliente</h2>
        <fieldset class="text-center">
          <legend class="text-center text-info" style="height: 38px;">Tipo de Documento</legend>
          <div class="custom-control custom-radio custom-control-inline">
            <input value = "Orcamento" type="radio" name="tipo_documento" checked id="customRadioInline1" class="custom-control-input" />
            <label class="custom-control-label" for="customRadioInline1">Orçamento</label>
          </div>
          <div class="text-center custom-control custom-radio custom-control-inline">
            <input value = "Recibo" type="radio" name="tipo_documento" id="customRadioInline2" class="custom-control-input" />
            <label class="custom-control-label" for="customRadioInline2">Recibo</label>
          </div>
        </fieldset>
        <div>
            <h5 class="text-left" style="margin: 6px;">Vendido para:</h5>
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text icon-container">
                    <i class="material-icons">
                      person
                    </i>
                  </span>
                </div>
                <div>
                </div>
                <input id="cliente" name="cliente" type="text" required  class="form-control" maxlength = "110" placeholder="Nome do cliente"></div>
        </div>
        <div>
            <h5 class="text-left" style="margin: 6px;">Nome da empresa cliente</h5>
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text icon-container">
                    <i class="material-icons">
                      apartment
                    </i>
                  </span>
                </div>
                <div>
                </div>
                <input id="empresa" name="empresa" type="text" required class="form-control" placeholder="Nome da empresa" maxlength = "105">
              </div>
        </div>
        <div>
            <h5 class="text-left" style="margin: 6px;">CPF/CNPJ da empresa cliente</h5>
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text icon-container">
                    <i class="material-icons">
                      more
                    </i>
                  </span>
                </div>
                <div>
                </div>
                <input id="cpf_cnpj" name="cpf_cnpj" type="text" class="form-control" placeholder="000.000.000-00">
              </div>
        </div>
        <div>
            <h5 class="text-left" style="margin: 6px;">Endereço da empresa</h5>
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text icon-container">
                    <i class="material-icons">
                      where_to_vote
                    </i>
                  </span>
                </div>
                <div>
                </div>
                <input id="endereco" name="endereco"type="text" required class="form-control" placeholder="Endereço empresa"><input id="numero" type="number" class="form-control" placeholder="Numero" style="width: 205;"></div>
        </div>
        <div>
            <h5 class="text-left" style="margin: 6px;">Cidade da empresa</h5>
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text icon-container">
                    <i class="material-icons">
                      map
                    </i>
                  </span>
                </div>
                <div>
                </div>
                <input id="cidade" name="cidade" type="text" required class="form-control" placeholder="Cidade da empresa" maxlength = "100">
                <input id="estado" name="estado"type="text" required maxlength="2" class="form-control" placeholder="UF"></div>
        </div>
    </div>
    <!--
    <div class="shadow-sm p-3 mb-5 bg-white rounded&quot;" style="margin: 31px;">
        <h2 class="text-center" style="color: #9f3234;">Itens</h2>
        <div></div>
        <div class="table-responsive">
            <table class="table">
                <thead>

                        <tr>Quantidade
                            <div class="input-group" style="width: auto;">
                                <div class="input-group-prepend"><span class="input-group-text icon-container"><i class="far fa-plus-square"></i></span></div><input id = "quant" type="number" min="1" class="form-control"></div>
                        </tr>
                        <tr>Descrição
                            <div class="input-group" style="width: auto;">
                                <div class="input-group-prepend"><span class="input-group-text icon-container"><i class="fa fa-file-text"></i></span></div><input id = "desc" data-toggle="tooltip" data-placement="top" title="Máximo de 105 Caracteres" maxlength="105" type="text" class="form-control"></div>
                        </tr>
                        <tr>Valor Unitário
                            <div class="input-group" style="width: auto;">
                                <div class="input-group-prepend"><span class="input-group-text icon-container"><i class="far fa-money-bill-alt"></i></span></div><input id = "val" type="text" class="form-control"></div>
                        </tr>
                        <th style="padding: -50px;margin: -100px;height: 78px;width: 88px;"><button onclick="adicionaLinha('itens')" class="btn btn-success" type="button" style="margin: 20px;width: 76px;padding: 4px;height: 34px;">Inserir&nbsp;&nbsp;<i class="fas fa-level-down-alt"></i></button></th>

                </thead>
                <tbody>
                    <tr></tr>
                    <tr></tr>
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table" id="itens">
                <thead>
                    <tr>
                        <th style="width: 122px;">Quantidade</th>
                        <th>Descrição</th>
                        <th style="width: 150px;">Valor</th>
                        <th style="width: 99px;" class="text-center">Ação</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
    <div class="shadow-sm p-3 mb-5 bg-white rounded&quot;" style="margin: 31px;">
        <h2 class="text-center" style="color: #9f3234;">Desconto e Acréscimo</h2>
        <div>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text icon-container"><i class="fas fa-minus-circle"></i></span></div><input id = "desconto" type="text" class="form-control" placeholder="Valor Desconto"><button onclick = "pegavalores_desc()" class="btn btn-success" type="button">Inserir Desconto</button></div>
        </div>
        <div>
            <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text icon-container"><i class="fas fa-plus-circle"></i></span></div><input id = "acrescimo" type="text" class="form-control" placeholder="Valor Acréscimo"><button onclick = "pegavalores_acre()" class="btn btn-success" type="button">Inserir Acréscimo</button></div>
        </div>
    </div>
    -->
    <div class="shadow-sm p-3 mb-5 bg-white rounded" style="margin: 31px; text-align: center;">
        <button value = "Cadastrar" class="btn btn-primary btn-lg text-center" type="submit" style="width: 50%;">
          Próximo
        </button>
  <div id = "charg"></div>
    </div>
</section>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
  <!--   Core JS Files   -->
  <script src="../../assets/js/core/jquery.min.js"></script>
  <script src="../../assets/js/core/popper.min.js"></script>
  <script src="../../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="../../assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="../../assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="../../assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="../../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../../assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="../../assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="../../assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../../assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="../../assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="../../assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../../assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="../../assets/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../../assets/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
</body>

</html>
