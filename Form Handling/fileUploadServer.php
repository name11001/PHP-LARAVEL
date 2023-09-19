<?php
if(isset($_POST['username'])){
   $userName=$_POST['username'];
    if(strlen($userName)<4){
        echo "UserName must be at lest 4 characters?";
        return;
        exit();
    }
    $UploadFile=$_FILES['upfile'];
    // var_dump ($image);
    /*
    
array(6) {
  ["name"]=>
  string(9) "1 (8).jpg"
  ["full_path"]=>
  string(9) "1 (8).jpg"
  ["type"]=>
  string(10) "image/jpeg"
  ["tmp_name"]=>
  string(24) "C:\xampp\tmp\phpAB1B.tmp"
  ["error"]=>
  int(0)
  ["size"]=>
  int(88422)
}

    */
    if(move_uploaded_file($UploadFile['tmp_name'], $UploadFile['name'])){
        echo "Done! File Information</br>";
        foreach ($UploadFile as $key => $value) {
            echo "<b>{$key}</b> : {$value} </br>";
        }
        
    }
}


?>