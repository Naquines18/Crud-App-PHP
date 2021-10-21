<?php
require 'conn.php';

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $student_id = $_POST['student_id'];
    $grade = $_POST['grade'];

    $query = mysqli_query($conn,"UPDATE students SET name = '$name', student_id = '$student_id', grade = '$grade' WHERE id = '$id' LIMIT 1");

    if($query){
        echo '<script>window.location.href="index.php?success_edit"</script>';
    }else{
        echo '<script>window.location.href="index.php?error_edit"</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD APP | PHP - BOOTSTRAP</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php
    include 'navbar.php';
    ?>
    <div class="container">
        <h2>CRUD APP</h2>

        <div class="card">
            <div class="card-header">
                <p class="lead">EDIT STUDENT</p>
            </div>
            <div class="card-body">
                <form action="edit.php" id="add_student" method="post">
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="id" value="<?php echo $_GET['id']; ?>">
                        <input type="text" class="form-control" name="name" placeholder="Enter Student Name" value="<?php echo $_GET['name']; ?>">
                    </div>
                    <div class="form-group mt-2">
                        <input type="text" class="form-control" name="student_id" placeholder="Enter Student ID" value="<?php echo $_GET['student_id']; ?>">
                    </div>
                    <div class="form-group mt-2">
                        <input type="text" class="form-control" name="grade" placeholder="Enter Student Grade" value="<?php echo $_GET['grade']; ?>">
                    </div>
                    <div class="form-group mt-2">
                        <input type="submit" name="submit" class="btn btn-success" value="Submit Edit Data">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function(){
            <?php
                if(isset($_GET['success_edit'])){
                    ?>
                        Swal.fire(
                            'Success Message',
                            'You have added a new student',
                            'success'
                        )
                    <?php
                }else if(isset($_GET['error_edit'])){
                    ?>
                         Swal.fire(
                            'Error Message',
                            'Error in adding a new student',
                            'error'
                        )
                    <?php
                }

            
            ?>
        });
    </script>
</body>
</html>