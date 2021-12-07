    <?php
        try {
            $connexion = new PDO('mysql:host=localhost;dbname=tes','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION) );
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        if(isset($_POST['pseudo'], $_POST['pwd']) && ( !empty($_POST['pseudo']) && !empty($_POST['pwd'] ) ))
        {
            $pseudo = htmlentities( addslashes( $_POST['pseudo']) );
            $pwd = htmlentities( md5( $_POST['pwd'] ) );

            if(filter_var($pseudo, FILTER_VALIDATE_EMAIL))
            {
                $sql = 'SELECT * FROM tester WHERE email = :pseudo AND pwd = :pwd';
            }else{
                $sql = 'SELECT * FROM tester WHERE pseudo = :pseudo AND pwd = :pwd';
            }

            $sql_requete = $connexion->prepare($sql) ;

            $sql_requete->execute(
                array(
                    'pseudo'    => $pseudo,
                    'pwd'       => $pwd
                )
            );
            $tr=$sql_requete->rowCount();
    
            if ($tr > 0){
                echo'membre';
            }
            else{
                header('Location:index.php?errorMembre');
            }
        }
    ?>