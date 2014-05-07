<!DOCTYPE html>
<html lang="en">

<head> <!-- Inicio do cabeçalho-->
    <meta charset="utf-8">
    <title>Inserir Nota Fiscal</title>    

    <!-- Estilos, CSS-->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet"> 
    <link href="css/datepicker.css" rel="stylesheet">

    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>

    <!-- Scripts-->
    <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>    
    <script src="http://static.scripting.com/github/bootstrap2/js/jquery.js"></script>
    <script src="http://static.scripting.com/github/bootstrap2/js/bootstrap-transition.js"></script>
    <script src="http://static.scripting.com/github/bootstrap2/js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-datepicker2.js"></script>
    
    
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
        <H1>Inserir Nota Fiscal</H1>
        <p>Inserir nova nota fiscal.</p>

  <!-- Formulário de cadastro-->

    <form class="form-horizontal">
    <fieldset>

    <legend></legend>

    <div class="control-group">
      <label class="control-label" for="selectbasic">Delegacia</label>
      <div class="controls">
        <select id="selectbasic" name="selectbasic" class="input-xlarge">
          <option>Option one</option>
          <option>Option two</option>
        </select>
      </div>
    </div>

    <div class="control-group">
      <label class="control-label" for="selectbasic">Fornecedor</label>
      <div class="controls">
        <select id="selectbasic" name="selectbasic" class="input-large">
          <option>Option one</option>
          <option>Option two</option>
        </select>
      </div>
    </div>

    <div class="control-group">
      <label class="control-label" for="textinput">Nº NF</label>
      <div class="controls">
        <input id="textinput" name="textinput" type="text" placeholder="Número Nota Fiscal" class="input-medium">
        
      </div>
    </div>

    <div class="control-group">
      <label class="control-label" for="textinput">Data de Emissão</label>
      <div class="controls">
        <div class="input-append date" id="dp1" data-date="12-04-2014" data-date-format="mm-dd-yyyy">          
            <input class="span2" size="16" type="text" value="12-04-2014" readonly>
            <span class="add-on"><i class="icon-calendar"></i></span>
        </div>
      </div>
    </div>  
    
    <div class="control-group">
      <label class="control-label" for="textinput">Consumo</label>
      <div class="controls">
        <input id="textinput" name="textinput" type="text" placeholder="Consumo do mês" class="input-medium">
        
      </div>
    </div>

    <div class="control-group">
      <label class="control-label" for="prependedtext">Valor</label>
      <div class="controls">
        <div class="input-prepend">
          <span class="add-on">R$</span>
          <input id="prependedtext" name="prependedtext" class="input-small" placeholder="100,00" type="text">
        </div>
        
      </div>
    </div>

    <div class="control-group">
      <label class="control-label" for="textinput">Vencimento</label>
      <div class="controls">
        <div class="input-append date" id="dp2" data-date="12-04-2014" data-date-format="dd-mm-yyyy">          
            <input class="span2" size="16" type="text" value="12-04-2014" readonly>
            <span class="add-on"><i class="icon-calendar"></i></span>
        </div>
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

  <!-- Fim do formulário de cadastro -->  

  <script src="js/bootstrap-datepicker.js"></script>

</body>
</html>