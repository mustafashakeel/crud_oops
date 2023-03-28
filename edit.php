<?php

include('class.php');

$student = new Student();

if (isset($_GET['update_id']) && !empty($_GET['update_id'])) {
    $id = $_GET['update_id'];
    $data = $student->displayRecordById($id);
}

if (isset($_POST['update'])) {
    $update =  $student->update($_POST);

    echo $update;
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
                <form action="edit.php" method="POST">

                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" value="<?php echo $data['name']; ?>" class="form-control">

                    <label for="email">Email</label>
                    <input type="text" name="email" value="<?php echo $data['email']; ?>" id="email" class="form-control">

                    <label for="username">username</label>
                    <input type="text" name="username" id="username" value="<?php echo $data['username']; ?>" class="form-control">

                    <label for="password">Password</label>
                    <input type="text" name="password" id="password" value="<?php echo $data['password']; ?>" class="form-control">

                    <input type="hidden" name="id" id="id" value="<?php echo $data['id']; ?>">
                    <button type="submit" name="update" value="update" id="update" class="btn btn-primary mt-3">Update </button>
                </form>




            </div>
        </div>
    </div>

</body>

</html>