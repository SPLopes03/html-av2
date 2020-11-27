<!DOCTYPE html>
<html>
  <head>
    <title>Compra Shop Gamer</title>
    <meta charset="utf-8"/>
    <meta name="viewport"
          content="width=device-width"/>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/produto.css">
    <link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
  </head>
  <body>  

    <?php include("header.php"); ?>

    <div class="produto-back">
            <div class="container">
                <div class="produto">
                <h1>Cadeira DxRacer King K06-NR</h1>
                <p class="valorcad">por R$ 2049,00</p>
                
                <form action="checkout.php" method="post">
                    <fieldset class="cores">
                        <legend>Escolha a cor:</legend>
                        
                        <input type="radio" name="cor" value="Vermelho" id="Vermelho" checked>
                        <label for="Vermelho">
                            <img src="img/produtos/dx-Vermelho.png" alt="vermelho">
                        </label>
                        
                        <input type="radio" name="cor" value="Rosa" id="Rosa">
                        <label for="Rosa">
                            <img src="img/produtos/dx-Rosa.png" alt="rosa">
                        </label>
                        
                        <input type="radio" name="cor" value="Preto" id="Preto">
                        <label for="Preto">
                            <img src="img/produtos/dx-Preto.png" alt="preto">
                        </label>
                    </fieldset>

                    <input type="submit" class="comprar" value="Comprar">
                    
                    <input type="hidden" name="nome" value="Cadeira Gamer">
                    <input type="hidden" name="preco" value="2049,90">
                </form>
                <div class="form-group">
                        <label for="exampleInputEmail1">Digite Seu CEP</label>
                        <input type="text" class="form-control" id="cep" placeholder="Seu CEP">
                        <small class="form-text text-muted"><a href="http://www.consultaenderecos.com.br/busca-endereco"
                            target="_blank">Não sei meu CEP</a></small>
                    </div>
                    <button onclick="calculo();" class="btn btn-success">Calcular</button>
                    <p id="retorno"></p>
                </div>
                <div class="detalhes">
                    <h2>Detalhes do produto</h2>
                    
                    <p>A série Formula da DXRacer oferece qualidade premium com um preço de gama de entrada. Todos os componentes e materiais utilizados na série Formula foram cuidadosamente selecionados para 
                        fornecer o apoio que merece durante as longas sessões à frente do computador.
                            <br><br>
                        Os apoios de braços são ajustáveis verticalmente em 8 posições e as almofadas de cabeça e lombar estão incluídas para oferecer mais opções de customização. 
                        A unidade de controlo permite desbloquear a cadeira, balouçando para a frente e para trás, ou bloquear completamente numa posição horizontal e as costas são 
                        totalmente ajustáveis entre 90 e 135 graus.
                            <br><br>
                        O Amortecedor a gás certificado SGS juntamente com a robusta base em forma de estrela suporta até 100 KG e a espuma de alta densidade ajuda a manter uma postura correta e 
                        evitar lesões nas costas. As rodas deslizam suavemente por cima de superfícies planas.</p>
                    
                    <table>
                        <thead>
                            <tr>
                                <th>Caracteristicas</th>
                                <th>Detalhe</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Modelo</td>
                                <td>KS06/NR</td>
                            </tr>
                            <tr>
                                <td>Material</td>
                                <td>Poliuretano</td>
                            </tr>
                            <tr>
                                <td>Cores</td>
                                <td>Vermelho, Rosa e Preto</td>
                            </tr>
                            <tr>
                                <td>Lavagem</td>
                                <td>Limpar com pano seco ou úmido</td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
            </div>
    </div>
            
    <?php include("footer.php"); ?>

    <script src="js/jquery.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="./js/script.js"></script>
      
  </body>
</html>