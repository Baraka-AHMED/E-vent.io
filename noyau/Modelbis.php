<?php

final class Modelbis
{
  public function generstr($number = 6){
  $carac = "0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
  $password = substr(str_shuffle(str_repeat($carac, 5)), 0, 7);
  return $password; 
  }
}
?>