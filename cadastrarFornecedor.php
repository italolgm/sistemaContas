<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Cadastrar Fornecedor</title>


    <!-- Estilos, CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
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
                            <a class="brand" href="index.php"><img src="img/logo3.png" width="40"></a>
                            <li class="active"><a href="index.php">Home</a></li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cadastrar<b class="caret"></b></a>
                              <ul class="dropdown-menu">
                                <li><a href="cadastrarUsuario.php">Usuário</a></li>
                                <li><a href="cadastrarDelegacia.php">Delegacia</a></li>
                                <li><a href="cadastrarFornecedor.php">Fornecedor</a></li>
                              </ul>
                            </li>                            
                            <li><a data-toggle="modal" href="#windowabout">Sobre</a></li>
                            <li><a data-toggle="modal" href="#windowcontact">Contato</a></li>
                        </ul>                        
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
            <h4>Sistema criado na Degepol para gerenciamento de contas</h4>
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
            <h4>Problemas, sugestões entrar em contato com o departamento de TI pelo telefone (84) 3232.9212 
              ou pelo e-mail ti@degepol.com.br</h4>            
          </div>
        </div>
       </div>  
    <!-- Fim do menu de navegação-->

    <div class="container">
           
        <br>
        <H1>Cadastrar Fornecedor</H1>
        <p>Cadastrar um novo fornecedor, CAERN, COSERN...</p>

    
  <!-- Início do formulário -->     
    <form class="form-horizontal">
    <fieldset>

    <legend></legend>

    <div class="control-group">
      <label class="control-label" for="textinput">Nome</label>
      <div class="controls">
        <input id="textinput" name="textinput" type="text" placeholder="Nome fantasia" class="input-xlarge" required="">
        
      </div>
    </div>

    <div class="control-group">
      <label class="control-label" for="textinput">CNPJ</label>
      <div class="controls">
        <input id="textinput" name="textinput" type="text" placeholder="xx.xxx.xxx/xxxx-xx" class="input-large">
        
      </div>
    </div>

    <div class="control-group">
      <label class="control-label" for="textinput">Atividade</label>
      <div class="controls">
        <input id="textinput" name="textinput" type="text" placeholder="Tipo de atividade" class="input-large">
        <p class="help-block">Exemplo: Água (CAERN)</p>
      </div>
    </div>

    <div class="control-group">
      <label class="control-label" for="selectbasic">Cidade</label>
      <div class="controls">
        <select id="selectbasic" name="selectbasic" class="input-large">
          <option>Option one</option>
          <option>Option two</option>
        </select>
      </div>
    </div>

    <div class="control-group">
      <label class="control-label" for="textinput">Endereço</label>
      <div class="controls">
        <input id="textinput" name="textinput" type="text" placeholder="Endereço, número, complemento" class="input-xlarge" required="">
        
      </div>
    </div>

    <div class="control-group">
      <label class="control-label" for="textinput">Telefone</label>
      <div class="controls">
        <input id="textinput" name="textinput" type="text" placeholder="(xx) 1234-5678" class="input-medium">
        
      </div>
    </div>

    <div class="control-group">
      <label class="control-label" for="textinput">Contato</label>
      <div class="controls">
        <input id="textinput" name="textinput" type="text" placeholder="Contato do fornecedor" class="input-xlarge">
        
      </div>
    </div>

    <div class="control-group">
      <label class="control-label" for="textinput">E-mail</label>
      <div class="controls">
        <input id="textinput" name="textinput" type="text" placeholder="nome@provedor.com.br" class="input-large">
        
      </div>
    </div>

    </fieldset>
    </form>

    <!-- Fim do formulário -->     

    <!-- Teste de php -->
    <div>
      <?php   

      ?>
    </div> 
    
</body> <!-- Fim do corpo de texto -->

<footer> <!-- Rodapé -->

        <p align="center ">&copy; Degepol 2014 </p>

</footer> 
</html>

