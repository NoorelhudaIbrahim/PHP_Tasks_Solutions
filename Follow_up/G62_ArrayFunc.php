<?php

    echo ('<link rel="stylesheet" href="style.css">');
    include ('header.php');
    echo('<br><br>');

    $my_array = ['ahmad' ,'muhammed' ,'ali' ,["5"=> 'maher', "4"=> 'samer', ['noor', 'samer' ,'mona']]];
    echo('<pre>');
    print_r($my_array);
    echo('</pre>');

    print_r($my_array[3][6][2]);

    $my_value = $my_array[3][6][2];

    echo("<P>".$my_value."<P>");

    ?>