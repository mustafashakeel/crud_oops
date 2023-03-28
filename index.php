<?php

include('class.php');

$student = new Student();

if (isset($_POST['submit'])) {
    $student->Add();
}
if (isset($_GET['del_id']) && !empty($_GET['del_id'])) {
    $id = $_GET['del_id'];
    $data = $student->delete($id);
    echo $data;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>PHP CRUD Application </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <form action="index.php" method="POST">

                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control">

                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control">

                    <label for="username">username</label>
                    <input type="text" name="username" id="username" class="form-control">

                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">


                    <button type="submit" name="submit" id="submit" class="btn btn-primary mt-3">Submit </button>
                </form>


                <div class="col-sm-6">
                    <h3>View Records </h3>
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">Id </th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">UserName</th>
                                <th scope="col">Actions </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $std = $student->displayData();

                            foreach ($std as $stu) {
                            ?>
                                <tr>
                                    <td><?php echo $stu['id'] ?></td>
                                    <td><?php echo $stu['name'] ?></td>
                                    <td><?php echo $stu['email'] ?></td>
                                    <td><?php echo $stu['username'] ?></td>
                                    <td><a href="edit.php?update_id=<?php echo $stu['id'] ?>">Edit</a> | <a href="index.php?del_id=<?php echo $stu['id'] ?>">Delete</a> </td>
                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>

</body>

</html>