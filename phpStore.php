<?php
    $host='localhost';
    $user='immersiv_ussql';
    $password='userssql123';
     
    $connection = mysql_connect($host,$user,$password);
     
    $name = $_POST['a'];
    $age = $_POST['b'];
 
     
    if(!$connection){
        die('Connection Failed');
    }
    else{
        if($name == "" && $age == ""){
            die('Name or Age cant be empty');
        }else{
            $dbconnect = @mysql_select_db('immersiv_swiftsql', $connection);
         
            if(!$dbconnect){
                die('Could not connect to Database');
            }
            else{
                $query = "INSERT INTO `immersiv_swiftsql`.`sqltable` (`sqltableName`, `sqltableAge`)
                    VALUES ('$name','$age');";
                mysql_query($query, $connection) or die(mysql_error());
                 
                echo 'Successfully added.';
                echo $query;
            }
        }
        
    }
?>