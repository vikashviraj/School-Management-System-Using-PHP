<?php
        include 'include/header.php';
        include 'include/menu.php';
        include 'include/top-header.php';
?>
<div class="container-fluid student_add">
<div class="row">
        <div class="col-md-4">
                <h2>Student Add</h2>
        </div>
</div>
<div class="row">
<div class="form">
        <form>
        <table>
                <tr>
                        <td>Name:</td>
                        <td><input type="text" placeholder="Enter Name" name="sname" required></td>
                </tr>
                <tr>
                        <td>Father's Name:</td>
                        <td><input type="text" placeholder="Enter Father's Name" name="fname" required></td>
                </tr>
                <tr>
                        <td>Mother's Name:</td>
                        <td><input type="text" placeholder="Enter Mother's Name" name="mname" required></td>
                </tr>
                <tr>
                        <td>Parent's Name:</td>
                        <td><input type="text" placeholder="Enter Parent's Name" name="pname"></td>
                </tr>
                <tr>
                        <td>Father's Name:</td>
                        <td><input type="text" placeholder="Enter Father's Name" name="fname" required></td>
                </tr>
                <tr>
                        <td>Father's Occupation:</td>
                        <td><input type="text" placeholder="Enter Father's Occupation" name="foccup" required></td>
                </tr>
                <tr>
                        <td>Mother's Occupation:</td>
                        <td><input type="text" placeholder="Enter Mother's Occupation" name="moccup" required></td>
                </tr>
                <tr>
                        <td>Parent's Occupation:</td>
                        <td><input type="text" placeholder="Enter Parent's Occupation" name="poccup"></td>
                </tr>
                <tr>
                        <td>Date of Birth(DOB):</td>
                        <td><input type="date" name="dob" required></td>
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
                                <select name="religion">
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
                        <input type="radio" name="category" value="general"> <label>General </label>
                        <input type="radio" name="category" value="obc"> <label>OBC </label>
                        <input type="radio" name="category" value="scst"> <label>SC/ST </label>
                        </td>
                </tr>
                <tr>
                        <td>Blood Group:</td>
                        <td><input type="text" name="bgroup" placeholder="Ex:- B+, O-"></td>
                </tr>
                <tr>
                        <td><h4>Address:</h4></td>
                </tr>
                <tr>
                        <td>Address:</td>
                        <td><input type="text" name="address" placeholder="Enter Address" required></td>
                </tr>
                <tr>
                        <td>District:</td>
                        <td><input type="text" name="dist" placeholder="District" required></td>
                </tr>
                <tr>
                        <td>State:</td>
                        <td><input type="text" name="state" placeholder="State" required></td>
                </tr>
                <tr>
                        <td>Pin Code:</td>
                        <td><input type="number" name="pin" placeholder="Pin Code" required></td>
                </tr>
                <tr>
                        <td>Phone:</td>
                        <td><input type="tel" name="primaryno" placeholder="Primary Number"></td>
                </tr>
                <tr>
                        <td>Phone (Alternative):</td>
                        <td><input type="tel" name="alterno" placeholder="Alternative Number"></td>
                </tr>
                <tr>
                        <td><h4>Last School Details:</h4></td>
                </tr>
                <tr>
                        <td>Class:</td>
                        <td><select name="lastclass">
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
                        <td><input type="text" name="lastschool"></td>
                </tr>
                <tr>
                        <td>Photo:</td>
                        <td>
                                <input type="file" name="sphoto" type="image/*">
                        </td>
                </tr>
                <tr>
                        <td><h4>Admission Details:</h4></td>
                </tr>

        </table>
        </form>
</div>
</div>
</div>
<?php
        include 'include/footer.php';
?>