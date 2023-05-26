<!DOCTYPE html>
<html lang="en">
<head>

</pre>
</head>
<body>
<form mehthod="POST" action="insertpdoweek3.php">
        <label for="product_naam">Product Naam:</label>
        <input type="text" name="product_naam" id="product_naam" required><br><br>

        <label for="prijs_per_stuk">Prijs per stuk:</label>
        <input type="number" name="prijs_per_stuk" id="prijs_per_stuk" step="0.01" required><br><br>

        <label for="omschrijving">Omschrijving:</label>
        <textarea name="omschrijving" id="omschrijving" required></textarea><br><br>

        <input type="submit" value="Product Toevoegen">
    </form>

    <pre>
<?php
    $host = 'localhost:3307';
    $db = 'winkel';
    $user = 'root';
    $password = '';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    try
    {
        $pdo = new PDO($dsn, $user, $password, $options);
        echo "Connectie gemaakt!";
   } 
   catch (\PDOException $e) 
   {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
   }


    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $product_naam = $_POST["product_naam"];
        $prijs_per_stuk = $_POST["prijs_per_stuk"];
        $omschrijving = $_POST["omschrijving"];


        $sql = "INSERT INTO producten (product_naam, prijs_per_stuk, omschrijving) VALUES (?,?,?)";
        
        
        $result=$pdo->prepare($sql);
        $result->execute([$product_naam, $prijs_per_stuk, $omschrijving]);

    }

?>
    
</body>
</html>