<?php
    function kiemtra($KQ, $query)
    {
        global $dbc;
        if(!$KQ)
            die("Query {$query}  \n <br/> MYSQL error:".mysqli_error($dbc));
    }

?>