
<link rel="stylesheet" type="text/css" href="css/cart_v.css">
<div class="remov_e">
<form action="connect_database/delect_data_item_cart.php" method="POST">
                    <input type="number" name="is_id" placeholder="Remove id" required/ id="co_desi">
                    <input type="submit" name="dele" value="Delete" >
                </form>
</div>
<hr>
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



$con=mysqli_connect("localhost","root","","ice-cream");

$sql1 = "SELECT * FROM items";
$sql = "SELECT * FROM cart INNER JOIN items ON cart.byitem=items.item_id";
$que ="SELECT ipadd FROM cart WHERE ipadd";
$res = mysqli_query($con, $sql);
$res1 =mysqli_query($con, $sql1);
$res2 =mysqli_query($con,$que);


$row['id']=0;

if (mysqli_num_rows($res) > 0){
    while ($images = mysqli_fetch_assoc($res) and $im = mysqli_fetch_assoc($res1)){
        
        if($ip_address == $images['ipadd']){
            
            
            printf("Id : ".$images['id']);

           #check 
           #echo "true";
           #echo $images['ipadd'];
        
        #print array
        #print_r($images) ;
        #print array data
        #printf($images['ipadd']);


                    ?>
        
            <table id="tab">
                <tr>
                <!--check id <td>Id : <?=$images['id']?></td>-->
                <td><img src="temp_image/<?=$images['image']?>" id="image_design"></td>
                <td><?=$images['item_name']?></td>
                <td>   
                <?=$images['quin']?>&nbsp;
                </td>
                
                
                
                
                </tr>
            </table>
            <hr>

            
            
            
    
<?php  }} }?>


<form action="connect_database/delect_data_item_cart_1.php" method="POST">
    <input type="submit" name="del" value="clear All">
</form>
