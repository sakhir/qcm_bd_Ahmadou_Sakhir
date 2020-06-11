
<?php  

if (isset($_POST['question'])) {
 

/* var_dump($_POST);
 die();
*/
require_once('dbconn.php');
global $db;

 $result;
$question=$_POST['question'];
$score=intval($_POST['score']);
$liste=$_POST['liste'];


if ($liste=="Choix simple") {

 if (isset($_POST['champs'])) {
   
     $tabrep=$_POST['champs'];

     $nombrep=count($tabrep);
        $b=false;
        for ($i=0; $i <$nombrep ; $i++) { 
        	if ($_POST['champs'][$i]=="") {
        		$b=true;
        		break;
        	}
        }

     if ($nombrep==1 or $b==true) {
	   $result=1;
     }
     else {
	  if (isset($_POST['sels'])) {
	    //  enregistrement 
	  
 $q= $db->prepare("INSERT INTO question(type,libelle ,nbrpoint) values 
       (?,?,?) " );
  $q->execute(array($liste,$question,$score));
  
 //ici  je dois recuperer  l id de la question
 $reponse= $db->prepare("SELECT max(numq) as val FROM question " );
		     		$reponse->execute();
		     		$userexist = $reponse->fetchAll();
		     		/*var_dump($userexist);
		     		die();*/
    $val=intval($userexist[0]['val']);
 // enregistrer dans la table reponse ; 
   for ($i=0; $i <$nombrep ; $i++) { 
    $ch=$_POST['champs'][$i];
    $et=0;
    if (isset($_POST['sels'][$i])) {
     $et=1;
    }

// on va recuperer l id de la question

    // enregistrer dans la table les reponses de ladite question
  $q= $db->prepare("INSERT INTO reponse(libelle,etat,numq) values 
       (?,?,?) " );
  $q->execute(array($ch,$et,$val));
   	
   }
  // j utilise val  et j'increment ;
$result=0;

	  }
	  else {
	  $result=2;
	  }
    }     

 }
 else {
	$result=1;
 }

}

else if ($liste=="Choix Multiple") {

 if (isset($_POST['champs'])) {

     $tabrep=$_POST['champs'];
     $nombrep=count($tabrep);

    $b=false;
        for ($i=0; $i <$nombrep ; $i++) { 
        	if ($_POST['champs'][$i]=="") {
        		$b=true;
        		break;
        	}
        }
     if ($nombrep==1 or $b==true) {
	   $result=1;
     }
     else {
	  if (isset($_POST['sels'])) {
	    //  enregistrement 

    $q= $db->prepare("INSERT INTO question(type,libelle ,nbrpoint) values 
       (?,?,?) " );
  $q->execute(array($liste,$question,$score));
  //ici  je dois recuperer  l id de la question
 $reponse= $db->prepare("SELECT max(numq) as val FROM question " );
		     		$reponse->execute();
		     		$userexist = $reponse->fetchAll();
		     		
    $val=intval($userexist[0]['val']);
 // enregistrer dans la table reponse ;
 /*var_dump($_POST['sels']);
	die(); */

$tr=array();
for ($j=0; $j <$nombrep ; $j++) { 
	 
    if (isset($_POST['sels'][$j]) ) {

   array_push($tr,$_POST['sels'][$j] ) ;
    }
}
/*
 var_dump($tr);
	die(); */

   for ($i=0; $i <$nombrep ; $i++) { 
    $ch=$_POST['champs'][$i];
    $et=0;
    

  if (in_array($i, $tr)==true) {
  	$et=1;
  }

// on va recuperer l id de la question

    // enregistrer dans la table les reponses de ladite question
  $q= $db->prepare("INSERT INTO reponse(libelle,etat,numq) values 
       (?,?,?) " );
  $q->execute(array($ch,$et,$val));
   	
   }
    $result=0;
	  }
	  else {
	  $result=2;
	  }
    }     

 }
 else {
	$result=1;
 }

}



else if ($liste=="Choix texte") {
$rep=$_POST['texte'];
if ($rep=="") {
	$result==1;
}
else {
	// traitement ici avec choix texte
   $type="texte";
   $q= $db->prepare("INSERT INTO question(type,libelle ,nbrpoint) values 
       (?,?,?) " );
  $q->execute(array($type,$question,$score));

  $reponse= $db->prepare("SELECT max(numq) as val FROM question " );
		     		$reponse->execute();
		     		$userexist = $reponse->fetchAll();
		     		
    $val=intval($userexist[0]['val']);

   $et=1;
    $q= $db->prepare("INSERT INTO reponse(libelle,etat,numq) values 
       (?,?,?) " );
  $q->execute(array($rep,$et,$val));
   	
  
  $result=0;
}

}





/*  $q= $db->prepare("INSERT INTO user(prenom ,nom ,login,password,role,photo) values 
       (?,?,?,?,?,?) " );
  $q->execute(array($prenom,$nom,$login,$mdp,$role,$foto));
  }   

*/
   header('Content-Type: application/json',true); 
   echo json_encode($result); 




}

?>
