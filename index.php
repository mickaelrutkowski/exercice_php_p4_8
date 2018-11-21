<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP</title>
</head>
<body>
  <?php
  $num1 = 8;
  $num2 = 6;
  $num3 = 3;
  function calcul($num1, $num2, $num3){
    $result = $num1 + $num2 + $num3;
    return $result;
  }
  echo calcul($num1, $num2, $num3);
  ?>
</body>
</html>
