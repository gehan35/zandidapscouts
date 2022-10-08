<?php
	$idno = filter_input(INPUT_POST,'idno');
	$firstname = filter_input(INPUT_POST,'firstname');
	$middlename = filter_input(INPUT_POST,'middlename');
	$lastname = filter_input(INPUT_POST,'lastname');
	$age = filter_input(INPUT_POST,'age');
	$birthday = filter_input(INPUT_POST,'birthday');
	$school = filter_input(INPUT_POST,'school');
	$address = filter_input(INPUT_POST,'address');
	$cellno = filter_input(INPUT_POST,'cellno');
	$outfitno = filter_input(INPUT_POST,'outfitno');
	$currentrank = filter_input(INPUT_POST,'currentrank');
	$outfitadvisor = filter_input(INPUT_POST,'outfitadvisor');
	
	$host = "localhost";
	$dbusername="id19677888_zandidap";
	$dbpassword="A8c(uiKeQtzR{}]L";
	$dbname="id19677888_zandidapscoutsinfo";

	$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);
	if(mysqli_connect_error()){
		die('Connection Failed' ('.mysqli_connect_error'.')'
			.mysqli_connect_error());
	}
	else{
		$sql = "INSERT INTO zandidapScouts(idno, firstname,middlename,lastname,age,birthday,school,address,cellno,outfitno,currentrank,outfitadvisor)
		values = ('$idno','$firstname','$middlename','$lastname',,'$age','$birthday', 'school','$address','$cellno','$outfitno','$currentrank','$outfitadvisor')";
	if($conn->query($sql)){
		echo "New Scout is added successfully!";
	}
	else{
		echo"Information Error!".$sql."<br>".$conn->error;
	}
	$conn->close();
?>