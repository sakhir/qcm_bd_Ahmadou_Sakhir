$(document).ready(function(){

  
 /* traitement d inscription */ 
     $("#enregistrer").on('click',function()  {


      var statu=$("#error"); 

      var quest=$("#qu").val();
      var score=$("#sc").val();
      var liste=$("#list").val();
     
      


       if (quest=="" || score=="") {
       // alert('Veuillez renseigner tous les champs ')
       statu.html('<p style="color:red;margin-left:5%;font-weight:bold;font-size:20px;">Veuillez remplir tous les champs</p> ').fadeOut(4000);
       }
      
       else if (score<5) {
        statu.html('<p style="color:red;margin-left:5%;font-weight:bold;font-size:20px;">le score doit etre superieur ou egal a 5  </p> ').fadeOut(400);
     // preventDefault();      
   
$("#sc").focus(function()  {
       $("#status").html("");   
       });
}

         else if (liste=="Donnez le type de reponse") {

statu.html('<p style="color:red;margin-left:5%;font-weight:bold;font-size:20px;">Choisissez le type de reponse </p> ').fadeOut(4000);         
         }

       else { 
         
    
    //$("#registerform").serialize()
         $.ajax({
                 url:'../data/question.php',
                dataType:'json',
                 method:'POST',
                 data:$("#questionform").serialize(),
                success: function (response) {
                  console.log("reuissi")
                    if (response==1) {
                  
                 statu.html('<p style="color:red;margin-left:5%;font-weight:bold;font-size:16px;">Revoyez votre parametrage</p> ').fadeOut(9000);
                  }
                  else if (response==2) {
                      statu.html('<p style="color:red;margin-left:5%;font-weight:bold;font-size:16px;">cochez la ou les bonnes repnses</p> ').fadeOut(9000);
     
                      }
        
                  else if (response==0) {

                  statu.html('<p style="color:green;margin-left:15%;font-weight:bold;font-size:17px;">traitement en cours...</p> ').fadeOut(4000);
                   alert("question enregistree");
                    window.location="creerquestion.php" 
                  }
                 
                },error:function () {
                console.log("erreur envoi") }
                
           });
        }

     });




/* $("#login").focus(function()  {
       $("#pseudo").html("");   
       });
 $("#pawd").focus(function()  {
       $("#epwd").html("");   
       });
 $("#confpwd").focus(function()  {
       $("#epwd").html("");   
       });
*/



    }); 




/* debut generation de champ */ 
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
      champ.style="width:60%; height:30px;margin-left:30%; border-radius:10%;background-color:#F4F4F4;";
      
      sel.name = "sels[]";
      sel.type = "checkbox";
      sel.style="background-color:#F4F4F4;border: 0.1em solid #000;border-radius:40%;margin-left:1%;";
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
      champ.style="width:60%; height:30px;margin-left:30%; border-radius: 10%;;background-color:#F4F4F4;";
      
      sel.name = "sels[]";
      sel.type = "radio";
      sel.style="background-color:#F4F4F4;margin-left:1%;";
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

/* finn generation de champ */ 
