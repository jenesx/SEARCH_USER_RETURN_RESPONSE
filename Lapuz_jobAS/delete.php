<?php require_once 'models.php'; ?>
<?php require_once 'dbconfig.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DELETE</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<h1>Do you really like to remove this user?</h1>
	<?php $getApplicantsByID = getApplicantsByID($pdo, $_GET['applicant_id']); ?>
	<div class="container" style="border-style: solid; border-color: red; background-color: #ffcbd1;height: 500px;">
		<h2>First Name: <?php echo $getApplicantsByID['first_name']; ?></h2>
		<h2>Last Name: <?php echo $getApplicantsByID['last_name']; ?></h2>
		<h2>Email: <?php echo $getApplicantsByID['email']; ?></h2>
		<h2>Gender: <?php echo $getApplicantsByID['gender']; ?></h2>
		<h2>Address: <?php echo $getApplicantsByID['address']; ?></h2>
		<h2>Nationality: <?php echo $getApplicantsByID['nationality']; ?></h2>
		<h2>Skills: <?php echo $getApplicantsByID['skills']; ?></h2>

		<div class="deleteBtn" style="float: right; margin-right: 10px;">
			<form action="handleforms.php?applicant_id=<?php echo $_GET['applicant_id']; ?>" method="POST">
				<input type="submit" name="deleteApplicantBtn" value="Delete" style="background-color: #f69697; border-style: solid;">
			</form>			
		</div>	

	</div>
</body>
</html>