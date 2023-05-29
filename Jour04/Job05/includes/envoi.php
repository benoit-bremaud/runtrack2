<?php
    if (count($_POST)>0) {
        if ($_POST["username"] == "John" && $_POST["password"] == "Rambo") {
            echo "C'est pas ma guerre !";
        } else {
            echo "Votre pire cauchemar";
        }
        
    }
    
?>