<?php

    function base_model_list(){

        require(CONNEX_DIR);
        
        $sql = "SELECT * FROM article a 
                INNER JOIN user u ON a.user_id = u.id 
                ORDER BY a.date";

        $result  = mysqli_query($connex, $sql);
        $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
        
        mysqli_close($connex);
        return $result;
    }
?>