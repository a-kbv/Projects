<?php
class Config{
    public static function connect(){
        try{
            $con = new PDO("mysql:host=localhost;dbname=00447164_db", '00447164_db', '##HIDDED##-is_my_live_db_on_domain');
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo 'CONNECTION FAILED: ' . $e->getMessage();
        }
        return $con;
    }
}
