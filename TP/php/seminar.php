<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="../css/en.css" type="text/css"/>
        
        <title>Blood online</title>
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
                                <span class="small">Republic of Cameroon </span>
                                <span class="small">--------------------</span>
                                <span id="big">Ministry of public health</span> 
                            </p>
                        </div>
                    </div>
                    <div class="outer">
                        <div class="inline" id="inline">
                            <p>
                                <span class="right"><i>Web Portal of the ministry of public health of Cameroon,</i></span>
                                <span class="right"><i>access all the information in the field</i></span>
                                <span class="right"><i>of health in Cameroon</i></span>
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
                                    <li><a href="../index.html"><i class="fa fa-home" aria-hidden="true"></i> home</a></li>
                                    <li><a href="donate-en.php"><i class="fa fa-heartbeat" aria-hidden="true"></i> Donate Blood</a></li>
                                    <li><a href="coded.php" id="index"><i class="fa fa-users" aria-hidden="true"></i> Personnel</a></li>
                                </ul>
                            </div>
                        </nav>

                    </div>
    
                </div>

            </div>

        </header>

            <section id="question">
                <div id="quest">
                    <h2><i>This area is reserved only for personnels!</i></h2>

                </div>
            </section>

            <div id="con">

                <div id="bg">

                </div>
        
                <!--Member area section-->
        
                <div id="member">
                    <div id="mem">
                        <div id="Member-area">
                            <form action="includes/seminar.php" method="POST">

                                <div class="effect">
                                    <input type="text" name="name" autocomplete="off" required/>
                                    <label for="name" class="label-name">
                                        <span class="content-name">Name</span>
                                    </label>
                                </div>

                                <div class="effect">
                                    <input type="password" name="password" required/>
                                    <label for="tel" class="label-name">
                                        <span class="content-name">Password</span>
                                    </label>
                                </div>  <br/> 
                                <input type="submit" name="submit" value="Submit" id="button_1">  
                            </form>
                            <?php
                                $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                                if(strpos($fullUrl, "signup=empty") == true) {
                                    echo"<p class='error'>You did not fill in all the fields!</p>";
                                    exit();
                                }
                                elseif(strpos($fullUrl, "signup=wrongusername") == true) {
                                    echo"<p class='error'>Username is incorrect!</p>";
                                    exit();
                                }
                                elseif(strpos($fullUrl, "signup=wrongpwd") == true) {
                                    echo"<p class='error'>Password is incorrect!</p>";
                                    exit();
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

    </body>

</html>
