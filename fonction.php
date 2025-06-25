<?php
    function getFiche($id_employe){
        $sql="SELECT * FROM  WHERE ='%s'";
        $sql=sprintf($sql,$id_employe);
        $resultat=mysqli_query($sql,dbconnect());
        if($result=mysqli_fetch_assoc($resultat)){
            return $result;
        }
    }
?>