<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css2/style.css" rel="stylesheet"/>
    <link href="css2/rendez  vous.css" rel="stylesheet"/>
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"/>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css2/bootstrap.css"/>

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&amp;display=swap" rel="stylesheet"/>
  <!-- Custom styles for this template -->
  
  <!-- responsive style -->
  
    
</head>
<body>
  
   
    
  
     <!-- header section strats -->
     <header class="header_section">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-8">
              <nav class="navbar navbar-expand-lg custom_nav-container ">
                <img src="images/logo.png" height="50px" width="60px">
                <a class="navbar-brand" href="index.php">
                  <span>
                    startroc
                  </span>
                </a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
  
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <div class="d-flex  flex-column flex-lg-row align-items-center">
                    <ul class="navbar-nav  ">
                      <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="about.php">About </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="service.php">Services </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="sign up.php"> Sign up</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="login.php"> Login</a>
                      </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                      <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                    </form>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </header>
      <!-- end header section -->

      
    <main>
        <form id="login_form" class="form_class" action="code1.php" method="post">
                <a href="rendezVous.php" class="btn btn-secondary btn-lg">rendez-vous</a>
                <a  href="payment.php" class="btn btn-secondary btn-lg">payment</a>
            <div class="form_div">
            
                <div class="alert">

                </div>

               
                
                <?php
                include('message.php'); 
                ?>
                <p><b>Cher client</b></p>
                <p>essayer d'avoir ton service avant le remplissage de ce formulaire pour des raisons de securit?? et en cas d'un probl??me <a href="#" >cliquer ici</a></p>
                

                <label>nom</label>
                <input id="nom" class="field_class" name="nom" type="text"  required>
                <label>prenom</label>
                <input id="prenom" class="field_class" name="prenom" type="text"  required>
                <label>prix a payer</label>
                <input id = "prix"class="field_class" name="prix" type="text"  required>
                <label>envoyer a</label>
                <input id="aqui" class="field_class" name="aqui" type="text" required>
                
                
              
                <button class="submit_class" type="submit" name="ajouter1" form="login_form" onclick="return validarLogin()">submit</button>

                <!--<button class="submit_class"   onclick="validarLogin()">Submit</button>-->
             
            </div>
           
        </form>
    </main>
    <script  src="js/rendez vous.js"></script>
</body>
</html>