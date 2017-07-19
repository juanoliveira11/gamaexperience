<?php 
 	include_once('conexao.php');
 	$name = $_POST['name'];
 	$lastname = $_POST['lastname'];
 	$email = $_POST['email'];
 	$stack = $_POST['stack'];
 	$source = $_POST['source'];
 	
 	//Pega o IP do usuário
 	if (isset($_SERVER['HTTP_CLIENT_IP'])) $ip = $_SERVER['HTTP_CLIENT_IP']; 
 	else if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])) $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED'])) $ip = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR'])) $ip = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED'])) $ip = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR'])) $ip = $_SERVER['REMOTE_ADDR'];
    else $ip = 'UNKNOWN';

    //Concatena o nome
    $name_user = $name . " " . $lastname;
	
    //Insere no BD
 	$contato = "INSERT INTO leads(Nome, Email, Stack, Source, IP, Data) VALUES ('$name_user','$email', '$stack', '$source', '$ip', NOW())";
 	$resultado_contato = mysqli_query($conn, $contato);

	if($resultado_contato == 1){
		echo
			"<script>   
				alert('Obrigado! Você receberá informações por email.');
				window.location.href='http://www.queroserumhulk.com.br/pages/lp-index-thankyou.php';
			</script>";
	}

?>

