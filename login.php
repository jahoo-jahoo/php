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


$connect=mysqli_connect("localhost","root","","ice-cream") or die("connection failed");
if(!empty($_POST['save'])){
    $username=$_POST['un'];
    $password=$_POST['pw'];
    $query="select * from user where email='$username' and u_password='$password'";
    
    $result=mysqli_query($connect,$query);
    
    $count=mysqli_num_rows($result);

    

    #$myfile = fopen("$username.txt","w");
    #$txt = $username;
    #fwrite($myfile, $txt);
    #fclose($myfile);

    

    if($count>0){
        $sql = "INSERT INTO ip_ad (mail,ip) VALUES ('$username','$ip_address')";
        mysqli_query($connect,$sql);
        header("Location: home.php?login success");
    }else{
        
        echo"<script>alert('username or password invalid.');</script>";
    }
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>user Login</title>
    
    <link rel="stylesheet" type="text/css" href="css1/boostap_layer.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container my-container">
    <header>
                <?php include ('header.html')?>
    </header>
        <div class="row my-row">
            <div class="col-md-2 col-sm-12 my-col">
                <div class="logo">
                <img src="image/logo/Frozen.png" width="100px" height="100px" id="img" ><br>
                </div>
            </div>
            <div class="col-md-10 col-sm-12 my-col">
                &nbsp;
            </div>
        </div>
        <div class="row my-row">
            <div class="col-lg-4 col-sm-12 my-col">
                <div class="form_layer">
                    <div class="row my-row">
                        <div class="col-12 my-col2">
                            &nbsp;
                        </div>
                    </div>
                            <form method="post">
                            <h1>LOGIN</h1></br></br>
                                <input type="text" name='un' placeholder="Enter Email" class="input_b" required/>
                                    </br></br>
                                <input type="password" name="pw" placeholder="Enter password" class="input_b" required/>
                                    </br></br>
                                <input type="submit"  name="save" value="login" id="submit"/>
                                    </br></br>
                            </form>

                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-xs-6 my-col">
                        <div class="img_ani">
                            <img src="image/other/register_ice.png" >
                        </div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-6 my-col">
                    <div class="text1">
                        <p>Hello, Welcome to Frozen..</p>
                        <p>We are supply our best product</p>
                        <p>You haven't user account please signup&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</br></br><a href="signup.php"><button>Signup</button></a></p>
                    </div>
            </div>   
            
        </div></br></br>
        <div class="row my-row">
                <div class="col-md-12 col-sm-12 col-xs-12 my-col" id="fg"></br></br></br></br>
                    <h2 id="logo_txt">FROZEN-ICECREAM</h2></br></br></br></br>
                </div>
        </div></br></br>
        <div class="row my-row">
            <div class="my-col col-md-12 col-sm-12 col-xs-12" id="c_1">
                <?php include('footer1.html')?>
            </div>
        </div>
        
    </div>



</body>



</html>