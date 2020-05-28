
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

		<!-- Phan body -->
		<div class="container">
			<h2>Nhập Điểm</h2>
			<!-- dropdown tim thong tin -->
			<div  class="container">
					
					<button id="dropdown" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
					Tên Sinh Viên
					</button>
					<!-- Drop down name sinh vien-->
					<div id = "dropdownStudent" class="dropdown-menu">
					</div>
					<p id="importName"></p>
			</div>
			

			<!-- Drop down class -->		
			<div  class="container">
					<button id=dropdown1  type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
					Lớp
					</button>
					<div  class="dropdown-menu">
						<?php foreach($arrClass as $x => $x_value) { ?>
							<a class="dropdown-item dropdown-item-class " onchange="myFunction()" onkeyup="showName(this.value)"><?php echo $x_value ?></a>
						<?php } ?>
						
                    </div>
					<p id="importclass" ></p>
            </div>
			<!-- Lay data -->
			<script>
				var elements = document.getElementsByClassName("dropdown-item-class");

				var OnChangeStudent = function() 
				{
					
					console.log(this.getAttribute("ValueID"));
					document.getElementById("importName").innerHTML +=this.getAttribute("ValueID");
				}
								

        		var myFunction = function(value) {
					var str = this.innerHTML;
					
					document.getElementById("importclass").innerHTML = ">> " + this.innerHTML;

					//Ajax
					var xhttp = new XMLHttpRequest();
					var arrStudemt = [];

					xhttp.onreadystatechange = function() 
					{
						if (this.readyState == 4 && this.status == 200) {
							arrStudemt = JSON.parse(this.responseText);
							var dropdownStudent = document.getElementById("dropdownStudent");
							
							for(var i = 0; i < arrStudemt.length; i+=2) 
							{
								//Declare
								var j = i ;
								var obj = arrStudemt[i];
								var node = document.createElement("a");                
								var textnode = document.createTextNode(obj);      
								//Init
								node.setAttribute("ValueID", arrStudemt[++j]);
								node.appendChild(textnode);                            
								node.className = "dropdown-item dropdown-item-class";
								node.onclick = OnChangeStudent;

								dropdownStudent.appendChild(node);
							}
						}
					};
					
					xhttp.open("GET", "./Model/Data.php?q=" + str, true);
					xhttp.send();
        		};	

            	for (var i = 0; i < elements.length; i++) 
				{
                		elements[i].addEventListener('click', myFunction, true);
        		}
			</script>
			
			
		
		<!--Thanh update diem cho sinh vien -->
		<div id="Container_1"  class="container">	
			<form action="Model/UpdateMark.php" method="POST">
			<div class="form-group">
				<label>Nhập Mã Môn Học</label>
				<input type="text" class="form-control" placeholder="Nhập" name="idClass">
				<label for="number">Nhập Điểm</label>
				<input type="text" class="form-control" id="Number" placeholder="Nhập điểm" name="Mark">
			</div>
			<button type="submit" class="btn btn-primary">Đồng ý</button>
			
			</form>
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