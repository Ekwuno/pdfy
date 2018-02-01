<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>pdfy-Search Result</title>
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/font-awesome.min.css">
        <link rel="stylesheet" href="./css/custom.css">
    </head>
<body class="container-fluid">
    <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container-fluid" id="customNav">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-class="active" data-target="#myNavbar">
                            <span class="fa fa-th-list icon-ba"></span>
                            <!--  <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>  -->
                        </button>
                        <a href="index.html" class="navbar-brand" id="site-name">pdfy<i class="fa fa-certificate"></i></a>
                    </div>
                    <div class="collapse navbar-collapse navbar-right" id="myNavbar">
                        <ul class="nav navbar-nav" id="navbar">
                            <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                            <li><a href="cm.html">Course Materials</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="privacypolicy.html">Privacy Policy</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right" id="navbar">
                            <li><a href="#"><i class="fa fa-user"></i> Sign Up</a></li>
                            <li><a href="#"><i class="fa fa-sign-in"></i> Login</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <section class="row forSmallPhone">
                <div class="col-sm-10 col-sm-offset-1">
                <?php
                    include_once "config/functions.php";
                    if (isset($_POST['download_btn'])) {
                        $dept = strtolower($_POST['dept']);
                        $level = $_POST['level'];
                        echo "<h1 id='searchHead'>Course materials for <i id='depter'>{$dept}</i> <i>{$level} level</i></h1>";
                        define("br", "<br>");
                        $con = connekt();
                        $select_sql = "select filename, no_of_downloads from `{$dept}` where level = '{$level}'";
                        $select_query = mysqli_query($con,$select_sql);
                        if (mysqli_num_rows($select_query) > 0) {
                           while ($filename = mysqli_fetch_assoc($select_query)) {
                                echo "<a class='resultP' href='download.php?file={$filename['filename']}&dept={$dept}'>"
                                ."<img src='images/bullet_red.png'><span id='filenamer'>{$filename['filename']}</span></a>"
                                ."&nbsp;&nbsp; <span id='showNum'>{$filename['no_of_downloads']}</span>".br;
                            }
                        }else{
                            echo "<p class='resultP'>No files yet, please check back later!</p>";
                        }
                        
                    }
                 ?>
                </div>
            </section>

            <footer class="row" id="footer"></footer>

            <script src="./js/jquery-3.2.1.min.js"></script>
            <script src="./js/bootstrap.min.js"></script>
            <script src="./js/pdfy.js"></script>
            <script src="pages.js"></script>
</body>
</html>