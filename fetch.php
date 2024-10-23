<?php
// Include the database configuration
include 'dbconfig.php';

// Fetch a single patient with PatientID = 1
$stmt = $pdo->query("SELECT * FROM Patients WHERE PatientID = 1");
$patient = $stmt->fetch(PDO::FETCH_ASSOC);

// Display the result using print_r() inside <pre>
echo "<pre>";
print_r($patient);
echo "</pre>";
?>
