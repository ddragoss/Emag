<?php

require_once 'vendor/autoload.php';

$battle = new \src\actions\Battle();
$battle->initPlayers();

print "First Attaker is: ".strtoupper($battle->getFirstAttacker())."\r\n";


    for ($i = 1; $i <= $battle->getMaxHits(); $i++) {
        $is_dead = $battle->isDead();
        if ($is_dead != true) {
            if ($battle->getFirstAttacker() == 'hero') {
                if ($i % 2 == 0) {
                    $battle->hit($battle->getHero(), $battle->getBeast());
                    // print "Beast health:" . $battle->getBeast()->getHealth() . "<br>";
                } else {
                    $battle->hit($battle->getBeast(), $battle->getHero());
                    // print "Orderus health:". $battle->getHero()->getHealth() . "<br>";

                }
            } elseif ($battle->getFirstAttacker() == 'beast') {
                if ($i % 2 == 0) {
                    $battle->hit($battle->getBeast(), $battle->getHero());
                    //print "Orderus health:" . $battle->getHero()->getHealth() . "<br>";

                } else {
                    $battle->hit($battle->getHero(), $battle->getBeast());
                    // print "Beast health:" . $battle->getBeast()->getHealth() . "<br>";

                }

            }
            print "The results after hit: " . $i . "\r\n";
            print "Orderus health: " . $battle->getHero()->getHealth() .  "\r\n";
            print "Beast health: " . $battle->getBeast()->getHealth() .  "\r\n";
            print "------------------------" .  "\r\n";
        }




    }
  $battle->getTheWinner($battle->getHero(), $battle->getBeast()). "\r\n";


















