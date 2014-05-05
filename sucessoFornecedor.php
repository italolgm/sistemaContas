<!DOCTYPE html>
<html lang="en">

<head> <!-- Inicio do cabeçalho-->
    <meta charset="utf-8">
    <title>Fornecedor cadastrado com sucesso!</title>    

    <!-- Estilos, CSS-->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>

    <!-- Scripts-->
    <script src="http://static.scripting.com/github/bootstrap2/js/jquery.js"></script>
    <script src="http://static.scripting.com/github/bootstrap2/js/bootstrap-transition.js"></script>
    <script src="http://static.scripting.com/github/bootstrap2/js/bootstrap-modal.js"></script>

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
        <h2>Fornecedor cadastrado com sucesso!</h2>

</body>
</html>