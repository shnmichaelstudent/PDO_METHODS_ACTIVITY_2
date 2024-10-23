<?php
// Include the database configuration
include 'dbconfig.php';

// Fetch all patients
$stmt = $pdo->query("SELECT * FROM Patients");
$patients = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management System</title>
</head>
<body>
    <h1>List of Patients</h1>
    <table border="1">
        <tr>
            <th>Patient ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Contact Info</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($patients as $patient): ?>
        <tr>
            <td><?php echo $patient['PatientID']; ?></td>
            <td><?php echo $patient['Name']; ?></td>
            <td><?php echo $patient['Age']; ?></td>
            <td><?php echo $patient['Gender']; ?></td>
            <td><?php echo $patient['ContactInfo']; ?></td>
            <td><a href="delete.php?id=<?php echo $patient['PatientID']; ?>">Delete</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
