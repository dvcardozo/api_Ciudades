<?php
require_once('./States.php');

class City extends States{
    protected $cities;

    public function __construct()
    {
        $this->cities=json_decode(file_get_contents('./data/city.json', true));
        parent::__construct();
    }
    public function getAllCities(){
        return $this->cities;
    }
    //getCityForState('+57','66')
    public function getCityForState($arg){
        $newState = $arg[2] . $arg[3];
        //-> +5766
        $cities = $this->cities->$newState;
        return $cities ?: 'No fue encontrada la ciudad';
    }
}