<?php
require_once ('./Country.php');

class States extends Country{

    /* Declaring the properties of the class. */
    protected $states, $name, $code, $codeCountry;
    
    /**
     * __construct
     *
     * @return void
     */
    public function __construct(){
        $this->states = json_decode(file_get_contents('./data/state.json', true));
        parent::__construct();
    }
    public function getStates(){
        return $this->states;
    }

    public function getStatesForCountry(string $country){
        return $this->states->$country;
    }
}