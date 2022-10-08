<?php
	try{
		$dsn = "mysql dbname =id19677888_zandidapscoutsinfo	 ; host = localhost";
		$user:"id19677888_zandidap	";
		$pswd:"A8c(uiKeQtzR{}]L";

		$conn = new PD0($dsn, $user, $pswd);

		$conn -> quert("USE id19677888_zandidapscoutsinfo")
	}
	catch(PD0Exception $e){
		die("Error Connecting: ".$e->getMessage());
	}
?>