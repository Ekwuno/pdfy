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
<body>
<?php
include_once "../config/functions.php";

if (isset($_POST['upload_btn'])) {
	
	$fac = $_POST['fac'];
	
	$dept = strtolower($_POST['dept']);
	
	$level = $_POST['level'];
	
	$course = secure($_POST['course_code']);
	
	$file = basename($_FILES['doc']['name']);
	
	//m	ake sure nothing is empty
	if (!empty($fac) && !empty($dept) && !empty($level) && !empty($course) && !empty($file)) {
		
		$con = connekt();
		//c		reating connection to db pdfy
		$slct_sql = "select filename from `{$dept}` ";
		
		$slct_query = mysqli_query($con,$slct_sql);
		
		$alredy_exist;
		// 		checking whether file exists b4
		while ($filename = mysqli_fetch_assoc($slct_query)) {
			
			if ($filename['filename'] == $file) {
				
				$alredy_exist = true;
				
			}
			else{
				
				$alredy_exist = false;
				
			}
			
		}
		
		if ($alredy_exist == false) {
			
			//c			hecking file type
			if ($_FILES['doc']['type'] == "application/pdf") {
				
				$path = "uploads/".$file;
				
				//m				oving file to upload folder
				if (move_uploaded_file($_FILES['doc']['tmp_name'],$path)) {
					
					$dated = date('Y-m-d H:i:s');
					
					$insert_sql = "INSERT INTO `{$dept}` (`filename`, `level`, `date_added`) VALUES ('{$file}','{$level}','{$dated}')";
					
					$insert_query = mysqli_query($con,$insert_sql);
					
					if ($insert_query > 0) {
						
						echo "<h2 class='alert alert-success'> Upload Successful!!</h2>";
						
					}
					else{
						
						echo "<h2 class='alert alert-danger'> Upload not Successful!</h2>";
						
					}
					
				}
				
			}
			else{
				
				echo "<h2 class='alert alert-warning'>Upload pdf files only!!!</h2>";
				
			}
			
		}
		else{
			
			echo "<h2 class='alert alert-info'>File Already Exists!</h2>";
			
		}
		
	}
	
}

?>
            <script src="./js/jquery-3.2.1.min.js"></script>
            <script src="./js/bootstrap.min.js"></script>
            <script src="./js/pdfy.js"></script>
            <script src="pages.js"></script>
</body>
</html>

