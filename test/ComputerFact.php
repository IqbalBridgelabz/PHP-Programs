<?php
require ("Abstract.php");
require ("/home/admin1/iqbal/Algorithm_Program/Utility.php");
class Laptop implements Computer
{
    public $model;

    function __construct(string $model)
    {
        $this->model = $model;
    }

    function name()
    {
        echo "Enter Laptop Name:";
        $lName = Utility::getString();
        return $lName;
    }

    function ipAddress()
    {
        echo "Enter IP Address:";
        $ip = Utility::getString();
        return $ip;
    }
}

/**
 * class passenger implementing the car interface 
 */
class Mac implements Computer
{
    /**
     * var colour to store the colour of the car
     */
    public $version;

    /**
     * constructor function with dependency injection
     */
    function __construct(string $version)
    {
        $this->version = $version;
    }

    function name()
    {
        echo "Enter Laptop Name:";
        $lName = Utility::getString();
        return $this->lName;
    }
    function ipAddress()
    {
        echo "Enter IP Address:";
        $ip = Utility::getString();
        return $this->ip;
    } 
}
?>