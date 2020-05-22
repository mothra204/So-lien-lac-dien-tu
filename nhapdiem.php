<?php
    include_once "__DIR__/../Model/Utility.php";
    session_start();
    $oUtility = new cUtility;
	$arrClass = $oUtility->GetClass();
	$arrName = $oUtility->GetName();
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
			<li><a href="#">Xem Điểm</a></li>
			<li><a href="nhapdiem.html">Nhập Điểm</a></li>
			<li><a href="#">Tin Tức</a></li>
			<li><a href="Guide.html">Hướng Dẫn</a></li>
		</ul>
		</div>	
		</header>	

		<!-- Phan body -->
		<div class="container">
			
			<h2>Nhập Điểm</h2>
			<!-- dropdown tim thong tin -->
			<div  class="container">
					
						<button id="dropdown" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
					Tên Sinh Viên
					</button>
					<!-- Drop down name sinh vien-->
					<div class="dropdown-menu">
					<?php foreach($arrName as $v) { ?>
						<a class="dropdown-item dropdown-item-name" > <?php echo $v ?> </a>
					<?php } ?>
					</div>
			</div>
			



			<!-- Drop down class -->		
			<div  class="container">
					<button id=dropdown1  type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
					Lớp
					</button>
					<div class="dropdown-menu">
					<?php foreach($arrClass as $x => $x_value) { ?>
						<a class="dropdown-item dropdown-item-class " onchange="myFunction()" onkeyup="showName(this.value)"><?php echo $x_value ?></a>
					<?php } ?>
                    </div>
					<p id="importclass" ></p>
            </div>
			<script>
				var elements = document.getElementsByClassName("dropdown-item-class");
        		var myFunction = function(value) {
					console.log(this.innerHTML);
					document.getElementById("importclass").innerHTML = "You selected: " + this.innerHTML;
        		};	
            		for (var i = 0; i < elements.length; i++) {
                		elements[i].addEventListener('click', myFunction, true);
        		}
			</script>
			<script>
				function showName(str){
					if(str.length==0){
						document.getElementsByClass("dropdown-item-class").innerHTML="";
						return;
					} else{
						var xmlhttp = new XMLHttpRequest();
						xmlhttp.onreadystatechange = function() {
						if (this.readyState == 4 && this.status == 200) {
							document.getElementById("importclass").innerHTML = this.responseText;
						}
						};
							xmlhttp.open("GET", "Utility.php?q=" + str, true);
							xmlhttp.send();
					}
				}
			</script>


			<!--<a class="dropdown-item" href="#" value='".$x_value."' id="class" onchange="myFunction()"><?php echo $x_value ?></a>-->	
			
			
		<div id="Container_1"  class="container">	
			<form action="nhapdiem.php">
			<div class="form-group">
				<label for="number">Điểm bài tập 1 </label>
				<input type="number" class="form-control" id="Number" placeholder="Nhập điểm" name="mark1">
			</div>
			
			<div class="form-group">
				<label for="number">Điểm bài tập 2 </label>
				<input type="number" class="form-control" id="Number" placeholder="Nhập điểm" name="mark2">
			</div>
			
			<div class="form-group">
				<label for="number">Điểm quá trình </label>
				<input type="number" class="form-control" id="Number" placeholder="Nhập điểm" name="mark3">
			</div>
			
			<div class="form-group">
				<label for="number">Điểm Thi </label>
				<input type="number" class="form-control" id="Number" placeholder="Nhập điểm" name="mark4">
			
				<div class="form-group">
				<label for="number">Điểm Tổng </label>
				<input type="number" class="form-control" id="Number" placeholder="Nhập điểm" name="mark5">
			</div>
			
			<div class="form-group form-check">
				<label class="form-check-label">
				<input class="form-check-input" type="checkbox" name="remember"> Đã kiểm tra
				</label>
			</div>
			<button type="submit" class="btn btn-primary">Đồng ý</button>
			</form>
		</div>

		</div>
		

<p>Nếu bạn đã nhập xong, hãy kiểm tra lại và bấm vào nút "Đồng ý"</p>
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