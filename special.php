<!--Banner-->

<?php
$con = mysqli_connect("localhost","root","","ice-cream");

if(isset($_POST['upload'])){
    $file = $_FILES['image']['name'];

    
    $query = "INSERT INTO special_image(image) VALUES('$file')";
    
    
    $res = mysqli_query($con,$query);

    if ($res){
        move_uploaded_file($_FILES['image']['tmp_name'], "temp_image/$file");
    }
    header("Location: special.php?upload success");

}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/spacial.css">
    <link rel="stylesheet" type="text/css" href="css/admin_panel.css">
</head>
<body>
<h1>Special Ice-cream uplode</h1>
<h5><a href="temp_image" target="_blank" id="link">Click here look image name</a></h5>

<h3>Edite table name special_image</h3>
<h4>Image size - width=250px , height=300px</h4>

 <form method="post" enctype="multipart/form-data">
 <input type="file" name="image" class="form-control"></br>
 <input type="submit" name="upload" value="UPLOAD" id="btn">

 
 </form>

</br>



 <form action="connect_database/delect_s.php" method="POST">
    <input type="number" name="num" placeholder="Enter image number" required/></br>
    <input type="submit" name="delect" value="delect" id="btn">
    
 </form>
</br>
        
 <?php

        $sql = "SELECT * FROM special_image WHERE id ";
        $res = mysqli_query($con, $sql);

        if (mysqli_num_rows($res) > 0){
            while ($images = mysqli_fetch_assoc($res)){
                 

            ?>
          
            <img src="temp_image/<?=$images['image']?>" style="width:150px;height:200px;">
            <?=$images['id']?>&nbsp;
            <?=$images['image']?>&emsp;&emsp;&emsp;&emsp;
                

            
            
<?php }} ?>



            
</body>
</html>