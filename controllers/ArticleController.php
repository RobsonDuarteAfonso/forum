<?php

    function article_controller_index() {

        require_once(MODEL_DIR.'/access.php');
        $authenticated = access_model_check_session();

        if ($authenticated) {

            require_once(MODEL_DIR.'/article.php');
            $data = article_model_list();
            render(VIEW_DIR.'/articles/list.php', $data);

        } else {

            header("Location: ?module=access&action=login");
        }
    }


    function article_controller_create() {

        require_once(MODEL_DIR.'/access.php');
        $authenticated = access_model_check_session();

        if ($authenticated) {

            render(VIEW_DIR.'/articles/create.php');

        } else {

            header("Location: ?module=access&action=login");
        }            
    }


    function article_controller_show($request) {

        require_once(MODEL_DIR.'/access.php');
        $authenticated = access_model_check_session();

        if ($authenticated) {

            if (empty($request['id'])) {

                header("Location: ?module=article&action=index&error=3");

            } else {

                require_once(MODEL_DIR.'/article.php');
                $data = article_model_show($request);
                render(VIEW_DIR.'/articles/show.php', $data);
            }

        } else {

            header("Location: ?module=access&action=login");
        }
    }


    function article_controller_store($request) {

        require_once(MODEL_DIR.'/access.php');
        $authenticated = access_model_check_session();

        if ($authenticated) {

            if (empty($request['title']) || empty($request['text'])) {

                header("Location: ?module=article&action=create&error=1");

            } else {

                require_once(MODEL_DIR.'/article.php');
                article_model_store($request);
                header("Location: ?module=article&action=index");
            }

        } else {

            header("Location: ?module=access&action=login");
        }        
    }
    

    function article_controller_edit($request) {

        require_once(MODEL_DIR.'/access.php');
        $authenticated = access_model_check_session();

        if ($authenticated) {

            if (empty($request['title']) || empty($request['text'])) {

                header("Location: ?module=article&action=edit&error=1");

            } else {

                require_once(MODEL_DIR.'/article.php');
                article_model_edit($request);
                header("Location: ?module=article&action=index");
            }

        } else {

            header("Location: ?module=access&action=login");
        }        
    }

    function article_controller_delete($request) {

        require_once(MODEL_DIR.'/access.php');
        $authenticated = access_model_check_session();

        if ($authenticated) {

            if (empty($request['id'])) {

                header("Location: ?module=article&action=index&error=3");

            } else {

                require_once(MODEL_DIR.'/article.php');
                article_model_delete($request);
                header("Location: ?module=article&action=index");
            }

        } else {

            header("Location: ?module=access&action=login");
        }
    }

?>