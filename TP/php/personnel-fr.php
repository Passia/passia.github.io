<?php
    include_once 'includes/dbh.php';
?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/en.css" type="text/css"/>
        <title>Blood online</title>
    </head>
    <body>

        <?php

        $sql = "SELECT * FROM donors ORDER BY id ASC";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        ?>
        
        <header>

            <div class="container">
    
                <div class="container" id="container">
    
                    <div class="outer">
                        <div class="inline">
                            <figure><img src="../images/logo-minsante.png"></figure>
                        </div>
                        <div class="inline">
                            <p>
                                <span class="small">Republique du Cameroun</span>
                                <span class="small">--------------------</span>
                                <span id="big">Ministère de la santé publique</span> 
                            </p>
                        </div>
                    </div>
                    <div class="outer">
                        <div class="inline" id="inline">
                            <p>
                                <span class="right"><i>Portail Web du Ministère de la Santé Publique du Cameroun,</i></span>
                                <span class="right"><i>accédez à toute l'information dans le domaine</i></span>
                                <span class="right"><i>de la santé au Cameroun</i></span>
                            </p>
                        </div>
                        <div class="inline">
                            <figure><img src="../images/logo-armoirie.png" alt=""></figure>
                        </div>
                    </div>
    
                </div>
    
                <div class="container" id="col">
    
                    <div id="main">

                        <div id="title">
                            <h1><span id="color"><span class="large"><i class="fa fa-tint" aria-hidden="true"></i> B</span>lood</span><span class="large">O</span>nline</h1>
                        </div>
            
                        <nav>
                            <div>
                                <ul>
                                    <li><a href="../index-fr.html"><i class="fa fa-home" aria-hidden="true"></i> Acceuil</a></li>
                                    <li><a href="../php/donner.php"><i class="fa fa-heartbeat" aria-hidden="true"></i> Donner du sang</a></li>
                                    <li><a href="personnel-fr.php" id="index"><i class="fa fa-users" aria-hidden="true"></i> Personnel</a></li>
                                </ul>
                            </div>
                        </nav>

                    </div>
    
                </div>

            </div>

        </header>

        <section id="design">

            <div id="images1">

            </div>

            <div class="design">

                <div id="table">
            
                    <?php
                        if ($resultCheck > 0) {

                            echo "<table class='content-table'>";
                            echo "<thead><tr><th colspan=6>les Membres enregistre</th></tr>";
                            echo "<thead><tr><td style='width: 5%;'>numéro</td><td>nom</td><td> sex</td><td>nationalité</td><td>telephone</td><td>group sanguin</td></tr></thead>\n";
                            while ($row = mysqli_fetch_assoc($result)) {
                                
                                echo "<tbody><tr class='active-row'><td>{$row['id']}</td><td style='text-transform: uppercase;'><strong>{$row['username']}</strong></td><td>{$row['sex']}</td><td>{$row['nationality']}</td><td>{$row['number']}</td><td>{$row['blood']}</td></tr></tbody>\n";
                            }
                        }
                    ?>

                </div>

            </div>

        </section>
    </body>
</html>