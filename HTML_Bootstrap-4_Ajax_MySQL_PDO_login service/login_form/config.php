<?php
class Config{
    public static function connect(){
        try{
            $con = new PDO("mysql:host=localhost;dbname=00447164_db", '00447164_db', 'Asdfghjkluio789@');
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo 'CONNECTION FAILED: ' . $e->getMessage();
        }
        return $con;
    }
}
