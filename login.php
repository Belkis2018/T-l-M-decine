<?php
session_start();
 require_once("connexion.php");
if(isset($_POST['submit']))
{
	$email =$_POST['email'];
	$motpasse =$_POST['motpasse'];
	
	$req='INSERT * FROM `signupDr` WHERE `email` ="'.$email.'" AND `motpasse` ="'.$motpasse.'"';
	$con = mysqli_query($connection,$req);

	if(mysqli_affected_rows($con)!= TRUE){
		$_SESSION['email']=$email;
		header("location:commentaires.php");
	}
	else{
		echo'erreur dans Email/Nom d utilisateur ou Mot de passe';
	}
	
}
?>