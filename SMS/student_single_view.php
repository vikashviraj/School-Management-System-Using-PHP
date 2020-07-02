<?php
        include 'include/header.php';
        include 'include/menu.php';
        include 'include/top-header.php';
        include 'include/sql/db_connection.php';
?>
<?php

    if(isset($_POST['view_std'])){
        $id = $_POST['id'];

        $sql = "SELECT * FROM admission WHERE id = '$id'";
        $table = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($table);

    }else{
        header("location:student_view.php");
    }
?>
<div class="container-fluid student_add">
<div class="row">
        <div class="col-md-2 bg-info">
               <div align="center" class="btn-light text-dark pt-1 pl-3 pr-3 pb-1 m-1 rounded"><a href="index.php" ><i class="fa fa-home text-dark pr-1"> </i></a><span><b>- Student</b></span><a href="student_add.php" class="text-danger fw-bold"> - Add</a></div>
        </div>
        <div class="col-md-10 bg-info">
                <h2 class="text-center heading-title">Admission</h2>
        </div>
</div>
<div class="row">
<div class="form">
        <form method="POST" action="include/sql/sql_student_add.php" onsubmit="return validateForm()" enctype="multipart/form-data">
        <table>
                <tr>
                        <td>Name:</td>
                        <td><input type="text" class="form-control" value="<?php echo $row['sname']; ?>" disabled></td>
                </tr>
                <tr>
                        <td>Father's Name:</td>
                        <td><input type="text" class="form-control" value="<?php echo $row['fname']; ?>" disabled></td>
                </tr>
                <tr>
                        <td>Mother's Name:</td>
                        <td><input type="text" class="form-control" value="<?php echo $row['mname']; ?>" disabled></td>
                </tr>
                <tr>
                        <td>Parent's Name:</td>
                        <td><input type="text" class="form-control" value="<?php echo $row['pname']; ?>" disabled></td>
                </tr>
                <tr>
                        <td>Father's Occupation:</td>
                        <td><input type="text" class="form-control" value="<?php echo $row['poccup']; ?>" disabled></td>
                </tr>
                <tr>
                        <td>Mother's Occupation:</td>
                        <td><input type="text" class="form-control" value="<?php echo $row['moccup']; ?>" disabled></td>
                </tr>
                <tr>
                        <td>Parent's Occupation:</td>
                        <td><input type="text" class="form-control" value="<?php echo $row['poccup']; ?>" disabled></td>
                </tr>
                <tr>
                        <td>Date of Birth(DOB):</td>
                        <td><input type="text" class="form-control" value="<?php echo $row['dob']; ?>" disabled></td>
                </tr>
                <tr>
                        <td>Gender:</td>
                        <td>
                        <input type="text" class="form-control" value="<?php echo $row['gender']; ?>" disabled>
                        </td>
                </tr>
                <tr>
                        <td>Religion:</td>
                        <td>
                        <input type="text" class="form-control" value="<?php echo $row['religion']; ?>" disabled>
                        </td>
                </tr>
                <tr>
                        <td>Category:</td>
                        <td>
                        <input type="text"class="form-control" value="<?php echo $row['category']; ?>" disabled>
                        </td>
                </tr>
                <tr>
                        <td>Blood Group:</td>
                        <td><input type="text" class="form-control" value="<?php echo $row['bgroup']; ?>" disabled></td>
                </tr>
                <tr>
                        <td>Aadhaar No:</td>
                        <td><input type="text" class="form-control" value="<?php echo $row['aadhaar']; ?>" disabled></td>
                </tr>
                <tr>
                        <td colspan="2"><h4>Address:</h4> <hr></td>
                </tr>
                <tr>
                        <td>Address:</td>
                        <td><input type="text" class="form-control" value="<?php echo $row['address']; ?>" disabled></td>
                </tr>
                <tr>
                        <td>District:</td>
                        <td><input type="text" class="form-control" value="<?php echo $row['dist']; ?>" disabled></td>
                </tr>
                <tr>
                        <td>State:</td>
                        <td><input type="text" class="form-control" value="<?php echo $row['state']; ?>" disabled></td>
                </tr>
                <tr>
                        <td>Pin Code:</td>
                        <td><input type="number" class="form-control" value="<?php echo $row['pincode']; ?>" disabled></td>
                </tr>
                <tr>
                        <td>Phone:</td>
                        <td><input type="number" class="form-control" value="<?php echo $row['phone']; ?>" disabled></td>
                </tr>
                <tr>
                        <td>Phone (Alternative):</td>
                        <td><input type="number" class="form-control" value="<?php echo $row['altphone']; ?>" disabled></td>
                </tr>
                <tr>
                        <td colspan="2"><h4>Last School Details:</h4><hr></td>
                </tr>
                <tr>
                        <td>Class:</td>
                        <td>
                        <input type="text" class="form-control" value="<?php echo $row['oldclass']; ?>" disabled>
                        </td>
                </tr>
                <tr>
                        <td>School Name:</td>
                        <td><input type="text" class="form-control" value="<?php echo $row['oldschool']; ?>" disabled></td>
                </tr>
                <tr>
                        <td>Photo:</td>
                        <td><img class="m-2 p-1 img-thumbnail" src="<?php echo "Data/student_image_and_document/".$row['sphoto']; ?>" alt="Photo" height="75" width="75" id="student_image"></td>
                </tr>
                <tr>
                        <td>Document:</td>
                        <td><img src="<?php echo "Data/student_image_and_document/".$row['sdocument']; ?>" alt="Document" class="m-2 p-1 img-thumbnail" height="70" width="100" id="student_document"></td>
                </tr>
                <tr>
                        <td colspan="2"><h4>Admission Details:</h4><hr></td>
                </tr>
                <tr>
                        <td>Class:</td>
                        <td>
                        <input type="text" class="form-control" value="<?php echo $row['newclass']; ?>" disabled>
                        </td>
                </tr>
                <tr>
                        <td>Section:</td>
                        <td>
                        <input type="text" class="form-control" value="<?php echo $row['newsection']; ?>" disabled>
                        </td>
                </tr>
                <tr>
                        <td>Roll:</td>
                        <td><input type="number" class="form-control" value="<?php echo $row['newroll']; ?>" disabled></td>
                </tr>
                <tr>
                        <td>Admission Date:</td>
                        <td><input type="text" class="form-control" value="<?php echo $row['admdate']; ?>" disabled></td>
                </tr>
                <tr>
                        <td><a href="student_view.php" class="btn btn-info px-3 py-1 text-center">Back </a></td>
                </tr>

        </table>
        </form>
</div>
</div>
</div>
<?php
        include 'include/footer.php';
?>