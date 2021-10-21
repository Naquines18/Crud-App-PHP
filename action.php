<?php
require 'conn.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $id = $_POST['id'];
    $grade = $_POST['grade'];

    $query = mysqli_query($conn,"INSERT INTO students(name,student_id,grade) VALUES('$name','$id','$grade') ");

    if($query){
        echo '<script>window.location.href="index.php?success"</script>';
    }else{
        echo '<script>window.location.href="index.php?success"</script>';
    }
}