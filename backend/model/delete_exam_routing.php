<?php
include_once('../controller/config.php');
if(isset($_GET["do"])&&($_GET["do"]=="delete_exam_routing")){

	$classroom_id=$_GET["classroom"]; 
	$exam_id=$_GET["exam"]; 
	$subject_id=$_GET["subject"]; 
	$page=$_GET["page"]; 
	$msg=0;
	
	$sql="DELETE FROM exam_routing WHERE classroom_id='$classroom_id' and exam_id='$exam_id' and subject_id='$subject_id'";		

	if(mysqli_query($conn,$sql)){
		$msg+=1; 
	}else{
		$msg+=2; 
	}
	
	$res=array($msg,$page,$sql);
	echo json_encode($res);

}
?>
