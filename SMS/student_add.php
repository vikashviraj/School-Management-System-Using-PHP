<?php
        include 'include/header.php';
        include 'include/menu.php';
        include 'include/top-header.php';
?>
<div class="container-fluid student_add">
<div class="row">
        <div class="col-md-12 bg-info">
                <h2 class="text-center heading-title">Admission</h2>
        </div>
</div>
<div class="row">
<div class="form">
        <form>
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
                        <td>Father's Name:</td>
                        <td><input type="text" class="form-control" name="fname" required></td>
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
                        <input type="radio" class="form-check-input" name="gender" value="male"> <label>Male </label>
                        <input type="radio" class="form-check-input" name="gender" value="female"> <label>Female </label>
                        <input type="radio" class="form-check-input" name="gender" value="other"> <label>Other </label>
                        </td>
                </tr>
                <tr>
                        <td>Religion:</td>
                        <td>
                                <select class="form-control" name="religion">
                                        <option value="None">None</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Sikh">Sikh</option>
                                        <option value="Other">Other</option>
                                </select>
                        </td>
                </tr>
                <tr>
                        <td>Category:</td>
                        <td>
                        <input type="radio" class="form-check-input" name="category" value="general"> <label>General </label>
                        <input type="radio" class="form-check-input" name="category" value="obc"> <label>OBC </label>
                        <input type="radio" class="form-check-input" name="category" value="scst"> <label>SC/ST </label>
                        </td>
                </tr>
                <tr>
                        <td>Blood Group:</td>
                        <td><input type="text" class="form-control" name="bgroup" placeholder="Ex:- B+, O-"></td>
                </tr>
                <tr>
                        <td><h4>Address:</h4></td>
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
                        <td><input type="tel" class="form-control" name="primaryno"></td>
                </tr>
                <tr>
                        <td>Phone (Alternative):</td>
                        <td><input type="tel" class="form-control" name="alterno"></td>
                </tr>
                <tr>
                        <td><h4>Last School Details:</h4></td>
                </tr>
                <tr>
                        <td>Class:</td>
                        <td><select class="form-control" name="lastclass">
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
                        <td><input type="text" class="form-control" name="lastschool"></td>
                </tr>
                <tr>
                        <td>Photo:</td>
                        <td>
                                <input type="file" class="form-control-file" name="sphoto" accept="image/png,.jpeg,.jpg" >
                        </td>
                </tr>
                <tr>
                        <td><h4>Admission Details:</h4></td>
                </tr>
                <tr>
                        <td>Class:</td>
                        <td><select class="form-control" name="class">
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
                        <td><input type="submit" class="btn btn-success" name="register" value="Register"></td>
                        <td><input type="reset" class="btn btn-danger" value="Reset"></td>
                        <td><a href="index.php" class="btn btn-primary" title="Dashboard">Cancel</a></td>
                </tr>

        </table>
        </form>
</div>
</div>
</div>
<?php
        include 'include/footer.php';
?>