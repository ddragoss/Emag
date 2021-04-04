<?php
namespace src\players;

final class Beast extends Hero {



    public function __construct()
    {
        $this->initWithRandomStats();

    }

    public function initWithRandomStats(){
        $this->health = rand(60,90);
        $this->strength=rand(60,90);
        $this->defence=rand(40,60);
        $this->speed=rand(40,60);
        $this->luck=rand(25,40);
        $this->name='Beast';
    }

// abilty, skils , damage
    public function getDamanageWithSpecialSkill($type, $damage){
        return $damage;
    }
    public function isMiss(){
        $luck_chance=rand(0,99);
        if($luck_chance<$this->luck){
            return true;
        }else return false;
    }
    //make suffer damage

    public function sufferDamage($damage){
        $this->setHealth($this->getHealth()-$damage);
    }
}

