<?php
		include 'include/sql/db_connection.php';
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
		<?php
			if(isset($_SESSION['std_success'])){
				echo '<p class="bg-success text-light px-2 py-1 my-1">'.$_SESSION['std_success'].'</p>';
				unset($_SESSION['std_success']);
			}
			if(isset($_SESSION['std_error'])){
				echo '<p class="bg-danger text-light px-2 py-1 my-1">'.$_SESSION['std_error'].'</p>';
				unset($_SESSION['std_error']);
			}

		?>
		<table class="table table-dark table-bordered">
		<form method="POST">
		<tr>
			<td>
				<select class="py-1" name="class" id="class">
					<option value disabled selected>Class</option>
					<option value="Nurs.">Nur.</option>
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
				<input type="submit" value="Search" name="stdsearch" class="btn btn-warning py-1 px-2">
			</td>
		</tr>
		</form>
		</table>
	<table class="table table-striped table-light table-bordered table-hover mt-1 std_view">
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
		<?php 
			if(isset($_POST['stdsearch'])){
				$class = isset($_POST['class']) ? $_POST['class'] : null;
				$section = isset($_POST['section']) ? $_POST['section'] : null;
				$roll = $_POST['roll'];
				$idcard = $_POST['stdid'];
				$aadhaar = $_POST['aadhaar'];
				$name = $_POST['name'];
				
				//for single filter
				if($class!= null){
					$sql = "SELECT newroll,newsection,sname,fname,phone,admdate,id FROM admission WHERE newclass = '{$class}'";
				}else if($section != null){
					$sql = "SELECT newroll,newsection,sname,fname,phone,admdate,id FROM admission WHERE newsection = '{$section}'";
				}else if($roll != ""){
					$sql = "SELECT newroll,newsection,sname,fname,phone,admdate,id FROM admission WHERE newroll = '{$roll}'";
				}else if($aadhaar != ""){
					$sql = "SELECT newroll,newsection,sname,fname,phone,admdate,id FROM admission WHERE aadhaar = '{$aadhaar}'";
				}else if($name != ""){
					$sql = "SELECT newroll,newsection,sname,fname,phone,admdate,id FROM admission WHERE sname LIKE '%{$name}%'";
				}else{
					$sql = "SELECT newroll,newsection,sname,fname,phone,admdate,id FROM admission";
				}

				//For multiple filter
				if($class != null && $section != null && $roll == "" && $aadhaar == "" && $name == ""){
					$sql = "SELECT newroll,newsection,sname,fname,phone,admdate,id FROM admission WHERE newclass = '{$class}' AND newsection = '{$section}'";
				}else if($class != null && $section != null && $roll != "" && $aadhaar == "" && $name == ""){
					$sql = "SELECT newroll,newsection,sname,fname,phone,admdate,id FROM admission WHERE newclass = '{$class}' AND newsection = '{$section}' AND newroll = '{$roll}'";
				}else if($class != null && $section != null && $name != "" && $roll == "" && $aadhaar == ""){
					$sql = "SELECT newroll,newsection,sname,fname,phone,admdate,id FROM admission WHERE newclass = '{$class}' AND newsection = '{$section}' AND sname LIKE '%{$name}%'";
				}else if($class != null && $section == null && $name != "" && $roll == "" && $aadhaar == ""){
					$sql = "SELECT newroll,newsection,sname,fname,phone,admdate,id FROM admission WHERE newclass = '{$class}' AND sname LIKE '%{$name}%'";
				}
	
			}
			if(!isset($_POST['stdsearch']))
				$sql = "SELECT newroll,newsection,sname,fname,phone,admdate,id FROM admission";

			$table = mysqli_query($conn,$sql);
			$i = 1;
			if(mysqli_num_rows($table) > 0){
				while($row = mysqli_fetch_assoc($table)){
					echo '<tr>
						<td scope="row">'.$i.'</td>
						<td>'.$row['newroll'].'</td>
						<td>'.$row['newsection'].'</td>
						<td>'.$row['sname'].'</td>
						<td>'.$row['fname'].'</td>
						<td>'.$row['phone'].'</td>
						<td>'.$row['admdate'].'</td>
						<td>
							<div class="row">
								<div class="col-md-4">
									<form action="./student_edit.php" method="POST">
									<input type="hidden" name="id" value="'.$row['id'].'">
									<button class="fa fa-edit btn btn-primary py-1 px-2" name="edit_std"></button>
									</form>
								</div>
								<div class="col-md-4">
									<form action="student_single_view.php" method="POST">
									<input type="hidden" name="id" value="'.$row['id'].'">
									<button class="fa fa-eye btn btn-info py-1 px-2" name="view_std"></button>
									</form>
								</div>
								<div class="col-md-4">
									<form action="include/sql/sql_student_view.php" method="POST">
										<input type="hidden" name="id" value="'.$row['id'].'">
										<button class="fa fa-trash btn btn-danger py-1 px-2" name="remove_std"></button>
									</form>
								</div>
							</div>
						</td>
					</tr>';
					$i++;
				}
			}else{
				echo '<tr>
					<td colspan="8">No Records Found.</td>
				</tr>';
			}

		
		?>
		</tbody>
	</table>
	</div>
</div>

</div>
<?php
        include 'include/footer.php';
?>