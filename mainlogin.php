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

<body>
    <div class="container-fluid">
        <ul id="clothingnav1" class="nav nav-tabs" role="tablist">
            <li class="nav-item"> <a class="nav-link active" href="#home1" id="hometab1" role="tab" data-toggle="tab"
                    aria-controls="home" aria-expanded="true">เข้าสู่ระบบ</a> </li>
            <li class="nav-item"> <a class="nav-link" href="#paneTwo1" role="tab" id="hatstab1" data-toggle="tab"
                    aria-controls="hats">ลงทะเบียน</a> </li>
            <!-- Dropdown -->
        </ul>
        <!-- Content Panel -->
        <div id="clothingnavcontent1" class="tab-content">
            <div role="tabpanel" class="tab-pane fade show active" id="home1" aria-labelledby="hometab1">
                <form action="checklogin.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"
                            name="email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
                            name="password">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">เข้าสู่ระบบ</button>
                </form>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="paneTwo1" aria-labelledby="hatstab1">
                <form action="checkregister.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail2">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email"
                            name="email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword2">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password"
                            name="password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword3">ชื่อ</label>
                        <input type="text" class="form-control" id="exampleInputPassword3" placeholder="กรอกชื่อ">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword4">นามสกุล</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" placeholder="กรอกนามสกุล"
                            name="lname">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword5">เบอร์โทร</label>
                        <input type="text" class="form-control" id="exampleInputPassword5" placeholder="กรอกเบอร์โทร"
                            name="phone">
                    </div>
                    <button type="submit" class="btn btn-primary">ลงทะเบียน</button>
                </form>
            </div>
        </div>
    </div>
    <!-- body code goes here -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.4.1.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.4.1.js"></script>
</body>

</html>