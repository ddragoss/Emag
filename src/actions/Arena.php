<?php 
//this class used for tesing multiple battles between heroes
namespace src\actions;

class Arena{
    private $number_fights;

    public function setNumberFights($number_fights){
        $this->number_fights = $number_fights;
    }

    public function getNumberFights(){
        return $this->number_fights;
    }
    

    public function getBattles($number_fights){
        for($i=1;$i<=$number_fights; $i++){
            

            $battle = new \src\actions\Battle();
            $battle->initPlayers();
            
            
            echo "\n**************************" . "\r\n";
            echo "BATTLE ". $i." RESULTS: \r\n";
            echo "**************************" . "\r\n\n";

            echo "First attaker is ". $battle->getFirstAttacker(). "\r\n";
              
            for($x=1;$x<=$battle->getMaxHits();$x++){
                $is_dead = $battle->isDead();
                    if ($is_dead != true) {   
                
                    if ($battle->getFirstAttacker() == 'hero') {
                        if ($i % 2 == 0) {
                            $battle->hit($battle->getHero(), $battle->getBeast());
                        } else {
                            $battle->hit($battle->getBeast(), $battle->getHero());        
                        }
                    } elseif ($battle->getFirstAttacker() == 'beast') {
                        if ($i % 2 == 0) {
                            $battle->hit($battle->getBeast(), $battle->getHero());        
                        } else {
                            $battle->hit($battle->getHero(), $battle->getBeast());        
                        }
        
                    }
                     echo "Hero stats in the battle: \r\n";
                     echo "The results after hit: " . $x . "\r\n";
                     echo "Orderus health: " . $battle->getHero()->getHealth() . "\r\n";
                     echo "Beast health: " . $battle->getBeast()->getHealth() . "\r\n";
                     echo "------------------------" . "\r\n";
                  //  echo $x. " ". var_dump($is_dead)."\r\n";
                $hits =$x;
               
            }
         } 
            


            echo "After " .$hits. " hits: ". "\r\n";
            $battle->getTheWinner($battle->getHero(), $battle->getBeast());

        }
    }
}