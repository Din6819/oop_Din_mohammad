<?php
    
    class bike {
        public $bike_type="naked sports";
        public $fuel_supply="FI";
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
            echo "i love MT15 <br> This bike fuel supply system is $this->fuel_supply";
        }
        function prefer_bike(){
            return "i $this->bike_type  bike <br>";
        }
        
        }
    $bike_object = new bike;
    // echo $bike_object -> Movement('suzuki');
    // echo $bike_object -> backweard();
    echo $bike_object -> prefer_bike();


?>