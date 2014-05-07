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

    </style>   

    <!-- Scripts -->
    <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
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
                            <li ><a href="index.php">Home</a></li>
                            <li><a data-toggle="modal" href="notaFiscal.php">Nota Fiscal</a></li>
                            <li><a data-toggle="modal" href="notaFiscal.php">Relatórios</a></li>
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

    <div class="control-group">
        <label class="control-label" for="button1id"></label>
        <div class="controls">
          <button id="button1id" name="button1id" class="btn btn-success">Salvar</button>
          <button id="button2id" name="button2id" class="btn btn-primary">Limpar</button>
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

</footer> 
</html>

