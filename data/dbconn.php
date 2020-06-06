<?php
$username = 'root' ;
$passw = '' ;
try
{
$db= new PDO('mysql:host=localhost;port=3308;dbname=quizz' , $username, $passw);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  /*$reponse= $db->prepare("SELECT * FROM user where   login=? and password=? limit 1 " );
		     		$reponse->execute(array($login,$password));
		     		$userexist = $reponse->fetchAll();*/
}catch(PDOException $e)
{
print "Erreur de connexion à la base de donnée : " .$e->getMessage();
 die();
} 
?>
