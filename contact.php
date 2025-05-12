<!DOCTYPE html>
<html>
<head>
    <title>
        contact
    </title>
    <link rel="stylesheet" type="text/css" href="css1/boostap_layer.css">
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="container my-container">
    <header>
                <?php include ('header.html')?>
    </header>
        <div class="row my-row">
            <div class="col-md-5 col-sm-5 col-xs-5 my-col" id="logo">
                <div class="img_logo">
                    <img src="image/logo/Frozen.png" id="img"></br></br>
                </div>
            </div>
            <div class="col-md-7 col-sm-7 col-xs-7 my-col" id="logo">
                &nbsp;
            </div>
        </div>
        <div class="row my-row">
            <div class="col-md-6 col-sv-6 col-xs-12 my-col">
                <div class="det">    
                    <h4>ADDRESS</h4>
                        <p>No.87,</br>Anagarika Dharmapala Mawatha</br>1st Floor Matara 81400 </br>Sri Lanka.<p>
                        <hr>
                    <h4>CONTACT</h4>
                        <p>+94 77 7120 740</p>
                        <hr>
                    <h4>E-MAIL</h4>
                        <p>frozenicecreamkottu@gmail.com</p>
                        <hr>
                    <h4>FACEBOOK</h4>
                        <p>frozenicecream/kottu</p>
                    <hr>
                    <h4>Instergrame</h4>
                        <p>frozenice-cream/kottu</p>
                    <hr>
                    <h4>twitwer</h4>
                        <p>@frozenicecream/kottu</p>
                    <hr>
                    
                </div>
            </div>
            <div class="col-md-6 col-sv-6 col-xs-12 my-col">
                <div class="det">
                    <form action="connect_database/connect_comment.php" method="POST">
                        <h1 id="co_m">Comment</h1>
                        <input type="email" name="mail" placeholder="email" required></br></br>
                        Enter comment here</br><textarea name="comment" id="com" rows="10" cols="60"></textarea></br></br>
                        <input type="submit" name="submit" value="submit" id="btn"></br></br>
                        Open  -Every day 8.00AM-9.00PM </br>
                        close - only poyaday</br></br>
                        Contact us special order

                    </form>
                </div>
            </div>
        </div></br></br>
        <div class="row my-row">
                <div class="col-md-12 col-sv-12 col-xs-12 my-col" id="fg"></br></br></br></br>
                <h1 id="logo_txt">FROZEN-ICECREAM</h1></br></br></br></br>
                </div>
        </div>
</br></br>
        <footer>
        <div class="row my-row" id="footer">
            <div class="col-md-12 col-sm-12 col-xs-12 my-col">
                <!--footer-->
                <div class="text_l">
                <p id="text1">We are an innovative ice cream shop which serves
                    fresh made-to-order ice cream KOTTU. Our process will
                    change the way that you think about ice cream. Fresh
                    ingredients are blended and rapidly frozen before your eyes.
                    we are reinventing the ultimate ice cream experience..!<br><br> 
                    <img src="image/other/2.gif" id="gif">
                </p>
                </div>
            </div>
            
        </div>
            
        <?php include('footer1.html')?>
        
    </div>
    
</footer>



    </div>    

</body>

</html>