<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SỔ LIÊN LẠC ĐIỂN TỬ HUTECH</title>
	<link rel="stylesheet" type="text/css" href="css/styte.css" />
	<link rel="shortcut icon" type="img/jpg" href="img/logohutech.jpg">
</head>
	<body>	
	<div id="top_bar">
	<?php 
            if ($_SESSION['Role_ID'] == '1')
            {
	?>
            <h1><a href="nhapdiem.html">NHAP DIEM</a></h1>
            <h1><a href="url">XEM DIEM</a></h1>
	<?php 
            }else
	?>
	<?php 
            if ($_SESSION['Role_ID'] == '2')
            {
	?>
	<h1><a href="url">XEM DIEM</a></h1>
	<?php 
			}
	?>
</div> 
		<div id="menu_top">
			<ul>
				<li><a href="index.html" title="Truy cập vào Trang Chủ" Class="active">Trang Chủ</a></li>
				<li><a href="gioithieu.html" title="Truy cập vào Giới Thiệu">Giới Thiệu</a></li>
				
				<li><a href="http://localhost:8080/testlogin/url" title="Xem Điểm">Xem Điểm</a></li>
				<li><a href="#" title="Thông Báo">Thông Báo</a></li>
				<li><a href="detail.html" title="Hướng Dẫn">Hướng Dẫn</a></li>		
			</ul>
		</div>
		<div id="banner">
			<img src="img/hutech.png" />
		</div>
		<div id="main">
			<div id="left">
				<ul>
					<li>
						<img src="img/thongbao1.jpg" />
						<h2><a href="https://www.hutech.edu.vn/tuyensinh/tin-tuc/tin-tuyen-sinh/14583411-chuoi-chuong-trinh-tu-van-tuyen-sinh-truc-tuyen-your-future-your-choice-se-bat-dau-tu-232" title="Tin tức">Your Futrue - Your Choice</a></h2>
						Ngày 23/2/2020 tới đây, chương trình Tư vấn tuyển sinh trực tuyến 2020 với chủ đề “Your Future - Your Choice”...
					</li>

					<li>
						<img src="img/thongbao2.jpg" />
						<h2><a href="https://www.hutech.edu.vn/viendtn/tin-tuc/14583662-bo-truong-gd-dt-quyet-dinh-lui-thi-thpt-quoc-gia-va-thoi-diem-ket-thuc-nam-hoc" title="Tin tức">Thời gian thi THPT quốc gia</a></h2>
						Bộ GD-ĐT quyết định lùi thi THPT quốc gia và thời điểm kết thúc năm học
					</li>

					<li>
						<img src="img/thongbao3.png" />
						<h2><a href="https://www.hutech.edu.vn/e-hutech/tin-tuc-su-kien/14583635-sinh-vien-hutech-tiep-tuc-nghi-hoc-den-het-ngay-293-de-phong-chong-dich-benh-covid-19" title="Tin tức">Dời thời gian nhập học trở lại</a></h2>
						Sinh viên trường Đại học Công nghệ TP.HCM (HUTECH) sẽ tiếp tục nghỉ học đến hết ngày 29/3.
					</li>
				</ul> 
			</div>
			
		</div>
		<div id="footer">
			<ul>
				<li>
					<a href="https://www.facebook.com/THN.Mothra">
					Thông tin xin liên hệ
					</a>
				</li>
			</ul>
		</div>
	</body>
</html>