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

		$imageNewName = $sname."_".$document.".png";

		$documentname = $_FILES['sdocument']['name'];
		$documenttmp = $_FILES['sdocument']['tmp_name'];

		$documentNewName = $document."_".$sname.".png";

		$sql ="INSERT INTO admission(
			sname,
			fname,
			mname,
			pname,
			foccup,
			moccup,
			poccup,
			dob,
			gender,
			religion,
			category,
			bgroup,
			aadhaar,
			address,
			dist,
			state,
			pincode,
			phone,
			altphone,
			oldclass,
			oldschool,
			photo,
			document_image,
			newclass,
			newsection,
			newroll,
			admdate
		) VALUES (
			'{$sname}',
			'{$fname}',
			'{$mname}',
			'{$pname}',
			'{$foccup}',
			'{$moccup}',
			'{$poccup}',
			'{$dob}',
			'{$gender}',
			'{$religion}',
			'{$category}',
			'{$bgroup}',
			'{$document}',
			'{$address}',
			'{$dist}',
			'{$state}',
			'{$pincode}',
			'{$pnumber}',
			'{$altnumber}',
			'{$oldclass}',
			'{$oldschool}',
			'{$imageNewName}',
			'{$documentNewName}',
			'{$newclass}',
			'{$section}',
			'{$roll}',
			'{$admindate}'
		)";

		if(mysqli_query($conn,$sql)){
			move_uploaded_file($imagetmp, "student_image_and_document/".$imageNewName);
			move_uploaded_file($documenttmp, "student_image_and_document/".$documentNewName);
			echo "Successfully Inserted";
		}
		else
			echo "Error".mysqli_error($conn);


	}




?>