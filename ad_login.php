<?php
if(!empty($_SERVER['HTTP_CLIENT_IP']))
{
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];

}
elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
{
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
}
else{
    $ip_address =$_SERVER['REMOTE_ADDR'];
}

?>


<?php

$connect=mysqli_connect("localhost","root","","ice-cream") or die("connection failed");
if(!empty($_POST['save'])){
    $username=$_POST['un'];
    $password=$_POST['pw'];

    $sql = "INSERT INTO ip_ad (mail,ip) VALUES ('$username','$ip_address');";
    mysqli_query($connect,$sql);

    $query="select * from admin where username='$username' and password='$password'";
    $result=mysqli_query($connect,$query);
    $count=mysqli_num_rows($result);
    if($count>0){
        echo"<script>alert('success.');</script>";
        header("Location: admin_panel.php?login_Admin_panel");
    }else{
        echo"<script>alert('username or password invalid. retry');</script>";
        
    }
}


?>


<!DOCTYPE html>
<html>
<head>
    <title>
        Admin_login
    </title>
    <link rel="stylesheet" type="text/css" href="css1/boostap_layer.css">
    <link rel="stylesheet" type="text/css" href="css/ad_login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container my-container">
    <header>
                <?php include ('header.html')?>
    </header>
        <div class="row my-row">
            <div class="col-lg-6 col-md-6 col-sm-6 align-self-start my-col">
                <div class="logo">
                    <img src="image/logo/Frozen.png" width="100px" height="100px" id="img" ></br>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 align-self-start my-col">
                    <div class="butt">
                        <a href="index.php"><button>GO Home</button></a>
                    </div>
            </div>
        </div>
        <div class="row my-row">
            <div class="col-lg-12 col-md-12  col-sm-12  my-col">
                
                    <form method="post">
                            <img src="image/other/3.png" width="200px" id="login-image"><br><br>
                            <input type="text" name="un" placeholder="Enter Admin name" required/></br></br>
                            <input type="password" name="pw" placeholder="Enter Password" required/></br></br>
                            <input type="submit" name="save" id="submit"/></br></br></br></br>
                    </form>
                
            </div>
            
        </div>
            <div class="row my-row">
                <div class="col-lg-12 col-md-12 col-sv-12 col-xs-12 my-col" id="fg"></br></br></br></br>
                <h1 id="logo_txt">FROZEN-ICECREAM</h1></br></br></br></br>
                </div>
                
            </div>
</br>
            <footer>
                    <?php include('footer1.html');?>
                 </footer>    
        </div>
    
    


</body>
</html>