<?php
    echo "<select name='livre'>";
    if(isset($_POST["idAuteur"])){
        mysql_connect("localhost","root","");
        mysql_select_db("cinemaphp");
        $res = mysql_query("SELECT id,horaire FROM film 
            WHERE film=".$_POST["idAuteur"]." ORDER BY titre");
        while($row = mysql_fetch_assoc($res)){
            echo "<option value='".$row["id"]."'>".$row["horaire"]."</option>";
        }
    }
    echo "</select>";
?>