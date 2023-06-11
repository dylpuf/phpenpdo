<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
$tijd = date("H:i"); 

if ($tijd < "12:00") {
    echo "Goedemorgen";
} elseif ($tijd < "18:00") {
    echo "Goedemiddag";
} else {
    echo "Goedenavond";
}

function berekenGemiddelde($getal1, $getal2) {
    $gemiddelde = ($getal1 + $getal2) / 2;
    echo "Het gemiddelde is: " . $gemiddelde;
}

berekenGemiddelde(10, 20);

function dagenTotEindeJaar() {
    $huidigeDatum = date("Y-m-d"); 
    $eindeJaar = date("Y-12-31"); 
    $verschil = strtotime($eindeJaar) - strtotime($huidigeDatum); 
    $aantalDagen = floor($verschil / (60 * 60 * 24)); 

    echo "Aantal dagen tot het einde van het jaar: " . $aantalDagen;
}

dagenTotEindeJaar();





function berekenTotaleLengte($strings) {
    $totaleLengte = 0;
    foreach ($strings as $string) {
        $totaleLengte += strlen($string); 
    }

    return $totaleLengte;
}

$array = ["Hallo", "Wereld", "Dit", "is", "een", "test"];
echo "Totale lengte: " . berekenTotaleLengte($array);
?>







