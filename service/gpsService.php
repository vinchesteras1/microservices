<?php

include 'config/dbconfig.php';
include 'class/db.php';

class gpsService{
    private $latitude;
    private $longitude;
    private $driver_id;

    function __construct(){
        $this->latitude = trim($_POST['lat']);
        $this->longitude = trim($_POST['lng']);
        $this->driver_id = trim($_POST['driver']);
    }

    public function saveGps(){
        $db = new db();
        $timestamp = time();
        $db->freeRun("INSERT INTO `gps` (driver,latitude,longitude,timestamp) VALUES ($this->driver_id, $this->latitude, $this->longitude, $timestamp)");
    }

    public function printGps(){
        echo $this->driver_id . '<br>';
        echo $this->latitude . '<br>';
        echo $this->longitude . '<br>';
    }
}