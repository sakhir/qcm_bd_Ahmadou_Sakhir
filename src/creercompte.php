
<!DOCTYPE html>
<html>
<head>
  <title> Creer Compte</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="../css/listequestion.css?v=1">
  <link rel="stylesheet" type="text/css" href="../css/util.css">

</head>
<body data-spy="scroll">  

<div id="cont"> 
    <div class="container-fluid">

       <?php include("header.php"); ?>  
      <div class="row">
        <?php $nav_en_cours = "creercompte"; ?>
       <?php include("nav.php"); ?>   
    
      </div>
       <!-- debut  -->
      <div class="container-login100">
      <div class="wrap-login100">
        <form class="login100-form  p-l-30 p-r-55 p-t-50" id="registeraform" method="post" action="creercompte.php" enctype="multipart/form-data">
          <span class="login100-form-title">
        Enregistrer un admin  </span>
          <div class="row">
             <div class="col-6"> 
                        <label class="txt3 m-t-18">Prenom</label>
              <div class="wrap-input100  m-b-16" >

                <input class="input100" type="text" name="prenom" placeholder="prenom" required id="preno">
                <span class="focus-input100"></span>
              </div>
                      </div>
                      <div class="col-6 "> 
                        <label class="txt3 m-t-18">Nom</label>
              <div class="wrap-input100  m-b-16" >

                <input class="input100" type="text" name="nom" placeholder="nom" required id="no">
                <span class="focus-input100"></span>
              </div>
                      </div>
                     </div>
                    
                     <div class="row">

                     <div class="col-6 "> 
                        <label class="txt3">Login</label>
              <div class="wrap-input100  m-b-16" >

                <input class="input100" type="text" name="login" placeholder="login" id="login" required>
                <span class="focus-input100"></span>
                
              </div>
              <small id="pseudo"></small>
                      </div>
                    <div class="col-6 "> 
                        <label class="txt3">Mot de pass</label>
              <div class="wrap-input100  m-b-16" >

                  <input class="input100" type="password" name="pwd" placeholder="Password" id="pawd" required>
                <span class="focus-input100"></span>
              </div>
                      </div>  

                     </div>


                     <div class="row">
                    <div class="col-6 "> 
                        <label class="txt3">Confirmer mot de pass</label>
              <div class="wrap-input100  m-b-16" >

                  <input class="input100" type="password" name="cpwd" placeholder="Password" id="confpwd">
                <span class="focus-input100"></span>
              </div>
            <small id="epwd"></small>
                      </div> 
                    <div class="col-6 "> 
                        <label class="txt3">avatar</label>
              <div class="wrap-input100  m-b-16" >

                <input class="inputf" type="file" name="avatarfile" id="uploadButton" required  onchange="handleFiles(files)" >
                <span class="focus-input100"></span>
              </div>
              
                      </div> 

                     </div>

                     <div class="row">

                     <div class="col-3 "> 
                
              <div class=" " >

                <hr style="width: 150%;height: 2px;background-color: black;border-radius: 50%;margin-top: 70%;">
                
              </div>
                      </div>
                    <div class="col-6 "> 
                     
              <div class="wrap-input100  m-b-16" >

                <!--  <img id="av" src=""> -->
                 <div><label for="upload"><span id="preview"></span></label></div>
                
              </div>
                      </div>  
                    <div class="col-3 "> 
     
              <div class="" >

              <hr style="width: 150%;height: 2px;background-color: black;border-radius: 50%;margin-top: 70%;margin-right: 30%;">
              
              </div>
                      </div>

                     </div>


          
        

                      <div id="status"></div>
          <div class="container-login100-form-btn">
            <button class="login100-form-btn" id="registera" type="button">
              S'inscrire
            </button>

          </div>

          
        </form>
       <!--  <form class="login100-form  p-l-30 p-r-55 p-t-50" method="post">
          <span class="login100-form-title">
            S'inscrire pour tester votre niveau en culture generale
          </span>
          <div class="row">
             <div class="col-6"> 
                        <label class="txt3 m-t-30">Prenom</label>
              <div class="wrap-input100  m-b-16" >

                <input class="input100" type="text" name="prenom" placeholder="prenom">
                <span class="focus-input100"></span>
              </div>
                      </div>
                      <div class="col-6 "> 
                        <label class="txt3 m-t-18">Nom</label>
              <div class="wrap-input100  m-b-16" >

                <input class="input100" type="text" name="nom" placeholder="nom">
                <span class="focus-input100"></span>
              </div>
                      </div>
                  </div>
                    
                     <div class="row">

                     <div class="col-6 "> 
                        <label class="txt3">Login</label>
              <div class="wrap-input100  m-b-16" >

                <input class="input100" type="text" name="login" placeholder="login">
                <span class="focus-input100"></span>
              </div>
                      </div>
                    <div class="col-6 "> 
                        <label class="txt3">Mot de pass</label>
              <div class="wrap-input100  m-b-16" >

                  <input class="input100" type="password" name="pwd" placeholder="Password">
                <span class="focus-input100"></span>
              </div>
                      </div>  

                     </div>


                     <div class="row">
                    <div class="col-6 "> 
                        <label class="txt3">Confirmer mot de pass</label>
              <div class="wrap-input100  m-b-16" >

                  <input class="input100" type="password" name="cpwd" placeholder="Password">
                <span class="focus-input100"></span>
              </div>
                      </div> 
                    <div class="col-6 "> 
                        <label class="txt3">avatar</label>
              <div class="wrap-input100  m-b-16" >

                <input class="inputf" type="file" name="avatar" >
                <span class="focus-input100"></span>
              </div>
                      </div> 

                     </div>

                     <div class="row">

                     <div class="col-3 "> 
                
              <div class=" " >

                <hr style="width: 150%;height: 2px;background-color: black;border-radius: 50%;margin-top: 70%;">
                
              </div>
                      </div>
                    <div class="col-6 "> 
                     
              <div class="wrap-input100  m-b-16" >

                 <img id="av" src="../images/av.png">
                
              </div>
                      </div>  
                    <div class="col-3 "> 
     
              <div class="" >

              <hr style="width: 150%;height: 2px;background-color: black;border-radius: 50%;margin-top: 70%;">
              
              </div>
                      </div>

                     </div>


          
        


          <div class="container-login100-form-btn">
            <button class="login100-form-btn">
              S'inscrire
            </button>

            
          </div>

          
        </form> -->
      </div>
    </div>
      <!-- fin -->
      

    </div>
</div>

<script
  src="https://code.jquery.com/jquery-3.5.1.min.js" 
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<script type="text/javascript">

 /* fin traitement d'inscription */ 
</script>
 <script src="../js/scripta.js"> </script> 
</body>
</html>



