        <?php
        
  
        
        echo "Bonjour !";



        $bdd = new PDO('mysql:host=localhost;dbname=cnamcp09_recette20170401;charset=utf8', 'root', '');

        $requete = 'SELECT * FROM plat ORDER BY plat_position'; 
        $resultat = $bdd->query ($requete);
        
foreach($resultat as $ligne) {
     echo '</br>'.$ligne['plat_nom'].$ligne['plat_position'];

}


$bdd->exec('INSERT INTO plat(plat_nom, plat_position) VALUES(\'addition\',\'5\')');

     




  

        
        
    


        ?>