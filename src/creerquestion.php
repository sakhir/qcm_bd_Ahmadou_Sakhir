
<!DOCTYPE html>
<html>
<head>
  <title> Creer Question</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="../css/listequestion.css?v=1">

</head>
<body data-spy="scroll">  

<div id="cont"> 
    <div class="container-fluid">

       <?php include("header.php"); ?>  
      <div class="row">
      <?php $nav_en_cours = "creerquestion"; ?>   
          
       <?php include("nav.php"); ?>   
    
      </div>

 <?php 
      $selected='selected="selected"';
      (isset($_POST['liste'])) ? $liste=$_POST['liste'] : $liste="";
     ?>



      <!-- debut  -->
      <div class="container-login100">
      <div class="wrap-login100">
        <form class="login100-form  p-l-30 p-r-55 p-t-50" method="post" name="formulaireDynamique">
          <span class="login100-form-title">
            creer et parametrer votre question  
          </span>
            <label for="questions" style="font-size: 21px;font-weight: bold;margin-top: 2%;margin-left: 2%;">Questions  </label>
                  <input type="hidden" name="id" value="">
                  <input type="textarea" id="qu" name="question" required="" aria-required="true" value="<?php if (isset($_POST['liste'])) echo htmlentities($_POST['question']) ?>" style="width: 70%; height: 90px;margin-left: 5%;margin-top: 10%; border-radius: 5px;background-color:#F4F4F4; "> <br><br>

                   <label for="score"  style="font-size: 21px;font-weight: bold;margin-top: 2%;margin-left: 2%;">Nbre de Points</label>

                  <input type="number" id="sc" name="score" required="" aria-required="true" value="<?php if (isset($_POST['liste'])) echo htmlentities($_POST['score']) ?>" min="1" style="width: 10%; height:30px;margin-left: 2%;margin-top: 5%;background-color:#F4F4F4;border:1px;border-style:solid;border-color:  #51BFD0 ;" > <br><br>

                  <label for="score" style="font-size: 21px;font-weight: bold;margin-top: 2%;margin-left: 2%;">Type de reponse  </label>
                     <select name="liste" onchange="submit();" style="width: 60%; height:35px;margin-left: 2%%;margin-top: 5%;background-color:#F4F4F4;">
                      <option>Donnez le type de reponse </option>
                      <option  <?php if($liste=="Choix Multiple") echo $selected; ?> > Choix Multiple</option>
                      <option <?php if ($liste=="Choix simple") echo $selected; ?>> Choix simple</option>
                      <option <?php if ($liste=="Choix texte") echo $selected; ?>> Choix texte</option>
                     </select>  
                    


  <?php 
          if ($liste=="Choix texte") 
              { 
  ?><br><br>
  <label for="reponsetexte" style="font-size: 21px;font-weight: bold;margin-left: 2%;" >Reponse</label>
  <input type="text" name="texte" style="width:60%; height:30px;background-color:#F4F4F4; margin-left:30%;
  " > <br>
  <?php 
  } 
  
   if ($liste=="Choix simple") 
  {
    ?> 
       <img src="../images/icones/ajoutreponse.png" style="position: absolute;margin-top: 4.3%;margin-left:1%;" onclick="ajoutS(this)">
 <?php 
  }


if ($liste=="Choix Multiple") 
  {
    ?>
       <img src="../images/icones/ajoutreponse.png" style="position: absolute;margin-top: 4.3%;margin-left:1%;" onclick="ajoutM(this)">
 <?php 
  }


  ?>

                      <input type="submit" name="valider" value="Enregistrer" style="" class="enr">
          

          
        </form>
      </div>
    </div>
      <!-- fin -->

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


<script type="text/Javascript" >
    var j=-1;
   function ajoutM(element){
    j++;
      var formulaire = window.document.formulaireDynamique;
      // On clone le bouton d'ajout
      var ajout = element.cloneNode(true);
      // Crée un nouvel élément de type "input"
      var champ = document.createElement("input");
      var sel = document.createElement("input");

      // Les valeurs encodée dans le formulaire seront stockées dans un tableau

      champ.name = "champs[]";
      champ.type = "text";
      champ.style="width:60%; height:30px;margin-left:31%; border-radius: 2px;background-color:#F4F4F4;";
      
      sel.name = "sels[]";
      sel.type = "checkbox";
      sel.style="background-color:#F4F4F4;border: 0.1em solid #000;border-radius:40%;";
      sel.value=j;
      var sup = document.createElement("img");
      sup.src = "../images/icones/supprimer.png";
      // Ajout de l'événement onclick
      sup.onclick = function onclick(event)
         {suppression(this);};
        
      // On crée un nouvel élément de type "p" et on insère le champ l'intérieur.
      var bloc = document.createElement("p");
      bloc.appendChild(champ);
      bloc.appendChild(sel);
    //  formulaire.insertBefore(ajout, element);
      formulaire.insertBefore(sup, element);
      formulaire.insertBefore(bloc, element);
   }
   
   // ajout simple 
    function ajoutS(element){
       j++;
      var formulaire = window.document.formulaireDynamique;
      // On clone le bouton d'ajout
      var ajout = element.cloneNode(true);
      // Crée un nouvel élément de type "input"
      var champ = document.createElement("input");
      var sel = document.createElement("input");

      // Les valeurs encodée dans le formulaire seront stockées dans un tableau

      champ.name = "champs[]";
      champ.type = "text";
      champ.style="width:60%; height:30px;margin-left:31%; border-radius: 2px;background-color:#F4F4F4;";
      
      sel.name = "sels[]";
      sel.type = "radio";
      sel.style="background-color:#F4F4F4;";
      sel.value=j;

      var sup = document.createElement("img");
      sup.src = "../images/icones/supprimer.png";
      // Ajout de l'événement onclick
      sup.onclick = function onclick(event)
         {suppression(this);};
        
      // On crée un nouvel élément de type "p" et on insère le champ l'intérieur.
      var bloc = document.createElement("p");
      bloc.appendChild(champ);
      bloc.appendChild(sel);
    //  formulaire.insertBefore(ajout, element);
      formulaire.insertBefore(sup, element);
      formulaire.insertBefore(bloc, element);
   }
   // fin ajout simple 

   function suppression(element){
   var formulaire = window.document.formulaireDynamique;
        j--; 
   // Supprime le bouton d'ajout
  // formulaire.removeChild(element.previousSibling);
   // Supprime le champ
   formulaire.removeChild(element.nextSibling);
   // Supprime le bouton de suppression
   formulaire.removeChild(element);
}


</script>

</body>
</html>



