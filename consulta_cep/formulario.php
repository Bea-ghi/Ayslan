<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultando o CEP</title>
</head>
<body>
    <h1>Informe o CEP a ser localizado:</h1>
    <form action="" method="post">

    <label for="cep">CEP:</label>
    <input type="text" id="cep" name="cep"/>
<br/>
<input type="submit"  value="Buscar" />

    </form>
    <?php

    require_once ("buscar_cep.php");
    $endereco = "";
    if (isset($_POST["cep"]) && trim($_POST["cep"]) !=""){
        $endereco = json_decode(buscarCEP($_POST["cep"]));
    }
    if ($endereco !="" ){
    ?>
    <p>Resultado da Pesquisa:</p>
    <p>CEP: <?=$endereco->cep?></p>
    <p>Cidade: <?=$endereco->localidade?></p>
    <p>DDD: <?=$endereco->ddd?></p>
    <p>Estado: <?=$endereco->uf?></p>
    <p>Rua: <?=$endereco->logradouro?></p>
    <p>Complemento: <?=$endereco->complemento?></p>
    <p>Bairro: <?=$endereco->bairro?></p>
    <p>IBGE: <?=$endereco->ibge?></p>
    <p>GIA: <?=$endereco->gia?></p>
    <p>Siafi: <?=$endereco->siafi?></p>
    
    <?php
    }
?>

</body>
</html>