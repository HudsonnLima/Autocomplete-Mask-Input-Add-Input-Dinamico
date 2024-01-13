<?php
include "conexao_pdo.php";
$produto = $_POST['produto'];
$produtos = $pdo->prepare("SELECT * FROM produtos WHERE produto like '%".$produto."%' ORDER by produto ASC");
$produtos->execute();
$result = array();


while ($prod = $produtos->fetch(PDO::FETCH_OBJ)) {
   array_push($result, (object) [
      "label" => $prod->produto,
      "produto_id" => $prod->produto_id,
      "quantidade" => $prod->estoque,
   ]);
   
}
echo json_encode($result);

exit;



?>
