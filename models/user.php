<?php

    function user_model_store($request){

        require(CONNEX_DIR);
        
        foreach($request as $key=>$value){
            $$key = mysqli_real_escape_string($connex, $value);
        }

        $password = password_hash($password, PASSWORD_BCRYPT);
        
        $sql = "INSERT INTO user (name, email, password, birthday) 
        VALUES ('$name', '$email', '$password', '$birthday')";
        
        $result  = mysqli_query($connex, $sql);
        mysqli_close($connex);
    }

?>