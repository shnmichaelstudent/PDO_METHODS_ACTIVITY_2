<?php
// Include the database configuration
include 'dbconfig.php';

// Prepare an SQL statement to update a patient's contact info
$sql = "UPDATE Patients SET ContactInfo = ? WHERE PatientID = ?";
$stmt = $pdo->prepare($sql);

// Execute the query with updated contact info
$stmt->execute(['999-888-7777', 2]);
$stmt->execute(['555-123-4567', 3]);
$stmt->execute(['555-987-6543', 4]);
$stmt->execute(['555-567-2345', 5]);
$stmt->execute(['555-876-5432', 6]);
$stmt->execute(['555-345-6789', 7]);
$stmt->execute(['555-234-5678', 2]);
$stmt->execute(['555-876-9876', 1]);
$stmt->execute(['555-654-3210', 4]);
$stmt->execute(['555-432-9876', 3]);
$stmt->execute(['555-765-4321', 2]);
echo "Patient updated successfully!";
?>
