<!DOCTYPE html>
<?php
include('../config/data_base.php');

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Number</th>
                            <th scope="col">Address</th>
                            <th scope="col">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                            $query = "SELECT * FROM information";
                            $result = mysqli_query($conn, $query);
                            if (!$result) {
                                die('Query failed' . mysqli_error($conn));
                            } else {
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                        <tr>
                            <td><?php echo ($row['ID']); ?></td>
                            <td><?php echo ($row['Name']); ?></td>
                            <td><?php echo ($row['Email']); ?></td>
                            <td><?php echo ($row['Number']); ?></td>
                            <td><?php echo ($row['Address']); ?></td>
                            <td>
                                <a href="../config/delete.php?id=<?php echo $row['ID'] ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                <?php
                                }
                            }
                ?>
                </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>