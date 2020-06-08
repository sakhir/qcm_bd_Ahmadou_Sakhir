$(document).ready(function(){

  
 /* traitement d inscription */ 
     $("#register").on('click',function()  {


      var statu=$("#status"); 

      var prenom=$("#preno").val();
      var nom=$("#no").val();
      var login=$("#login").val();
      var mdp=$("#pawd").val();
      var cmdp=$("#confpwd").val();
           
      var formD = $("#registerform");
      var formdata=new FormData( formD[0]);
      
      


       if (prenom=="" || nom=="" || login=="" || mdp=="" || cmdp=="") {
       // alert('Veuillez renseigner tous les champs ')
       statu.html('<p style="color:red;margin-left:5%;font-weight:bold;font-size:20px;">Veuillez remplir tous les champs</p> ').fadeIn(400);
       }
      
       else if (mdp!=cmdp) {
        statu.html('<p style="color:red;margin-left:5%;font-weight:bold;font-size:16px;">les deux mots de pass doivent etre identiques </p> ').fadeIn(300);
     // preventDefault();      
   
$("#pawd ,#confpwd").focus(function()  {
       $("#status").html("");   
       });
}

       else { 
         
    
    //$("#registerform").serialize()
         $.ajax({
                 url:'../data/reg.php',
                dataType:'json',
                 method:'POST',
                 data:formdata,
                 cache: false,
                 contentType: false,
                 processData: false,
                success: function (response) {
                  console.log("reuissi")
                    if (response==1) {
                  
                 statu.html('<p style="color:red;margin-left:5%;font-weight:bold;font-size:16px;">Essayer un autre login</p> ').fadeOut(5000);
                  }
                  else if (response==2) {
                      statu.html('<p style="color:red;margin-left:5%;font-weight:bold;font-size:16px;">choisissez une photo</p> ').fadeOut(5000);
     
                      }
        
                  else {

                  statu.html('<p style="color:green;margin-left:15%;font-weight:bold;font-size:17px;">traitement en cours...</p> ').fadeOut(4000);
                   alert("inscription reuissi");
                    window.location="inscription.php" 
                  }
                 
                },error:function () {
                console.log("erreur envoi") }
                
           });
        }

     });



$("#login").keyup(function(){
 check_login();
});
   
$("#confpwd").keyup(function(){
 check_password();
}); 
$("#pawd").keyup(function(){
 check_passworda();
}); 

 $("#login").focus(function()  {
       $("#pseudo").html("");   
       });
 $("#pawd").focus(function()  {
       $("#epwd").html("");   
       });
 $("#confpwd").focus(function()  {
       $("#epwd").html("");   
       });


/* fin validation type image */ 
$('INPUT[type="file"]').change(function () {
    var ext = this.value.match(/\.(.+)$/)[1];
    switch (ext) {
        case 'jpg':
        case 'jpeg':
        case 'png':
        case 'gif':
            $('#uploadButton').attr('disabled', false);
            break;
        default:
            alert('Seule les images au format jpj et png sont permises');

            this.value = '';
    }
});




/*$("#registerform input").focus(function()  {
       $("#status").html(""); 	
       });
*/

  /* FIN READY */       
    }); 



function check_passworda() {


if ($("#confpwd").val()=="" ) {
		$("#epwd").html("");
}

if ($("#confpwd").val()!="" && $("#pawd").val()!=$("#confpwd").val() ) {
	$("#epwd").html('<p style="color:red;margin-left:10%;font-weight:bold;font-size:12px;">les deux mots de pass ne sont pas identiques </p> ');
}
else if($("#pawd").val()!="" && $("#pawd").val()==$("#confpwd").val())  {$("#epwd").html('<p style="color:green;margin-left:10%;font-weight:bold;font-size:12px;">mot de pass valide </p> ');}

}




function check_login() {
    $.ajax({
		             url:'../data/register.php',
		            dataType:'json',
		             method:'POST',
		             data: {'pseudo_check':$("#login").val()
		              },
		            
		            success: function (response) {
		            
		             	//console.log(response)
		             	if (response==1) {
		             	$("#pseudo").html('<p style="color:red;margin-left:15%;font-weight:bold;font-size:15px;">le login existe deja</p> ').fadeIn(300);
		             
		             	}
		    
		             	else  {
		             	$("#pseudo").html('<p style="color:green;margin-left:15%;font-weight:bold;font-size:15px;">login valide</p> ').fadeIn(300);
		             	
		             		
		             	}
		             //
		               //console.log(response);
		            },error:function (status) {console.log("erreur login")}
		            
		       });
}


/* debut fonction check_password */ 

function check_password() {

if ($("#pawd").val()=="") {
		$("#epwd").html("");
}

if ($("#pawd").val()!="" && $("#confpwd").val()!=$("#pawd").val() ) {
	$("#epwd").html('<p style="color:red;margin-left:10%;font-weight:bold;font-size:12px;">les deux mots de pass ne sont pas identiques </p> ');
}
else if($("#confpwd").val()!="" && $("#confpwd").val()==$("#pawd").val())  {$("#epwd").html('<p style="color:green;margin-left:10%;font-weight:bold;font-size:12px;">mot de pass valide </p> ');}


}


/* fin fonction checkpassword */ 



/*  valider tyope image */ 


 
 /* fin de fonction upload */ 


/* debut fonction upload foto */
function handleFiles(files) {

   var imageType = /^image\//;
   for (var i = 0; i < files.length; i++) {
   var file = files[i];
   if (!imageType.test(file.type)) {
     alert("veuillez sélectionner une image");
   }else{
     if(i == 0){
       preview.innerHTML = '';
     }
      console.log(i);
     var img = document.createElement("img");
     img.classList.add("obj");
     img.file = file;
     img.style="width:90%;margin-top:-5%;margin-left:10%;height: 120%;border-radius: 50% ;border: 4px solid #0D263D;position: relative;";
     preview.appendChild(img); 
     var reader = new FileReader();
     reader.onload = ( function(aImg) { 
     return function(e) { 
     aImg.src = e.target.result; 
   }; 
  })(img);

 reader.readAsDataURL(file);
 }

 }
}
