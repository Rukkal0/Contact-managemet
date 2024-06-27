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
          <h1>Form</h1>
        </div>
        <form action="../config/add.php" method="post">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="username" name="username" class="form-control" id="username">
            <div class="text-danger">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
              <div class="text-danger"></div>
            </div>
            <div class="form-group">
              <label for="exampleInputcontact1">Phone number</label>
              <input type="tel" name="phone_number" class="form-control" id="exampleInputcontact1" required>
              <div class="text-danger"></div>
            </div>
            <div class="form-group">
              <label for="Address">Address</label>
              <input type="text" name="Address" class="form-control" id="Address" required>
              <div class="text-danger"></div>
            </div>
            <div class="form-group">
              <label for="note">Note</label>
              <input type="text" name="Note" class="form-control" id="note" required>
              <div class="text-danger"></div>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>