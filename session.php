<?php
require_once('connection.php');
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) { ?>
    <script>
        window.location = "index.php";
    </script>
<?php
}
$session_id = $_SESSION['id'];
$conn = connection();
$user_query = mysqli_query($conn, "select * from agent where agent_id = '$session_id'") or die($conn->error);
$user_row = mysqli_fetch_array($user_query);
$user_username = $user_row['lname'];

if (!isset($user_username)) {
    header("Location:index.php");
}
?>