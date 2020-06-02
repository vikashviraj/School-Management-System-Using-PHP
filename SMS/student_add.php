<?php
        include 'include/header.php';
        include 'include/menu.php';
        include 'include/top-header.php';
?>
<div class="container-fluid student_add">
<div class="row">
        <div class="col-md-1 bg-info">
               <div align="center"><a href="index.php" class="btn btn-light text-dark pt-1 pl-3 pr-3 pb-1 mt-1 mb-1"><b>Back</b></a></div>
        </div>
        <div class="col-md-11 bg-info">
                <h2 class="text-center heading-title">Admission</h2>
        </div>
</div>
<div class="row">
<div class="form">
        <form method="POST" onsubmit="return validateForm()" enctype="multipart/form-data">
        <table>
                <tr>
                        <td>Name:</td>
                        <td><input type="text" class="form-control"  name="sname"></td>
                </tr>
                <tr>
                        <td>Father's Name:</td>
                        <td><input type="text" class="form-control" name="fname"></td>
                </tr>
                <tr>
                        <td>Mother's Name:</td>
                        <td><input type="text" class="form-control" name="mname"></td>
                </tr>
                <tr>
                        <td>Parent's Name:</td>
                        <td><input type="text" class="form-control" name="pname"></td>
                </tr>
                <tr>
                        <td>Father's Occupation:</td>
                        <td><input type="text" class="form-control" name="foccup"></td>
                </tr>
                <tr>
                        <td>Mother's Occupation:</td>
                        <td><input type="text" class="form-control" name="moccup"></td>
                </tr>
                <tr>
                        <td>Parent's Occupation:</td>
                        <td><input type="text" class="form-control" name="poccup"></td>
                </tr>
                <tr>
                        <td>Date of Birth(DOB):</td>
                        <td><input type="date" class="form-control" name="dob"></td>
                </tr>
                <tr>
                        <td>Gender:</td>
                        <td>
                        <input type="radio" name="gender" value="male"> <label>Male </label>
                        <input type="radio" name="gender" value="female"> <label>Female </label>
                        <input type="radio" name="gender" value="other"> <label>Other </label>
                        </td>
                </tr>
                <tr>
                        <td>Religion:</td>
                        <td>
                                <select class="form-control" name="religion">
                                        <option class="droptext" value="None">None</option>
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
                        <input type="radio" name="category" value="general"> <label>General </label>
                        <input type="radio" name="category" value="obc"> <label>OBC </label>
                        <input type="radio" name="category" value="scst"> <label>SC/ST </label>
                        </td>
                </tr>
                <tr>
                        <td>Blood Group:</td>
                        <td><input type="text" class="form-control" name="bgroup" placeholder="Ex:- B+, O-"></td>
                </tr>
                <tr>
                        <td>Aadhaar No:</td>
                        <td><input type="number" id="documentno" class="form-control" name="aadhaar" placeholder="4444 5555 6666"></td>
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
                        <td><input type="text" class="form-control" name="address"></td>
                </tr>
                <tr>
                        <td>District:</td>
                        <td><input type="text" class="form-control" name="dist"></td>
                </tr>
                <tr>
                        <td>State:</td>
                        <td><input type="text" class="form-control" name="state"></td>
                </tr>
                <tr>
                        <td>Pin Code:</td>
                        <td><input type="number" id="pincode" class="form-control" name="pin"></td>
                </tr>
                <tr>
                    <td></td>
                    <td id="errorPincode"><p class="errorMsg"><i>Please Check Pin Code</i></p></td>
                </tr>
                <tr>
                        <td>Phone:</td>
                        <td><input type="number" id="phone1" class="form-control" name="primaryno"></td>
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
                                <input type="file" id="simage" onchange="ShowImage()" class="form-control-file" name="sphoto" accept="image/png,.jpeg,.jpg" >
                        </td>
                </tr>
                <tr>
                    <td></td>
                    <td><img src="Data/student_image_and_document/profile.jpe" class="m-2 p-1 img-thumbnail" id="student_image" style="height: 75px;"></td>
                </tr>
                <tr>
                        <td>Document:</td>
                        <td>
                                <input type="file" id="sdocument" onclick="ShowDocument()" class="form-control-file" name="sdocument" accept="image/png,.jpeg,.jpg" >
                        </td>
                </tr>
                <tr>
                    <td></td>
                    <td><img src="Data/student_image_and_document/profile.jpeg" class="m-2 p-1 img-thumbnail" id="student_document" style="height: 75px;"></td>
                </tr>
                <tr>
                        <td colspan="2"><h4>Admission Details:</h4><hr></td>
                </tr>
                <tr>
                        <td>Class:</td>
                        <td><select class="form-control" name="newclass">
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
                        <td><input type="date" class="form-control" name="addate"></td>
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