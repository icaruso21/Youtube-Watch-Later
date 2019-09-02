<!DOCTYPE HTML>
<html>
    <head>
        <h1>Video Storage and Playback:</h1>

        <h3>View video files below:</h3>
    
        <?php
        include("config.php");
        ?>
        

        
    </head>
    <body>
        <br>
        <a href='http://127.0.0.1:8080'>Click here to upload more videos</a>
        <br>
<?php
        
        echo "The current video playing is ".$name."<br />";
        echo "<embed src='$target_file' width='560' height='315'></embed>";
?>
        <br><br><font size="1">Created by Jack Kearney, Isaac Caruso, and Reid Smith</font>
    </body>
</html>