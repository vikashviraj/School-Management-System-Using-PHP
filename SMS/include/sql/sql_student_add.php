<?php
	//Student admission
	
	if(isset($_POST['register'])){
		include 'db_connection.php'; //Database connection module

		//Data receive from html form
		$sname = $_POST['sname'];
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$pname = $_POST['pname'];

		$foccup = $_POST['foccup'];
		$moccup = $_POST['moccup'];
		$poccup = $_POST['poccup'];

		$dob = $_POST['dob'];
		$gender = $_POST['gender'];
		$religion = $_POST['religion'];
		$category = $_POST['category'];
		$bgroup = $_POST['bgroup'];
		$document = $_POST['aadhaar'];

		$address = $_POST['address'];
		$dist = $_POST['dist'];
		$state = $_POST['state'];
		$pincode = $_POST['pin'];

		$pnumber = $_POST['primaryno'];
		$altnumber = $_POST['alterno'];

		//Last School Info.
		$oldclass = $_POST['oldclass'];
		$oldschool = $_POST['oldschool'];

		//New Class/Admission Info.
		$newclass = $_POST['newclass'];
		$section = $_POST['section'];
		$roll = $_POST['roll'];
		$admindate = $_POST['addate'];

		//Image Receive and Store

		$imagename = $_FILES['sphoto']['name'];
		$imagetmp = $_FILES['sphoto']['tmp_name'];
		if(move_uploaded_file($imagetmp, "../../Data/student_image_and_document/".$imagename)){
			echo "Photo sent";
		}

		$documentname = $_FILES['sdocument']['name'];
		$documenttmp = $_FILES['sdocument']['tmp_name'];
		if(move_uploaded_file($documenttmp, "../../Data/student_image_and_document/".$documentname)){
			echo "Document sent";
		}


	}




?>