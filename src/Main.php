<?php

namespace AppExample;

class Main
{

    public function __construct()
    {

    }
    
    function withoutAccessLevelDefined()
    {

    }

    public function without_camel_case()
    {
        $someRandonVar = rand() * 1000;
        $myVar = "same content";
        $myVar = $myVar . "ABC";
        echo $myVar;
    }

    public function withBracesInSameLine(){

    }

    private function neverUserMethod()
    {
        
    }

    public function parameterNeverUser($firstParam,$secondOne){
        echo $firstParam;
    }

    
    public function methodWithDuplicatedContent($firstParameter)
    {
        $anotherRandonVar = (int) $firstParameter *2;
        $myVar = "same content";
        $myVar = $myVar . "ABC";
        $myVar = $myVar . "ABC";

        return $anotherRandonVar;
    }

    /**
     * Performs a multiplication 
     *
     * @param int $number Number to be multiplied
     * @param int $multiplier Multiplier
     * @return int
     **/
    public function performMultiplication($number, $multipler)
    {
        return $number * $multipler;
    }

    public function callAll(){
        if(true){
            $item1 = $this->performMultiplication(1,2);
            $item2 = $this->performMultiplication($item1,5);
            $item3 = $this->performMultiplication($item1, $item2);
        }
    }
    



}