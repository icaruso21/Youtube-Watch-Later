<!DOCTYPE HTML>
<html>
    <head>
        <h1>My Saved Videos Playback:</h1>

        
        <?php
        //Connect to database
        $link = mysqli_connect("192.168.2.12", "webuser", "insecure_db_pw", "fvision");
 
        // Check connection
        if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        ?>
        

        
    </head>
    <body>
        <br>
        <a href='http://127.0.0.1:8080'>Click here to upload more videos</a>
        <br>
<?php
        
        
?>
        <br><br><font size="1">Created by Jack Kearney, Isaac Caruso, and Reid Smith</font>
    </body>
</html>