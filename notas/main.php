<!DOCTYPE html>
<html lang="en">
<head>
	<title>Jooj Games</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bgg.jpg');">
			<div class="wrap-login100">
			
			<span class="login100-form-title p-b-34 p-t-27">
		Notas Emitidas
		</span>

<?php
    session_start();
    if(
        (!isset($_SESSION['id'])==true)&&
        (!isset($_SESSION['nome'])==true)&&
        (!isset($_SESSION['email'])==true)&&
        (!isset($_SESSION['nivel'])==true)){
        
        header('Location: ../Jooj_Games_Login');
	}
    include '../NF/conecta.php';

    $consulta = "SELECT * FROM nota_fiscal";

    foreach ($conexao -> query ($consulta) as $linha) {
        echo "NF: ".$linha['nf'] ."<br>";
        echo "Data: ".$linha['data'] ."<br>";
        echo "Valor_Total R$ : ".$linha['valor_total'] ."<br>";

        $nota = $linha['nf'];
        $consulta2 = "SELECT * FROM itens_nf WHERE num_nf = '$nota'";
        foreach ($conexao -> query($consulta2) as $linha2) {
            echo "ID: ".$linha2['id']." - ";
            echo "CodProduto: ".$linha2['cod_produto'] ." - ";
            $codigo = $linha2['cod_produto'];
            $consulta3 = "SELECT * FROM produtos WHERE id = '$codigo'";
            foreach ($conexao -> query($consulta3) as $linha3) {
                echo "Nome: ".$linha3['nome'] ." - ";
                echo "Valor Unit R$: ".$linha3['preco'] ." - ";
            }

            echo "Qtde: ".$linha2['qtde'] ." - ";
            echo "Sub Total R$ : ".$linha2['subtotal'] ."<br>";

        } 
        echo "<hr>";
    } 
    echo "<br>";
?>
    
	<button class="login100-form-btn">
	<a href="../cadastro/main.php">VOLTAR A PÁGINA INICIAL</a>
	</button>
			

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>