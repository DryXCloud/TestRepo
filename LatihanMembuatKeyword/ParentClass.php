<?php

    abstract class ParentClass{
        public static string $title = 'Ini Class' . __CLASS__;
        public static function getTitle(){  
            return new static;
        }
                public static function getSelf(){
                    return new Self;
                }
            }

class ChildClass extends ParentClass{
    public static string $title = 'Ini Class' . __CLASS__;

    public static function getTitle(){
        return Coba::$title;
    }

    public static function getSelf(){
        return ChildClass::getTitle();
    }

}

class Coba {
    public static $title = 'Ini Class' . __CLASS__;
}

echo ChildClass::getTitle();
echo '<hr>';
echo ChildClass::getSelf();


//output :
/* Ini ClassCoba
Ini ClassCoba */