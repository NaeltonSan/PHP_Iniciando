<?php

        $array = array(40,200,100,150,"School of Net",true);
        //declaração flexível
        $array = array(
            40,
            200,
            100,
            150,
            "School of Net",
            true
        );
        //echo $array;
        //echo array(40,200,100,150,"School of Net",true);

        echo $array[0];
        echo "<br>";
        echo $array[1];
        echo "<br>";
        echo array(40,200,100,150,"School of Net",true)[4];
        echo "<br>";
        $array1 = [
            45,
            210,
            110,
            160,
            "School of Ne1111111t",
            false
        ];
        echo $array1[3];

?>