<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>cms dashboard
    </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!----css3---->
    <link rel="stylesheet" href="../assets/css/customs.css">
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <link href="../assets/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">
</head>

<body>




    <div class="wrapper">


        <div class="body-overlay"></div>


        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="container" style="display: none;">
                <?php echo $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], "/") + 1); ?></div>
            <div class="sidebar-header">
                <div class="sidebar-header">
                <!-- <img src="img/logo.png" class="img-fluid" /> -->
                    <h3><span>PLSP ALUMNI</span></h3>
                </div>
                <ul class="list-unstyled components">
                    <li class="<?= $page == 'dashboard.php' ? 'active' : '' ?>">
                        <a href="dashboard" class="dashboard"><span>Dashboard</span></a>
                    </li>
                    <li class="<?= $page == 'pending.php' ? 'active' : '' ?>">
                        <a href="pending"><span>For Approval Registration</span></a>
                    </li>
                    <li class="<?= $page == 'alumni.php' ? 'active' : '' ?>">
                        <a href="alumni" class="dashboard"><span>Approved Registration</span></a>
                    </li>
                   
                    <li class="<?= $page == 'archive.php' ? 'active' : '' ?>">
                        <a href="archive"><span>Rejected Registration</span></a>
                    </li>
                    <li class="<?= $page == 'deleteacc.php' ? 'active' : '' ?>">
                        <a href="deleteacc"><span style="font-size: 13px;">Deleted Approved Registration </span></a>
                    </li>
                    <li class="<?= $page == 'batchyear.php' ? 'active' : '' ?>">
                        <a href="batchyear"><span>Batch Year</span></a>
                    </li>
                    <li class="<?= $page == 'program.php' ? 'active' : '' ?>">
                        <a href="program"><span>Program</span></a>
                    </li>

                    <div class="small-screen navbar-display">
                        <!-- <li class="dropdown d-lg-none d-md-block d-xl-none d-sm-block">
                        <a href="#homeSubmenu0" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fa-solid fa-bell"></i><span> 4 notification</span></a>
                        <ul class="collapse list-unstyled menu" id="homeSubmenu0">
                            <li>
                                <a href="logout.php">Logout</a>
                            </li>
                            
                        </ul>
                       
                    </li>
                     -->

                        <!-- <li class="d-lg-none d-md-block d-xl-none d-sm-block">
                        <a href="#"><i class="material-icons"></i><span>apps</span></a>
                    </li> -->

                        <li class="d-lg-none d-md-block d-xl-none d-sm-block">
                            <a href="logout.php"><span>Logout</span></a>
                        </li>


                    </div>




                    <!--              
                <li class="dropdown">
                    <a href="#pageSubmenu7" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="material-icons">content_copy</i><span>Pages</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu7">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li> -->




                </ul>


        </nav>




    </div>








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="../assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery-3.3.1.min.js"></script>


    <script type="text/javascript">
    $(document).ready(function() {
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
            $('#content').toggleClass('active');
        });

        $('.more-button,.body-overlay').on('click', function() {
            $('#sidebar,.body-overlay').toggleClass('show-nav');
        });

    });
    </script>

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>




</body>

</html>