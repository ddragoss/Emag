<?php
namespace src\actions;  


class Battle
{
    public $hero ;
    public $beast;
    static private $maxHits = 20;
    public $firstAttacker;


    public function getFirstAttacker()
    {
        return $this->firstAttacker;
    }
    public function setFirstAttacker($firstAttacker)
    {
        $this->firstAttacker = $firstAttacker;
    }

    public function getMaxHits(){
        return Battle::$maxHits;
    }

    public function setHero($hero){
        $this->hero = $hero;
    }

    public function setBeast($beast){
        $this->beast = $beast;
    }

    public  function getBeast(){
        return $this->beast;
    }

    public function getHero(){
        return $this->hero;
    }



public function initPlayers(){


    try {

        $hero = FactoryPlayers::getPlayer('orderus','hero');
        $this->setHero($hero);



        $beast = FactoryPlayers::getPlayer('beast','creature' );
        $this->setBeast($beast);

        $this->initFirstAttacker();


    } catch (\Exception $e) {
        echo 'Caught exception: ',  $e->getMessage(), "\n";
    }

}


    public function initFirstAttacker(){
        if ($this->hero->getSpeed() > $this->beast->getSpeed()) {
           $this->setFirstAttacker('hero');
        } elseif ($this->hero->getSpeed() == $this->beast->getSpeed()) {
            if ($this->hero->getStrength() > $this->beast->getStrength()) {
                $this->setFirstAttacker('hero');
            }else{
                $this->setFirstAttacker('beast');
            }
        } else {
            $this->setFirstAttacker('beast');
        }

    }


    public function hit($attaker, $defender){
    if($defender->isMiss()) {
           echo strtoupper($this->getFirstAttacker())." missed the hit"."\r\n";
    }else{
//        calculate damage
        $damage = $attaker->getStrength() - $defender->getDefence();
        // check attacker extra
        $damangeWithSkill = $attaker->getDamanageWithSpecialSkill('attack', $damage);
        $defenderFinallDamage = $defender->getDamanageWithSpecialSkill('defence', $damangeWithSkill);
        //
        $defender->sufferDamage($defenderFinallDamage);
    }
}


    public function isDead(){
        if($this->getBeast()->getHealth()<=0 || $this->getHero()->getHealth()<=0){
            return true;
        }else
            return false;
    }

    public function getTheWinner($hero, $beast){
      
             if($hero->getHealth() >$beast->getHealth()){
                 print $hero->getName()." is the Winner! "."\r\n";
             }else{
                 print $beast->getName()." is the Winner! "."\r\n";
             
        }
        // return $winner;
   }
}


