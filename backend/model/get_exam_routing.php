<?php
include_once('../controller/config.php');
$id=$_GET["id"];

$sql = "select exam_routing.id as exr_id,classroom.id as g_id,exam.id as e_id,subject.id as s_id
		from exam_routing
		inner join classroom
		on exam_routing.classroom_id=classroom.id 
		inner join subject
		on exam_routing.subject_id=subject.id 
		inner join exam
		on exam_routing.exam_id=exam.id
		where exam_routing.id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

$res=array($row['exr_id'],$row['g_id'],$row['e_id'],$row['s_id']);
echo json_encode($res);

?>	