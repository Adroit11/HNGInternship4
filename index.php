<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
    <title>HNG Internship 4 Stage 1</title>
</head>
<body>
    <div class="banner">
        <img class="logo" src="img/3.jpg" alt="logo">
        <h1 class="logo">HNG Internship (iv)</h1>
    </div>
    <div class="main">
        <div class="date">
            <?php
                echo date("d - m - Y");
            ?>
        </div>
        <div class="time">
            <h1 class="time">
                <?php
                    echo date("h : i");
                ?>
            </h1>
        </div>
    </div>
    
</body>
</html>