<?php
function dbconnection(){
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="practice";
    $cont=new mysqli($servername,$username,$password,$dbname);
      return $cont;
}

?>