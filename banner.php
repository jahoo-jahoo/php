<!--Banner-->

<?php
$con = mysqli_connect("localhost","root","","ice-cream");

if(isset($_POST['upload'])){
    $file = $_FILES['image']['name'];
    $id=$_POST['num'];

    
    $query = "INSERT INTO t_image(img,id) VALUES('$file','$id')";
    
    
    $res = mysqli_query($con,$query);

    if ($res){
        move_uploaded_file($_FILES['image']['tmp_name'], "temp_image/$file");
    }
    header("Location: banner.php");

}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/banner.css">
</head>
<body>
<h1>Upload only banner</h1>
<h5><a href="temp_image" target="_blank" id="link">Click here look image name</a></h5>
<h3>Edite table name t_image</h3>
<h4>Banner size - width=300px , height=150px</h4>

 <form method="post" enctype="multipart/form-data">
 <input type="file" name="image" class="form-control"></br>
 <input type="number" name="num" class="form-control"></br>
 <input type="submit" name="upload" value="UPLOAD" id="btn">

 
 </form>

</br>



<form action="connect_database/delect.php" method="POST">
    <input type="number" name="num" placeholder="Enter image number" required/></br>
    <input type="submit" name="delect" value="delect" id="btn">
    
 </form>
 
</br>

 
 <?php

        $sql = "SELECT * FROM t_image WHERE id ";
        $res = mysqli_query($con, $sql);

        if (mysqli_num_rows($res) > 0){
            while ($images = mysqli_fetch_assoc($res)){
                ?>
                
                    
                        <img src="temp_image/<?=$images['img']?>" style="width:300px;height:200px;">
                        <?=$images['id']?>&nbsp;
                        <?=$images['img']?>&emsp;&emsp;&emsp;&emsp;
                
            
<?php } }?>


    
</body>
</html>