<?php require_once 'handleforms.php'; ?>
<?php require_once 'models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EDIT</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<?php $getApplicantsByID = getApplicantsByID($pdo, $_GET['applicant_id']); ?>
	<h1>EDIT THE APPLICANT</h1>
	<form action="handleforms.php?applicant_id=<?php echo $_GET['applicant_id']; ?>" method="POST">
		<p>
			<label for="firstName">First Name</label> 
			<input type="text" name="first_name" value="<?php echo $getApplicantsByID['first_name']; ?>">
		</p>
		<p>
			<label for="firstName">Last Name</label> 
			<input type="text" name="last_name" value="<?php echo $getApplicantsByID['last_name']; ?>">
		</p>
		<p>
			<label for="firstName">Email</label> 
			<input type="text" name="email" value="<?php echo $getApplicantsByID['email']; ?>">
		</p>
		<p>
			<label for="firstName">Gender</label> 
			<input type="text" name="gender" value="<?php echo $getApplicantsByID['gender']; ?>">
		</p>
		<p>
			<label for="firstName">Address</label> 
			<input type="text" name="address" value="<?php echo $getApplicantsByID['address']; ?>">
		</p>
		<p>
			<label for="firstName">Nationality</label> 
			<input type="text" name="nationality" value="<?php echo $getApplicantsByID['nationality']; ?>">
		</p>
		<p>
			<label for="firstName">Skills</label> 
			<input type="text" name="skills" value="<?php echo $getApplicantsByID['skills']; ?>">
			<input type="submit" value="Save" name="editApplicantBtn">
		</p>
	</form>
</body>
</html>