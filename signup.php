<!DOCTYPE html>
<html>
    <head>
    <title>signup</title>
        <link rel="stylesheet" type="text/css" href="css1/boostap_layer.css">
        <link rel="stylesheet" type="text/css" href="css/signup.css">
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
                        <img src="image/logo/Frozen.png" width="100px" id="img">
                    </div>
                </div>
                <div class="col-md-10 col-sm-6 my-col">
                    &nbsp;
                </div>
            </div>
            <div class="row my-row">
                    <div class="col-md-3 col-sm-4 col-xs-6 my-col" id="ab">
                       <div class="about"> 
                        <h3>Join Us</h3>
                        <p>Hello, Welcome to Frozen..</p>
                        <a href="about.php"><button type="button" class="bttn" >About Us</button></a></br></br>
                    </div>
                    </div> 
                    <div class="col-md-4 col-sm-6 col-xs-6 my-col" id="ad">
                        <div class="img_ani">
                            <img src="image/other/register_ice.png" class="im">
                        </div>
                    </div> 
                    <div class="col-md-5 my-col">
                        <div class="layer_login">
                            <form action="connect_database/connect_d.php" method="POST">
                                <h1>Signup</h1><br><br>
                                <input type="text"  name="username" placeholder="Username" required></br></br>
                                <input type="email"  name="email" placeholder="Email" required></br></br>
                                <input type="password" name="password"  id="password" placeholder="Password" onkeyup='check();'  required ></br></br>
                                <input type="password" name="repassword"  id="confirm_password" placeholder="Re-enter Password" onkeyup='check();' required></br></br></br>
                                <input type="submit" class="btn" name="submit" value="Sign up" id="submit" disabled/></br>
                                </br><span id='message'></span></br></br></br>
                                <script>
                                    var check = function() {
                                    if (document.getElementById('password').value ==
                                    document.getElementById('confirm_password').value && document.getElementById('password').value != '' ) {
                                    document.getElementById('message').style.color = 'white';
                                    document.getElementById('message').innerHTML = 'password Ready click signup';
                                    document.getElementById('submit').disabled = false;
                                } else {
                                    document.getElementById('message').style.color = 'red';
                                    document.getElementById('message').innerHTML = '  ';
                                    document.getElementById('submit').disabled = true;
                                }
                                                    }

                                </script>
                            </form>
                        </div>
                    </div>
            </div></br></br>
            <div class="row my-row">
                <div class="col-md-12 col-sv-12 col-xs-12 my-col" id="fg"></br></br></br></br>
                <h1 id="logo_txt">FROZEN-ICECREAM</h1></br></br></br></br>
                </div>
            </div></br></br>
<footer>  
<?php include('footer1.html')?>
            
            
</footer>                
            </div>
        </div>


    </body>
</html>