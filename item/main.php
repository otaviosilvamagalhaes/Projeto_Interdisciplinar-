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
    
    $consulta = "SELECT * FROM itens_nf WHERE num_nf = '$nf'";

    echo "<h1>NF: ".$nf . "</h1><br><hr>";
    $total = 0;
    foreach ($conexao -> query($consulta) as $linha) {

        echo "Cod Produto: ".$linha['cod_produto'] ."<br>";
        echo "Qtde: ".$linha['qtde'] ."<br>";
        echo "Subtotal: ".$linha['subtotal'] ."<br>";
        $total = $total + $linha['subtotal'];
        echo "<hr>";
    }

    echo "<b>TOTAL DA NOTA R$ ".$total."</b><hr>";
?>

<form action="../NF/insere_item_nf.php" method="POST">

			
		<span class="login100-form-title p-b-34 p-t-27">
		O QUE DESEJA FAZER AGORA?
		</span> 
	
	<button class="login100-form-btn">
	<a href="../comprar/main.php">COMPRAR MAIS?</a>
	</button>
    
	<button class="login100-form-btn">
	<a href="../cadastro/main.php?total=<?php echo $total; ?>">FINALIZAR O PEDIDO</a>
	</button>


</form>
			

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