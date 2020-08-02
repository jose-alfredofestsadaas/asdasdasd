<?php

$your_email = "josealfredo.nick@gmail.com";

$headers= "From: ".$_POST['NOMBRE']." <".$_POST['CORREO ELECTRONICO'].">\r\n";
$headers.='Content-type: text/html; charset=utf-8';
mail($your_email, $_POST['subject'],  "
<html>
<head>
 <title>MENSAJEe</title>
</head>
<body>
	Contact Message<br><br>
	Name : ".$_POST['NOMBRE']."<br>
	Email : ".$_POST['CORREO ELECTRONICO']."<br>
	Telephone : ".$_POST['NUMERO DE TELEFONO']."<br><br>
	
	Message : <br>".$_POST['CORREO ELECTRONICO']."<br>
</body>
</html>" , $headers);
header("Location: ./contact_message.htm");
?>
