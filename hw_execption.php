<?php
    
    function fun(){
    if(isset ($_POST['submit'])){
        $target_file ="upload/" . basename($_FILES['frozen']['name']);
        
        $actualOrFake = getimagesize($_FILES['frozen'] ['tmp_name']);
            if($actualOrFake !== false){
                throw new Exception("File is ".$actualOrFake['mime'])  ;
                //file exist or not
                if(file_exists($target_file)){
                    throw new Exception("Sorry! File is already exists.<br>");
                } else{
                    //limit file size
                    if($_FILES['frozen']['size'] > 500000){
                        throw new Exception ("Sorry! Your file is too large.<br>");
                    } else {
                        //set image file type
                        $imgFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                        if($imgFileType != 'jpg' && $imgFileType != 'jpeg' && $imgFileType != 'png' 
                            && $imgFileType != 'gif') {
                                throw new Exception ("Sorry! File type not allowed.<br>");
                            } else{
                                //file uploading
                                move_uploaded_file($_FILES['frozen']['tmp_name'], $target_file);
                            }
                    }  
                } 
                } else {
                        throw new Exception ("Sorry, File is not valid!<br>");
                    }
            
    } }

    try {
        echo fun();
    } catch(Exception $error){
        //echo $error->getMessage();
        echo $error->getFile();
        //echo $error->getCode();
        echo $error->getLine();
    }
    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File upload</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="frozen">
        <input type="submit" value="upload" name="submit">
    </form>
    
</body>
</html>