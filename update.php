<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <?php
    $host = 'localhost:3307';
    $db = 'winkel';
    $user = 'root';
    $password = '';
    $charset = 'utf8mb4';

    $conn = PDO($host, $user, $password, $db);
    if ($conn->connect_error) {
        die("Verbinding mislukt: " . $conn->connect_error);
    }

       if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $product_naam = $_POST["product_naam"];
        $prijs_per_stuk = $_POST["prijs_per_stuk"];
        $omschrijving = $_POST["omschrijving"]; }

        $PDO = "UPDATE products SET product_naam='$product_naam', prijs_per_stuk='$prijs_per_stuk', omschrijving='$omschrijving' WHERE id = 2";
        $conn->close();
    ?>

<h2>Product bijwerken</h2>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="product_naam">Productnaam:</label>
        <input type="text" name="product_naam" id="product_naam" required><br><br>

        <label for="prijs_per_stuk">Prijs per stuk:</label>
        <input type="text" name="prijs_per_stuk" id="prijs_per_stuk" required><br><br>

        <label for="omschrijving">Omschrijving:</label>
        <textarea name="omschrijving" id="omschrijving" required></textarea><br><br>

        <input type="submit" value="Bijwerken">
       </form>
</body>
</html>