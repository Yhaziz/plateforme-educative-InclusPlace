<?php
include_once('../controller/config.php');
if(isset($_GET["do"])&&($_GET["do"]=="delete_record")){

	$id=$_GET["id"]; 
	$page=$_GET["page"]; 
	$msg=0;

	$sql="DELETE FROM classroom WHERE id='$id'";	

	if(mysqli_query($conn,$sql)){
		
		$sql1="DELETE FROM exam_range_classroom WHERE classroom_id='$id'";
		
		if(mysqli_query($conn,$sql1)){
			$msg+=1; 
		}
		
	}else{
		$msg+=2; 
	}
	
	$res=array($msg,$page);
	echo json_encode($res);

}
?>
