<?php
require './vendor/autoload.php';

class BattleTest extends PHPUnit\Framework\TestCase {

    //check if heroes stats are right (Orderus and Best)
        public function checkOrderusStats(){
            $battle = new \src\actions\Battle;
             $battle -> initPlayers();
            
             $orderus_health = $battle->getHero()->getHealth();
             $orderus_name = $battle->getHero()->getName();
             $orderus_strength = $battle->getHero()->getStrength();
             $orderus_defence = $battle->getHero()->getDefence();
             $orderus_speed = $battle->getHero()->getDefence();
             $orderus_luck = $battle->getHero()->getDefence();
             $orderus_defence = $battle->getHero()->getDefence();


             if($orderus_name='orderus' && is_array($orderus_health,range(70,100)) 
                                        && is_array($orderus_strength, range(70,80))
                                        && is_array($orderus_defence,range(45,55))
                                        && is_array($orderus_speed,range(40,50))
                                        && is_array($orderus_luck, range(10,30))
                                           
                ){
                    $right_stats =  true;
                }else $right_stats = false;
             
                 $this->assertTrue($right_stats ,"Check if Orderus stats are right");   




        }

      

}


