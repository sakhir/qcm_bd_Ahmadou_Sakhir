
<?php  

if (isset($_POST['pseudo_check'])) {
 
$login=$_POST['pseudo_check'];


require_once('dbconn.php');
global $db;
 $reponse= $db->prepare("SELECT * FROM user where   login=? " );
		     		$reponse->execute(array($login));
		     		$userexist = $reponse->fetchAll();

$result;

		     		if (count($userexist) >0) 

		     		{ 
		     		  
		     	     $result=1;
                    }
		     		else
		     		{
		     			
		     		 $result=2;
		     			
		     		}
 

   header('Content-Type: application/json',true); 
   echo json_encode($result); 




}


?>
