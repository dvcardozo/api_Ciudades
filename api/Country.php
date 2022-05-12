<?php

class Country{
    // Attributes for country
    protected $countries, $name, $code, $poblation, $area, $ubication;

    public function __construct()
    {
        //Generate all countries in array
        $this->countries = [
            [
                'name' => 'Colombia',
                'code' => '+57',
                'poblation' => '51000000',
                'area' => '1.43', //millones km2
                'ubication' => 'America'
            ],
            [
                'name' => 'Estados unidos de América',
                'code' => '+1',
                'poblation' => '329500000',
                'area' => '9.834', //millones km2
                'ubication' => 'America'
            ],
            [
                'name' => 'Korea',
                'code' => '+82',
                'poblation' => '51780000',
                'area' => '0.100210', //millones km2
                'ubication' => 'Asia'
            ]
        ];
        
    }
    public function getAllCountries(){
        //function json_encode -> format array of json
        return ($this->countries);
    }
    public function getCountryCode(string $code){
        //Busqueda por la columna code
        $codes = array_column($this->countries, 'code');
        $index = array_search($code, $codes);
        if(!$index && gettype($index)=='boolean')
            return json_encode(['**Error' =>'El código de país no se encuentra**']);
        return json_encode($this->countries[$index]);

    }
    public function getCountryName(string $name){
        //Busqueda por la columna name
        $names = array_column($this->countries, 'name');
        $index = array_search($name, $names);
        if(!$index && gettype($index)=='boolean')
            return json_encode(['**Error' =>'El código de país no se encuentra**']);
        return json_encode($this->countries[$index]);
    }
}
