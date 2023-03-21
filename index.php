<?php

include('class.php');

$student = new Student();

if (isset($_POST['submit'])) {
    $student->Add();
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


                    <input type="submit" name="submit" id="submit" class="btn btn-primary mt-3">
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
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $std = $student->displayData();

                            foreach ($std as $stu) {
                            ?>
                                <tr>
                                    <th scope="row">1</th>
                                    <td></td>
                                    <td><?php echo $stu['name'] ?></td>
                                    <td>@mdo</td>
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