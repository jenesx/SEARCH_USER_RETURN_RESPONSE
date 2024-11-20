<?php  

require_once 'dbconfig.php';
require_once 'models.php';


if (isset($_POST['insertApplicantBtn'])) {
	$insertUser = insertNewApplicant($pdo, $_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['gender'], $_POST['address'], $_POST['nationality'], $_POST['skills']);

	if ($insertUser) {
		$_SESSION['message'] = "Successfully Inserted!";
		header("Location: index.php");
	}
}


if (isset($_POST['editApplicantBtn'])) {
	$editUser = editApplicant($pdo,$_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['gender'], $_POST['address'], $_POST['nationality'], $_POST['skills'], $_GET['applicant_id']);

	if ($editUser) {
		$_SESSION['message'] = "Successfully Edited!";
		header("Location: index.php");
	}
}

if (isset($_POST['deleteApplicantBtn'])) {
	$deleteUser = deleteApplicant($pdo,$_GET['applicant_id']);

	if ($deleteUser) {
		$_SESSION['message'] = "Successfully Deleted!";
		header("Location: index.php");
	}
}

?>