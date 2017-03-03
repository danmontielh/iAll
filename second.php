<?php 
$lop = '';
if (isset($_POST['name'])  ) {
	$name = $_POST['name'];


if (!empty($name)) {
	$name = trim($name);
	$name = filter_var($name, FILTER_SANITIZE_STRING);
	session_start();
	$_SESSION['nombre'] = $name;
	header('location: http://localhost/iall/user.php');
} else {
	echo "error";
} 

} 

?>