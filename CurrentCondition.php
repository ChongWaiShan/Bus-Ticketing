<?php

require_once 'Observer.php';
require_once 'WeatherData.php';
require_once 'Subject.php';

class CurrentCondition implements Observer{
    private $temp;
    private $humdity;
    
    public function __construct(WeatherData $w) {
        $this->temp =$w->getTemprature();
        $this->humdity = $w->getHumidity();
    }
    
    public function update(Subject $subject){
         $this->temp =$subject->getTemprature();
        $this->humdity = $subject->getHumidity();
        $this->display();
    }
    
    public function display(){
        $str="<p><h3>Current Condition </h3>";
        $str.="<br/> Temperature: ".$this->temp."&#8451;";
        $str.="<br/> Humidity: ".$this->humdity."%</p>";
        echo $str;
    }
    
}