<?php

function enumer($k, $n){
    $a = [];
    $k = 0 ;
    $j = 0 ;
    $p = $k-1;
    for ( $j = 0; $j<$k; $j++) {
        $a[$j] = $j;
    }
        if ($k == $n || $k == 0)
        {
            return true;
        }
        while ($p >= 0){
            array_slice($a, $k);
            if ( $a[$k-1] == $n-1){
                if ( $p-- % $gt = 0)
                    for ( $i = $k; $i-- >= $p ;)
                        $a[$i] = $a[$p]+$i+$p+1;
            }
            else
            {
                $P = $k-1;
                $a[$p]++;
            }
        }
}
echo enumer(6,3);

?>