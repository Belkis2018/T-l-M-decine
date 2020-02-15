<html>
 <head>
	 <title> </title>
     <meta charset="utf-8" />
	 <link rel="stylesheet" href="css/bootstrap.min.css">
	 <link rel="stylesheet" href="css/style.css">
	 <link rel="stylesheet" href="css/styleCom.css">
	 <link rel="shorcut icon" href="image/icon.jpg">
	 
	
	  <!-------------------------------------------------->
	
       
		
	 
    </head>
	<body>
	   
	    <nav class="navbar navbar-default" >
	        <div >
              
              <ul class="nav navbar-nav "align="center" >
			        
					<li><a href="index.html">Accueil</a></li>
					<li><a href="docteurs.html">Docteurs</a></li>
					<li><a href="commentaires.php">FAQ</a></li>
					<li><a href="information.html">Information</a></li>
               

                </ul>
			  
            </div>
			 
			  <a  href="login.html"><img class ="icon" src="image/icon-icons.png"/></a>
			  <a  href="login.html"><img class ="" src="image/logout.png"  /></a>
	    </nav>
      <!--------------------------------------------------------------------------------------------------------------->
	    <?php
		    session_start();
		
		
		 if(isset($_SESSION['email']))
			{
			 echo '<h4 align="center">WELCOME '.$_SESSION['email'];	
			 
			}else
			{
			 /*header("location:login.php");	*/
			}
		 
		?>
		<div class="main">
		
		<div class="msg">
		
		<?php
		  //session_start();
		
		 require_once("connexion.php");
		 $req1="SELECT * FROM `commentaire`";
		 $r1=mysqli_query($connection,$req1);
		 while ($row =mysqli_fetch_assoc($r1))
		 {
			 $message=$row['message'];
			 $email=$row['email'];
			 echo '<h4 style="color:red">'.$email.'<h4>';
			 echo'<p>'.$message.'</p>';
			 echo'<hr>';
		 }
		
		if(isset($_POST['submit']))
		{ 
			$message = $_POST['message'];
			//$req='INSERT INTO commentaire (message,email) VALUES ('.$message.','.$email.');';
			$req='INSERT INTO `commentaire` (`message`,`email`) VALUES ("'.$message.'","'.$_SESSION['email'].'")';
			//$con =mysqli_query($connection,$req) or die(mysqli_error($connection));
			 
			if($con = mysqli_query($connection,$req))
			{
				echo'<h4 style="color:red"> '.$_SESSION['email'].'</h4>';
				echo'<p>'.$message.'</p>';
			}
		}
		
		?>
		</div>
		
		
			<form method="POST" action="commentaires.php">
			<input type ="text" name="message" placeholder="tapez votre commentaire" style ="width: 700px;height: 50px;" class="un " />
			<input  type ="submit" value ="ok" class="submit" name="submit"  />
			</form>
		</div>
		
		
		
				 
		</body>
</html>