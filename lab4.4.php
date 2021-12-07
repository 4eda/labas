<!DOCTYPE html>
<html?>
 <head>
  <meta charset="utf-8" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Результат</title>
</head>
</html>
<?php
  if( isset( $_POST['submit_two'] ) )
  {
    if (empty($_POST['numb']))
    {
            echo 'Нет данных!';
    } else {
    $n = $_POST['numb'];
    $numbers = range(0, $n-1);
    $rands = array();
    for ($i=0; $i < $n; $i++) {
      $ok = false;
      while (!$ok) {
        $x = array_rand($numbers);
        $ok = !in_array($numbers[$x], $rands) && $numbers[$x] != $i;
      }
      $rands[$i] = $numbers[$x];
      unset($numbers[$x]);
    }
    echo '<div class="row justify-content-center mt-5"><p>Множество элементов</p>{';
      print_r(implode(" ", $rands));
      echo '}</div> Все подмножества множевства<br>';
    $arr = $rands;

    $w = count($arr);
    $n = pow(2, $w);
    for ($i= 0 ; $i < $n; $i++){
      echo "{";
      for ($j = 0 ; $j < $w; $j++)
      if ($i & (1 << $j))
      echo  " " .$arr[$j]." ";
      echo "}<br>";
      }
  }
}
?>