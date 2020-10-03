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
 
    $consulta = "SELECT MAX(nf) as ultima FROM nota_fiscal";
    $consulta = $conexao->query($consulta);
    $linha = $consulta->fetch_assoc();
    $ultimo = $linha['ultima'];
    
    
    $_SESSION['nf'] = $ultimo;
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
				<form class="login100-form validate-form" action="../venda/main.php?nf='<?php echo $ultimo; ?>'" method="post">
					<div class="naruto">
						<img src="images/rdr2.png">
					</div>

					<span class="login100-form-title p-b-34 p-t-27">
						O que vai levar desta vez? 
                    </span>
                    
                    <span class="login100-form-title p-b-34 p-t-27">
					<div class="selecione">
					NF:
					</div>
					</span>

					<input type="text" name="nf" value="<?php echo $ultimo;?>">
                    <br>

                    <span class="login100-form-title p-b-34 p-t-27">
					<div class="selecione">
					Produtos
					</div>
					</span>

                <div class="form-group">

                            <select class="form-control" name="produto_opcao" id="produto_opcao">
                        <?php
                            $consulta = "SELECT * FROM produtos";
                            foreach ($conexao -> query($consulta) as $linha) {
                        ?>
                            <option value="<?php echo $linha['id'];?>"><?php echo $linha['nome'];?></option>
                        <?php 
                            }
                        ?>
                            </select>
                </div>
                        </p>

					<div class="selecione">
					Qtde:
					</div>
					</span>
                            <input type="text" name="qtde">
                        
                        <hr>

                        <button class="login100-form-btn" >
                        Comprar
						</button>
                                                    
					</div>

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