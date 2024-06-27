<?php
require('data_base.php');

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $phone_number = $_POST['phone_number'];
  $Address = $_POST['Address'];
  $note = $_POST['Note'];


  $sql = 'INSERT INTO information (Name, Email, Number, Address, Note) VALUES (?, ?, ?, ?, ?)';
  $stmt = $conn->prepare($sql);


  $stmt->bind_param('sssss', $username, $email, $phone_number, $Address, $note);


  if ($stmt->execute()) {
    header('Location: ../code/table.php');
    exit();
  } else {
    echo "Error: " . $stmt->error;
  }

  $stmt->close();
}

$conn->close();
