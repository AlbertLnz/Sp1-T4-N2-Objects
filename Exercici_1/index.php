<?php

  include_once 'pokerdice.php';

  $dice = new Pokerdice();
  $numThrows=0;

  for($i=0 ; $i<5 ; $i++){
    $dice->shapeName($dice->throw());
    echo "\n";
    $numThrows++;
  }

  $dice->getTotalThrows($numThrows);

?>