<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oah";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//FOR SAVING DATA OF MINI ORDER DATABASE
if(isset($_POST['minisubmit'])){
	
	$email = $_POST['email'];
  	$subject = $_POST['subject'];
  	$date = $_POST['datepicker'];
	$page_count = $_POST['pageNo'];
	
   $query = " SELECT id FROM `mini_form_data` ORDER BY timestamp DESC ";
   $result = $conn->query($query);
   if(!$result){
	   echo 'Could not run query'.mysql_error();
	   exit;
   }
   
   if ($result->num_rows > 0) {
	   $row = mysqli_fetch_array($result);
	   $temp = $row['id'];
	   $prev_count = substr($temp, 15, 1);
      $curr_count = $prev_count + 1;
	   $constant = 'TMP';
	   $tmp1     = $date;
	   $tmp2     = date("d-m-Y", strtotime($tmp1)); 
	   $datef     = str_replace("-",'', $tmp2);
	   $tmp3     = substr($subject, 0, 4);
	   $sub      = strtoupper($tmp3);
	   $id = $constant.$datef.$sub.$curr_count;
	      
   }
   else {
	   $constant = 'TMP';
	   $tmp1     = $date;
	   $tmp2     = date("d-m-Y", strtotime($tmp1)); 
	   $datef     = str_replace("-",'', $tmp2);
	   $tmp3     = substr($subject, 0, 4);
	   $sub      = strtoupper($tmp3);
      $curr_count = 1;
      $id = $constant.$datef.$sub.$curr_count;
   }
   
   $sql = "INSERT INTO `mini_form_data`(`id`,`email`,`subject`,`date`,`page_count`) VALUES ('$id','$email','$subject','$date','$page_count');";
   
	if ($conn->query($sql) === TRUE) {
		header('Location: login.php');
	} 
	else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}


//FOR SAVING CALL BACK REQUEST OF USER INTO DATABASE
if(isset($_POST['callsubmit'])){
	
	$phone = $_POST['call_phone'];
	$type = $_POST['call_type'];
	$reason = $_POST['call_reason'];
	$time = $_POST['call_time'];
	
	$query = "SELECT id FROM `callback_form_data` ORDER BY timestamp DESC ";
   $result = $conn->query($query);
   if(!$result){
	   echo 'Could not run query'.mysql_error();
	   exit;
   }
	
	if ($result->num_rows > 0) {
	   $row = mysqli_fetch_array($result);
	   $temp = $row['id'];
	   $prev_count = substr($temp, 10, 1);
      $curr_count = $prev_count + 1;
	   $constant = 'TMP';
	   $mob      = substr($phone, 0 ,4);
	   $typ      = substr($type, 0 ,3);
	   $id = $constant.$mob.$typ.$curr_count;
	      
   }
   else {
	   $constant = 'TMP';
	   $mob      = substr($phone, 0 ,4);
	   $typ      = substr($type, 0 ,3);
      $curr_count = 1;
      $id = $constant.$mob.$typ.$curr_count;
   }
	
   $sql = "INSERT INTO `callback_form_data` (`id`,`phone`,`order_type`,`reason`,`contact_time`) VALUES ('$id','$phone','$type','$reason','$time');";

	if ($conn->query($sql) === TRUE) {
	   $message = "We will call you later ! ";
       echo "<script type='text/javascript'>alert('$message');</script>";
	   echo "<script>setTimeout(\"location.href = 'index.php';\",50);</script>";   
	} 
	else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

//FOR REGISTRAION OF NEW USER
if(isset($_POST['registersubmit'])){
	
	$name = $_POST['reg_name'];
	$email = $_POST['reg_email'];
	$phone = $_POST['reg_phone'];
	$education = $_POST['reg_education'];
	$password = $_POST['reg_password'];
   
   $sql = "INSERT INTO `register_form_data` (`name`,`email`,`phone`,`education`,`password`) 
                     VALUES ('$name','$email','$phone','$education','$password');";

	if ($conn->query($sql) === TRUE) {
		header("location:login.php");    
	} 
	else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

//UPDATE USERPROFILE INTO DATABASE
if(isset($_POST['updateprofile'])){
	
    $name = $_POST['pname'];
    $phone = $_POST['pphone'];
    $validate = $_POST['pvalidate'];
   
    $sql = "UPDATE `register_form_data` SET `name` = '$name', `phone` = '$phone' WHERE email = '$validate';";
    $result = $conn->query($sql);
   
    if(!$result){
		die ('SQL Error: '.mysql_error($conn));
	}
    
	$message = "Data Updated Successfully ! ";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script>setTimeout(\"location.href = 'userpage.php';\",50);</script>";

}


//UPDATE USERPASSWORD INTO DATABASE
if(isset($_POST['updatepassword'])){
	
    $old_pass = $_POST['old_pass'];
    $new_pass = $_POST['new_pass'];
    $conf_pass = $_POST['conf_pass'];
    $passvalidate = $_POST['passvalidate'];
   
    $sql = "UPDATE `register_form_data` SET `password` = '$new_pass' WHERE email = '$passvalidate';";
    $result = $conn->query($sql);
   
    if(!$result){
		die ('SQL Error: '.mysql_error($conn));
	}
    
	$message = "Password Updated Successfully ! ";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script>setTimeout(\"location.href = 'userpage.php';\",50);</script>";

}

//FOR LOGGING INTO USERPAGE
if(isset($_POST['signsubmit'])){
	
   $email    = $_POST['signuserid'];
   $password = $_POST['signpassword'];
     
	   $sql = "SELECT email, password FROM `register_form_data` WHERE email='$email' AND password = '$password';";
	   $result = $conn->query($sql);
	   $row = mysqli_fetch_array($result);
       
	   if ($result->num_rows > 0) {
			if(isset($_POST['remember'])){
				   setcookie('email', $email, time()+60*60*7);
				   setcookie('pass', $password, time()+60*60*7);
			}
			session_start();
			$_SESSION['email'] = $email;	
			
			
         if($row['email'] == 'admin@gmail.com' && $row['password'] == 'admin'){
				header("location:admindashboard.php"); 
			}
			else{
			    header("location:userpage.php"); 
			}			
	   }
	   else{
		  //$_SESSION['invalid'] = 'Yours user name or password are wrong!!';
		  //header("location:login.php"); 
		  $message = "Invalid Username or Password ! ";
		  echo "<script type='text/javascript'>alert('$message');</script>";
		  echo "<script>setTimeout(\"location.href = 'login.php';\",50);</script>";
		} 
}

//INSERT DATA OF ORDER CREATION INTO DATABASE
if(isset($_POST['ordersubmit'])){
	
  //VARIABLE DECLARATION	
	$name = $_POST['ord_user'];
	$date = $_POST['datepicker'];
	$pagecount = $_POST['pageNo'];
	$phone = $_POST['ord_phone'];
	$education = $_POST['ord_education'];
	$email = $_POST['ord_email'];
	$style = $_POST['ord_style'];
	$reason = $_POST['ord_reason'];
	$ovalidate = $_POST['ovalidate'];
		
  //FILE UPLOADING	
  if (isset($_FILES["file"]["name"])) {
    $filename = $_FILES["file"]["name"];
    $tmp_name = $_FILES['file']['tmp_name'];
    $error = $_FILES['file']['error'];

    if (!empty($filename)) {
        $location = 'uploads/';
        if  (move_uploaded_file($tmp_name, $location.$filename)){
        }
    }  
  	else{
       $message = "Please upload correct file!";
       echo "<script type='text/javascript'>alert('$message');</script>"; 
    }
}
	
   //UNIQUE ID CREATION	
	
	$clnt_query = "SELECT id FROM `register_form_data` WHERE email = '$ovalidate';";
   $clnt_result = $conn->query($clnt_query);
   
   $ope_query = "SELECT ope_no FROM `order_form_data` WHERE email = '$ovalidate' ORDER BY timestamp DESC ;";
   $ope_result = $conn->query($ope_query);
   
   $seq_query = "SELECT seq_no FROM `order_form_data` ORDER BY timestamp DESC ;";
   $seq_result = $conn->query($seq_query);
   
   
   if(!$clnt_result OR !$ope_result OR !$seq_result){
	   echo 'Could not run query'.mysql_error();
	   exit;
   }
   
   $clnt_row = mysqli_fetch_array($clnt_result);
   $ope_row = mysqli_fetch_array($ope_result);
   $seq_row = mysqli_fetch_array($seq_result);
   
   if ($clnt_result->num_rows > 0 && $ope_result->num_rows > 0 && $seq_result->num_rows > 0) {
	   $tmp1 = $date;
	   $tmp2 = date("d-m-Y", strtotime($tmp1)); 
	   $datef = str_replace("-",'', $tmp2);
	   $clnt_id = $clnt_row['id'];
	   $temp5 = $ope_row['ope_no'];
	   $ope_id = $temp5 + 1;
	   $temp4 = $seq_row['seq_no'];
	   $seq_id = $temp4 + 1;
	   $id = $datef.$clnt_id.$ope_id.$seq_id; 
   }
   elseif($clnt_result->num_rows > 0 && $seq_result->num_rows > 0){
	   $tmp1 = $date;
	   $tmp2 = date("d-m-Y", strtotime($tmp1)); 
	   $datef = str_replace("-",'', $tmp2);
	   $clnt_id = $clnt_row['id'];
	   $ope_id = 1;
	   $temp4 = $seq_row['seq_no'];
	   $seq_id = $temp4 + 1;
	   $id = $datef.$clnt_id.$ope_id.$seq_id;
   }
   else{
	   $tmp1 = $date;
	   $tmp2 = date("d-m-Y", strtotime($tmp1)); 
	   $datef = str_replace("-",'', $tmp2);
	   $clnt_id = $clnt_row['id'];
	   $ope_id = 1;
	   $seq_id = 1;
	   $id = $datef.$clnt_id.$ope_id.$seq_id;
   }
   
   if($ope_result->num_rows > 0){
		$temp3 = $ope_row['ope_no']; 
      $ope_no = $temp3 + 1;
   }
   else{
		$ope_no = 1;
   }
   
   $sql = "INSERT INTO `order_form_data` (`orderid`,`ope_no`,`seq_no`,`name`,`phone`,`deadline`,`study_level`,`page_count`,`email`,`style`,`description`,`filepath`) 
                           VALUES ('$id','$ope_no','$seq_id','$name','$phone','$date','$education','$pagecount','$email','$style','$reason','$filename');";

	if ($conn->query($sql) === TRUE) {
		$message = "Order is successfully Created";
      echo "<script type='text/javascript'>alert('$message');</script>";   
	   echo "<script>setTimeout(\"location.href = 'userpage.php';\",50);</script>";
	} 
	else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}


//INSERT SUBSCRIBER INFO INTO DATABASE
if(isset($_POST['subscribesubmit'])){
	
	$email = $_POST['sub_email'];

   $sql = "INSERT INTO `subscriber_list`(`email`) VALUES ('$email');";
   
	if ($conn->query($sql) === TRUE) {
		$message = "You are subscribed for our updates!";
      echo "<script type='text/javascript'>alert('$message');</script>";   
	   echo "<script>setTimeout(\"location.href = 'index.php';\",50);</script>";
	} 
	else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}


//CREATE QUERY TO DB AND PUT RECEIVED DATA INTO ASSOCIATIVE ARRAY
if (isset($_REQUEST['query'])) {
   $keyword = strval($_POST['query']);
	$search_param = "{$keyword}%";
	
	$sql = $conn->prepare("SELECT * FROM `subject_list` WHERE subject LIKE ?");
	$sql->bind_param("s",$search_param);			
	$sql->execute();
	$result = $sql->get_result();
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
		$subjectResult[] = $row["subject"];
		}
		echo json_encode($subjectResult);
	}
}


//TO CHECK IF USER ALREADY EXIST
if(isset($_POST['user_email']))
{
 $email=$_POST['user_email'];

 $checkdata = " SELECT email FROM `register_form_data` WHERE email = '$email' ";

 $result = $conn->query($checkdata);
 
 if ($result->num_rows > 0)
 {
  echo "Email Already Exist";
 }
 else
 {
  echo "";
 }
 exit();
}

//TO CHECK IF PHONE NUMBER CORRECT OR NOT
if(isset($_POST['user_phone']))
{
 $phone=$_POST['user_phone'];
 
 $result = preg_match('/^[0-9]{10}+$/', $phone);

 if (!$result)
 {
  echo "Invalid Phone No. ";
 }
 else
 {
  echo "";
 }
 exit();
}

//TO ADD REVIEW DATA OF USER
if(isset($_POST['reviewsubmit'])){
	
  //VARIABLE DECLARATION	
	$rev_header = $_POST['rev_header'];
	$rev_scount = $_POST['rev_scount'];
	$rev_pcount = $_POST['rev_pcount'];
	$rev_dcount = $_POST['rev_dcount'];
	$rev_review = $_POST['rev_review'];
	$rev_userid = $_POST['rev_userid'];
	$rev_country = $_POST['rev_country'];
	
  //FILE UPLOADING	
  if (isset($_FILES["file"]["name"])){
    $filename = $_FILES["file"]["name"];
    $tmp_name = $_FILES['file']['tmp_name'];
    $error = $_FILES['file']['error'];

    if (!empty($filename)) {
        $location = 'Image_Source/';
        if  (move_uploaded_file($tmp_name, $location.$filename)){
        }
      }  
		else{
		   $message = "Please upload correct file!";
		   echo "<script type='text/javascript'>alert('$message');</script>"; 
		}
	}
	
   $sql = "INSERT INTO `user_review_data` (`header`,`starcount`,`pagecount`,`daycount`,`review`,`userid`,`country`,`image_path`) 
                             VALUES ('$rev_header','$rev_scount','$rev_pcount','$rev_dcount','$rev_review','$rev_userid','$rev_country','$filename');";

	if ($conn->query($sql) === TRUE) {
		$message = "Review is Added";
      echo "<script type='text/javascript'>alert('$message');</script>";   
	  // echo "<script>setTimeout(\"location.href = 'admindashboard.php';\",50);</script>";
	} 
	else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

$conn->close();
?>
