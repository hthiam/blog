<?php
session_start();
 $serveur = "mysql-hassanatou.alwaysdata.net";
        $login = "171883_hassanat";
        $pass = "mamdiallo1F";
        
       $connexion = new PDO("mysql:host=$serveur;dbname=hassanatou_base1", $login, $pass);
?>



<!DOCTYPE html>
<html>
    <head>
	<title>recette</title>
        <link rel="stylesheet" href="recette.css" />
    </head>
	
	
<body>
   
    <a href="presentation.php" id="retour">Recettes</a>
    
   

<section>
    <div class="monTitre">
    <?php echo ($_POST['titre']); ?>
    </div>
    <div id="contenaire">
        <div id="bloc">
            <div id="portion"><strong>Nombre de personne: 4 </strong> <br/><br/><strong>Ingredient: </strong>
           <?php
		 $titre = ($_POST['titre']); 
         $reqrec=$connexion->prepare("SELECT * FROM recette WHERE TITRE = ?");
    	 $result=$reqrec->execute(array($titre));
         $affiche=$reqrec->fetch();
         $ingredient = $affiche['INGREDIENT'];
          echo $ingredient;        
                ?><br/><br/><strong>Temps de preparation : </strong><?php
		 $titre = ($_POST['titre']); 
         $reqrec=$connexion->prepare("SELECT * FROM recette WHERE TITRE = ?");
    	 $result=$reqrec->execute(array($titre));
         $affiche=$reqrec->fetch();
         $preparation = $affiche['TEMP-DE-PREPARATION'];
          echo $preparation;        
        ?> </div>
    <div id="image">
    <img src="<?php echo ($_POST['image']); ?>" id="imgrecette"/>
    </div>
    </div>
   
    
    </section>
    <div class="contenuText">
        
        <?php
		 $titre = ($_POST['titre']); 
         $reqrec=$connexion->prepare("SELECT * FROM recette WHERE TITRE = ?");
    	 $result=$reqrec->execute(array($titre));
         $affiche=$reqrec->fetch();
         $contenu = $affiche['CONTENU'];
          echo $contenu;
          
        
        ?>
    </div>
    
    </section>
    <section>
    
    
    
    
    
    
    </section>

		

<script type="text/javascript" src="filtre.js"></script>	
</body>
</html>
