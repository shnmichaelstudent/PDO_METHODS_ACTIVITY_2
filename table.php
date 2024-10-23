<?php
// Include the database configuration
include 'dbconfig.php';

// Fetch all patients
$stmt = $pdo->query("SELECT * FROM Patients");
$patients = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<table border='1'>";
echo "<tr><th>PatientID</th><th>Name</th><th>Age</th><th>Gender</th><th>Contact Info</th></tr>";

foreach ($patients as $patient) {
    echo "<tr>";
    echo "<td>" . $patient['PatientID'] . "</td>";
    echo "<td>" . $patient['Name'] . "</td>";
    echo "<td>" . $patient['Age'] . "</td>";
    echo "<td>" . $patient['Gender'] . "</td>";
    echo "<td>" . $patient['ContactInfo'] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
