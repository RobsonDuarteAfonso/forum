<?php

    function access_model_logout() {
        session_destroy();
    }

    
    function access_model_authentication($request) {

        require(CONNEX_DIR);

        $authenticated = false;
        
        foreach($request as $key=>$value){
            $$key = mysqli_real_escape_string($connex, $value);
        }
       
        $sql = "SELECT * FROM user WHERE email = '$email'";
        
        $result  = mysqli_query($connex, $sql);
        $count = mysqli_num_rows($result);

        mysqli_close($connex); 
        
        if ($count == 1) {

            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $dbPassword = $user['password'];

            if (password_verify($password, $dbPassword)) {

                session_regenerate_id();

                $_SESSION['id'] = $user['id'];
                $_SESSION['name'] = $user['name'];
                $_SESSION['finger_print'] = md5($_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR'].SALT);

                $authenticated = true;
            }
        }

        return $authenticated;
    }


    function access_model_check_session() {

        $authenticated = false;

        if(isset($_SESSION['finger_print']) && $_SESSION['finger_print'] === md5($_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR'].SALT) ){
            
            $authenticated = true;
        }
        
        return $authenticated;
    }
?>