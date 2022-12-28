<?php
session_start();
include "connection.php";
include "encrypt.php";

if(isset($_POST['uname']) && isset($_POST['psw'])) {
	function validate($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$uname = validate($_POST['uname']);
	$password = validate($_POST['psw']);
	if(empty($uname)) {
		echo "Należy podać nazwę użytkownika";
	} else if(empty($password)) {
		echo "Należy wprowadzić hasło";
	} else {
		$sql = "SELECT * FROM login WHERE username='$uname' AND password='$password'";
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			if($row['username'] === $uname && $row['password'] === $password) {
				echo "Logged in!";
				$_SESSION['username'] = $row['username'];
				$_SESSION['type'] = $row['type'];
				
				$key = "1234567891234567"; // must be 16, 24 or 32 length
				$crypt = new Encryption($key);
				$encrypted_string = $crypt->encrypt('this is a test');
				$decrypted_string = $crypt->decrypt($encrypted_string);
				
				setcookie("Encrypted",$encrypted_string);
				setcookie("Decrypted",$decrypted_string);
				
				if (isset($_SERVER["HTTP_REFERER"])) {
					header("Location: " . $_SERVER["HTTP_REFERER"]);
				}
			} else {
				echo "Podano złą nazwę użytkownika lub hasło";
			}
		} else {
			echo "Podano złą nazwę użytkownika lub hasło";
		}
	}
} else {
	echo "Należy podać nazwę użytkownika i hasło";
}
/*

*/

?>