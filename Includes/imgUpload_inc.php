<?php
echo <<<_END
    <html><head><title>uploader</title></head><body>
    
    <form method='post' enctype='multipart/form-data'>
    <input type='file' name='filename'>
    <input type='submit' value='Upload'></form>
    
    _END;

    if($_FILES) {
        $name = $_FILES['filename']['name'];

        switch($_FILES['filename']['type']){
            case 'image/jpg' : $text = 'jpg'; break;
            case 'image/png' : $text = 'png'; break;
            case 'image/gif' : $text = 'gif'; break;
            default : $text = ' '; break;
        }
        if($text) {
            $n = "image.$text";
            move_uploaded_file($_FILES['filename']['tmp_name'], $n);
            echo "<img src=$n>";
        }else echo "$name is not accepted";
    }
echo "</body></html>";
