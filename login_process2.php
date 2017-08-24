
<?php session_start(); ?>
<?php
include 'Connection.php';
if(isset($_POST['Login'])){
	$username = $_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$fetchquery = " SELECT * FROM users WHERE name = '$username' and email = '$email'"; //table name
	
	$result = $conn->query($fetchquery);
	
     

	$user = mysqli_fetch_array($result);
	$name=$user['name'];
	$emailid=$user['email'];
	$role = $user['role'];
	$salt = $user['salt'];
            $encrypted_password = $user['encrypted_password'];
            $hash = checkhashSSHA($salt, $password);
            
	//$squery = "SELECT * FROM users WHERE  name = '$username'and email='$email'and encrypted_password='$encrypted_password' ";
	//$resource = $conn->query($squery);
	//$user = mysql_fetch_array($resource);
	
	//$password=$hash;
	//$type=$data['type'];
	
	//$role=$data['role'];
	
	if($email==$emailid && $encrypted_password==$hash){
	   session_start();
		$_SESSION['name']=$name;
		
		if($role=='1'){
           header("Location:" . "index1.php");
		//echo $emailid . $hash;
		}
		else{
			header("Location:" . "bootstrap.php");
			
		}
			
		
	} 
	else{
		 $_SESSION["NEW_USER"] = "PLEASE,SIGN UP FIRST";
		 //echo "please signup first";
	
		header("Location:login.php");
		//header("Location:"."form.php?message='Please sign up first'");
	}

	}

     function checkhashSSHA($salt, $password) {
 
        $hash = base64_encode(sha1($password . $salt, true) . $salt);
 
        return $hash;
    }

?>
