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
        <form method="POST" action="include/sql/sql_student_add.php" enctype="multipart/form-data">
        <table>
                <tr>
                        <td>Name:</td>
                        <td><input type="text" class="form-control"  name="sname" required></td>
                </tr>
                <tr>
                        <td>Father's Name:</td>
                        <td><input type="text" class="form-control" name="fname" required></td>
                </tr>
                <tr>
                        <td>Mother's Name:</td>
                        <td><input type="text" class="form-control" name="mname" required></td>
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
                        <td><input type="number" class="form-control" name="aadhaar" placeholder="4444 5555 6666"></td>
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
                        <td><input type="number" class="form-control" name="pin" required></td>
                </tr>
                <tr>
                        <td>Phone:</td>
                        <td><input type="number" class="form-control" name="primaryno"></td>
                </tr>
                <tr>
                        <td>Phone (Alternative):</td>
                        <td><input type="number" class="form-control" name="alterno"></td>
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
                                <input type="file" class="form-control-file" name="sphoto" accept="image/png,.jpeg,.jpg" >
                        </td>
                </tr>
                <tr>
                        <td>Document:</td>
                        <td>
                                <input type="file" class="form-control-file" name="sdocument" accept="image/png,.jpeg,.jpg" >
                        </td>
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
                                <option value="1">A</option>
                                <option value="2">B</option>
                                <option value="3">C</option>
                                <option value="4">D</option>
                                <option value="5">E</option>
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