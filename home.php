<?php



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <?php include('sidebarconfig.php');
    ?>

    <div id="content">



        <div class="top-navbar">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">



                    <a class="navbar-brand" href="#"> Dashboard </a>

                    <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="material-icons">more_vert</span>
                    </button>

                    <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <!-- <li class="dropdown nav-item active">
                        <a href="#" class="nav-link" data-toggle="dropdown">
                        <i class="fa-solid fa-bell"></i>
                            <span class="notification">4</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">You have 5 new messages</a>
                            </li>
                            <li>
                                <a href="#">You're now friend with Mike</a>
                            </li>
                            <li>
                                <a href="#">Wish Mary on her birthday!</a>
                            </li>
                            <li>
                                <a href="#">5 warnings in Server Console</a>
                            </li>

                        </ul>
                    </li> -->
                            <!-- <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span class="material-icons">apps</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span class="material-icons">person</span>
                        </a>
                    </li> -->
                            <li class="dropdown nav-item ">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="fa-solid fa-gear"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="logout.php">Logout</a>
                                    </li>


                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>



        <div class="main-content">



            <?php
            $queryshe = mysqli_query($conn, "SELECT * from lesson") or die($conn->error);
            $count = mysqli_num_rows($queryshe);
           
            $q = mysqli_query($conn, "SELECT * from agent where agent_id ='$session_id'") or die($conn->error);
            $user_row = mysqli_fetch_array($q);

            $les =  $user_row['lt'];
            $query = mysqli_query($conn, "SELECT * from lesson where title = '$les' ") or die($conn->error);
            while ($row = mysqli_fetch_assoc($query)) {
                $id = $row['id'];

                $video = $row['location'];
            ?>
                <div class="row ">
                    <div class="col-lg-12 col-md-12">
                        <div class="card" style="min-height: 485px">
                            <div class="card-header card-header-text">

                                <p class="category"><?php echo $row['title'];  ?></p>
                                <hr>
                            </div>



                            <div class="card-content table-responsive">


                                <div class="col-12 text-center">



                                    <div class="content">
                                        <?php
                                        if ($video == true) {
                                        ?>
                                            <video id="videoStep" width="100%" height="480" controls>
                                                <source src="<?php echo $row['location']; ?>" type="video/mp4">
                                            </video>

                                        <?php }else if(mysqli_query($conn, "Select * from lesson where title = '' ")){
                                            echo '<script>alert("asd");</script>';
                                        }
                                        ?>
                                        <?php  ?>
                                        <br>
                                        <br>



                                    </div>
                                </div>


                            <?php  } ?>



                            <div class="col-md-12 text-center">
                                <form method="POST">
                                    <input type="hidden" name="id" value="<?php echo $user_row['agent_id'] ?>">
                                    <input type="hidden" name="des" value="<?php echo $user_row['lt'] ?>">
                                    <button type="submit" class="btn btn-primary" id="myBtn" name="nextBtn" disabled="disabled">
                                        Next Lesson
                                    </button>
                                </form>
                            </div>


                            <?php

                            if (isset($_POST['nextBtn'])) {
                                $iid = $_POST['id'];
                                $desc = $_POST['des'];
                                
                             $les++;

                               

                                    $query_des = mysqli_query($conn, "UPDATE `agent` set lt = '$les' where agent_id = '$session_id' ");
                                    if ($query_des == TRUE) {
                                        echo '<script>alert("s")</script>';
                                    } else {
                                        echo '<script>alert("f")</script>';
                                    }
                                    }
                            

                            ?>

                            </div>
                        </div>
                    </div>
                </div>
        </div>


    </div>
    </div>



    </div>


    </div>
    <script>
        document.getElementById('videoStep').addEventListener('ended', videoEndHandler, false);

        function videoEndHandler(e) {
            document.getElementById("myBtn").disabled = false;
        }
    </script>
</body>

</html>