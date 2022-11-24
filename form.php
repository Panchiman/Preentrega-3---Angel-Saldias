<?php

$mail = $_POST{"mail"};



$cliente = "me subscribi";

$destinatario = "panchiman999@gmail.com";

mail($destinatario, $cliente, $mail, $header);

header("Location:subscrito.html");

?>