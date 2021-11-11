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
          <li class="nav-item"> <a href="History.php" class="nav-link active">ประวัติ</a></li>
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
    <img class="d-block w-100" src="Images/ประวัติ.jpg" alt="First slide">
  <article class="left_article">
    <h2>	จากผู้พันแซนเดอร์ส สู่ร้าน KFC</h2>
    <p>ร้าน KFC ถือกำเนิดอย่างเป็นทางการในปี พ.ศ. 2495 โดยผู้พันแซนเดอร์สได้ขายแฟรนไชส์แรกให้กับ พีท ฮาร์แมน เพื่อนที่รู้จักกันระหว่างเรียนหลักสูตรบริหารร้านอาหารและ เป็นเจ้าของร้านอาหารอยู่ในรัฐยูทาห์ ซึ่งฮาร์แมนยังเป็นคนตั้งชื่อ  <br>
   “ไก่ทอดจากรัฐเคนตั๊กกี้” (Kentucky Fried Chicken) ขึ้นเป็นจุดขายจนกลายเป็นชื่อแฟรนไชส์ในที่สุดด้วย</p>
<p></p>
  </article>
  <div class="row">
    <div class="col-md-6 col-12 text-center"> <img class="img-fluid" src="Images/หนวด1.jpg" alt=""></div>
    <div class="col-md-6 col-12 text-center mt-md-0 mt-2"> <img class="img-fluid" src="Images/หนวด2.jpg" alt="">    </div>
  </div>
  <p>
	  <br>

    <span style="font-size: 24px">2527
KFC เปิดสาขาแรกในประเทศไทยกับพันธมิตรใหญ่อย่าง เซ็นทรัล เรสเตอรองต์ กรุ๊ป จำกัด (CRG) ที่เซ็นทรัลลาดพร้าว<br>


2559
เรสเตอรองต์ ดีเวลลอปเม้นต์ (RD) เข้ามาผลึกกำลัง ร่วมผลักดันธุรกิจเฟรนไชส์ KFC ให้เติบโตอย่างมีประสิทธิภาพ<br>


2560
เป็นปีแห่งความสำเร็จของ KFC หลังจากผันตัวเองสู่รูปแบบ ธุรกิจแฟรนไชส์ 100% และมีพันธมิตรอย่าง คิวเอสอาร์ออฟเอเชีย (QSA) เข้าร่วมด้วย<br>


2563
เปิดประสบการณ์ล้ำกลางเมือง กับ KFC แฟลกชิปสโตร์ แห่งแรกของไทย ที่สามย่าน มิตรทาวน์ ให้บริการ 24 ชั่วโมง ด้วยระบบที่ทันสมัย ตอบรับกับไลฟ์สไตล์ที่เปลี่ยนไป</span></p>
<footer>© KFC Thailand. All rights reserved.</footer>
<script src="js/jquery-3.4.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script> 
  <script src="js/bootstrap-4.4.1.js"></script>
  </body>
</html>