<?php

//I cannot FOR THE LIFE OF ME figure out why this file won't run like it's supposed to

//Set variables
$username = $_POST ["username"];
$password = $_POST ["password"];
$wrong = "";
$correct = "";
$validated = "";

function runValidate() {
    if(isset($_POST["username"])){                                                        //Checks if submit was pressed
        if($username == "Name"){                                                        //If username is "Name"...
            if($password == "123"){                                                     //And if password is "123"...
                $wrong = "";
                $correct = "That is correct!";                                          //Tell the user that's correct
                $validated = "<a href=\"pages/gallery.html;\">Click to access gallery!</a>";//And create a link that leads to the gallery
            }

            else{                                                                       //If password is wrong...
                $wrong = "Password is incorrect...";                                    //Tell the user it's wrong
                $correct = "";
            }
        }

        else{                                                                           //If username is wrong...
            $wrong = "Username is incorrect...";                                        //Tell the user it's wrong
            $correct = "";
        }
    }
    else{
        $wrong = "You need to enter something!";
        $correct = "";
    }
}

//If you're seeing this instead of the intended page, go to gallery.html to see the rest of this project.
//Sorry :/

?>