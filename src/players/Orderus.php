<?php
namespace src\players;
 final class Orderus extends Hero{

     public function initWithRandomStats(){
         $this->health = rand(70,100);
         $this->strength=rand(70,80);
         $this->defence=rand(45,55);
         $this->speed=rand(40,50);
         $this->luck=rand(10,30);
         $this->name='Orderus';
     }

     public function __construct()
     {
         $this->initWithRandomStats();
     }
//------------------------------------------------------------
     //health damage skills, suffer

    public function setSpeed($speed){
        $this->speed = $speed;
    }

     public function sufferDamage($damage){
         $this->setHealth($this->getHealth()-$damage);
     }
     
     public function getDamanageWithSpecialSkill($type, $damage){
         if($type ==='defence'){
             return $this->isMagicShield($damage);
         }elseif ($type==='attack'){
            return $this->isRapidStrike($damage);
         }
     }

     public function isMagicShield($damage){
         $magic_shield =  rand(0,99);
         if($magic_shield < 20){
             print "Orderus has the MAGIC SHIELD activated!!\r\n";
             return $damage/2;
         }else{
             return $damage;
         }
     }

    public function isRapidStrike($damage){
        $chance = rand(0, 99);
        if($chance<10){
            print "Orderus attacked twice RAPID STRIKE!!\r\n";
            return 2*$damage;

        }else{
            return $damage;
        }
    }

    public function isMiss(){
        $luck_chance=rand(0,99);
        if($luck_chance<$this->luck){
            return true;
        }else return false;
    }


 }


