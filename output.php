<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo $output;
        echo "<br>";

        
    ?>

    <?php if (isset($error)): ?>
    <p>
        <?php echo $error; ?>
    </p>
    <?php else: ?>
    <?php foreach ($shoes as $shoe): ?>
    <blockquote>
        <p>
            <?php echo htmlspecialchars($shoe, ENT_QUOTES, 'UTF-8') ?>
        </p>
    </blockquote>
    <?php endforeach; ?>
    <?php endif; ?>
    
</body>
</html>