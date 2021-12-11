<?php

    class Student{

        // acces modfier variableName;
        // public , Private , protected
        private $name;
        public $age;
        public $drinkingAge;
        static public $university;

        function __construct($name , $age){
            $this->drinkingAge = 18;
            $this->name = $name;
            $this->age = $age;
        }
       

        protected function learn(){
            echo "<br/> Learning..<br/> ";
        }

       
    }

    
