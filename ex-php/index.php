<?php 
require_once __DIR__ . './database.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Php dischi</h1>
    </header>
    
    <main>
        <ul>
            <?php foreach($database as $album) { ?>
            <li class="album">
                <h3><?php echo $album['title']; ?></h3>
                <h4><?php echo $album['author']; ?></h4>
                <h4><?php echo $album['year']; ?></h4>
                <h4><?php echo $album['genre']; ?></h4>
                <img src="<?php echo $album['poster'];?>" alt="<?php echo $album['title']; ?>">



            </li>
           <?php } ?>
        </ul>
    </main>
</body>
</html>