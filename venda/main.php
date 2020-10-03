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

    $nf = $_SESSION['nf'];
    $id_prod = $_POST['produto_opcao'];
    $qtde_prod = $_POST['qtde'];

    $consulta = "SELECT preco, nome FROM produtos WHERE id='$id_prod'";
    $consulta = $conexao->query($consulta);
    $linha = $consulta->fetch_assoc();
    $preco = $linha['preco'];
    $nome = $linha['nome'];

    $subtotal = $preco*$qtde_prod;
?>

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
			
			
<form action="../item/main.php" method="POST">

		<span class="login100-form-title p-b-34 p-t-27">
		<div class="selecione">
		ID PRODUTO: <input type="text" name="id_prod" value="<?php echo $id_prod; ?>" readonly="readonly">
		</div>
		</span>
        
		<span class="login100-form-title p-b-34 p-t-27">
		<div class="selecione">
		PRODUTO: <input type="text" name="nome_prod" value="<?php echo $nome; ?>" readonly="readonly">
		</div>
		</span>

		<span class="login100-form-title p-b-34 p-t-27">
		<div class="selecione">
		VALOR UNIT: <input type="text" name="valor_unit" value="<?php echo $preco; ?>" readonly="readonly">
		</div>
		</span>

		<span class="login100-form-title p-b-34 p-t-27">
		<div class="selecione">
		QTDE: <input type="text" name="qtde" value="<?php echo $qtde_prod; ?>" readonly="readonly">
		</div>
		</span>

		<span class="login100-form-title p-b-34 p-t-27">
		<div class="selecione">
        SUBTOTAL: <input type="text" name="subtotal" value="<?php echo $subtotal; ?>" readonly="readonly">
		</div>
		</span>

		<button class="login100-form-btn" >
            Confirmar produtos
		</button>

</form>
			

			</div>
		</div>
	</div>
	


		<div id="dropDownSelect1"></div>
	
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