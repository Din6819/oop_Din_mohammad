<?php
    
    class bike {
        function __construct()
        {
            echo "I love Yamaha <br>";
        }
        function Movement($bike_name){

            return "$bike_name is moving foeward <br>";


               }
        function backweard($bike_name2="defult"){

            return "$bike_name2 is moving backword";
        }
        function __destruct()
        {
            echo "i love MT15";
        }
        
        }
    $bike_object = new bike;
    // echo $bike_object -> Movement('suzuki');
    // echo $bike_object -> backweard();


?>