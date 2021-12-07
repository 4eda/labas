<!DOCTYPE html>
<html?>
 <head>
  <meta charset="utf-8" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Результат</title>
</head>
</html>
<?php
if (isset($_POST["submit"])){  
    if (empty($_POST['k']) || empty($_POST['n']))
    {
            echo '<div class="row justify-content-center mt-5">Нет данных!<br></div>';
    }  
$n = $_POST['n']; 
$k = $_POST['k'];
}  
if ($n == 0 || $k == 0 || $k > $n) 
{
    echo '<div class="row justify-content-center mt-5"> Ошибка, пустые поля или K больше n </div>';
} else {

$a[] = $k;
for ($i=0; $i < $k; $i++ ){
    $a[$i] = $i+1;
}
$p=$k;
while ($p >= 0){
    echo '<div class="row justify-content-center mt-5"> <li style="width:200px" class="list-group-item list-group-item-action list-group-item-info">{';
print_r(implode(",", $a));
echo '}</li></div>';
   $p = $a[$k-1] == $n ? $p-1 : $k -1;
    if ($p >= 0){
        for ($i=$k-1; $i>=$p; $i--){
            $a[$i] = $a[$p]+$i-$p+1;
            }
        }
    }
}
?>