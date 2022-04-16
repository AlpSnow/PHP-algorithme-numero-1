<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algorithmes PHP</title>
</head>

<body>
    <br>
    <h3>Algorithmes PHP :</h3>


    <h4>1</h4>
    <!-- Ecrire un algorithme permettant de compter le nombre de caractères contenus dans une phrase -->

    <?php
        // Même variable pour les exercices 1 et 2 :
        $nbMotsPhrase ="Notre Formation DL commence aujourd'hui";
    ?>
    <p> La phrase " <?php  echo ($nbMotsPhrase) ?> "   contient   <?php  echo strlen($nbMotsPhrase) ?>   caractères </p> 


    <h4>2</h4>
    <!-- Ecrire un algorithme permettant de compter le nombre de mots contenus dans une phrase -->

    <p> La phrase " <?php  echo ($nbMotsPhrase) ?> "   contient   <?php  echo str_word_count($nbMotsPhrase)  ?>  mots </p>


    <h4>3</h4>
    <!-- Remplacer un mot dans une phrase  -->

    <?php
        $nbMotsPhrase2 = array("aujourd'hui" => "demain");
    ?>
    <p> Ancienne phrase : " <?php  echo ($nbMotsPhrase) ?> " <br> Nouvelle phrase : "  <?php echo strtr("Notre Formation DL commence aujourd'hui", $nbMotsPhrase2) ?> "</p>

    
    <h4>3 (autre version)</h4>

    <p> Ancienne phrase : " <?php  echo ($nbMotsPhrase) ?> " <br> Nouvelle phrase : "  <?php  echo str_replace("aujourd'hui", "demain", $nbMotsPhrase) ?> "</p>


    <h4>4</h4>
    <!-- Ecrire un algorithme permettant de savoir si une phrase est palindrome -->

    <p>
        <?php

            $texte = "Engage le jeu que je le gagne";

            // on inverse la chaine de caractère, on met en minuscule, puis on enleve les espaces
            $texteNew = $texte;
            $textTest = str_replace(" ", "", strtolower($texteNew));

            $reverse = strrev($texte);
            $min = strtolower($reverse);
            $final = str_replace(" ", "", $min);

            if ($textTest == $final){
                echo "Ceci est un palindrome";
            }
            else
                echo "Ceci n'est pas un palindrome";

        ?>

    </p>



    <h4>5</h4>
    <!-- Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros -->

    <?php
        $valeurEnFrancs = 100;
        $valeurEnEuros = $valeurEnFrancs / 6.55957;

        $valeurEnEuros = (round($valeurEnEuros, 2));

    ?>

    <p>   Montant en francs = <?php  echo ($valeurEnFrancs) ?> francs <br> Montant en euros = <?php echo ($valeurEnEuros) ?> € </p>



    <h4>5 (autre version)</h4>

    <?php

        $montantAV = 100;
        $conversionTauxAV = 6.55957;

        $montantEuroAV = $montantAV / $conversionTauxAV;

        // <?= équivalent de <?php echo  
    ?>

    <p>Le montant en euro est de <?= $montantEuroAV ?> </p>      
    <p>Le montant en euro est de <?= number_format($montantEuroAV, 2, ",", " ") ?> </p>



    <h4>6</h4>
    <!-- Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité 
    d’articles, son prix hors taxe et un taux de TVA -->

    <?php

        $prixArticle = 9.99;
        $quantiteArticle = 5;
        $tauxDeTVA = 0.2;

        $prixFinal = $prixArticle * $quantiteArticle + $prixArticle * $quantiteArticle * $tauxDeTVA;
        $prixFinal = (round($prixFinal, 2));

    ?>

    <p> 
        Prix unitaire de l’article : <?php echo ($prixArticle) ?> € <br>
        Quantité : <?php echo ($quantiteArticle) ?> articles <br>
        Taux de TVA : <?php echo ($tauxDeTVA) ?> <br>
        Le montant de la facture à régler est de : <?php echo ($prixFinal) ?> €
    </p>



    <h4>7</h4>
    <!-- Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge -->

    <p>
         <?php

            $ageEnfant = 12;

            if ($ageEnfant >= 12) {
                 echo "L’enfant qui a " .$ageEnfant. " ans appartient à la catégorie cadet";
            } elseif ($ageEnfant >=10) {
                 echo "L’enfant qui a " .$ageEnfant. " ans appartient à la catégorie minime";
            } elseif ($ageEnfant >= 8) {
                echo "L’enfant qui a " .$ageEnfant. " ans appartient à la catégorie pupille";
            } else {
                echo "L’enfant qui a " .$ageEnfant. " ans appartient à la catégorie poussin";
            }
        ?>
    </p>



    <h4>7 (autre version)</h4>

    <?php

        $ageAV = 5;

        $tableauCatagorieAV = [
            "poussin" => [6,7],
            "pupille" => [8,9],
            "minime" => [10,11],
            "cadet" => [12, INF]
        ];

        $found = false;

        foreach ($tableauCatagorieAV as $categorie => $intervalle){
            if($ageAV >= $intervalle[0] && $ageAV < $intervalle[1]){
                $found = true;
                echo $categorie;
            }
        }

        if($found == false){     //peu aussi s'écrire ($found == 0)   Ou    (!$found)
            echo "La personne est un peu trop jeune pour faire du sport";
        }

    ?>

    <br>



    <h4>8</h4>
    <!-- Ecrire un algorithme qui renvoie la table de multiplication d’un nombre -->

    <p> 
        <?php

            $nombreTableMulti = 8;

            Echo "Table de multiplication de " .$nombreTableMulti.  ": <br>";

            for ($i = 1; $i <= 10; $i++)
                echo $i. " x " .$nombreTableMulti. " = " .$i*$nombreTableMulti. "<br>" ;

        ?>

    </p>



    <h4>9</h4>
    <!-- Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe
    Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de 
    plus de 20 ans, alors celle-ci est imposable -->


    <?php

        $sexeImposable = "homme";
        $agePersonneImposable = 34;
    ?>


    <p> 
        Sexe = <?php echo ($sexeImposable) ?>  <br>
        Age = <?php echo ($agePersonneImposable) ?>  <br>
        
        <?php 
            if ($sexeImposable == "homme" && $agePersonneImposable >= 20 || $sexeImposable == "femme" && $agePersonneImposable >= 18 && $agePersonneImposable <=35) {
                echo "Vous êtes imposable.";
            } else {
                echo "Vous n'êtes pas imposable.";
            }
        ?>
    </p>



    <h4>10</h4>
    <!-- A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui 
    affiche à un utilisateur un rendu de monnaie -->

    <?php

        $sommeApayer = 152;
        $montantVerse = 200;

        $sommeARendre = $montantVerse - $sommeApayer;

        $sommeDu = $montantVerse - $sommeApayer;

        $nombreBillets10 = 0;
        $nombreBillets5 = 0;
        $nombrePieces2 = 0;
        $nombrePieces1 = 0;

        while( $sommeDu >= 10 ) {
            $sommeDu = $sommeDu - 10;
            $nombreBillets10++;
        }

        while( $sommeDu >=5 ) {
            $sommeDu = $sommeDu - 5;
            $nombreBillets5++; 
        }

        while( $sommeDu >= 2 ) {
            $sommeDu = $sommeDu - 2;
            $nombrePieces2++;
        }

        while( $sommeDu >=1 ) {
            $sommeDu = $sommeDu - 1;
            $nombrePieces1++;
        }


    ?>

    <p>
        Montant à payer : <?php echo($sommeApayer) ?> €  <br>
        Montant versé : <?php echo($montantVerse) ?> €  <br>
        Reste a payer : <?php echo($sommeARendre) ?> €  <br>
        Rendue de monnaie : <br>
        <?php echo($nombreBillets10) ?> billets de 10 € - <?php echo($nombreBillets5) ?> billet de 5 € - <?php echo($nombrePieces2) ?> pièce de 2 € - <?php echo($nombrePieces1) ?> pièce de 1 €
    </p>



    <h4>10 (version avancé)</h4>

    <?php

        $argentaPayer = 599.91; 
        $montantQueClientDonne = 1050;

        $argentArendreClient = $montantQueClientDonne - $argentaPayer;

        $listeMonnaie = [500, 200, 100, 50, 20, 10, 5, 2, 1, 0.5, 0.2, 0.1, 0.05, 0.02, 0.01];

        if ($argentArendreClient>0){
            foreach($listeMonnaie as $monnaie){
                $nbfois = 0;
                while($monnaie <= $argentArendreClient){
                    $nbfois++;
                    $argentArendreClient = (round($argentArendreClient-$monnaie, 2));            //On modifie :  $argentArendreClient-= $monnaie; pour éviter l'erreur de la précision virgule flottante (challenger navette spatiale crash)
                    // echo $argentArendreClient. "<br>"; pour voir le bug (dure a comprendre qu'un PC calcule mal........)
                    if($monnaie > $argentArendreClient){                            // on fait un If monnaie > argentArendreClient pour afficher une seul fois la somme a rendre en fin de boucle while. on anticipe la prochaine boucle avant de partir dedans. ainsi on affiche uniquement les resultats finaux
                        $billetOuPiece = $monnaie >= 5 ? ($nbfois > 1 ? "billets" : "billet") : ($nbfois > 1 ? "pièces" : "pièce");
                        $pourLesCentimes = $monnaie < 1 ? $monnaie*100 : $monnaie;
                        $centimeOuEuro = $monnaie < 1 ? ($pourLesCentimes > 1 ? "centimes" : "centime") : ($pourLesCentimes > 1 ? "euros" : "euro");
                        echo "je vous rends ". $nbfois. " ". $billetOuPiece. " de " .$pourLesCentimes. " ". $centimeOuEuro.  ". <br>";
                    }
                }
            }
        }

        elseif ($argentArendreClient == 0){
            echo "le compte est bon au centime près !";
        }

        else echo "Malheureusement, vous n'avez pas de quoi payer. il vous manque " .abs($argentArendreClient). " €.";

    // ancien affichage : 
    // if($monnaie > $argentArendreClient){ 
    //     echo "je te rends ". $nbfois. " ".$monnaie. " € <br>";


    //affichage avec les billet(s) et piece(s)
    // if($monnaie > $argentArendreClient){                            
    //     $billetOuPiece = $monnaie >= 5 ? "billet(s)" : "pièce(s)";
    //     $pourLesCentimes = $monnaie < 1 ? $monnaie*100 : $monnaie;
    //     $centimeOuEuro = $monnaie < 1 ? "centime(s)" : "euro(s)";
    //     echo "je te rends ". $nbfois. " ". $billetOuPiece. " de " .$pourLesCentimes. " ". $centimeOuEuro.  ". <br>";

    ?>



    <h4>11</h4>
    <!-- Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce 
    tableau et d’en afficher le contenu -->

    <?php
        $tableauVoiture = array("Peugeot", "Renault", "BMW", "Mercedes");
    ?>



    <p>Il y'a <?php echo count($tableauVoiture) ?> marques de voitures dans le tableau :  <br> </p>
    <ul>
        <li> <?php echo $tableauVoiture[0] ?> </li>
        <li> <?php echo $tableauVoiture[1] ?> </li>
        <li> <?php echo $tableauVoiture[2] ?> </li>
        <li> <?php echo $tableauVoiture[3] ?> </li>
    </ul>



    <h4>11 (Version algorithme)</h4>
    
    <p> Il y'a <?php echo count($tableauVoiture) ?> marques de voitures dans le tableau :  <br> </p>
    <ul>
        <?php
            $indexVoiture = 0;
            for ($indexVoiture = 0; $indexVoiture < count($tableauVoiture); $indexVoiture++)
                echo "<li>".$tableauVoiture[$indexVoiture]."</li>" ;
                // echo "<li>".$tableauVoiture[$indexVoiture]."</li> <br>" ; 
                // echo "<li>".$tableauVoiture[$indexVoiture]."<br>" ;   
        ?>
    </ul>



    <h4>11 (autre version)</h4>

    <?php

        $marqueDeLuxe = ["Lamborghini", "Pagani", "Ferrari", "Maserati", "Fiat", "Lancia", "Alfa Romeo"];
        echo "<p> il y'a " .count($marqueDeLuxe). " marques de voitures dans le tableau : </p>";

        echo "<ul>";
        foreach ($marqueDeLuxe as $marqueLuxex1){
            echo "<li>" .$marqueLuxex1. "</li>";
        }
        echo "</ul>";


    ?>



    <h4>12</h4>
    <!-- dire bonjour aux différentes personnes dans leur langue respective -->

    <p>
        <?php
            $prenomsExo12 = ["mickaël" => "FRA", "marie-claire" => "ENG", "virgile" => "ESP"];
            $direBonjours = ["ENG" => "Hello", "ESP" => "Hola", "FRA" => "Bonjours"];

            foreach ($prenomsExo12 as $prenoms => $langue){
                echo $direBonjours[$langue]." ". $prenoms. "<br>";
            }
        ?>
    </p>



    <h4>12 (autre version)</h4>

    <?php

        $prenomsExo12 = ["mickaël" => "FRA", "marie-claire" => "ENG", "virgile" => "ESP"];
        $direBonjours = ["Anglais" => "Hello", "Espagnol" => "Hola", "Français" => "Bonjours"];

        $correspondances = ["ENG" => "Anglais", "ESP" => "Espagnol", "FRA" => "Français"];

        foreach ($prenomsExo12 as $prenoms => $langue){
            echo $direBonjours[$correspondances[$langue]]." ". $prenoms. "<br>" ;
        }


    ?>



    <h4>13</h4>
    <!-- Calculer la moyenne générale d'un élève -->

    <?php

        $tableauNotes = array(10, 12, 8, 19, 3, 16, 11, 13, 9);

        $notesTotalEleve = 0;

        $indexNotes = 0;


        for ($indexNotes = 0; $indexNotes < count($tableauNotes); $indexNotes++)
            $notesTotalEleve += $tableauNotes[$indexNotes];
    
            $moyenneDeEleve = $notesTotalEleve / count($tableauNotes);
            $moyenneDeEleve= (round($moyenneDeEleve, 2));

    ?>


    <p>
        Les notes obtenues par l'élève sont : <?php echo implode(", ", $tableauNotes); ?>  <br>
        Sa moyenne générale est donc de : <?php echo $moyenneDeEleve; ?>
    </p>



    <h4>13 (autre version)</h4>

    <?php
        $notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];

        $moyenne = array_sum($notes)/count($notes);
        echo "Les notes de l'élève sont : ".implode(", ", $notes)."<br>";
        echo "Moyenne : ".number_format($moyenne, 2);
    ?>



    <h4>14</h4>
    <!-- Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours) -->

    <?php

        $jourDeNaissance = 17;
        $moisDeNaissance = 01; 
        $anneeDeNaissance = 1985;

        $jourActuel = 21;
        $moisActuel = 05;
        $anneeActuel = 2018;

        $calculJour = $jourDeNaissance;
        $calculMois = $moisDeNaissance; 
        $calculAnnee = $anneeDeNaissance;

        $ageJour = 0;
        $ageMois = 0;
        $ageAnnee = 0;

        while($calculAnnee != $anneeActuel){
            $calculAnnee += 1;
            $ageAnnee++;
        }


// calcul du nombre de mois 

        if ($calculMois <= $moisActuel) {
            while($calculMois != $moisActuel){
                $calculMois += 1;
                $ageMois++;
            };
        } elseif ($calculMois > $moisActuel && $calculMois <=12) {
            while($calculMois != 12){
                $calculMois += 1;
                $ageMois++;
            };
        } elseif ($calculMois > 12) {
            echo "Votre mois de naissance indiqué : " .$moisDeNaissance. " ne fait pas partie du calendrier.";
        }


        if ($calculMois == 12){
            $calculMois = 0;
            while($calculMois != $moisActuel){
                $calculMois += 1;
                $ageMois++;
            };
        }

//calcul du nombre de jours 
//(Ici juste pour les mois avec 31 jours, Il faut le faire une autre fois pour les mois à 30 jours et pour février en comptant les années bissextiles)

        if ($calculJour <= $jourActuel) {
            while($calculJour != $jourActuel){
                $calculJour += 1;
                $ageJour++;
            };
        } elseif ($calculJour > $jourActuel && $calculJour <=31) {
            while($calculJour != 31){
                $calculJour += 1;
                $ageJour++;
            };
        } elseif ($calculJour > 31) {
            echo "Votre jour de naissance indiqué : " .$jourDeNaissance. " ne fait pas partie du calendrier.";
        }


        if ($calculJour == 31){
            $calculJour = 0;
            while($calculJour != $jourActuel){
                $calculJour += 1;
                $ageJour++;
            };
        }

    ?>




    <p>
        Si la date courante est le <?php echo $jourActuel ?>/<?php echo $moisActuel ?>/<?php echo $anneeActuel ?>
        et la date de naissance le <?php echo $jourDeNaissance ?>/<?php echo $moisDeNaissance ?>/<?php echo $anneeDeNaissance ?> : <br>
        L'âge de la personne sera de <?php echo $ageAnnee ?> année(s), <?php echo $ageMois ?> mois et <?php echo $ageJour ?> jour(s).
    </p>

    

    <h4>14 et 15 (autre version avec le construct)</h4>
    <!-- Créer une classe Personne (nom, prénom et date de naissance)
    Instancier 2 personnes et afficher leurs informations : nom, prénom et âge -->

    <?php

        class Personne
        {
            private $_nom;
            private $_prenom;
            private $_dateNaissance;

            public function __construct($nom, $prenom, $date)
            {
                $this->_nom = $nom;
                $this->_prenom = $prenom;
                $this->_dateNaissance = new Datetime($date);
            }

            public function obtenirNomComplet()
            {
                return $this->_prenom." ".$this->_nom;
            }

            public function obtenirAge()
            {
                $dateAujourdhui = new DateTime();
                $differenceAge = $this->_dateNaissance->diff($dateAujourdhui);
                return $differenceAge->y." ans, ".$differenceAge->m." mois, ".$differenceAge->d." jours";
            }

        }

        $p1 = new Personne("DUPONT", "Michel", "1980-02-19");
        $p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");

        echo $p1->obtenirNomComplet()." a ".$p1->obtenirAge(). "<br>";
        echo $p2->obtenirNomComplet()." a ".$p2->obtenirAge();
   
    ?>
  

</body>
</html>

