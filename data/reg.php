
<?php
if (isset($_POST['login'])) {

$log=$_POST['login'];

require_once('dbconn.php');
global $db;
 $rep= $db->prepare("SELECT * FROM user where   login=? limit 1" );
		     		$rep->execute(array($log));
		     		$userexist = $rep->fetchAll();

$res=3;

		     		if (count($userexist) >0) 

		     		{ 
		     		  
		     	     $res=1;
                    }
                     else if (isset($_FILES['avatarfile']) and $_FILES['avatarfile']['name']=='' ) {
                    	$res=2;
                    } 
 else {

 	$score=0;
 	$role="joueur";
 	$prenom=$_POST['prenom'];
 	$nom=$_POST['nom'];
 	$login=$_POST['login'];
 	$mdp=$_POST['pwd'];
 	$foto=$_FILES['avatarfile']['name'];
 $q= $db->prepare("INSERT INTO user(prenom ,nom ,login,password,role,score,photo) values 
       (?,?,?,?,?,?,?) " );
  $q->execute(array($prenom,$nom,$login,$mdp,$role,$score,$foto));
  }   

   header('Content-Type: application/json',true); 
   echo json_encode($res); 



}

?>