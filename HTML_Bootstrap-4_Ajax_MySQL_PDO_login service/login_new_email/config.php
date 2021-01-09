<?php
class Connect extends PDO
{
    public function __construct()
    {
        //"mysql:host=localhost;dbname=00447164_db", '00447164_db', 'Asdfghjkluio789@'
        parent::__construct("mysql:host=localhost;dbname=tutorial", 'root', '',
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $this->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }
}
?>