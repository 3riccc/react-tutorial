<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>上传信息</title>
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
	<form method="post" enctype="multipart/form-data" action="http://siida.cn/zongdui_back/uploadInfo.php">
		<label for="name">你的名字</label>
		<input type="text" name="name"/>
		<label for="code">上传码</label>
		<input type="text" name="code" placeholder="上传码仅供内部使用，如不知道请询问同伴">
		<label for="file">Filename:</label>
		<input type="file" name="file" id="file" /> 
		<br />
	<input type="submit" name="submit" value="Submit" />
</form>
</body>
</html>