<!DOCTYPE html>
<html lang="en">
    <head>
        <title>pdfy-admin | upload</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/custom.css">
    </head>
    <body class="container-fluid">
        <div id="upload">
            <header class="row admin-header">
                <div class="col-sm-9">
                    <h1 class="admin-menu-headers">Upload</h1>
                </div>
                
            </header>

            <section class="row">
                <form role="form" method="post" action="uploadProcess.php" enctype="multipart/form-data" class="col-sm-9 upload-page">

                        <div class="form-group col-sm-8">
                            <select class="form-control" id="faculty" name="fac">
                            <option value="0">-- select faculty --</option>
                            </select>
                        </div>

                        <div class="form-group col-sm-8">
                            <select class="form-control" name="dept" id="dep">
                            <option value="0">-- select department --</option>
                            </select>
                        </div>

                        <div class="form-group col-sm-8">
                            <select class="form-control" id="sel1" name="level">
                                    <option value="0" >-- select level --</option>
                            </select>
                        </div>

                        <div class="form-group col-sm-8">
                            <input class="form-control" type="text" name="course_code" placeholder="course code eg: ECE334">
                        </div>

                        <div class="form-group col-sm-8">
                            <input  type="file" name="doc" class="form-control" title="select file for upload">
                        </div>

                        <div class="form-group col-sm-8">
                            <button class="btn btn-success" name="upload_btn"><i class="fa fa-check-square-o"></i>&nbsp; Upload</button>
                        </div>

   
                </form>
                
            </section>

        </div>
    

            <script src="../js/vue.js"></script>
            <script src="../js/jquery-3.2.1.min.js"></script>
            <script src="../js/bootstrap.min.js"></script>
            <script src="../js/pdfy.js"></script>
    </body>
</html>