<?php

    // DELETE THIS LINE ONLY
    // Benchmark to test EXECUTION SPEED in PHP with ARRAYS by following methods
    // Method 1 : Class Withour self functions
    // Method 2 : Class With self functions
    // Method 3 : Without Classes


    // Max Number of iterations

    $max = 100000;

    // Time Point 1

    $t1 = microtime(true);



    // Method 1
    // Code for Setting and unsetting array in a class but using general function outside class definition
    // Class without self functions

    class ooo { public static $modes = array(); }

    for($i=0 ; $i<$max; $i++) {
        
        is_numeric($i);

        ooo::$modes[ $i . "a" ] = '';
        ooo::$modes[ $i . "b" ] = '';
        ooo::$modes[ $i . "c" ] = '';
        ooo::$modes[ $i . "d" ] = '';
        ooo::$modes[ $i . "e" ] = '';
        ooo::$modes[ $i . "f" ] = '';
        ooo::$modes[ $i . "g" ] = '';
        ooo::$modes[ $i . "h" ] = '';
        ooo::$modes[ $i . "i" ] = '';
        ooo::$modes[ $i . "j" ] = '';
        ooo::$modes[ $i . "k" ] = '';
        ooo::$modes[ $i . "l" ] = '';
        
        unset(ooo::$modes[ $i . "a" ]);
        unset(ooo::$modes[ $i . "b" ]);
        unset(ooo::$modes[ $i . "c" ]);
        unset(ooo::$modes[ $i . "d" ]);
        unset(ooo::$modes[ $i . "e" ]);
        unset(ooo::$modes[ $i . "f" ]);
        unset(ooo::$modes[ $i . "g" ]);
        unset(ooo::$modes[ $i . "h" ]);
        unset(ooo::$modes[ $i . "i" ]);
        unset(ooo::$modes[ $i . "j" ]);
        unset(ooo::$modes[ $i . "k" ]);
        unset(ooo::$modes[ $i . "l" ]);
        
    }



    // Time Point 1

    $t2=microtime(true);

    // Duration Difference for Method 1

    $d1=$t2-$t1;




    // Method 2
    // Code for Setting and unsetting array in a class using class's own functions
    // Class with self functions

    class oo {

        public static $modes = array();
        var $mode;
        var $method;

        public static function add($mode, $method)
        {
            self::$modes[$mode] = $method;
        }

        public static function remove($mode)
        {
            unset(self::$modes[$mode]);
        }
    }

    for($i=0 ; $i<$max; $i++) {
        
        is_numeric($i);

        oo::add( $i . 'a' , '' );
        oo::add( $i . 'b' , '' );
        oo::add( $i . 'c' , '' );
        oo::add( $i . 'd' , '' );
        oo::add( $i . 'e' , '' );
        oo::add( $i . 'f' , '' );
        oo::add( $i . 'g' , '' );
        oo::add( $i . 'h' , '' );
        oo::add( $i . 'i' , '' );
        oo::add( $i . 'j' , '' );
        oo::add( $i . 'k' , '' );
        oo::add( $i . 'l' , '' );
        
        oo::remove( $i . "a" );
        oo::remove( $i . "b" );
        oo::remove( $i . "c" );
        oo::remove( $i . "d" );
        oo::remove( $i . "e" );
        oo::remove( $i . "f" );
        oo::remove( $i . "g" );
        oo::remove( $i . "h" );
        oo::remove( $i . "i" );
        oo::remove( $i . "j" );
        oo::remove( $i . "k" );
        oo::remove( $i . "l" );
        
    }




    // Time Point 3

    $t3=microtime(true);

    // Duration Difference for Method 2

    $d2=$t3-$t2;





    // Code for Setting and unsetting array with general array handling and no class
    // Without class

    for($i=0 ; $i<$max; $i++) {
        
        is_numeric($i);

        $modes[ $i . "a" ] = '';
        $modes[ $i . "b" ] = '';
        $modes[ $i . "c" ] = '';
        $modes[ $i . "d" ] = '';
        $modes[ $i . "e" ] = '';
        $modes[ $i . "f" ] = '';
        $modes[ $i . "g" ] = '';
        $modes[ $i . "h" ] = '';
        $modes[ $i . "i" ] = '';
        $modes[ $i . "j" ] = '';
        $modes[ $i . "k" ] = '';
        $modes[ $i . "l" ] = '';
        
        unset($modes[ $i . "a" ]);
        unset($modes[ $i . "b" ]);
        unset($modes[ $i . "c" ]);
        unset($modes[ $i . "d" ]);
        unset($modes[ $i . "e" ]);
        unset($modes[ $i . "f" ]);
        unset($modes[ $i . "g" ]);
        unset($modes[ $i . "h" ]);
        unset($modes[ $i . "i" ]);
        unset($modes[ $i . "j" ]);
        unset($modes[ $i . "k" ]);
        unset($modes[ $i . "l" ]);
        
    }




    // Time Point 4

    $t4=microtime(true);

    // Duration Difference for Method 3

    $d3=$t4-$t3;


    echo '<pre style="font-size:20px">';
    echo 'Time with Class and NO Self Functions      = ' . $d1 . ' <br>';
    echo 'Time with Class and WITH Self Functions    = ' . $d2 . ' <br>';
    echo 'Time without Class, Used General handlers  = ' . $d3 ;
    echo '</pre>';


?>

