<?php

namespace LevDev\Service;

class DebugDB{
    private $sql = [];
    
    function addSql($sql){
        $this->sql[]=$sql;
    }
    
    function getSql(){
        return $this->sql;
    }
}