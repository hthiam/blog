<?php 
session_start();
       $serveur = "mysql-hassanatou.alwaysdata.net";
        $login = "171883_hassanat";
        $pass = "mamdiallo1F";
        
       $connexion = new PDO("mysql:host=$serveur;dbname=hassanatou_base1", $login, $pass);

if($_POST){
    
    
    
    
    $titre = ($_POST['titre']); 
    
    
    $reqrec=$connexion->prepare("SELECT * FROM RECETTE WHERE TITRE = ?");
    $result=$reqrec->execute(array($titre));
    
    $affiche=$reqrec->fetch();
    $contenu = $affiche['CONTENU'];
    echo $contenu;
    
    
    
    
}
    
 

?>



<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
       <meta name="description" content="">
    <meta name="author" content="">
      
    <title>Presentation</title>
 
    
       <!-- Custom stylesheet -->
        <link rel="stylesheet" href="custom1.css" />
    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    

  </head>

  <body>
  <!-- Header -->
        <header> 
            <!-- Container -->
            <div class="container">
                    <div class="col-md-8 col-md-offset-2" id="titre">
                        <div class="banner">
                            <h3>Bienvenue dans ma cuisine</h3>
                            <h1>Cahier de Gourmandise</h1>
                        </div>
                </div>
            </div><!-- Container end -->
        </header><!-- Header end -->


    <!-- Page Content -->
      
      
    <div class="container">
        
         <div id="bouton">  
           <div id="myBtnContainer">
               <button class="btn1"><a href="index.php"> Accueil</a></button>
                <button class="btn1 active" onclick="filterSelection('all')">Tous les recettes</button>
                <button class="btn1" onclick="filterSelection('entree')"> Les Entrées</button>
             <button class="btn1" onclick="filterSelection('plat')">Les Plats</button>
                <button class="btn1" onclick="filterSelection('dessert')">Les Desserts</button>
                </div>
        </div>


      <div class="row">
          
        <div class="col-lg-4 col-sm-6 portfolio-item entree" value="LES ENTREES" id="recet">
            <div id="betterave"><form method="post" action="recette.php">
            
             <input type="hidden" name="titre" value="Salade de betterave"/>
             <input type="hidden" name="image" value="bettrave.jpg"/>
            
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="bettrave.jpg" style="width:100%" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Salade de Betterave</a>
              </h4>
              <p class="card-text">Ingrediants<br>Avocat,Betterave,fromage...</p>
              </div>
              <input type="submit" value="recette" id="cacher" />
                </div>
                </form>
                </div>
            
          </div>
    
       <div class="col-lg-4 col-sm-6 portfolio-item  dessert" value="LES DESSERTS" id="recet">
           <div id="riz-lait"><form method="post" action="recette.php"> 
                 <input type="hidden" name="titre" value="Riz au lait"/>
                <input type="hidden" name="image" value="riz-lait.jpg"/>
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="riz-lait.jpg" style="width:100%" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Riz au lait</a>
              </h4>
              <p class="card-text">Ingrediants<br>Riz,lait,sucre...</p>
              </div>
              <input type="submit" value="recette" id="cacher" />
                </div>
                </form>
                </div>
          </div>
         <div class="col-lg-4 col-sm-6 portfolio-item entree" value="LES ENTREES" id="recet">
           <div id="soupe"><form method="post" action="recette.php">
              <input type="hidden" name="titre" value="Soupe de poulet à la citronnelle"/>
             <input type="hidden" name="image" value="soupe-poult.jpg"/> 
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="soupe-poult.jpg" style="width:100%" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Soupe au poulet</a>
              </h4>
              <p class="card-text">Ingrediants<br>Viande de poulet,carrotte...</p>
              </div>
              <input type="submit" value="recette" id="cacher" />
                </div>
                </form>
                </div>
            
          </div>
         <div class="col-lg-4 col-sm-6 portfolio-item plat" value="LES PLATS" id="recet">
          <div id="briani"> <form method="post" action="recette.php">
             <input type="hidden" name="titre" value="Bryani"/>
             <input type="hidden" name="image" value="briani.jpg"/>
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="briani.jpg" style="width:100%" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Riz au lait</a>
              </h4>
              <p class="card-text">Ingrediants<br>Riz,poulet,cardamome....</p>
              </div>
              <input type="submit" value="recette" id="cacher" />
                </div>
                </form>
                </div>
            
          </div>
        <div class="col-lg-4 col-sm-6 portfolio-item dessert" value="LES DESSERTS" id="recet">
          <div id="cake"> <form method="post" action="recette.php">
             <input type="hidden" name="titre" value="Cheesecake"/>
             <input type="hidden" name="image" value="cheescake.jpg"/>
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="cheescake.jpg" style="width:100%" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Cheescake</a>
              </h4>
              <p class="card-text">Ingrediants<br>Biscuit,Fromage,oeufs...</p>
              </div>
              <input type="submit" value="recette" id="cacher" />
                </div>
                </form>
                </div>
            
          </div>
         <div class="col-lg-4 col-sm-6 portfolio-item plat" value="LES PLATS" id="recet">
          <div id="bourgui"><form method="post" action="recette.php">
                <input type="hidden" name="titre" value="Boeuf Bourguignon"/>
                <input type="hidden" name="image" value="bourgui.jpg"/>
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="bourgui.jpg" style="width:100%" alt="riz-lait"></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Boeuf Bourguignon</a>
              </h4>
              <p class="card-text">Ingrediants<br>viande de boeuf, vin rouge....</p>
              </div>
              <input type="submit" value="recette" id="cacher" />
                </div>
                </form>
                </div>
            
          </div>
        </div>
    </div>
      
    <!-- /.container -->

   <!-- Footer -->
  <footer>
            <div class="container">
                               

                    
                        <div class="contact_us">
                            <h4>Contacte</h4>
                            <a href="">HASSANAPOSTE@YAHOO.FR</a>

                            <address>
                                01.45.02.45.03<br />
                                </address>
                        </div>
                

                   
                        <div class="basic_info">

                            <div class="footer-copyright">
                                <p>
                                    Copyright © 2018 <br/>
                                    
                                 • Site hébergé par Always-Data.<br/>
                Les textes et photos sont la propriété de Cahiers de gourmandises(sauf mention contraire) et ne sont pas libres de droits. 
                                
                            </div>					
                        </div>
                   
            </div>
        </footer>
    <!-- Bootstrap core JavaScript -->
       <script type="text/javascript" src="filtre.js"></script>


  </body>

</html>
