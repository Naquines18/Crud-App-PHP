<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Student</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php
include 'navbar.php';
?>
<div class="container">
<h2 class="h2 mt-2">Student Information</h2>
<table class="table table-bordered mt-1 table-responsive">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Student Name</th>
      <th scope="col">Stdent ID</th>
      <th scope="col">Student Grade</th>
      <th scope="col">Edit Student</th>
      <th scope="col">Delete Student</th>
    </tr>
  </thead>
  <tbody>
    <?php

    $query = mysqli_query($conn,"SELECT * FROM students");
    $i = 1;
    if(mysqli_num_rows($query) > 0){
    foreach($query as $data){
    ?>
    <tr>
      <th scope="row"><?php echo $i++; ?></th>
      <td><?php echo $data['name']; ?></td>
      <td><?php echo $data['student_id']; ?></td>
      <td><?php echo $data['grade']; ?></td>
      <td><a href="edit.php?id=<?php echo $data['id']; ?>&name=<?php echo $data['name']; ?>&grade=<?php echo $data['grade']; ?>&student_id=<?php echo $data['student_id']; ?>" class="btn btn-primary">Edit</a></td>
      <td><a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a></td>
    </tr>
    <?php
    }
    }else{
        echo "No data is the database";
    }
    ?>
  </tbody>
</div>
</table>
</body>
</html>