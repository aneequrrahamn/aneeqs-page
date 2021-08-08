<?php
if(isset($submit)){
	$name=$_POST['name'];
	$mail=$_POST['mail'];
	$msg=$_POST['msg'];
	$to="aneeq.123.99@gmail.com";
	$subject="Aneeq's Blog Response";
	$message="Name:".$name."/n"."Email:".$mail."/n"."Message:".$msg;
	$headers="From:".$mail;
	if(mail($to,$subject,$message,$headers)){
		echo "<h1> Form Submitted Thank you</h1>"
	}
	else{
		echo "Mail Not Sended";
	}
}

?>