<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Connection</title>
</head>
<body>
    <?php 
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=shoes;charset-utf8mb4', 'shoeuser', 'mypassword');
        $output = 'Database connection established.';
    } catch (PDOException $e){
        $output = 'Unable to connect to the database server: ' . $e->getMessage();
    }

    try {
        $pdo = new PDO('mysql:host=localhost;dbname=shoes;charset-utf8mb4', 'root', '');
        $sql = 'SELECT `size` FROM  `slops`';
        $result = $pdo->query($sql);

        while ($row = $result->fetch()){
            $shoes[] = $row['slops'];
        }
    } catch (PDOException $e) {
        $error = 'Unable to connect to the database server: '.$e-> getMessage() . ' in ' . $e->getFile().':'.$e->getLine();
    }

    

    include 'output.php';
    
    ?>
</body>
</html>