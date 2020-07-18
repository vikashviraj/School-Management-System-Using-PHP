<?php
    include 'db_connection.php';

    //Remove/Delete Student Info
    if(isset($_POST['remove_std'])){
        $id = $_POST['id'];
        $sql = "DELETE FROM admission WHERE id = '$id'";
        if(mysqli_query($conn,$sql)){
            $_SESSION['std_success'] = "Successfully Deleted";
            header("location:../../student_view.php");
        }else{
            $_SESSION['std_error'] = "Something Wrong";
            header("location:../../student_view.php");
        }
    }

?>