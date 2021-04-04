<?php

namespace src\players;

abstract class Hero{
    protected $health;
    protected $strength;
    protected $defence;
    protected $speed;
    protected $luck;
    protected $name;


 abstract function isMiss();
 abstract function initWithRandomStats();
 abstract function getDamanageWithSpecialSkill($type, $damage);



 public function setName($name){
     $this->name = $name;
 }
 public function setHealth($health){
     $this->health = $health;
 }
 public function setStrength($strength){
     $this->strength = $strength;
 }
 public function setDefence($defence){
     $this->defence = $defence;
 }
 public function setSpeed($speed){
     $this->speed = $speed;
 }
 public function setLuck($luck){
     $this->luck = $luck;
 }
//-getters
 public function getName(){
     return $this->name;
 }
 public function getHealth(){
     return $this->health;
 }
 public function getStrength(){
     return $this->strength;
 }
 public function getDefence(){
     return $this->defence;
 }
 public function getSpeed(){
     return $this->speed;
 }
 public function getLuck(){
     return $this->luck;
 }

}




