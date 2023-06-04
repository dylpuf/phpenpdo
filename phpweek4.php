<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <?php
        
        for ($num = 0; $num <= 50; $num++) {
        echo $num . "\n" . "<br>" ;
        }

        
        $array = ["<br>" . "Omesh", "Gino", "Jaden", "Rocco", "Dejah", "Martino", "Valerio", "Julie", "Reza", "Kevin"];
        
        foreach ($array as $naam) {
            echo $naam . "<br>" . "<br>";
        }

        
        $maanden2 = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December'];

         for ($i = 0; $i < count($maanden2); $i++) {
        echo 'Maand ' . ($i + 1) . ' is ' . $maanden2[$i] . '.<br />' . "<br>";
}

        $maanden = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December'];

        foreach ($maanden as $index => $maand) {
            echo 'Maand ' . ($index + 1) . ' is ' . $maand . '.<br />' . "<br>";
        } 
      
    


?>

    
</body>
</html>