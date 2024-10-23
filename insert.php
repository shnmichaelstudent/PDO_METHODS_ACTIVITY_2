<?php
// Include the database configuration
include 'dbconfig.php';

// Prepare an SQL statement to insert a new patient
$sql = "INSERT INTO Patients (Name, Age, Gender, ContactInfo) VALUES (?, ?, ?, ?)";
$stmt = $pdo->prepare($sql);

// Execute the query with sample data
$stmt->execute(['Mark Taylor', 50, 'Male', '555-123-4567']);
$stmt->execute(['Sarah Johnson', 28, 'Female', '555-987-6543']);
$stmt->execute(['Michael Brown', 36, 'Male', '555-567-2345']);
$stmt->execute(['Emily Davis', 45, 'Female', '555-876-5432']);
$stmt->execute(['David Wilson', 60, 'Male', '555-345-6789']);
$stmt->execute(['Jessica Lee', 32, 'Female', '555-234-5678']);
$stmt->execute(['Thomas Anderson', 27, 'Male', '555-876-9876']);
$stmt->execute(['Anna Clark', 41, 'Female', '555-654-3210']);
$stmt->execute(['Robert Martinez', 55, 'Male', '555-432-9876']);
$stmt->execute(['Laura King', 34, 'Female', '555-765-4321']);


echo "New patient added successfully!";
?>
