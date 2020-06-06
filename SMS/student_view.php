<?php
        include 'include/header.php';
        include 'include/menu.php';
        include 'include/top-header.php';
?>
<div class="container-fluid">
<div class="row">
        <div class="col-md-2 bg-info">
               <div align="center" class="btn-light text-dark pt-1 pl-3 pr-3 pb-1 m-1 rounded"><a href="index.php" ><i class="fa fa-home text-dark pr-1"> </i></a><span><b>- Student</b></span><a href="student_view.php" class="text-danger fw-bold"> - View</a></div>
        </div>
        <div class="col-md-10 bg-info">
                <h2 class="text-center heading-title">Students Details</h2>
        </div>
</div>
<div class="row">
	<table class="table table-responsive">
		<tr>
			<th>SNO.</th>
			<th>ROLL</th>
			<th>SECTION</th>
			<th>NAME</th>
			<th>FATHER'S NAME</th>
			<th>PHONE</th>
			<th>ADMIN.</th>
			<th>ACTION</th>
		</tr>
	</table>
</div>

</div>
<?php
        include 'include/footer.php';
?>