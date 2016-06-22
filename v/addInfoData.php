<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>AddData</title>
		
		<style type="text/css">
			.textinput{
				width: 100%;
				height: 30px;
				text-align: center|left;
				margin-top: 5px;
				border-color: #255625;
			}
		</style>
	</head>
	<body>
		<h1 align="center">Add</h1>
		
		<form action="../c/addInfoData.php" method="post">
			
			<table style="width: 50%;border: none;" align="center">
				<tr>
					<td width="50px">img</td>
					<td width="100%"><input type="text" name="img" value="" class="textinput" /></td>
				</tr>
				<tr>
					<td width="50px">name</td>
					<td width="100%"><input type="text" name="name" value="" class="textinput" /></td>
				</tr>
			</table>
			
			<center>
				<input type="submit" value="提交" style="margin-top: 20px;width: 100px;height: 40px;background: #B2DBA1;"/>
			</center>

		</form>
		
	</body>
</html>
