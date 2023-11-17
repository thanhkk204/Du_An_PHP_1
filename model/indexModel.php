<?php
    function getProductSection(){
            $sql = "select * from san_pham limit 4";
            return pdo_query($sql);
    }
    function register($name , $email , $phone , $address , $password ){
            $sql = "insert into users(name , email , phone , address , password ) 
            values ('$name' , '$email' , '$phone' , '$address' , '$password' )
            ";
            pdo_execute($sql);
    }
    function logIn( $email , $password ){
            $sql = "select * from users where email= '".$email."' and password= '".$password."'";
            return pdo_query_one($sql);
    }
?>