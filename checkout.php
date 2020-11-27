<!DOCTYPE html>
<html>
  <head>
    <title>Checkout Shop do Gamer</title>
    <meta charset="utf-8"/>
    <meta name="viewport"
          content="width=device-width"/>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/checkout.css">
  </head>
    
  <body>
      
    <div class="container">
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" 
                        data-toggle="collapse" data-target="#navbar-collapse-id">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"></span> Shop do Gamer</a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse-id">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="sobre.php"> Sobre</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-question-sign"></span> Ajuda</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-list"></span> Perguntas frequentes</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-bullhorn"></span> Entre em contato</a></li>
                </ul>
            </div>
        </nav>
        <div class="jumbotron">
            <div class="container">
                <h1>Ótimo produto!</h1>
                <p>Obrigado por comprar na Shop do Gamer!
                    Preencha seus dados para efetivar a compra.</p>
            </div><!-- Fim segunda .container -->
        </div><!-- Fim .jumbotron -->
        
        <div class="row">
            <div class="col-sm-4">
              <div class="panel panel-default">
                  <div class="panel-heading">
                    <h2>Sua compra</h2>
                  </div><!-- Fim .panel-heading -->

                  <div class="panel-body">
                    <img src="img/produtos/dx-<?= $_POST['cor']?>.png" class="img-thumbnail img-responsive">
                    <dl>
                        <dt>Produto</dt>
                        <dd><?= $_POST["nome"] ?></dd>
                        
                        <dt>Cor</dt>
                        <dd><?= $_POST["cor"] ?></dd>

                        <dt>Preço</dt>
                        <dd id="preco">R$ <?= $_POST["preco"] ?></dd>
                    </dl>

                    <div class="form-group">
                        <label for="qt">Quantidade</label>
                        <input id="qt" class="form-control" type="number" min="0" max="99" value="1">
                    </div>
                    <div class="form-group">
                        <label for="total">Total</label>
                        <output for="qt preco" id="total" class="form-control">
                            <?= $_POST["preco"] ?>
                        </output>
                    </div>

                  </div><!-- Fim .panel-body -->
                </div><!-- Fim .panel-default -->
            </div><!-- Fim .col-sm-4 -->

            <form class="col-sm-8">
                <div class="col-sm-6">
                    <fieldset> 
                        <legend>Dados Pessoais</legend>

                        <div class="form-group">
                            <label for="nome">Nome Completo</label>
                            <input type="text" class="form-control" id="nome" name="nome" autofocus required>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <div class="input-group">
                                <span class="input-group-addon">@</span>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cpf">CPF</label>
                            <input type="text" class="form-control" id="cpf" name="cpf" 
                                placeholder="000.000.000-00" required data-mask="999.999.999-99">
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="sim" name="spam" checked>
                                Quero receber novidades da Shop Game
                            </label>
                        </div>
                        
                    </fieldset>
                </div><!-- Fim .col-sm-6 -->

                <div class="col-sm-6">
                    <fieldset>
                        <legend>Cartao de credito</legend>

                        <div class="form-group">
                            <label for="numero-cartao">Numero - CVV</label>
                            <input type="text" class="form-control" id="numero-cartao" name="numero-cartao"
                                data-mask="9999 9999 9999 9999 - 999">
                        </div>
                        <div class="form-group">
                            <label for="bandeira-cartao">Bandeira</label>
                            <select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
                                <option value="master">MasterCard</option>
                                <option value="visa">Visa</option>
                                <option value="amex">American Express</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="validade-cartao">Validade</label>
                            <input type="text" class="form-control" id="validade-cartao" name="validade-cartao"
                            data-mask="99/9999">
                        </div>
                        
                    </fieldset>
                </div><!-- Fim .col-sm-6 -->

                <button type="submit" class="btn btn-primary btn-lg pull-right">
                  <span class="glyphicon glyphicon-thumbs-up"></span>
                  Confirmar Pedido
                </button>
            </form><!-- Fim .col-sm-8 -->
        </div><!-- Fim .row -->
    </div><!-- Fim primeira .container -->


    <script src="js/total.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/inputmask-plugin.js"></script>
  </body>
</html>