<?php 
    $length=readline('Enter length: ');
    $width=readline('Enter width: ');
    
    $area = ($length*$width);
    $perimeter = 2*($length+$width);

    echo('Area of Triangle: '.$area."\n");
    
    echo('Perimeter of Triangle: '.$perimeter."\n");
?>