<?php
    session_start();
    if(
        (!isset($_SESSION['id'])==true)&&
        (!isset($_SESSION['nome'])==true)&&
        (!isset($_SESSION['email'])==true)&&
        (!isset($_SESSION['nivel'])==true)){
        
        header('Location: ../Jooj_Games_Login');
    }
    include 'conecta.php';

    $nf = $_SESSION['nf'];
    echo "<b>Numero da NF: " . $nf . "</b><br>";
    $id_prod = $_POST['produto_opcao'];
    $qtde_prod = $_POST['qtde'];

    $consulta = "SELECT preco, nome FROM produtos WHERE id='$id_prod'";
    $consulta = $conexao->query($consulta);
    $linha = $consulta->fetch_assoc();
    $preco = $linha['preco'];
    $nome = $linha['nome'];

    $subtotal = $preco * $qtde_prod;
?>

<!DOCTYPE html>
<html>
<head>
    <title>ITEM DA NOTA FISCAL</title>
</head>
<body>
<form action="insere_item_nf.php" method="POST">
    <p>
        ID PRODUTO: <input type="text" name="id_prod" value="<?php echo $id_prod; ?>" readonly="readonly">
    </p>
    <p>
        PRODUTO: <input type="text" name="nome_prod" value="<?php echo $nome; ?>" readonly="readonly">
    </p>
    <p>
        VALOR UNIT: <input type="text" name="valor_unit" value="<?php echo $preco; ?>" readonly="readonly">
    </p>
    <p>
        QTDE: <input type="text" name="qtde" value="<?php echo $qtde_prod; ?>" readonly="readonly">
    </p>
    <p>
        SUBTOTAL: <input type="text" name="subtotal" value="<?php echo $subtotal; ?>" readonly="readonly">
    </p>

    <input type="submit" value="ADICIONAR PRODUTO">

</form>
</body>
</html>