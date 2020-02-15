<?php
 require_once("connexion.php");
// On commence par récupérer les champs 
if(isset($_POST['submit'])){
       $prenomdr=$_POST['prenomdr']; 
        $nomdr=$_POST['nomdr'];
        $sexe =$_POST['sexe'];
        $specialite=$_POST['specialite'];
        $telephone =$_POST['telephone'];
        $email =$_POST['email'];
        $motpasse =$_POST['motpasse'];
		if($prenomdr !="" and $nomdr !=""and  $sexe !="" and $specialite!="" and $telephone !="" and $email !="" and $motpasse !="")
		{
			// on écrit la requête sql 
 
		   $req = "INSERT INTO signupDr (prenomdr,nomdr,sexe,specialite,telephone,email ,motpasse) VALUES 
		   ('$prenomdr','$nomdr','$sexe','$specialite','$telephone','$email','$motpasse');";
		  mysqli_query($connection,$req) or die(mysqli_error($connection)); 
		  
		  mysql_close();
		  header("location:login.php");
		}
		else{
				echo"veuillez remplir tous les champs";
			}
 
  
  
  }
    ?>