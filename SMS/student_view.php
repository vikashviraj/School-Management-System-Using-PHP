<?php
        include 'include/header.php';
        include 'include/menu.php';
        include 'include/top-header.php';
?>
<div class="container-fluid student-view">
<div class="row">
        <div class="col-md-2 bg-info">
               <div align="center" class="btn-light text-dark pt-1 pl-3 pr-3 pb-1 m-1 rounded"><a href="index.php" ><i class="fa fa-home text-dark pr-1"> </i></a><span><b>- Student</b></span><a href="student_view.php" class="text-danger fw-bold"> - View</a></div>
        </div>
        <div class="col-md-10 bg-info">
                <h2 class="text-center heading-title">Students Details</h2>
        </div>
</div>
<div class="row">
	<div class="student-table">
		<table class="table table-dark table-bordered">
		<tr>
			<td>
				<select class="py-1" name="class" id="class">
					<option value disabled selected>Class</option>
					<option value="NUR">Nur.</option>
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
			<td>
				<select class="py-1" name="section" id="section">
				<option value disabled selected>Section</option>
					<option value="A">A</option>
					<option value="B">B</option>
					<option value="C">C</option>
					<option value="D">D</option>
					<option value="E">E</option>
				</select>
			</td>
			<td>
				<input type="number" name="roll" id="roll" placeholder="Roll" class="py-1" style="width:100px;">
			</td>
			<td>
				<input type="text" name="stdid" id="stdid" placeholder="ID Card" class="py-1" style="width:200px;">
			</td>
			<td>
				<input type="text" name="aadhaar" id="aadhaar" placeholder="Aadhaar" class="py-1" style="width:200px;">
			</td>
			<td>
				<input type="text" name="name" id="name" placeholder="Name" class="py-1" style="width:200px;">
			</td>
			<td>
				<input type="submit" value="Search" class="btn btn-warning py-1 px-2">
			</td>
		</tr>
		</table>
	<table class="table table-striped table-light table-bordered table-hover mt-1">
		<thead class="thead-dark">
			<tr>
				<th scope="col">SNO.</th>
				<th scope="col">ROLL</th>
				<th scope="col">SECTION</th>
				<th scope="col">NAME</th>
				<th scope="col">FATHER'S NAME</th>
				<th scope="col">PHONE</th>
				<th scope="col">ADMIN.</th>
				<th scope="col">ACTION</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td scope="row">1.</td>
				<td>89</td>
				<td>A</td>
				<td>Ram Kumar</td>
				<td>Shyam Kumar</td>
				<td>9955662993</td>
				<td>13/06/2020</td>
				<td>
					<i class="fa fa-edit btn btn-primary py-1 px-2"></i>
					<i class="fa fa-eye btn btn-info py-1 px-2"></i>
					<i class="fa fa-trash btn btn-danger py-1 px-2"></i>
					
				</td>
			</tr>
			<tr>
				<td scope="row">2.</td>
				<td>89</td>
				<td>A</td>
				<td>Ram Kumar</td>
				<td>Shyam Kumar</td>
				<td>9955662993</td>
				<td>13/06/2020</td>
				<td>
					<i class="fa fa-edit btn btn-primary py-1 px-2"></i>
					<i class="fa fa-eye btn btn-info py-1 px-2"></i>
					<i class="fa fa-trash btn btn-danger py-1 px-2"></i>
					
				</td>
			</tr>
			<tr>
				<td scope="row">3.</td>
				<td>89</td>
				<td>A</td>
				<td>Ram Kumar</td>
				<td>Shyam Kumar</td>
				<td>9955662993</td>
				<td>13/06/2020</td>
				<td>
					<i class="fa fa-edit btn btn-primary py-1 px-2"></i>
					<i class="fa fa-eye btn btn-info py-1 px-2"></i>
					<i class="fa fa-trash btn btn-danger py-1 px-2"></i>
					
				</td>
			</tr>
			<tr>
				<td scope="row">4.</td>
				<td>89</td>
				<td>A</td>
				<td>Ram Kumar</td>
				<td>Shyam Kumar</td>
				<td>9955662993</td>
				<td>13/06/2020</td>
				<td>
					<i class="fa fa-edit btn btn-primary py-1 px-2"></i>
					<i class="fa fa-eye btn btn-info py-1 px-2"></i>
					<i class="fa fa-trash btn btn-danger py-1 px-2"></i>
					
				</td>
			</tr>
		</tbody>
	</table>
	</div>
</div>

</div>
<?php
        include 'include/footer.php';
?>