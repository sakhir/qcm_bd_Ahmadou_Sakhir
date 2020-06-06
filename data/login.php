
<?php  

if (isset($_POST['login'])) {
 
$login=$_POST['login'];
$password=$_POST['password'];

require_once('dbconn.php');
global $db;
 $reponse= $db->prepare("SELECT * FROM user where   login=? and password=? limit 1 " );
		     		$reponse->execute(array($login,$password));
		     		$userexist = $reponse->fetchAll();

$result;

		     		if (count($userexist) >0) 

		     		{ 
		     		   
		     			if ($userexist[0]['role']=="admin") {
		     				
		     				$result=1; 
		     				
		     			}
		     			else if ($userexist[0]['role']=="joueur") {
                           
		     			   $result=2; 
		     			   
		     			}
		     	
                    }
		     		else
		     		{
		     			
		     		 $result=3;
		     			
		     		}

   header('Content-Type: application/json',true); 
   echo json_encode($result); 




}

?>
