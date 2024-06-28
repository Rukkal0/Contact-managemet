
<?php
include('../config/data_base.php');
if (isset($_GET['id'])) 
{
  $id =  $_GET['id'];
  $query = "SELECT * FROM information WHERE ID=?";
 $stmt=$conn->prepare($query);
 $stmt->bind_param('i',$id);
 $stmt->execute();
 $result=$stmt->get_result();
 $row=$result->fetch_assoc();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row justify-content-center mt-4">
      <div class="col-sm-6">
        <div class="text-success text-center mb-4">
          <h1>Update form:</h1>
        </div>
        <form action="../config/update_user.php" method="post">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="username" name="username" value="<?php echo $row['Name'] ?>" class="form-control" id="username">
            <div class="text-danger">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" name="email" value="<?php echo $row['Email'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
              <div class="text-danger"></div>
            </div>
            <div class="form-group">
              <label for="exampleInputcontact1">Phone number</label>
              <input type="tel" name="phone_number" value="<?php echo $row['Number'] ?>"class="form-control" id="exampleInputcontact1" required>
              <div class="text-danger"></div>
            </div>
            <div class="form-group">
              <label for="Address">Address</label>
              <input type="text" name="Address" value="<?php echo $row['Address'] ?>"class="form-control" id="Address" required>
              <div class="text-danger"></div>
            </div>
            <div class="form-group">
              <label for="note">Note</label>
              <input type="text" name="Note" value="<?php echo $row['Note'] ?>"class="form-control" id="note" required>
              <div class="text-danger"></div>
            </div>
            <button type="submit" name="update" class="btn btn-primary">Edit</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>