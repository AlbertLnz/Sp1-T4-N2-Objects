<?php

  class PokerDice{
    protected $array;

    function __construct(){
      $this->array = array("As", "K", "Q", "J", "7", "8");
    }
    
    function throw(){
      $position=array_rand($this->array);
      return $position;
    }

    function shapeName($position){
      echo "La última figura que ha sortit està en la posició ".$position." i ha sortit la figura: ".$this->array[$position];
    }

    function getTotalThrows($numThrows){
      echo "El número total de tirades han sigut: ".$numThrows;
    }
  }

?>