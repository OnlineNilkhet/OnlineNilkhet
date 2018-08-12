<?php  

session_start ();

if (isset($_POST['submit'])) {

	include 'dbh.inc.php';

$uid =mysql_real_escape_string($conn, $POST_['uid']);
$pwd =mysql_real_escape_string($conn, $POST_['pwd']);



if (empty($uid) || empty($pwd)) {
	header("location: ../index.php?login=empty");
	exit();
    } else {
	    $sql = "SELECT * FROM users WHERE user_uid='$uid'";
	    $result = mysql_query($conn,$sql);
	    $resultChek = mysqli_num_rows($result);
	    if($resultCheck < 1) {
	 	   header("location: ../index.php?login=error");
	       exit();
	    } else {
		    if ($row = mysqli_fetch_assoc($result)) {
		    	
		    	$hashedPwdCheck = password_verify($pwd,$row['user_pwd']);
		    	if ($hashedPwdCheck == false){
		    		header("location: ../index.php?login=error");
		    		exit ();
		    } else if ($hashedPwdCheck == true) {
		    	// log in the user here
		    	$_SESSION['u_id'] = $row ['user_uid'];
		    	$_SESSION['u_first'] = $row ['user_first'];
		    	$_SESSION['u_last'] = $row ['user_last'];
		    	$_SESSION['u_email'] = $row ['user_email'];
		    	$_SESSION['u_id'] = $row ['user_uid'];
		    	header("location: ../index.php?login=success");
		    	exit ();

		    }
        }
    }
} 
} else { 
	header("location: ../index.php?login=error");
	exit();
}







?>