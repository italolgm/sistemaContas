<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sistema de Contas - Degepol</title>

    <!-- Estilos, CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="ico/favicon.png">    

    <!-- Scripts -->
    <script src="http://static.scripting.com/github/bootstrap2/js/jquery.js"></script>
    <script src="http://static.scripting.com/github/bootstrap2/js/bootstrap-transition.js"></script>
    <script src="http://static.scripting.com/github/bootstrap2/js/bootstrap-modal.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
    <script>
      $(document).ready(function() {
        $('#windowTitleDialog').bind('show', function () {
          document.getElementById ("xlInput").value = document.title;
          });
        });
      function closeDialog () {
        $('#windowTitleDialog').modal('hide'); 
        };
      function okClicked () {
        document.title = document.getElementById ("xlInput").value;
        closeDialog ();
        };
    </script>

</head> <!-- Fim do cabeçalho -->

<body>
    <!-- Menu de navegação-->
    <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <a class="brand" href="index.php"><img src="img/logo.png" width="40"></a>
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a data-toggle="modal" href="#windowabout">Sobre</a></li>
                            <li><a data-toggle="modal" href="#windowcontact">Contato</a></li>
                        </ul>

                        <form class="navbar-form pull-right">
                          <input class="span2" type="text" placeholder="Matrícula">
                          <input class="span2" type="password" placeholder="Senha">
                          <button type="submit" class="btn">Entrar</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <div class="container">            
            
        <!-- Sobre o sistema... -->
        <div id="windowabout" class="modal hide fade" tabindex="-1" >
        <div class="modal-header">
          <a href="#" class="close" data-dismiss="modal"></a>
          <H2>Sobre o sistema...</H2>          
        </div>
        
        <div class="modal-body">
          <div class="divDialogElements">
            <p>Sistema criado na Degepol para gerenciamento de contas</p>
            </div>
        </div>
       </div>
      
      <!-- Contato -->
      <div id="windowcontact" class="modal hide fade" tabindex="-1" >
        <div class="modal-header">
          <a href="#" class="close" data-dismiss="modal"></a>
          <H2>Contato</H2>          
          </div>

        <div class="modal-body">
          <div class="divDialogElements">
            <p>Problemas, sugestões entrar em contato com o departamento de TI pelo telefone (84) 3232.9212 
              ou pelo e-mail ti@degepol.com.br</p>            
          </div>
        </div>
       </div>  
       <!-- Fim do menu de navegação-->

    <div class="container">
      
      <div class="hero-unit2">
        <h1>Sistema de Contas</h1>
        <p>Sistema de contas criado na Degepol para controle de contas de energia, água...
          O sistema gerencia o consumo, gastos e gera relatórios.</p>
      </div>

      <!-- Colunas -->
      <div class="row">
        <div class="span4">
          <h2>Cadastre-se</h2>
          <p>Crie uma conta para acesso ao sistema ou entre em contato com o Departamento de Informática. </p>
          <p><a class="btn" href="cadastrarUsuario.php">Cadastrar</a></p>
        </div>

        <div class="span4">
          <h2>Login</h2>
          <p>Faça o login com sua matrícula e senha no canto superior direito desta página ou clicando no botão "Entrar" abaixo. </p>
          <p><a class="btn" href="login.php">Entrar</a></p>
       </div>     
      </div>     

    <!-- Teste de php -->
    <div>
      <?php   

        echo "----------------------";
        echo "<p>Teste php</p>";
        echo date("r");
        echo "<p>----------------------</p>";

      ?>
    </div> 
    
</body> <!-- Fim do corpo de texto -->

<footer> <!-- Rodapé -->

        <p align="center ">&copy; Degepol 2014 </p>

</footer> 
</html>

