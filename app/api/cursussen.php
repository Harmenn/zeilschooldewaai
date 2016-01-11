<?php
    /* DB Connection
    ================================================================================== */
    $link = mysqli_connect('localhost', 'root', '', 'zeilschooldewaai');
    if(!$link){
        echo 'could not connect to db';
    }


    /* Read
    ================================================================================== */

    if($_GET['action'] == '1'){

        if(isset($_POST['voorwaarden'])){
            $klant = $_POST['user_id'];
            $cursus = $_POST['cursus'];
            $comments = addslashes($_POST['comments']);

            $qry = "INSERT INTO inschrijvingen (cursus_id,klant_id,Opmerkingen) VALUES ($cursus, $klant,'$comments');";
            $rslt = mysqli_query($link, $qry);

            if($rslt){
                echo 'Query Succeed';
            }else{
                echo 'Query Failed: '.$qry;
            }
        }else{
            echo 'voorwaarden niet geaccepteerd';
        }
    }