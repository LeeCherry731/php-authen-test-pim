<?php
	session_start();
	if($_SESSION['checklogin']==""){
		header("location:mainlogin.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Untitled Document</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap-4.4.1.css" rel="stylesheet">
	<link href="css/EZ.css" rel="stylesheet" type="text/css">
  </head>
  <body style="padding-top: 70px">
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark"> <a class="navbar-brand" href="#"><img src="Images/ลุงหนวด.png" width="48" height="46" alt=""/>KFC</a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent1">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active"> <a class="nav-link" href="Index.php">หน้าแรก<span class="sr-only">(current)</span></a> </li>
          <li class="nav-item"> <a class="nav-link" href="Allprod.php">สินค้าทั้งหมด</a> </li>
          <li class="nav-item"> <a class="nav-link" href="History.php">ประวัติ</a></li>
          <li class="nav-item"> <a class="nav-link" href="Contact.php">ติดต่อเรา</a></li>
	        <li class="nav-item dropdown">
	          <div class="dropdown-menu" aria-labelledby="navbarDropdown1"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
	            <a class="dropdown-item" href="#">Something else here</a> </div>
        </li>
	        <li class="nav-item"> </li>
        </ul>
</div>
  </nav>
  <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel" style="background-color: grey">
	    <ol class="carousel-indicators">
	      <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
	      <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
	      <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
    </ol>
	    <div class="carousel-inner" role="listbox">
	      <div class="carousel-item active"> <img src="Images/Ban1.jpg" alt="First slide" class="d-block mx-auto w-100">          </div>
	      <div class="carousel-item"> <img src="Images/Ban2.jpg" alt="Second slide" class="d-block mx-auto w-100">          </div>
	      <div class="carousel-item"> <img src="Images/Ban3.jpg" alt="Third slide" class="d-block mx-auto w-100">          </div>
    </div>
	    <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
  <div class="box">
    <h2>สินค้าใหม่</h2>
    <div class="row text-center">
      <div class="col-md-4 pb-1 pb-md-0">
        <div class="card"> <img class="card-img-top" src="Images/p1.png" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">ชิค แอนด์ บัน</h4>
            <p class="card-text">ไก่ไม่มีกระดูกใส่ในขนมปังเนื้อนุ่ม <br>
            ราดด้วยซอสมายองเนสรสชาติเข้มข้นสูตรพิเศษ</p>
          <a href="#" class="btn btn-primary">29 บาท</a></div>
        </div>
      </div>
      <div class="col-md-4 pb-1 pb-md-0">
        <div class="card"> <img class="card-img-top" src="Images/p2.png" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">ไก่ถูกใจ</h4>
            <p class="card-text">ไก่ทอด 6 ชิ้น<br>

นักเก็ตส์ 8 ชิ้น<br>

ไก่ป๊อป 14 ชิ้น<br>

เฟรนชฟรายส์ (ใหญ่) 1 ที่<br>

มันบด (ปกติ) 1 ที่</p>
            <a href="#" class="btn btn-primary">299 บาท</a></div>
        </div>
      </div>
      <div class="col-md-4 pb-1 pb-md-0">
        <div class="card"> <img class="card-img-top" src="Images/p3.png" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">บักเก็ตให้โชค</h4>
            <p class="card-text">ไก่ทอด 4 ชิ้น<br>

ไก่วิงซ์แซ่บ 2 ชิ้น<br>

นักเก็ตส์ 4 ชิ้น<br>

เป๊ปซี่ 2 ที่*</p>
            <a href="#" class="btn btn-primary">239 บาท</a></div>
        </div>
      </div>
    </div>
    <div class="row text-center">
      <div class="col-md-4 pb-1 pb-md-0">
        <div class="card"> <img class="card-img-top" src="Images/p4.png" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">ชิคแอนด์แชร์ แพลนต์เบสป๊อป</h4>
            <p class="card-text">อร่อยจัดเต็มกับทั้งบักเก็ตกับ แพลนต์เบสป๊อป</p>
          <a href="#" class="btn btn-primary">119 บาท</a></div>
        </div>
      </div>
      <div class="col-md-4 pb-1 pb-md-0">
        <div class="card"> <img class="card-img-top" src="Images/p5.png" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">เดอะบอกซ์ แพลนต์เบส</h4>
            <p class="card-text">1 ข้าวแพลนต์เบส
แซ่บ โบว์ล
7 ชิ้น<br>
 แพลนต์เบสป๊อป
มันบด (ปกติ) 1 ที่<br>

เฟรนช์ฟรายส์ (ปกติ) 1 ที่<br>

เป๊ปซี่ 1 ที่*</p>
            <a href="#" class="btn btn-primary">179 บาท</a></div>
        </div>
      </div>
      <div class="col-md-4 pb-1 pb-md-0">
        <div class="card"> <img class="card-img-top" src="Images/p6.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">สลัดญี่ปุ่นยูซุโชยุ</h5>
            <p class="card-text">สลัดญี่ปุ่นยูซุโชยุ</p>
            <a href="#" class="btn btn-primary">75 บาท</a></div>
        </div>
      </div>
    </div>
  <img src="Images/banner.jpg" alt="Placeholder image" class="img-fluid w-100"> </div>
  <footer>© KFC Thailand. All rights reserved.</footer>
<script src="js/jquery-3.4.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script> 
  <script src="js/bootstrap-4.4.1.js"></script>
  </body>
</html>