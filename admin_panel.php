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
<!--ip match to Email-->
    <?php
    $conn=mysqli_connect('localhost','root','','ice-cream');

    $que ="select * from ip_ad where ip='$ip_address'";
    $res=mysqli_query($conn,$que);
    $im=mysqli_fetch_assoc($res);

    
    
    if (!$im) {
        
        header("Location: ad_login.php?firstlogin_please");
      }
    ?>

<?php
$con = mysqli_connect("localhost","root","","ice-cream");
header("Refresh: 20");
session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <title>
        Admin panel
    </title>
    <link rel="stylesheet" type="text/css" href="css1/boostap_layer.css">
    <link rel="stylesheet" type="text/css" href="css/admin_panel.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="l">
        <h1>cann't lording mobile screen</h1>
    </div>
<div class="container my-container">
    <div class="row my-row">
        <div class="col-md-12 col-sm-12 col-xs-12">
        <a href="connect_database/delect_ip.php" id="link_1"><img src="image/icon/icon1.jpg"  id="img_1">
            Logout</a>
            <h3>Welcome Admin</h3>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="head">
                <h1>Admin Panel</h1>
            </div>
        </div>
    </div>
    <div class="row my-row">
        <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="dropdown">
            <button id="lin">  
                <img src="image/icon/e8.jpg" width="60px" height="40px" id="i_ii">
            </button>
            <div class="dropdown-content">
                <a href="all_iteam_edite.php" target="_blank">Items</a>
                <a href="#" target="_blank">empty</a>
            </div>
        </div>
        </div>
    </div>
        <div class="row my-row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="table1">
                <caption><h3>customer cart</h3></caption>
                <table border="0" width=900px>
                        
                    <tr>
                        <td>item-1</td>
                        <td>item-2</td>
                        <td>item-3</td>
                        <td>item-4</td>
                        <td>item-5</td>
                        <td>item-6</td>
                        <td>item-7</td>
                        <td>item-8</td>
                        <td>item-9</td>
                        <td>item-10</td>

                    </tr>
                    <tr>
                        <td>empty</td>
                        <td>empty</td>
                        <td>empty</td>
                        <td>empty</td>
                        <td>empty</td>
                        <td>empty</td>
                        <td>empty</td>
                        <td>empty</td>
                        <td>empty</td>
                        <td>empty</td>
                    </tr>
                </table>
                </div>    


            </div>
        </div>
        <div class="row my-row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h3>Customer comment</h3>
                <!--add comment in data base-->
                            <?php

                                $sql = "SELECT * FROM comment WHERE id ";
                                $res = mysqli_query($con, $sql);

                                if (mysqli_num_rows($res) > 0){
                                    while ($images = mysqli_fetch_assoc($res)){
                                        ?>
                                        <table border="0" width=500px> 
                                        <tr>
                                            <td width=200px>
                                                <?=$images['email']?>
                                            </td>
                                            <td>
                                                <?=$images['message']?>
                                            </td>
                                        </tr>
                                        </table>

                                    
                            <?php } }?>


            </div>
        </div>




</div>




</body>
</html>