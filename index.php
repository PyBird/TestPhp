<?php

include 'conn.php';

header("content-type:text/html;charset=utf-8");

	$_hhh = "9099090909";
	print_r("456464654!!!！！和建行和健康44444"."<br>");
	echo $_hhh;
	echo '<br/><a href="v/index2.php">index.html123456</a>';
	thisOut("45645645654PPPPPPPPPP");
	
	mysql();

	function thisOut($dname){
		echo "<br>". '类名为：'  . __CLASS__ ;
		echo  '<br/>函数名为：' . __FUNCTION__ ;
		echo "<br/>".$dname;
		
//		echo '<br/>*****************-- '  .$servername."---".$username;
	}
	
	echo '<br/>该文件位于 “ '  . __FILE__ . ' ” ';
	echo '<br/>该文件位于文件 “ '  . __DIR__ . ' ” ';
	echo '<br/>这是第 “ '  . __LINE__ . ' ” 行';
	echo '<br/>这是方法名-- '  . __METHOD__;

	phpinfo();
	
	function mysql(){

//	$servername = "localhost:3306";
//	$username = "root";
//	$password = "root";
//	$database = "news";
	
	// 创建连接
//	$conn = new mysqli($servername, $username,$password,$database);
//
//	// 检测连接
//	if ($conn->connect_error) {
//  	die("Connection failed: " . $conn->connect_error);
//		echo "<br/>-----------Error----------------";
//	}
//		echo "<br/>-----------Connected successfully";
		
//		mysql_query('news',$conn);//选择库
//		mysql_query('set names utf-8',$conn);//设置字符集
	
//		$conn = new Conn();
//		$conn = $conn->getConn();
//		$result="";
//		if($conn){
//			$sql = "SELECT * FROM info";
//			$result = $conn->query($sql);
//		}
//
//	while($row = mysqli_fetch_array($result))
//	{
//		echo $row['id'] . " " . $row['img']. " " . $row['name'];
//		echo "<br />";
//	}
//		$conn->close();
	}
	
?>