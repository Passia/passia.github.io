<?php
    

    if ( isset($_POST['submit']) ){
        include_once 'dbh.php';

        $pwd = $_POST['password'];
        $name= $_POST['name'];

        if(empty($pwd) || empty($name) ){
            header("Location: ../seminar.php?signup=empty");
            exit();
        }
        else{
            if($name!="toto"){
                header("Location: ../seminar.php?signup=wrongusername");
                exit();

            }
            else{
                if($pwd!="toto"){
                    header("Location: ../seminar.php?signup=wrongpwd");     
                    exit();

                }
                else{
                    header("Location: ../personnel.php?signup=success");
                    exit();

                }
            }

        }
    }
    else{
        header("Location: ../seminar.php?signup=error");
        exit();
    }
