<?php
    include_once 'includes/dbh.php';
?>

<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/en.css" type="text/css"/>
        <title>BloodOnline</title>
    </head>

    <body>

        <header>

            <div class="container">
    
                <div class="container" id="container">
    
                    <div class="outer">
                        <div class="inline">
                            <figure><img src="../images/logo-minsante.png"></figure>
                        </div>
                        <div class="inline">
                            <p>
                                <span class="small">Republique du Cameroun </span>
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
                                    <li><a href="donner.php" id="index"><i class="fa fa-heartbeat" aria-hidden="true"></i> Donner du sang</a></li>
                                    <li><a href="coded-fr.php"><i class="fa fa-users" aria-hidden="true"></i> Personnel</a></li>
                                </ul>
                            </div>
                        </nav>

                    </div>
    
                </div>

            </div>

        </header>

        <section id="donate">

            <div id="don">

                <div class="nate" id="nate"> 

                    <h1>Les Bases du Don de Sang</h1>

                    <div id="background">

                        <div id="ground">

                        </div>

                        <div id="back">
                            <p>
                                <span>Trouvez des informations pour vous aider à avoir la</span> 
                                <span>meilleure expérience de don possible et sur les</span>  
                                <span>bienfaits inattendus du don de sang pour la santé.</span>  
                            </p>
                        </div>

                    </div>

                </div>

                <div class="nate" id="pad">

                    <div id="img">
                        <img src="../images/Target-Your-Type.png" alt="Target-Your-Type">
                    </div>

                    <div id="text">
                        <div id="background">

                        </div>
                        <div id="typed">
                            <p>
                                <span>Apprenez à cibler la puissance de votre groupe sanguin</span> 
                                <span>et comment cela fait une différence dans votre communauté</span>    
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    
        <section id="ready">
            <div id="rea">
                <h1>etes-vous pret à sauver des vies</h1>
                <h2><i>Remplissez le formulaire!</i></h2>

            </div>
        </section>

        <div id="con">

            <div id="bg">

            </div>
    
            <!--Member area section-->
    
            <div id="member">
                <div id="mem">
                    <div id="Member-area">
                        <form action="includes/signup.php" method="POST">
                            <div class="effect">
                                <input type="text" name="name" autocomplete="off" required/>
                                <label for="name" class="label-name">
                                    <span class="content-name">Nom</span>
                                </label>
                            </div>
    
                            <div class="who" id="who">
                                <div class="whos">Sexe:</div>
                            <select name="sex">
                                <option value="Male">Male</option>
                                <option value="Female">Femelle</option>
                            </select>
                            </div>
    
                            <div class="who">
                                <div class="whos">Nationalité:</div>
                            <select name="country">
                                <option value="Cameroon">Cameroun</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="America">Amérique</option>
                                <option value="Algeria">Algérie</option>
                                <option value="Egypt">Egypte</option>
                            </select>
                            </div>
                            
                            <div class="effect">
                                <input type="tel" name="tel" required/>
                                <label for="tel" class="label-name">
                                    <span class="content-name">Numéro de téléphone</span>
                                </label>
                            </div>
    
                            <div class="who" id="whom">
                                <div class="whos">Group Sanguin:</div>
                            <select name="group">
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="AB+">AB+</option>
                                <option value="O-">O-</option>
                                <option value="O+">O+</option>
                            </select>
                            </div>
    
                            <input type="submit" value="Soumettre" id="button_1">    
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="copyright">

            <div id="right-one">

                <div class="right">
                    <h3>TECHNOLOGIE</h3>
                    <p>
                        <img src="../images/target.png" alt="target image">
                    </p>
                </div>

                <div class="right">
                    <h3>CONTACTS</h3>
                    <p>
                        Mention Legal Contacts<br/>
                        Tel:  
                                    <span>+237 673006334</span><br/>
                                    <span class="shift">+237 651717099</span><br/>
                                    <span class="shift">+237 691020694</span><br/>
                                    <span class="shift">+237 694211643</span><br/>
                        email:<a href="#">passiaemmanuel@gmail</a>
                    </p>
                </div>

                <div class="right">
                    <h3>SITES UTILES</h3>
                    <p>
                        Minpostel<br/>
                        Minsup
                    </p>
                </div>

                <div class="right">
                    <h3>PARTICIPANTS</h3>
                    <p>
                        NSAHLAI PASSIA EMMANUEL<br/>
                        NSAH CLAUDINE<br/>
                        MOUFONKRA<br/>
                        NGBA HERMES BLAISE
                    </p>
                </div>

            </div>

            <div id="right-two">
                <h4>Copy right@ 2020 SUP'PTIC<br/>G<sub>3</sub>_ITT<sub>1</sub>A_SG<sub>4</sub></h4>
            </div>
        </div>

    </body>
</html>