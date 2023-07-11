<?php

    function user_controller_create() {
        render(VIEW_DIR.'/user/create.php');
    }

    function user_controller_store($request) {

        if (empty($request['name']) || empty($request['email']) || empty($request['password'])) {

            header("Location: ?module=user&action=create&error=1");

        } else {

            require_once(MODEL_DIR.'/user.php');
            user_model_store($request);
            header("Location: ?module=access&action=login");
        }
    }
?>