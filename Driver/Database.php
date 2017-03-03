<?php

namespace Driver;

class Database
{
    /**
     * @var \PDO[]
     */
    private static $instances=[];

    /**
     * @var \PDO
     */
    private function __construct()
    {
        //$this->db=new \PDO("mysql:host=".$host.";dbname=".$name,$user,$pass);
    }

    /**
     * @param string $host
     * @param string $user
     * @param string $pass
     * @param string $name
     * @param string $instanceName
     */
    public  static function setInstance(string $host ,string  $user,string $pass,string $name,string $instanceName)
    {
        $dns="mysql:host=".$host.";dbname=".$name;
        self::$instances[$instanceName]=new \PDO($dns,$user,$pass,array(\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
    }

    /**
     * @param string $instanceName
     * @return \PDO
     */
    public static function getInstances(string $instanceName):\PDO
    {
        //$dns="mysql:host=".$host.";dbname=".$name;
        return self::$instances[$instanceName];
    }
}