<?php
 require_once("connexion.php");
// On commence par récupérer les champs 
if(isset($_POST['submit'])){
       $prenom=$_POST['prenom']; 
        $nom=$_POST['nom'];
        $sexe =$_POST['sexe'];
        $email =$_POST['email'];
        $motpasse =$_POST['motpasse'];
		if($prenom !="" and $nom !=""and  $sexe !="" and $email !="" and $motpasse !="")
		{
			// on écrit la requête sql 
 
		   $req = "INSERT INTO signupMa (prenom,nom,sexe,email ,motpasse) VALUES 
		   ('$prenom','$nom','$sexe','$email','$motpasse');";
		  mysqli_query($connection,$req) or die(mysqli_error($connection)); 
		  
		  mysql_close();
		  header("location:login.php");
		}
		else{
				echo"veuillez remplir tous les champs";
			}
 
  
  
  }
    ?>