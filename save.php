<?php
include_once 'connection.php';
?>
<?php
		
		$vote = $_REQUEST['vote'];


		mysqli_query($conn, "UPDATE tbcandidates SET candidate_cvotes=candidate_cvotes+1 WHERE candidate_name='$vote'");

		mysqli_close($mysqli);
?> 
