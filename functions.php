<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
	   $to = "yin530@gmail.com";
	   $subject = "Email from: [".$_POST["name"]."]";
	   $message = $_POST["message"];
	   $header = "From: ".$_POST['email']." \r\n";
	   $retval = mail ($to,$subject,$message,$header);
	   if( $retval == true )  
	   {
		  echo "<script>document.location='http://xiaoyu.cloudapp.net'</script>";
	   }
	   else
	   {
		  echo "Message could not be sent...";
	   }
    }
?>