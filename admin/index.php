<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
    <title>Pdfy-admin</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/custom.css">
</head>
<body class="container-fluid admin-body"> 
    <div class="row">
        <div class="col-sm-3 admin-sidebar"><!--This is for the side-bar -->
            <div class="admin-sidebar-content">
                <div class="logo">
                    <h2><a class="admin-site-name">pdfy<i class="fa fa-certificate" style="font-size: color: #fff"></i></a></h2>
                </div>

                <ul class="nav nav-pills nav-stacked admin-nav">
                    <li class=""><a href="dashboard.php" target="content-page"><i class="fa fa-th-large"></i>&nbsp;&nbsp;DashBoard</a></li>
                    <li class=""><a href="create.php" target="content-page"><i class="fa fa-plus"></i>&nbsp;&nbsp;Create</a></li>
                    <li class=""><a href="upload.php" target="content-page"><i class="fa fa-chevron-circle-up"></i>&nbsp;&nbsp;Uploads</a></li>
                    <li class=""><a href="documents.php" target="content-page"><i class="fa fa-clipboard"></i>&nbsp;&nbsp;Documents</a></li>
                    <li class=""><a href="notifications.php" target="content-page"><i class="fa fa-envelope"></i>&nbsp;&nbsp;Notifications</a></li>
                    <li class=""><a href="log-out.php" target="content-page"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Log-Out</a></li>
                    <br><br><br><br><br><br><br><br><br><br><br>
                 

                </ul>
            </div>
            

        </div> 
        <!-- this is for the main body -->
        <iframe name="content-page" frameborder="0" class="col-sm-9" height="650"></iframe>

    </div>








    <script src="../js/vue.js"></script>
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    
</body>
</html>