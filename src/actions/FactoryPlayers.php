<?php
namespace src\actions;  

class FactoryPlayers{

        public static function getPlayer($name,$type){
            switch (strtolower(trim($type))){
                case "creature":
                     $obj_player =new \src\players\Beast();
                    break;
                case "hero":
                    if ($name == 'orderus') {
                        $obj_player =  new \src\players\Orderus();
                    }
                    break;
                default:
                    throw new \Exception('Hero does not exist!');
            }
            return $obj_player;
        }

}


