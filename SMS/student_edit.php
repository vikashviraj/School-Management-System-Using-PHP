<?php
        include 'include/header.php';
        include 'include/menu.php';
        include 'include/top-header.php';
        include 'include/sql/db_connection.php';
?>
<?php

    if(isset($_POST['edit_std'])){
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
        <form method="POST" action="#" onsubmit="return validateForm()" enctype="multipart/form-data">
        <table>
                <tr>
                        <td>Name:</td>
                        <td><input type="text" class="form-control" value="<?php echo $row['sname']; ?>" name="sname" ></td>
                </tr>
                <tr>
                        <td>Father's Name:</td>
                        <td><input type="text" class="form-control" value="<?php echo $row['fname']; ?>" name="fname"></td>
                </tr>
                <tr>
                        <td>Mother's Name:</td>
                        <td><input type="text" class="form-control" value="<?php echo $row['mname']; ?>" name="mname"></td>
                </tr>
                <tr>
                        <td>Parent's Name:</td>
                        <td><input type="text" class="form-control" value="<?php echo $row['pname']; ?>" name="pname"></td>
                </tr>
                <tr>
                        <td>Father's Occupation:</td>
                        <td><input type="text" class="form-control" value="<?php echo $row['poccup']; ?>" name="foccup"></td>
                </tr>
                <tr>
                        <td>Mother's Occupation:</td>
                        <td><input type="text" class="form-control" value="<?php echo $row['moccup']; ?>" name="moccup"></td>
                </tr>
                <tr>
                        <td>Parent's Occupation:</td>
                        <td><input type="text" class="form-control" value="<?php echo $row['poccup']; ?>" name="poccup"></td>
                </tr>
                <tr>
                        <td>Date of Birth(DOB):</td>
                        <td><input type="text" class="form-control" value="<?php echo $row['dob']; ?>" name="dob"></td>
                </tr>
                <tr>
                        <td>Gender:</td>
                        <td>
                        <?php
                            if($row['gender'] == "male"){
                                echo '<input type="radio" name="gender" value="male" required checked> <label>Male </label>
                                <input type="radio" name="gender" value="female" required> <label>Female </label>
                                <input type="radio" name="gender" value="other" required> <label>Other </label>';
                            }else if($row['gender'] == "female"){
                                echo '<input type="radio" name="gender" value="male" required> <label>Male </label>
                                <input type="radio" name="gender" value="female" required checked> <label>Female </label>
                                <input type="radio" name="gender" value="other" required> <label>Other </label>';
                            }else{
                                echo '<input type="radio" name="gender" value="male" required> <label>Male </label>
                                <input type="radio" name="gender" value="female" required> <label>Female </label>
                                <input type="radio" name="gender" value="other" required checked> <label>Other </label>';
                            }
                        ?>
                        
                        </td>
                </tr>
                <tr>
                        <td>Religion:</td>
                        <?php
                            if($row['religion'] == "Hindu"){
                                echo '<td>
                                <select class="form-control" name="religion" required>
                                    <option disabled value>Choose</option>
                                        <option class="droptext" value="Hindu" selected>Hindu</option>
                                        <option class="droptext" value="Islam">Islam</option>
                                        <option class="droptext" value="Sikh">Sikh</option>
                                        <option class="droptext" value="Other">Other</option>
                                </select>
                        </td>';
                            }else if($row['religion'] == "Islam"){
                                echo '<td>
                                <select class="form-control" name="religion" required>
                                    <option disabled value>Choose</option>
                                        <option class="droptext" value="Hindu">Hindu</option>
                                        <option class="droptext" value="Islam" selected>Islam</option>
                                        <option class="droptext" value="Sikh">Sikh</option>
                                        <option class="droptext" value="Other">Other</option>
                                </select>
                        </td>';
                            }else if($row['religion'] == "Sikh"){
                                echo '<td>
                                <select class="form-control" name="religion" required>
                                    <option disabled value>Choose</option>
                                        <option class="droptext" value="Hindu">Hindu</option>
                                        <option class="droptext" value="Islam">Islam</option>
                                        <option class="droptext" value="Sikh" selected>Sikh</option>
                                        <option class="droptext" value="Other">Other</option>
                                </select>
                        </td>';
                            }else{
                                echo '<td>
                                <select class="form-control" name="religion" required>
                                    <option disabled value>Choose</option>
                                        <option class="droptext" value="Hindu">Hindu</option>
                                        <option class="droptext" value="Islam">Islam</option>
                                        <option class="droptext" value="Sikh">Sikh</option>
                                        <option class="droptext" value="Other" selected>Other</option>
                                </select>
                        </td>';
                            }
                        ?>
                </tr>
                <tr>
                        <td>Category:</td>
                        <?php
                            if($row['category'] == "general"){
                                echo '<td>
                        <input type="radio" name="category" value="general" required checked> <label>General </label>
                        <input type="radio" name="category" value="obc" required> <label>OBC </label>
                        <input type="radio" name="category" value="scst" required> <label>SC/ST </label>
                        </td>';
                            }else if($row['category'] == "obc"){
                                echo '<td>
                        <input type="radio" name="category" value="general" required> <label>General </label>
                        <input type="radio" name="category" value="obc" required checked> <label>OBC </label>
                        <input type="radio" name="category" value="scst" required> <label>SC/ST </label>
                        </td>';
                            }else{
                                echo '<td>
                        <input type="radio" name="category" value="general" required> <label>General </label>
                        <input type="radio" name="category" value="obc" required> <label>OBC </label>
                        <input type="radio" name="category" value="scst" required checked> <label>SC/ST </label>
                        </td>';
                            }
                        ?>
                        
                </tr>
                <tr>
                        <td>Blood Group:</td>
                        <td><input type="text" class="form-control" value="<?php echo $row['bgroup']; ?>" name="bgroup"></td>
                </tr>
                <tr>
                        <td>Aadhaar No:</td>
                        <td><input type="text" class="form-control" value="<?php echo $row['aadhaar']; ?>" name="aadhaar"></td>
                </tr>
                <tr>
                        <td colspan="2"><h4>Address:</h4> <hr></td>
                </tr>
                <tr>
                        <td>Address:</td>
                        <td><input type="text" class="form-control" value="<?php echo $row['address']; ?>" name="address"></td>
                </tr>
                <tr>
                        <td>District:</td>
                        <td><input type="text" class="form-control" value="<?php echo $row['dist']; ?>" name="dist"></td>
                </tr>
                <tr>
                        <td>State:</td>
                        <td><input type="text" class="form-control" value="<?php echo $row['state']; ?>" name="state"></td>
                </tr>
                <tr>
                        <td>Pin Code:</td>
                        <td><input type="number" class="form-control" value="<?php echo $row['pincode']; ?>" name="pincode"></td>
                </tr>
                <tr>
                        <td>Phone:</td>
                        <td><input type="number" class="form-control" value="<?php echo $row['phone']; ?>" name="phone"></td>
                </tr>
                <tr>
                        <td>Phone (Alternative):</td>
                        <td><input type="number" class="form-control" value="<?php echo $row['altphone']; ?>" name="altphone"></td>
                </tr>
                <tr>
                        <td colspan="2"><h4>Last School Details:</h4><hr></td>
                </tr>
                <tr>
                        <td>Class:</td>
                        <?php
                            if($row['oldclass'] == "Nurs."){
                                echo '<td><select class="form-control" name="newclass">
                                <option disabled value>Choose</option>
                                    <option value="Nurs." selected>Nurs.</option>
                                    <option value="LKG">LKG</option>
                                    <option value="UKG">UKG</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                            </select>
                            </td>';
                            }else if($row['oldclass'] == "LKG"){
                                echo '<td><select class="form-control" name="newclass">
                                <option disabled value>Choose</option>
                                    <option value="Nurs.">Nurs.</option>
                                    <option value="LKG" selected>LKG</option>
                                    <option value="UKG">UKG</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                            </select>
                            </td>';
                            }else if($row['oldclass'] == "UKG"){
                                echo '<td><select class="form-control" name="newclass">
                                <option disabled value>Choose</option>
                                    <option value="Nurs.">Nurs.</option>
                                    <option value="LKG">LKG</option>
                                    <option value="UKG" selected>UKG</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                            </select>
                            </td>';
                            }else if($row['oldclass'] == "1"){
                                echo '<td><select class="form-control" name="newclass">
                                <option disabled value>Choose</option>
                                    <option value="Nurs.">Nurs.</option>
                                    <option value="LKG">LKG</option>
                                    <option value="UKG">UKG</option>
                                    <option value="1" selected>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                            </select>
                            </td>';
                            }else if($row['oldclass'] == "2"){
                                echo '<td><select class="form-control" name="newclass">
                                <option disabled value>Choose</option>
                                    <option value="Nurs.">Nurs.</option>
                                    <option value="LKG">LKG</option>
                                    <option value="UKG">UKG</option>
                                    <option value="1">1</option>
                                    <option value="2" selected>2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                            </select>
                            </td>';
                            }else if($row['oldclass'] == "3"){
                                echo '<td><select class="form-control" name="newclass">
                                <option disabled value>Choose</option>
                                    <option value="Nurs.">Nurs.</option>
                                    <option value="LKG">LKG</option>
                                    <option value="UKG">UKG</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3" selected>3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                            </select>
                            </td>';
                            }else if($row['oldclass'] == "4"){
                                echo '<td><select class="form-control" name="newclass">
                                <option disabled value>Choose</option>
                                    <option value="Nurs.">Nurs.</option>
                                    <option value="LKG">LKG</option>
                                    <option value="UKG">UKG</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4" selected>4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                            </select>
                            </td>';
                            }else if($row['oldclass'] == "5"){
                                echo '<td><select class="form-control" name="newclass">
                                <option disabled value>Choose</option>
                                    <option value="Nurs.">Nurs.</option>
                                    <option value="LKG">LKG</option>
                                    <option value="UKG">UKG</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5" selected>5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                            </select>
                            </td>';
                            }else if($row['oldclass'] == "6"){
                                echo '<td><select class="form-control" name="newclass">
                                <option disabled value>Choose</option>
                                    <option value="Nurs.">Nurs.</option>
                                    <option value="LKG">LKG</option>
                                    <option value="UKG">UKG</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6" selected>6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                            </select>
                            </td>';
                            }else if($row['oldclass'] == "7"){
                                echo '<td><select class="form-control" name="newclass">
                                <option disabled value>Choose</option>
                                    <option value="Nurs.">Nurs.</option>
                                    <option value="LKG">LKG</option>
                                    <option value="UKG">UKG</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7" selected>7</option>
                                    <option value="8">8</option>
                            </select>
                            </td>';
                            }else if($row['oldclass'] == "8"){
                                echo '<td><select class="form-control" name="newclass">
                                <option disabled value>Choose</option>
                                    <option value="Nurs.">Nurs.</option>
                                    <option value="LKG">LKG</option>
                                    <option value="UKG">UKG</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8" selected>8</option>
                            </select>
                            </td>';
                            }
                        ?>
                </tr>
                <tr>
                        <td>School Name:</td>
                        <td><input type="text" class="form-control" value="<?php echo $row['oldschool']; ?>" name="oldschool"></td>
                </tr>
                <tr>
                        <td>Photo:</td>
                        <td><img class="m-2 p-1 img-thumbnail" src="<?php echo "Data/student_image_and_document/".$row['sphoto']; ?>" alt="Photo" height="75" width="75" id="student_image"></td>
                </tr>
                <tr>
                        <td></td>
                        <td>
                                <input type="file" id="upload_image" onchange="ShowImage()" class="form-control-file" name="sphoto" accept="image/png,.jpeg,.jpg">
                        </td>
                </tr>
                <tr>
                        <td>Document:</td>
                        <td><img src="<?php echo "Data/student_image_and_document/".$row['sdocument']; ?>" alt="Document" class="m-2 p-1 img-thumbnail" height="70" width="100" id="student_document"></td>
                </tr>
                <tr>
                        <td></td>
                        <td>
                                <input type="file" id="upload_document" onchange="ShowDocument()" class="form-control-file" name="sdocument" accept="image/png,.jpeg,.jpg" >
                        </td>
                </tr>
                <tr>
                        <td colspan="2"><h4>Admission Details:</h4><hr></td>
                </tr>
                <tr>
                        <td>Class:</td>
                        <?php
                            if($row['newclass'] == "Nurs."){
                                echo '<td><select class="form-control" name="newclass">
                                <option disabled value>Choose</option>
                                    <option value="Nurs." selected>Nurs.</option>
                                    <option value="LKG">LKG</option>
                                    <option value="UKG">UKG</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                            </select>
                            </td>';
                            }else if($row['newclass'] == "LKG"){
                                echo '<td><select class="form-control" name="newclass">
                                <option disabled value>Choose</option>
                                    <option value="Nurs.">Nurs.</option>
                                    <option value="LKG" selected>LKG</option>
                                    <option value="UKG">UKG</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                            </select>
                            </td>';
                            }else if($row['newclass'] == "UKG"){
                                echo '<td><select class="form-control" name="newclass">
                                <option disabled value>Choose</option>
                                    <option value="Nurs.">Nurs.</option>
                                    <option value="LKG">LKG</option>
                                    <option value="UKG" selected>UKG</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                            </select>
                            </td>';
                            }else if($row['newclass'] == "1"){
                                echo '<td><select class="form-control" name="newclass">
                                <option disabled value>Choose</option>
                                    <option value="Nurs.">Nurs.</option>
                                    <option value="LKG">LKG</option>
                                    <option value="UKG">UKG</option>
                                    <option value="1" selected>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                            </select>
                            </td>';
                            }else if($row['newclass'] == "2"){
                                echo '<td><select class="form-control" name="newclass">
                                <option disabled value>Choose</option>
                                    <option value="Nurs.">Nurs.</option>
                                    <option value="LKG">LKG</option>
                                    <option value="UKG">UKG</option>
                                    <option value="1">1</option>
                                    <option value="2" selected>2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                            </select>
                            </td>';
                            }else if($row['newclass'] == "3"){
                                echo '<td><select class="form-control" name="newclass">
                                <option disabled value>Choose</option>
                                    <option value="Nurs.">Nurs.</option>
                                    <option value="LKG">LKG</option>
                                    <option value="UKG">UKG</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3" selected>3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                            </select>
                            </td>';
                            }else if($row['newclass'] == "4"){
                                echo '<td><select class="form-control" name="newclass">
                                <option disabled value>Choose</option>
                                    <option value="Nurs.">Nurs.</option>
                                    <option value="LKG">LKG</option>
                                    <option value="UKG">UKG</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4" selected>4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                            </select>
                            </td>';
                            }else if($row['newclass'] == "5"){
                                echo '<td><select class="form-control" name="newclass">
                                <option disabled value>Choose</option>
                                    <option value="Nurs.">Nurs.</option>
                                    <option value="LKG">LKG</option>
                                    <option value="UKG">UKG</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5" selected>5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                            </select>
                            </td>';
                            }else if($row['newclass'] == "6"){
                                echo '<td><select class="form-control" name="newclass">
                                <option disabled value>Choose</option>
                                    <option value="Nurs.">Nurs.</option>
                                    <option value="LKG">LKG</option>
                                    <option value="UKG">UKG</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6" selected>6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                            </select>
                            </td>';
                            }else if($row['newclass'] == "7"){
                                echo '<td><select class="form-control" name="newclass">
                                <option disabled value>Choose</option>
                                    <option value="Nurs.">Nurs.</option>
                                    <option value="LKG">LKG</option>
                                    <option value="UKG">UKG</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7" selected>7</option>
                                    <option value="8">8</option>
                            </select>
                            </td>';
                            }else if($row['newclass'] == "8"){
                                echo '<td><select class="form-control" name="newclass">
                                <option disabled value>Choose</option>
                                    <option value="Nurs.">Nurs.</option>
                                    <option value="LKG">LKG</option>
                                    <option value="UKG">UKG</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8" selected>8</option>
                            </select>
                            </td>';
                            }
                        ?>
                </tr>
                <tr>
                        <td>Section:</td>
                        <?php
                            if($row['newsection'] == "A"){
                                echo '<td><select class="form-control" name="section">
                                <option disabled value>Choose</option>
                                    <option value="A" selected>A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                            </select>
                            </td>';
                            }else if($row['newsection'] == "B"){
                                echo '<td><select class="form-control" name="section">
                                <option disabled value>Choose</option>
                                    <option value="A">A</option>
                                    <option value="B" selected>B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                            </select>
                            </td>';
                            }else if($row['newsection'] == "C"){
                                echo '<td><select class="form-control" name="section">
                                <option disabled value>Choose</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C" selected>C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                            </select>
                            </td>';
                            }else if($row['newsection'] == "D"){
                                echo '<td><select class="form-control" name="section">
                                <option disabled value>Choose</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D" selected>D</option>
                                    <option value="E">E</option>
                            </select>
                            </td>';
                            }else if($row['newsection'] == "E"){
                                echo '<td><select class="form-control" name="section">
                                <option disabled value>Choose</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E" selected>E</option>
                            </select>
                            </td>';
                            }
                        ?>
                </tr>
                <tr>
                        <td>Roll:</td>
                        <td><input type="number" class="form-control" value="<?php echo $row['newroll']; ?>" name="newroll"></td>
                </tr>
                <tr>
                        <td>Admission Date:</td>
                        <td><input type="text" class="form-control" value="<?php echo $row['admdate']; ?>" name="admdate"></td>
                </tr>
                <tr>
                        <td><input type="submit" class="btn pt-1 pl-3 pr-3 pb-1 btn-success mt-4 mb-3" name="update" value="Update"></td>
                        <td><input type="reset" class="btn pt-1 pl-3 pr-3 pb-1 btn-danger mt-4 mb-3" value="Reset"></td>
                </tr>

        </table>
        </form>
</div>
</div>
</div>
<?php
        include 'include/footer.php';
?>