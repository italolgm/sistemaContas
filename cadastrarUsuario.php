<!DOCTYPE html>
<html lang="en">

<head> <!-- Inicio do cabeçalho-->
    <meta charset="utf-8">
    <title>Cadastrar Usuário</title>    

    <!-- Estilos, CSS-->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="ico/favicon.png">

    <!-- Scripts-->
    <script src="http://static.scripting.com/github/bootstrap2/js/jquery.js"></script>
    <script src="http://static.scripting.com/github/bootstrap2/js/bootstrap-transition.js"></script>
    <script src="http://static.scripting.com/github/bootstrap2/js/bootstrap-modal.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="bootstrap/js/vendor/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/js/vendor/bootstrap.min.js"></script>
    <script src="bootstrap/js/plugins.js"></script>
    <script src="bootstrap/js/main.js"></script>
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

</head> <!-- Fim do Cabeçalho -->


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
            <p>Sistema criado na Degepol para gerenciamento de contas</p>
         </div>
        </div>
        </div>
      
      <!-- Contato-->
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
           
        <br>
        <H1>Cadastrar Usuário</H1>
        <p>Cadastrar um novo usuário para utilizar o sistema de contas.</p>

    <!-- Formulário de cadastro-->

      <form class="form-horizontal">
      <fieldset>
      
      <legend></legend>
      
      <div class="control-group">
        <label class="control-label" for="textinput">Nome</label>
        <div class="controls">
          <input id="textinput" name="textinput" type="text" placeholder="Nome completo" class="input-xlarge" required="">
          
        </div>
      </div>
      
      <div class="control-group">
        <label class="control-label" for="textinput">Matrícula</label>
        <div class="controls">
          <input id="textinput" name="textinput" type="text" placeholder="Matricula" class="input-large" required="">
          
        </div>
      </div>

      <div class="control-group">
        <label class="control-label" for="textinput">CPF</label>
        <div class="controls">
          <input id="textinput" name="textinput" type="text" placeholder="xxx.xxx.xxx-xx" class="input-medium">
          
        </div>
      </div>

      <div class="control-group">
        <label class="control-label" for="passwordinput">Senha</label>
        <div class="controls">
          <input id="passwordinput" name="passwordinput" type="password" placeholder="Senha" class="input-large" required="">
          
        </div>
      </div>

      <div class="control-group">
        <label class="control-label" for="textinput">E-mail</label>
        <div class="controls">
          <input id="textinput" name="textinput" type="text" placeholder="nome@provedor.com.br" class="input-large">
          
        </div>
      </div>

      <div class="control-group">
        <label class="control-label" for="textinput">Telefone</label>
        <div class="controls">
          <input id="textinput" name="textinput" type="text" placeholder="(xx) 2222-1111" class="input-medium">
          
        </div>
      </div>

      <div class="control-group">
        <label class="control-label" for="textinput">Cargo</label>
        <div class="controls">
          <input id="textinput" name="textinput" type="text" placeholder="" class="input-large">
          
        </div>
      </div>

      <div class="control-group">
        <label class="control-label" for="selectbasic">Perfil</label>
        <div class="controls">
          <select id="selectbasic" name="selectbasic" class="input-medium">
            <option>Usuário</option>
            <option>Administrador</option>
          </select>
        </div>
      </div>

      <div class="control-group">
        <label class="control-label" for="button1id"></label>
        <div class="controls">
          <button id="button1id" name="button1id" class="btn btn-success">Salvar</button>
          <button id="button2id" name="button2id" class="btn btn-primary">Limpar</button>
        </div>
      </div>

      </fieldset>
    </form>  <!-- Fim do formulário de cadastro -->           

    </div>
</body>
</html>