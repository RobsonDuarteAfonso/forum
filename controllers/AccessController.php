<?php

    function access_controller_login() {
        render(VIEW_DIR.'/access/login.php');
    }


    function access_controller_logout() {

        require_once(MODEL_DIR.'/access.php');
        access_model_logout();
        header("Location: ?module=access&action=login");
    }

    
    function access_controller_authentication($request) {

        if (empty($request['email']) || empty($request['password'])) {
            
            header("Location: ?module=access&action=login&error=1");

        } else {

            require_once(MODEL_DIR.'/access.php');
            $check = access_model_authentication($request);

            if ($check) {

                header("Location: ?module=article&action=index");

            } else {

                header("Location: ?module=access&action=login&error=2");
            }
        }
    }
?>