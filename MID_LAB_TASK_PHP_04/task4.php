<?php 
    $first=readline('Enetr 1st number: ');
    $second=readline('Enetr 2nd number: ');
    $third=readline('Enetr 3rd number: ');

    if($first>$second && $first>$third){
        echo($first.' is the largest');
    }
    elseif($second>$first && $second>$third){
        echo($second.' is the largest');
    }
    elseif($third>$first && $third>$second){
        echo($third.' is the largest');
    }
    
?>