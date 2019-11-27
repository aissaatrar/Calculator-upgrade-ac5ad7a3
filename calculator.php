<?php
$operator;
$resultaat;
echo 'Welke operatie wil je uitvoeren? (+, -)';
$operator = readline();
echo 'Eerste getal?';
$var1 = readline();
echo 'Tweede getal?';
$var2 = readline();
selectOperator($operator, $var1, $var2);
function selectOperator($operator, $var1, $var2)
{
  switch ($operator)
  {
    case '+':
    $resultaat = $var1 + $var2;
      echo $var1 . ' + ' . $var2 . ' = ' . $resultaat;
      break;
    case '-':
    $resultaat = $var1 - $var2;
      echo $var1 . ' - ' . $var2 . ' = ' . $resultaat;
      break;
      case ':':
      $resultaat = $var1 / $var2;
        echo $var1 . ' : ' . $var2 . ' = ' . $resultaat;
        break;
        case 'x':
        $resultaat = $var1 * $var2;
          echo $var1 . ' x ' . $var2 . ' = ' . $resultaat;
          break;
  }
}
 ?>
