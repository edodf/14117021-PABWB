<?php
$n = 37;
    for($i=1;$i<=$n;$i++){
        $x=0;
        for($j=1;$j<=$i;$j++){
            if($i % $j==0){
                $x++;
            }
        }
        if($x==2){
            print $i." bilangan prima <br/>";
        }
    }
?>