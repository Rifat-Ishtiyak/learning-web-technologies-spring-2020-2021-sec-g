<?php 
    $array1=[
                [1,2,3,'A'],
                [1,2,'B','C'],
                [1,'D','E','F']
            ];
   
    $flag=3;
    for($i=0;$i<3;$i++){
        for($j=0;$j<$flag;$j++){
            echo($array1[$i][$j]);
        }
        echo("\n");
        $flag--;
    }

    echo"\n";
    
    $flag2=3;
    for($i=0;$i<3;$i++){
        for($j=$flag2;$j<4;$j++){
            echo($array1[$i][$j]);
        }
        $flag2--;
        echo("\n");
    }
?>