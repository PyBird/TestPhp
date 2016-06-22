<?php

	include '../conn.php';
	
	$conn = new Conn();
	$conn = $conn->getConn();
	
	$json = array('status'=>'1','info'=>'查询成功');
	
	if($conn){
		
		$sql = "SELECT * FROM info order by id desc ";
		$result = $conn->query($sql);
					
		 //数据集
   		$data=array();
   		$i=0;
   		while($row=mysqli_fetch_assoc($result)){
//			echo $row['id'].'-----------'.$row['name'].'</br>';
//			echo $row['id'].'-----------'.json_encode($row).'</br>';
			$data[$i]=$row;
			$i++;
   		}
 
 		$json['data']=$data;
 
	}else{
		$json = array('status'=>'0','info'=>'查询失败');
	}

	print_r(json_encode($json));
?>