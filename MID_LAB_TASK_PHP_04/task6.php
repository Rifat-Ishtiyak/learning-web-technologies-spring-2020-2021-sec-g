<?php 
    $students = [
        0=> [
            'id'	=>1, 
            'name'	=>'rifat', 
            'dept'	=>'CSE', 
            'email'	=>'rifat@aiub.edu'
        ],
        1=> [
            'id'	=>2, 
            'name'	=>'abc', 
            'dept'	=>'SE', 
            'email'	=>'abc@aiub.edu'
        ],
        2=> [
            'id'	=>3, 
            'name'	=>'xyz', 
            'dept'	=>'CSE', 
            'email'	=>'xyz@aiub.edu'
        ],
        3=> [
            'id'	=>4, 
            'name'	=>'rahim', 
            'dept'	=>'BBA', 
            'email'	=>'rahim@aiub.edu'
        ]
    ];

    $n=readline("Enter a name to search: ");
    for($i=0;$i<4;$i++){
        if($n==$students[$i]['name']){
            echo('Student ID : '.$students[$i]['id']."\n");
            echo('Student Name : '.$students[$i]['name']."\n");
            echo('Dept. Name : '.$students[$i]['dept']."\n");
            echo('Student Email : '.$students[$i]['email']."\n");
            $count++;
        }
    }
?>