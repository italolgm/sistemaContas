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

    <!-- Scripts -->
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>   
    <script src="js/bootstrap.min.js"></script>

    <script src="http://static.scripting.com/github/bootstrap2/js/jquery.js"></script>
    <script src="http://static.scripting.com/github/bootstrap2/js/bootstrap-transition.js"></script>
    <script src="http://static.scripting.com/github/bootstrap2/js/bootstrap-modal.js"></script>

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
                              <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Cadastrar<b class="caret"></b></a>
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
      
      <div class="hero-unit3">
        <h1>Sistema de Contas</h1>
        <p>Sistema de contas criado na Degepol para controle de contas de energia, água...
          O sistema gerencia o consumo, gastos e gera relatórios.</p>
      </div>

    <!-- Login-->
    <div class="container"> 
    <br>  

    <form class="form-signin">
        <h2 class="form-signin-heading">Login</h2>
        <input type="text" class="input-block-level" placeholder="Matrícula">
        <input type="password" class="input-block-level" placeholder="Senha">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Salvar Sessão
        </label>
       <button id="button1id" name="button1id" class="btn btn-primary" type="submit">Entrar</button>
       <a class="active" href="cadastrarUsuario.php" >Cadastrar</a>
      </form>     
    </div>
    <!-- Fim do login -->     

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

