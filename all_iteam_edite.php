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
        
        header("Location: login.php?firstlogin_please");
      }
    ?>
<?php



$con = mysqli_connect("localhost","root","","ice-cream");

if(isset($_POST['upload'])){
    $file = $_FILES['image']['name'];
    $id=$_POST['num'];
    $i_name=$_POST['itm_name'];
    $i_price=$_POST['itm_price'];

    
    $query = "INSERT INTO items(image,item_id,item_name,price) VALUES('$file','$id','$i_name','$i_price')";
    
    
    $res = mysqli_query($con,$query);

    if ($res){
        move_uploaded_file($_FILES['image']['tmp_name'], "temp_image/$file");
    }
    header("Location: all_iteam_edite.php");

}


?>


<html >
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css1/boostap_layer.css">
    <link rel="stylesheet" type="text/css" href="css/items.css">
    <style>

</style>

</head>
<body>
    <div class="l">
        Unsupport your screen in this page..
    </div>
    <div class="ld">
        
    </div>
<div class="navbar">
<div class="my-container container">
<div class="my-row row">
    <div class="my-col col-lg-7 col-md-7 col-sm-7 col-xs-7">
             <form method="post" enctype="multipart/form-data">
                
                <p id="t1">Date import & Update (Items)</p>
                
                <input type="number" name="num" placeholder="Enter database id" class="form-control" required/>
                <input type="text" name="itm_name" placeholder="Enter item name" class="form-control" required/>
                <input type="text" name="itm_price" placeholder="Enter item price" class="form-control" required/>
                <input type="file" name="image" class="form-control1"></br>
                <input type="submit" name="upload" value="UPLOAD" id="btn">
            
            
            </form>
    </div>
    <div class="my-col col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <p id="t1">Delect items</p>
                        <form action="connect_database/item_data_delect.php" method="POST">
                            <input type="number" name="del" placeholder="Enter database id" class="form-control" required/></br>
                            <input type="submit" name="delect" value="delect" id="btn">

                        </form>
    </div>

</div>    
</div>
                
                
        
</div>

  <!--  <div class="container my-container">
        <?php include('header.html');?>
        <div class="row my-row">
            <div class="my-col col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1>Customize iteams</h1>
                <form method="post" enctype="multipart/form-data">
                    <input type="file" name="image"  class="form-control"></br>
                    <input type="number" name="num" placeholder="Enter image id" class="form-control"></br>
                    <input type="text" name="itm_name" placeholder="Enter item name" class="form-control"></br>
                    <input type="text" name="itm_price" placeholder="Enter item price" class="form-control"></br>
                    <input type="submit" name="upload" value="UPLOAD" id="btn">
                </form>

            </div>
    </div>-->
<h1>kotthu ice-cream</h1>
<iframe src="ice-cream_kotthu_edite.php" name="e1" height="320px" width="90%"></iframe>
<br><br><br><br>
<h1>juice ice-cream</h1>
<iframe src="ice-cream_juice_edite.php" name="e1" height="320px" width="90%"></iframe>
<br><br><br><br>
<h1>Fruit ice-cream</h1>
<iframe src="ice-cream_fruit_edite.php" name="e1" height="320px" width="90%"></iframe>
<br><br><br><br>
<h1>cone ice-cream</h1>
<iframe src="ice-cream_cone_edite.php" name="e1" height="320px" width="90%"></iframe>
<br><br><br><br>
<h1>mix ice-cream</h1>
<iframe src="ice-cream_mix_edite.php" name="e1" height="320px" width="90%"></iframe>
<br><br><br><br>
<h1>special ice-cream</h1>
<iframe src="ice-cream_special_edite.php" name="e1" height="320px" width="90%"></iframe>
<br><br><br><br>

    

    </div>
    <?php include('footer.html')?>
</body>
</html>