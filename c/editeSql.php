<?php

	include '../conn.php';

//	function delData(){

		$table="info";
		$id=$_GET["id"];
		
		$conn = new Conn();
		$conn = $conn->getConn();
		if($conn){
//			echo "----------------";
			$sql = "delete from ".$table." where id =".$id;

			$result = $conn->query($sql);
//			echo $result;
			if($result){
				echo "删除成功";
			}else{
				echo "删除失败";
			}
			
			echo '<br/><a href="../v/index2.php">返回</a>';
		}
		$conn->close();
//	}
?>