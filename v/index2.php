<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>TestPHP</title>
		
		<script>
			function deljs(){
//				alert("00011111111111111");

			}
		</script>
		
		<style type="text/css">
			.img{
				width: auto;
				height: 200px;
				margin: 10px;
			}
		</style>
				
	</head>
	<body>
		<a href="addInfoData.php"><h1 align="center">TEST_ADD</h1></a>

		<table width="100%" style="border-color: #2AABD2;" border="2px">
			<tr style="height: 50px;background-color: #41CAC0;">
				<td align="center">id</td>
				<td align="center">img</td>
				<td align="center">name</td>
				<td align="center">DO</td>
			</tr>
			
			<?php
				include '../conn.php';

				$conn = new Conn();
				$conn = $conn->getConn();
				$result="";
				if($conn){
					$sql = "SELECT * FROM info order by id desc";
					$result = $conn->query($sql);
				}

//				print_r("==========".json_encode($result));
				while($row = mysqli_fetch_assoc($result))
				{
					echo "<tr>".
						"<td align=\"center\">".$row['id']."</td>".
						"<td align=\"center\"><img src='".$row['img']."' class='img'/></td>".
						"<td align=\"center\">".$row['name']."</td>".
						"<td align=\"center\"><a href='../c/editeSql.php?id=".$row['id']."'>删除</a>   修改</td>".
						"</tr>";
				}
				$conn->close();
				
				
				?>
	
		</table>
	</body>
</html>
