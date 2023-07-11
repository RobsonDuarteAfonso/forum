<?php

    function article_model_list() {

        require(CONNEX_DIR);
      
        $id = $_SESSION['id'];

        $sql = "SELECT a.id as article_id, a.title, a.text, a.date, u.name FROM article a 
                INNER JOIN user u ON a.user_id = u.id 
                WHERE a.user_id = '$id'";

        $result  = mysqli_query($connex, $sql);
        $result = mysqli_fetch_all($result, MYSQLI_ASSOC);

        mysqli_close($connex);

        return $result;
    }

    function article_model_store($request) {

        require(CONNEX_DIR);

        $id = $_SESSION['id'];
        
        foreach($request as $key=>$value) {
            $$key = mysqli_real_escape_string($connex, $value);
        }
        
        $date = date('Y-m-d');

        $sql = "INSERT INTO article (title, text, date, user_id) 
        VALUES ('$title', '$text', '$date', '$id')";
       
        $result  = mysqli_query($connex, $sql);
        mysqli_close($connex);        
    }

    function article_model_show($request) {

        require(CONNEX_DIR);
        
        $id = mysqli_real_escape_string($connex, $request['id']);
        
        $sql = "SELECT * FROM article WHERE id = '$id'";

        $result  = mysqli_query($connex, $sql);
        $result = mysqli_fetch_assoc($result);

        mysqli_close($connex);

        return $result;
    }

    function article_model_edit($request) {

        require(CONNEX_DIR);
        
        $title = mysqli_real_escape_string($connex, $request['title']);
        $text = mysqli_real_escape_string($connex, $request['text']);
        $id = mysqli_real_escape_string($connex, $request['id']);

        $sql = "UPDATE article SET title = '$title', text = '$text' WHERE id = '$id'";
        
        $result  = mysqli_query($connex, $sql);
        
        mysqli_close($connex);      
    }

    function article_model_delete($request) {

        require(CONNEX_DIR);
        
        $id = mysqli_real_escape_string($connex, $request['id']);

        $sql = "DELETE FROM article WHERE id = '$id'";
        
        $result  = mysqli_query($connex, $sql);
        
        mysqli_close($connex);      
    }

?>