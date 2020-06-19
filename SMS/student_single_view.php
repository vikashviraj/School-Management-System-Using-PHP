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
                        <td><input type="text" class="form-control" name="pname"></td>
                </tr>
                <tr>
                        <td>Father's Occupation:</td>
                        <td><input type="text" class="form-control" name="foccup" required></td>
                </tr>
                <tr>
                        <td>Mother's Occupation:</td>
                        <td><input type="text" class="form-control" name="moccup" required></td>
                </tr>
                <tr>
                        <td>Parent's Occupation:</td>
                        <td><input type="text" class="form-control" name="poccup"></td>
                </tr>
                <tr>
                        <td>Date of Birth(DOB):</td>
                        <td><input type="date" class="form-control" name="dob" required></td>
                </tr>
                <tr>
                        <td>Gender:</td>
                        <td>
                        <input type="radio" name="gender" value="male" required> <label>Male </label>
                        <input type="radio" name="gender" value="female" required> <label>Female </label>
                        <input type="radio" name="gender" value="other" required> <label>Other </label>
                        </td>
                </tr>
                <tr>
                        <td>Religion:</td>
                        <td>
                                <select class="form-control" name="religion" required>
                                    <option disabled selected value>Choose</option>
                                        <option class="droptext" value="Hindu">Hindu</option>
                                        <option class="droptext" value="Islam">Islam</option>
                                        <option class="droptext" value="Sikh">Sikh</option>
                                        <option class="droptext" value="Other">Other</option>
                                </select>
                        </td>
                </tr>
                <tr>
                        <td>Category:</td>
                        <td>
                        <input type="radio" name="category" value="general" required> <label>General </label>
                        <input type="radio" name="category" value="obc" required> <label>OBC </label>
                        <input type="radio" name="category" value="scst" required> <label>SC/ST </label>
                        </td>
                </tr>
                <tr>
                        <td>Blood Group:</td>
                        <td><input type="text" class="form-control" name="bgroup" placeholder="Ex:- B+, O-"></td>
                </tr>
                <tr>
                        <td>Aadhaar No:</td>
                        <td><input type="text" id="documentno" oninput="formatAadhaar()" onclick="clearAadhaar()" class="form-control" name="aadhaar" placeholder="4444 5555 6666"></td>
                </tr>
                <tr>
                    <td></td>
                    <td id="errorAadhaar"><p class="errorMsg"><i>Please Check Aadhaar</i></p></td>
                </tr>
                <tr>
                        <td colspan="2"><h4>Address:</h4> <hr></td>
                </tr>
                <tr>
                        <td>Address:</td>
                        <td><input type="text" class="form-control" name="address" required></td>
                </tr>
                <tr>
                        <td>District:</td>
                        <td><input type="text" class="form-control" name="dist" required></td>
                </tr>
                <tr>
                        <td>State:</td>
                        <td><input type="text" class="form-control" name="state" required></td>
                </tr>
                <tr>
                        <td>Pin Code:</td>
                        <td><input type="number" id="pincode" class="form-control" name="pin" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td id="errorPincode"><p class="errorMsg"><i>Please Check Pin Code</i></p></td>
                </tr>
                <tr>
                        <td>Phone:</td>
                        <td><input type="number" id="phone1" class="form-control" name="primaryno" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td id="errorPhone1"><p class="errorMsg"><i>Please Check Phone No.</i></p></td>
                </tr>
                <tr>
                        <td>Phone (Alternative):</td>
                        <td><input type="number" id="phone2" class="form-control" name="alterno"></td>
                </tr>
                <tr>
                    <td></td>
                    <td id="errorPhone2"><p class="errorMsg"><i>Please Check Phone No.</i></p></td>
                </tr>
                <tr>
                        <td colspan="2"><h4>Last School Details:</h4><hr></td>
                </tr>
                <tr>
                        <td>Class:</td>
                        <td><select class="form-control" name="oldclass">
                                <option disabled selected value>Choose</option>
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
                                <option value="8">8</option>
                        </select>
                        </td>
                </tr>
                <tr>
                        <td>School Name:</td>
                        <td><input type="text" class="form-control" name="oldschool"></td>
                </tr>
                <tr>
                        <td>Photo:</td>
                        <td>
                                <input type="file" id="upload_image" onchange="ShowImage()" class="form-control-file" name="sphoto" accept="image/png,.jpeg,.jpg">
                        </td>
                </tr>
                <tr>
                    <td></td>
                    <td><img class="m-2 p-1 img-thumbnail" height="75" width="75" id="student_image"></td>
                </tr>
                <tr>
                        <td>Document:</td>
                        <td>
                                <input type="file" id="upload_document" onchange="ShowDocument()" class="form-control-file" name="sdocument" accept="image/png,.jpeg,.jpg" >
                        </td>
                </tr>
                <tr>
                    <td></td>
                    <td><img  class="m-2 p-1 img-thumbnail" height="70" width="100" id="student_document"></td>
                </tr>
                <tr>
                        <td colspan="2"><h4>Admission Details:</h4><hr></td>
                </tr>
                <tr>
                        <td>Class:</td>
                        <td><select class="form-control" name="newclass">
                            <option disabled selected value>Choose</option>
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
                                <option value="8">8</option>
                        </select>
                        </td>
                </tr>
                <tr>
                        <td>Section:</td>
                        <td><select class="form-control" name="section">
                            <option disabled selected value>Choose</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                        </select>
                        </td>
                </tr>
                <tr>
                        <td>Roll:</td>
                        <td><input class="form-control" type="number" name="roll"></td>
                </tr>
                <tr>
                        <td>Admission Date:</td>
                        <td><input type="date" class="form-control" name="addate" required></td>
                </tr>
                <tr>
                        <td><input type="submit" class="btn pt-1 pl-3 pr-3 pb-1 btn-success mt-4 mb-3" name="register" value="Register"></td>
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