<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    try {
        $serveur = "localhost";
        $login = "root";
        $pass = "root";

        $connexion = new PDO("mysql:host=$serveur;dbname=les fonctions sql", $login, $pass);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        /***********************************1 CALCUL UNE MOYENNE *************************************************** */

        /**
         *permet de calculer une valeur moyenne sur un ensemble d’enregistrement de type numérique et non nul. 
         *https://sql.sh/fonctions/agregation/avg
         */

        //  $fonctionsSql = "SELECT AVG(age) FROM Inscrits";

        /***********************************2 COUNT *************************************************** */

        /**
         *la fonction d’agrégation COUNT() permet de compter le nombre d’enregistrement dans une table. 
         *Connaître le nombre de lignes dans une table est très pratique dans de nombreux cas, 
         *par exemple pour savoir combien d’utilisateurs sont présents dans une table ou pour connaître le nombre de commentaires
         *sur un article.
         *
         *L’utilisation de la clause DISTINCT peut permettre de connaître le nombre de villes distinctes
         *sur lesquels les visiteurs sont répartit.
         *https://sql.sh/fonctions/agregation/count
         */

        // $fonctionsSql = "SELECT COUNT(age) FROM Inscrits";

        /***********************************3 MAX / MIN *************************************************** */

        /**
         *
         * 
         * 
         * 
         */

        // $fonctionsSql = "SELECT MIN(age) FROM Inscrits";

        /***********************************4 SUM *************************************************** */

        /**
         * permet de calculer la somme totale d’une colonne contenant des valeurs numériques. 
         * Cette fonction ne fonction que sur des colonnes de types numériques (INT, FLOAT …) 
         * et n’additionne pas les valeurs NULL.
         * 
         */

        // $fonctionsSql = "SELECT SUM(age) FROM Inscrits";

        /***********************************5 UCASE / LCASE*************************************************** */

        /**
         *permet de transformer toutes les lettres d’une chaîne de caractères pour les mettre en majuscule
         * 
         *permet de transformer toutes les lettres d’une chaîne de caractères pour les mettre en minuscule
         *https://sql.sh/fonctions/ucase
         *https://sql.sh/fonctions/lcase 
         */

        //$fonctionsSql = "SELECT UCASE(prenom),lCASE(nom),age FROM Inscrits";

        /***********************************6 LENGTH*************************************************** */

        /**
         *permet de calculer la longueur d’une chaîne de caractères.
         *https://sql.sh/fonctions/length
         */

        $fonctionsSql = "SELECT LENGTH(prenom) FROM Inscrits";

        $requete = $connexion->prepare($fonctionsSql);
        $requete->execute();

        $resultats = $requete->fetchAll();

        echo "<pre>";
        print_r($resultats);
        echo "</pre>";
    } catch (PDOException $e) {

        echo "Echec de la connexion: " . $e->getMessage();
    }
    ?>
</body>

</html>