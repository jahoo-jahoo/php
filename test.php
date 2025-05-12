<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {margin:0;}

.navbar {
  overflow: hidden;
  background-color: none;
  position: fixed;
  top: 0;
  width: 100%;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background: #ddd;
  color: black;
}

.main {
  padding: 16px;
  margin-top: 30px;
  height: 1500px; /* Used in this example to enable scrolling */
}
</style>
</head>
<body>

<div class="navbar">
<h1>Customize iteams</h1>
                <form method="post" enctype="multipart/form-data">
                    <input type="file" name="image"  class="form-control"></br>
                    <input type="number" name="num" placeholder="Enter image id" class="form-control"></br>
                    <input type="text" name="itm_name" placeholder="Enter image name" class="form-control"></br>
                    <input type="text" name="itm_price" placeholder="Enter image price" class="form-control"></br>
                    <input type="submit" name="upload" value="UPLOAD" id="btn">
                </form>
</div>

<div class="main">
<h1>kotthu ice-cream</h1>

<?php include('ice-cream_mix_edite.php')?>
    
</div>
</body>
</html>
