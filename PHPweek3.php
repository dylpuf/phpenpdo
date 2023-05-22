<!DOCTYPE html>
<html lang="en">
<head>
    <pre>
  <?php 
  //deel 1
  $myarray = ['Null','Een','Twee','Drie'];
  
  $myarray[]='Vier'; 

  print_r($myarray);
  

  //Deel 2
$myarray2 = ['a','b','c','d','e','f'];

$myarray2[]= 'g';

$totaal = count ($myarray2);

echo "Het array heeft " . $totaal . " elementen.". "<br>". "<br>";

// Deel 3

$regel2 = "bar";

$regel5 = "world";

$regel8 = "Toyota";

$regel9 = "3";

$regel12 = "5";

$regel19 = "Array
(
    [0] => 5
    [2] => 3
    [3] => 2
    [4] => 1
)";

// Deel 4A

$cijferphp = [4.4, 4.6, 5.6, 6.1, 7.6, 7.2];

$antwoord = array_sum($cijferphp) / count($cijferphp);

$gemiddelde = round($antwoord, 1);

echo "Gemiddelde is: " . $gemiddelde;

// DeelB
//ik denk dat het beter is om de regels niet samen te voegen, omdat ik het dan duidelijker vind en is simpeler.

  ?>
  </pre>
</head>
<body>
    
</body>
</html>