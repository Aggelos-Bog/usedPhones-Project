<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>usedphones</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <?php if ( isset($_SESSION['username']) ) { ?>
                <li><a href="Sell_page.php">Sell</a></li>
            <?php }else {?>
                <li></li>
            <?php }?>
            <li><img src="images/LOGO.png" alt="logo"></li>
            <li><a href="Buy_page.php">Buy</a></li>
            <?php if ( isset($_SESSION['username']) ) { ?>

                     <li><a href="log-out.php">log out</a></li>

            <?php }else {?>
                     <li><a href="log-in.php">log in</a></li>
            <?php }?>
        </ul>
    </nav>