<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Autocomplete + Mask Input + Add Input Dinamico</title>
  <!-- *Note: You must have internet connection on your laptop or pc other wise below code is not working -->
  <!--BOOTSTRAP 5.1.3-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!--//BOOTSTRAP 5.1.3-->
  <!-- JS for jQuery -->
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <!-- jQuery UI -->
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script type="text/javascript" src="js/autocomplete.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.2.6/jquery.inputmask.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>

  <!-- Bootstrap CSS -->

  <script src="js/mask.js"></script>


</head>

<body>
  <?php
  $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
  if (isset($_POST['submit'])) :
    var_dump($dados);
  endif;
  ?>
  <br/>
  <div class="container">

    <form method="POST" action="">

      <div class="row g-2" id="formulario">

        <div class="form-floating col-md-7">
          <input type="text" class="form-control compras" name="produto[]" value="" />
          <label for="produto">Produto</label>
        </div>

        <div class="form-floating col-md-2">
          <input type="text" class="form-control compras" name="quantidade[]" value="" />
          <label for="floatingInputGrid">Quantidade</label>
        </div>

        <div class="form-floating col-md-2">
          <input type="text" class="maskMoney form-control" maxlength="9" name="preco[]" value="" />
          <label for="floatingInputGrid">Preço</label>
        </div>


        <input type="hidden" class="form-control compras" name="produto_id[]" value="" />

        <a data-id="1" id="adicionarCampo" class="btn btn-success col-md-1">Adicionar campo</a>

      </div>

      <br />
      <input type="submit" name="submit" value="Cadastrar" class="btn btn-success col-md-1">
  </form>
  <br/>
  Produtos para pesquisa:
  Arroz - Feijão - Milho - Batata - Macarrão
  </div>

</body>

</html>