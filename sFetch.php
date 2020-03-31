<?php
include('submission_server.php');

		if (isset($_GET['edit'])) {
		$materialID = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM submission");
		
		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
		$materialID = $n['materialID'];
		$recycler = $n['recycler'];
		$status = $nT['status'];
		}
		
	}
$connect = mysqli_connect("localhost", "root", "", "greenwave");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM submission
	WHERE recycler LIKE '%".$search."%'
	OR materialID LIKE '%".$search."%'  
	OR status LIKE '%".$search."%' 
	
	";
}
else
{
	$query = "
	SELECT * FROM submission ORDER BY recycler";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Material ID</th>
							<th>Recycler</th>
							<th>Weight In Kg</th>
							<th>Status</th>
							
							
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["recycler"].'</td>
				<td>'.$row["materialID"].'</td>
				<td>'.$row["status"].'</td>
				<td>
					<a href="submission.php?edit=<?php echo '.$row["submissionID"].'; ?>" class="edit_btn" >Accept</a>
				</td>
				<td>
					<a href="submission_server.php?del=<?php echo '.$row["submissionID"].'; ?>" class="del_btn" >Reject</a>
				</td>
			
				
			</tr>
		';
		
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>
<script>
$(document).ready(function(){
	$('#edit_btn').click(function(){
  		$('#MyForm').toggle(500);
  });
});
</script>