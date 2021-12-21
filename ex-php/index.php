<?php 
require_once __DIR__ . './database.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
    <div id="app">
        <header>
            <div class="container">
                <div class="header-img">
                    <img src="../assets/logo.png" alt="Spotofy Logo">
                </div>
            </div>
        </header>
        
        <main>
            <div class="container">
                <ul class="gallery">
                    
                    <?php foreach($database as $album) { ?>
                    <li class="card">
                        <div class="album">
                            <div class="album-poster">
                                <img src="<?php echo $album['poster'];?>" alt="<?php echo $album['title']; ?>">
                            </div>
                            <h2 class="title"><?php echo $album['title']; ?></h2>
                            <h4><?php echo $album['author']; ?></h4>
                            <h4 class="year"><?php echo $album['year']; ?></h4>
                            <h4><?php echo $album['genre']; ?></h4>
                        </div>
                    </li>
                   <?php } ?>
                </ul>
            </div>
        </main>
    </div>
</body>
</html>