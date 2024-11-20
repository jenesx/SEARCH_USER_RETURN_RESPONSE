<?php  

require_once 'dbConfig.php';

function getAllApplicants($pdo) {
	$sql = "SELECT * FROM search_applicants_data 
			ORDER BY first_name ASC";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

function getApplicantsByID($pdo, $applicant_id) {
	$sql = "SELECT * from search_applicants_data WHERE applicant_id = ?";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$applicant_id]);

	if ($executeQuery) {
		return $stmt->fetch();
	}
}

function searchForApplicant($pdo, $searchQuery) {
	
	$sql = "SELECT * FROM search_applicants_data WHERE 
			CONCAT(first_name,last_name,email,gender,
				address,nationality,skills,date_added) 
			LIKE ?";

	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute(["%".$searchQuery."%"]);
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}



function insertNewApplicant($pdo, $first_name, $last_name, $email, 
	$gender, $address, $nationality, $skills) {

	$sql = "INSERT INTO search_applicants_data
			(
				first_name,
				last_name,
				email,
				gender,
				address,
				nationality,
				skills )
			VALUES (?,?,?,?,?,?,?)
			";

	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$first_name, $last_name, $email, $gender, 
		$address, $nationality, $skills]);

	if ($executeQuery) {
		return true;
	}

}

function editApplicant($pdo, $first_name, $last_name, $email, $gender, 
	$address, $nationality, $skills, $applicant_id) {

	$sql = "UPDATE search_applicants_data
				SET first_name = ?,
					last_name = ?,
					email = ?,
					gender = ?,
					address = ?,
					nationality = ?,
					skills = ?
				WHERE applicant_id = ? 
			";

	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$first_name, $last_name, $email, $gender, 
		$address, $nationality, $skills, $applicant_id]);

	if ($executeQuery) {
		return true;
	}

}


function deleteApplicant($pdo, $applicant_id) {
	$sql = "DELETE FROM search_applicants_data
			WHERE applicant_id = ?";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute([$applicant_id]);

	if ($executeQuery) {
		return true;
	}
}


?>