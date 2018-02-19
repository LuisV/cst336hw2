<!DOCTYPE html>
<?php
        include 'inc/functions.php';
        ?>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
        <style>
            @import url("css/styles.css");
        </style>
    </head>
<body>
    <header>
        <h1 style= "margin: 0;">Relax</h1>
        <a id= "here">Home</a>
        <a  href= "details.php"> Details</a>
    </header>
    
    <main>
        
        <!-- The run function differentiates between the two pages-->
        <?php
        run(0);
        ?>
        
    </main>
     <footer>
        All images taken from Google.
        Songs from <a href="https://www.bensound.com">bensound.com</a>
        &copy; Luis Valencia 2018
    </footer>
    </body>
</html>