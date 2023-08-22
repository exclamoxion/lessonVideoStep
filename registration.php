<?php
include('connection.php');
$conn;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


    <form method="POST">

 
    <label for="lname">Lastname</label>
    <input type="text" name="lname">
    <label for="fname">Firstname</label>
    <input type="text" name="fname">
    <label for="mname">MName</label>
    <input type="text" name="mname">
    <label for="pw">Password</label>
    <input type="password" name="pw">

    <input type="submit" value="submit" name="submit">




    </form>



    <?php
    
    if(isset($_POST['submit'])){
        $lname = $_POST['lname'];
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $pw = $_POST['pw'];

        $id = uniqid();


       $q =  mysqli_query($conn, "INSERT INTO `agent` (agent_id, mname, lname,fname,pw) VALUES ('$id','$lname','$fname','$mname','$pw')");
        
       if($q == TRUE){
        echo '<script>alert("success");</script>';
       }else{
        echo '<script>alert("fail");</script>';
       }
    }
    
    ?>

</body>
</html>