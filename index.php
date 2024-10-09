<?php
if (isset($_POST['submit'])) {
    
    // echo $_POST['name'];
} else {
    echo "your name sucks find a better name😂🤣🤣🤣";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>username name </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="hero">
        <?php  echo  "The users name is ".$_POST["name"]." 🎇🎇🎉🎀"?>
      
    </h1>
    <div class="container">
        <div class="holder">
            <form action="index.php" method="POST">
                <div class="wrapper">
                    <input type="text" placeholder="Enter user name" name="name">
                </div>
                <br>
                <br>
                <div class="wrapper">
                    <input type="submit" name="submit" value="submit">
                </div>
            </form>
        </div>
    </div>
    <h4 class="footer">
        Made with <span>❤️ </span>by loiserose
    </h4>
</body>
</html>