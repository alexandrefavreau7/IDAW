<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    <body>
        <h1>Bases de données MySQL</h1>  
        <?php
            $servername = 'localhost';
            $username = 'root';
            $password = 'root';
            
            //On établit la connexion
            $conn = new mysqli($servername, $username, $password, "Bdd_tp3");
            
            //On vérifie la connexion
            if($conn->connect_error){
                die('Erreur : ' .$conn->connect_error);
            }
            echo 'Connexion réussie <br>';
            

            $sql  = $conn->query("SELECT * FROM table1");
            // print_r($sql)
            echo 'Résultat : <br>';


            for ($row_no = $sql->num_rows - 1; $row_no >= 0; $row_no--) {
            $sql->data_seek($row_no);
            $row = $sql->fetch_assoc();
            echo " id = " . $row['id'] . ' login = ' . $row['login']. ' password = '.$row['password']. ' pseudo = '. $row['pseudo']. "<br>";
}

        ?>

    </body>
</html>

