<?php
    function Solve ($data){
        $data_arr = explode(',', $data);
        while ( $data !== sort($data_arr)) {
           foreach ($data_arr as $k) {
            $index = 0;
                for ($count = (count($data_arr) - 1); $count-- ) {
                    if ($k[$index] < $k[++$index]) {
                                   echo $k[$index]. " is smaller than ". $k[++$index]. " and so is 
                                   kept at the left";
                }   }else{
                    echo $k[$index]. " is greater than ". $k[++$index]. " and so is 
                                   kept at the right";
                }  
                ++$index;        
           }
        }
    }

    $dataset = array(2,4,3,6,9,1);
    Solve($dataset);
?>