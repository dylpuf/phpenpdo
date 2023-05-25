<!DOCTYPE html>
<html lang="en">
<head>
<pre>
    <?php
    $host = 'localhost:3307';
    $db = 'winkel';
    $user = 'root';
    $password = '';
    $charset = 'utf8mb4_unicode_ci';

    $dsn = "localhost:3307=$host;winkel=$db;utf8mb4=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    try
    {
        $pdo = new PDO($dsn, $user, $pass, $options);
        echo "Connectie gemaakt!";
   } 
   catch (\PDOException $e) 
   {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
    ?>
</pre>
</head>
<body>
    
</body>
</html>
