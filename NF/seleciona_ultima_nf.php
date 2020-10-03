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
    
    echo "<br><hr>";

    $consulta = "SELECT MAX(nf) as ultima FROM nota_fiscal";
    $consulta = $conexao->query($consulta);
    $linha = $consulta->fetch_assoc();
    $ultimo = $linha['ultima'];
    echo "Nota Fiscal: ".$ultimo."<br>";
    echo "<hr>";

    $_SESSION['nf'] = $ultimo;
?>

<!DOCTYPE <html>
<head>
<html>
    <title></title>
</head>
<body>

    <form action="insere_item.php?nf='<?php echo $ultimo; ?>'" method="post">
        NF: <input type="text" name="nf" value="<?php echo $ultimo;?>">
        <br>
        <p>
            Produto:
            <select name="produto_opcao" id="produto_opcao">
            <?php
                
                $consulta = "SELECT * FROM produtos";
                foreach ($conexao -> query($consulta) as $linha) {
            ?>
                    <option value="<?php echo $linha['id'];?>"><?php echo $linha['nome'];?></option>
        
            <?php 
                }
            ?>
            </select>
        </p>
        <p>
        Qtde: <input type="text" name="qtde">
        </p>
        <hr>
        <input type="submit" value="ADICIONAR">
    </form>
</body>
</html>