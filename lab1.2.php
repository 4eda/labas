<?php
const N = 4;

function swap($arr, $b_arr){
   
    $t = $arr;
    $arr = $b_arr;
    $b_arr = $t;
    echo 'arr';
    var_dump($arr);
    echo 'b';
    var_dump($b_arr);
}

 function revers ($p_arr , $m){
    $i = 0; 
    $j = $m;
    while ($i<$j) {
        swap($p_arr[$i], $p_arr[$j]); 
        $i++; 
        $j--;
    }
}
 function antilex($p_arr , $m){
    $i = 0;
    if ($m == 0 ){
        for ($i = 0 ; $i < N /2; $i++)
        for (; $i < N; $i++) {
            for($i=0; $i < N; $i++) 
            //  print_r($p_arr[$i]); 
            echo '<br>';
        }
        } else {
            for ($i = 0; $i <=$m; $i++)
            {
                antilex($p_arr , $m-1);
                if ($i < $m) {
                    swap($p_arr[$i], $p_arr[$m]); 
                    revers($p_arr, $m-1);
    
                }
            }  
        }
    }

 function main(){

    $p_arr[N];
    for ($i = 0; $i < N; $i++)
    $p_arr[$i] = $i + 1;
    antilex ($p_arr , N-1);
    return 0;
 }

 main();


?>