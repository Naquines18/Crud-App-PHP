<?php
require 'conn.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = mysqli_query($conn,"DELETE FROM students WHERE id = '$id' LIMIT 1");

    if($query){
        echo '<script>window.location.href="index.php?deleted"</script>';
    }else{
        echo '<script>window.location.href="index.php?not_delete"</script>';
    }
}