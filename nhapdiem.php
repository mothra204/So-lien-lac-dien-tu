
<?php
	include_once "__DIR__/../Model/Utility.php";
	session_start();
	$oUtility = new cUtility;
	$arrClass = $oUtility->GetClass();
?>
<!DOCTYPE html>
<html>
<head>
	<title>SỔ LIÊN LẠC ĐIỂN TỬ HUTECH</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css" /> -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="shortcut icon" type="img/jpg" href="img/logohutech.jpg">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/nhapdiem.css">
	<style>
		#menu ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
		background-color: rgb(51, 105, 223);
		}
		
		#menu li{
			color: wheat;
			float: left;
		}
		
		#menu li a {
		display: block;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
		}
		#menu a{
			text-decoration: none;
			display: block;
		}
		#menu a:hover{
			background: #f1f1ff;
			color: #333;
		}

		li {
			list-style: none;
			text-align: center;
			background: rgb(51, 105, 223);
		}
		</style>
	
</head>
	<body>
		<header>
		<div id="menu">
		<ul>
			<li><a class="active" href="index.php">Trang Chủ</a></li>
			<li><a href="#">Tin Tức</a></li>
			<li><a href="Guide.html">Hướng Dẫn</a></li>
		</ul>
		</div>	
		</header>	
		<!--Thanh update diem cho sinh vien -->
		<div id="Container_1"  class="container">	
			<form action="Model/InsertMark.php" method="POST">
			<div class="form-group">
				<label>Nhập ID Sinh Viên</label>
				<input type="text" class="form-control" placeholder="Nhập ID" name=idSv> 
				<label>Nhập Mã Môn Học</label>
				<input type="text" class="form-control" placeholder="Nhập" name="idClass">
				<label for="number">Nhập Điểm</label>
				<input type="text" class="form-control" id="Number" placeholder="Nhập điểm" name="Mark">
			</div>
			<button type="submit" class="btn btn-primary">Đồng ý</button>
			
			</form>
			<p>Nếu bạn đã nhập xong, hãy kiểm tra lại và bấm vào nút "Đồng ý"</p>
		</div>
		

		<footer>
		<div id="footer">
			<ul>
				<li>
					<a href="https://www.facebook.com/THN.Mothra">
					Thông tin xin liên hệ
					</a>
				</li>
			</ul>
		</div>
		</footer>
	</body>
	
</html>    