<?php
require 'student.php';

class ISStudent extends Student{


    protected function __construct()
    {
        echo '<br/> Is student created <br/> ';
        $this->learn();
    }
    public function analyze(){
        echo '<br/> Analyzing.....<br/> ';
    }
}   