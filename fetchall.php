<?php
// Include the database configuration
include 'dbconfig.php';

// Fetch all patients from the Patients table
$stmt = $pdo->query("SELECT * FROM Patients");
$patients = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Display the results using print_r() inside <pre> for better readability
echo "<pre>";
print_r($patients);
echo "</pre>";
?>
