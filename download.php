<?php
include_once "config/functions.php";
if (isset($_GET['file']) && basename($_GET['file']) == $_GET['file']) {
  $con = connekt();
  $dept = $_GET['dept'];
  $filename = $_GET['file'];
  $get_sql = "select `no_of_downloads` from `{$dept}` where filename = '{$filename}'";
  $get_query = mysqli_query($con,$get_sql);
  $num = mysqli_fetch_assoc($get_query);
  $num['no_of_downloads'] += 1;
  $put_sql = "update `{$dept}` set `no_of_downloads` = '{$num['no_of_downloads']}' where `filename` = '{$filename}'";
  $put_query = mysqli_query($con,$put_sql);
//  $filename = $_GET['file'];
 $path = "admin/uploads/".$filename;
 var_dump($path);
 $err = "<p>Sorry, the file you are requesting is unavailable.</p>";
 if(file_exists($path) && is_readable($path)){
   $size = filesize($path);
   header('Content-Type: application/pdf');
   header('Content-Length: '.$size);
   header('Content-Disposition: attachment; filename='.$filename);
   header('Content-Transfer-Encoding: binary');
   $file = @fopen($path, 'rb');
   if ($file) {
     fpassthru($file);
      exit;
    }
  }else{
    echo $err;
  }
}

?>