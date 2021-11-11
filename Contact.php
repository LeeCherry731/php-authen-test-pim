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
          <li class="nav-item"> <a class="nav-link" href="Index.php">หน้าแรก<span class="sr-only">(current)</span></a> </li>
          <li class="nav-item"> <a class="nav-link" href="Allprod.php">สินค้าทั้งหมด</a> </li>
          <li class="nav-item"> <a class="nav-link" href="History.php">ประวัติ</a></li>
          <li class="nav-item"> <a href="Contact.php" class="nav-link active">ติดต่อเรา</a></li>
	        <li class="nav-item dropdown">
	          <div class="dropdown-menu" aria-labelledby="navbarDropdown1"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
	            <a class="dropdown-item" href="#">Something else here</a> </div>
        </li>
	        <li class="nav-item"> </li>
        </ul>
</div>
  </nav>
  <h5>ช่องทางติดต่อ<br>
    <div class="row">
      <div class="col-xl-6"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26116.4953156002!2d100.97646229798741!3d13.335325530270914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d4b8a3700611b%3A0x5d63acdc5176a8dc!2sKFC!5e0!3m2!1sth!2sth!4v1635682943225!5m2!1sth!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
      <div class="col-xl-6">วิทยาลัยเทคโนโลยีภาคตะวันออก (อี.เทค) <br>
Address:  231 หมู่ 2 ต.หนองตำลึง อ.พานทอง จ.ชลบุรี
  <br>
  Postal Code:  20160
  <br>
  Country:  Thailand
 Phone:  038-206-081-3
  <br>
Fax:  038-206-788
<br>
Webpage:  https://www.e-tech.ac.th/<br>
ถ้ามาทางมอเตอร์เวย์ ลงที่ทางแยก ชลบุรี - พนัสนิคม ไปทางพนัสนิคมประมาณ 800 เมตร ถ้ามาทางสุขุมวิทถึงสี่แยกเฉลิมไทย เลี้ยวไปทางพนัสนิคมประมาณ 8 กิโลเมตร 
      </div>
      <h5 style="text-align: left">ฝากข้อความ</h5>
</div>
	  
  </h5>
<form>
  <div class="form-group">
<input type="email" class="form-control" id="exampleInputEmail1" placeholder="ชื่อ-สกุล">
</div>
    <div class="form-group">
<input type="password" class="form-control" id="exampleInputPassword1" placeholder="อีเมล">
    </div>
  <div class="form-group">
      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="หัวเรื่อง">
    </div>
    <div class="form-group">
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="ข้อความ">
    </div>
<button type="submit" class="btn btn-primary w-100">ส่งข้อความ</button>
  </form>
  <footer>© KFC Thailand. All rights reserved.</footer>
<script src="js/jquery-3.4.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script> 
  <script src="js/bootstrap-4.4.1.js"></script>
  </body>
</html>