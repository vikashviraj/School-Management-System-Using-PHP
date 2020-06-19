<?php
    include 'db_connection.php';
    //Edit Student Info
    if(isset($_POST['edit_std'])){
        echo "Edit Std";
    }
    //Remove/Delete Student Info
    if(isset($_POST['remove_std'])){
        $id = $_POST['id'];
        
        $sql = "DELETE FROM admission WHERE id = '$id'";
        if(mysqli_query($conn,$sql)){
            echo "Removed";
        }else{
            echo "Error".mysqli_error($conn);
        }
    }

?>