<?php

        //array chaves - 0 1 2 3 4 5
        //array - chaves e valores
        $array = array(
            'luiz' => 40,
            200,
            100,
            3000 => 150,
            "School of Net",
            true
        );
        echo $array['luiz'];
        echo "<br>";

        echo $array[1];
        echo "<br>";

        echo $array[3000];
        echo "<br>";

        var_dump($array);
        echo $array[3001];


?>