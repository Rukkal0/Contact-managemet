<?php
require('data_base.php');

if (isset($_POST['update'])) {
  $Student_id= $_POST['id'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $phone_number = $_POST['phone_number'];
  $Address = $_POST['Address'];
  $note = $_POST['Note'];
 
 $query="UPDATE information SET Name=?,Email=?,Number=?,Address=?,Note=? WHERE ID=?";
 $stmt=$conn->prepare($query);
 $stmt->bind_param('sssssi',$username,$email,$phone_number,$Address,$note,$Student_id);
 if($stmt->execute()){
    header('Location:../code/table.php');
 }
 else{
 echo  $stmt->error;
}
$stmt->close();
}
$conn->close();
?>