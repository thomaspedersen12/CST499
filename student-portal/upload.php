<?php
if (isset($_POST['submit'])){
    $file =$_FILES['fileToUpload'];
   // print_r($file);
    
    $fileName = $_FILES['fileToUpload']['name'];
    $fileTmpName = $_FILES['fileToUpload']['tmp_name'];
    $fileSize = $_FILES['fileToUpload']['size'];
    $fileError = $_FILES['fileToUpload']['error'];
    $filetype = $_FILES['fileToUpload']['type'];
    
    $fileExt = explode('.',$fileName);
    $fileRealExt = strtolower(end($fileExt));
    
    $allowed = array('jpg','jpeg','png','pdf');
    
    if (in_array($fileRealExt, $allowed)){
        if ($fileError === 0){
            if ($fileSize < 1000000){
                //1000 Megabytes (MB)
                $fileNameUniID = uniqid ('',true).".".$fileRealExt;
                $filePath = 'uploads/'.$fileNameUniID;
                move_uploaded_file($fileTmpName,$filePath);
                header("Location: upload_files.php?uploadsuccess");
                
                } else{
                    echo "File size is to large, please upload a file less than 1000 MB";
                    
                }
            
        }else{
            echo "Error uploading file";
        }
        
        
    }else {
        echo "file type not allowed, please upload a jpg, jpeg, png or pdf";
    }
    
    
    }
?>