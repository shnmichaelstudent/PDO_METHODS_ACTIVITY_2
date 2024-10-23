<?php
// Include the database configuration
include 'dbconfig.php';

// Check if the ID is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare the SQL delete statement
    $stmt = $pdo->prepare("DELETE FROM Patients WHERE PatientID = ?");
    $stmt->execute([$id]);
    

    // Redirect back to the index page after deletion
    header('Location: index.php');
    exit;
} else {
    echo "No patient ID provided.";
}
?>
