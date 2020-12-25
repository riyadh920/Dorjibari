<?php 

$conn = mysqli_connect("localhost", 'root', '', 'dorjibari');

function InsertUser(){
	if(isset($_POST['signup_submit'])){
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$password2 = $_POST['password2'];
		if($password2 !== $password){
			echo ("<p style='color: red; font-size: .6rem;  '>Password Doesn't Match..</p>");
			return;
		}

		$sql = "INSERT INTO _tbl_user(username, password, email) VALUES ('$username', '$password', '$email')";
		$result = $GLOBALS['conn']->query($sql);
		if($result){
			echo('<script> location.replace("productpage.html"); </script>');
		}
	}
}


function Userlogin(){
	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$pass = $_POST['pass'];
		
		$sql = "SELECT * FROM	_tbl_user WHERE username='$username' AND password='$pass'";
		$result = $GLOBALS['conn']->query($sql);
		if(mysqli_num_rows($result) > 0){
			echo('<script> location.replace("productpage.html"); </script>');
		}else echo "<p style='font-size:.8rem; color: red;'>Username & password Inncorrect </p>";
	}
}


function bodysize(){
	if(isset($_POST['orderSize'])){
		 $collar = $_POST['collar'];
		 $length = $_POST['length'];
		 $sleeve = $_POST['sleeve'];
		 $shoulders = $_POST['shoulders'];
		 $chest = $_POST['chest'];
		 $tummy = $_POST['tummy'];
		 $hips = $_POST['hips'];
		 $cuff = $_POST['cuff'];

		 $sql = "INSERT INTO bodysize (collar, length, sleeve, shoulders, chest, tummy, hips, cuff) VALUES ('$collar', '$length', '$sleeve', '$shoulders', '$chest', '$tummy', '$hips', '$cuff')";
		 $result =  mysqli_query( $GLOBALS['conn'], $sql);
		 if($result){
		 	echo('<script> location.replace("bodysize.php"); </script>');
		 }

	}
}

?>