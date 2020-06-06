	$(document).ready(function(){

     $("#login").on('click',function()  {
      var log=$("#log").val();
      var pwd=$("#pwd").val();

       if (log=="" || pwd=="" ) {
       	alert('Veuillez renseigner tous les champs ')
       }
       else { 
         
		          

         $.ajax({
		             url:'data/login.php',
		            dataType:'json',
		             method:'POST',
		             data:$("#connform").serialize()
		             ,
		            
		            success: function (response) {
		            
		             	//console.log(response)
		             	if (response==2) {
		             		window.location="src/espacejoueur.php"
		             
		             	}
		             	else if (response==1) {
		             		window.location="src/listequestions.php"
		             	}
		    
		             	else {
		             	$("#response").html('<p style="color:red;margin-left:15%;font-weight:bold;font-size:20px;">Donnees invalides</p> ');
		             	/* window.location="src/listequestions.php"*/

		             		
		             	}
		             //
		               //console.log(response);
		            },error:function (status) {alert(status)}
		            
		       });
            }
     });
	});