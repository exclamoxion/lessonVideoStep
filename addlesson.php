
<?php 
// Include the database configuration file  
include('connection.php');
// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $idd = uniqid();
    $announcement = $_POST['announcement'];
    $title = $_POST['title'];
    $datee = $_POST['datee'];
    $status = 'error'; 
    $file_name = $_FILES['video']['name'];
		$file_temp = $_FILES['video']['tmp_name'];
		$file_size = $_FILES['video']['size'];
 
		if($file_size < 500000000000000){
			$file = explode('.', $file_name);
			$end = end($file);
			$allowed_ext = array('avi', 'flv', 'wmv', 'mov', 'mp4');
			if(in_array($end, $allowed_ext)){
				$name = date("Ymd").time();
				$location = 'video/'.$name.".".$end;
		    		if(move_uploaded_file($file_temp, $location)){
            // Insert image content into database 
            $insert = mysqli_query($conn, "INSERT into lesson (id,announcement,title,location,datee) VALUES ('$idd','$announcement','$title','$location','$datee')"); 
             
            if($insert){ 
                $status = 'success'; 
                $statusMsg = "<script>alert('Success')</script>"; 
                header('Location:index.php');
            }
        }else{ 
                $statusMsg = "<script>alert('Failed')</script>"; 
            }  
        }else{ 
            $statusMsg = "<script>alert(avi, flv, wmv, mov, mp4 files are allowed to upload')</script>"; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 
 
// Display status message 
echo $statusMsg; 
?>