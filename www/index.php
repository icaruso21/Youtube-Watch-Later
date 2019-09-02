<!DOCTYPE HTML>
<html>
    <head>
        <h1>Video Storage and Playback:</h1>

        <h3>Upload video files below to view later:</h3>
    
        <?php
        include("config.php");
        
        if(isset($_POST['but_upload'])){
            $maxsize = 5242880; // 5MB
            
            $name = $_FILES['file']['name'];
            $target_dir = "/vagrant/videos/";
            $target_file = $target_dir . $_FILES["file"]["name"];
            
            // Select file type
            $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            
            // Valid file extensions
            $extensions_arr = array("mp4","avi","3gp","mov","mpeg");
            
            // Check extension
            if( in_array($videoFileType,$extensions_arr) ){
                
                // Check file size
                if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
                    echo "File too large. File must be less than 5MB.";
                }else{
                    // Upload
                    //echo $_FILES['file']['tmp_name'];
                    echo $target_file;
                    if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
                        echo "file moved";
                        // Insert record
                        $query = "INSERT INTO videos(name,location) VALUES('".$name."','".$target_file."')";
                        echo '".$name."';
                        mysqli_query($con,$query);
                        echo "Upload successfully.";
                    }
                }
                
            }else{
                echo "Invalid file extension.";
            }
        
        }
        ?>
    </head>
    <body>
        <form method="post" action="" enctype='multipart/form-data'>
            <input type='file' name='file' />
            <input type='submit' value='Upload' name='but_upload'>
        </form><br>
        <a href='http://127.0.0.1:8081'>Click here to play your videos</a>
        <br><br><font size="1">Created by Jack Kearney, Isaac Caruso, and Reid Smith</font>
    </body>
</html>