<?php

	include '../conn.php';
	
	$img = $_POST['img'];
	$name = $_POST['name'];
	
	$conn = new Conn();
	$conn = $conn->getConn();
	if($conn){
		$sql = "insert into info(img,name) values('".$img."','".$name."')";

		$result = $conn->query($sql);
		if($result){
			echo "添加成功";
		}else{
			echo "添加失败";
		}
			
		echo '<br/><a href="../v/index2.php">返回</a>';
	}
	
	$conn->close();
?>