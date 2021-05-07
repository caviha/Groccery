<?php
session_start();
$connect=mysqli_connect("localhost","root","","cart");

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>order </title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#"><strong>GREEN GROCERY ONLINE STORE</strong><img src="assets/img/61.jpg" id="logo" class="logo"></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active" role="presentation"><a href="index.html"><strong>Home </strong></a></li>
                    <li role="presentation"><a href="order.html"><strong>Order </strong></a></li>
                    <li role="presentation"><a href="about.html"><strong>About us</strong></a></li>
                    <li role="presentation"><a href="contact.html"><strong>Contact Us</strong></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
        	<?php
    	$query="SELECT FROM products ORDER BY ID ASC";
    	$result=mysqli_query($connect,$query);
		if (mysqli_num_rows($result)>0) {
			while($row=mysqli_fetch_array($result)){
}
}
            <div class="col-md-2">
            	<form method="post" action="order.php?action=add&ID=<?php echo $row["ID"];?>">
                <div class="thumbnail">
                    <a href="#"><img class="img-responsive menu" src="assets/img/w5.jpg"></a>
                    <div id="text" class="caption">
                        <h3><strong>PineApple </strong></h3>
                        <p><strong>$</strong>5.00 </p>
                    <input type="text" name="quantity" class="form-control" value="1">
                    <input type="hidden" name="hidden_Name" value="<?php echo $row["Name"]; ?>" />
                     <input type="hidden" name="hidden_Price" value=<?php echo $row["Price"]?> />
                      <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart">
                    </div>
                </div>
                </form>
            </div>
        }
    }
            <div class="col-md-2">
                <div class="thumbnail">
                    <a href="#"><img class="img-responsive menu" src="assets/img/54.jpg"></a>
                    <div id="text" class="caption">
                        <h3>Tomato </h3>
                        <p><strong>$</strong>3.00 </p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="thumbnail">
                    <a href="#"><img class="img-responsive menu" src="assets/img/w4.jpg"></a>
                    <div id="text" class="caption">
                        <h3><strong>M</strong>ango </h3>
                        <p>$2.00 </p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="thumbnail">
                    <a href="#"><img class="img-responsive menu" src="assets/img/56.jpg"></a>
                    <div id="text" class="caption">
                        <h3><strong>Orange </strong></h3>
                        <p>$3.00 </p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="thumbnail">
                    <a href="#"><img class="img-responsive menu" src="assets/img/w6.jpg"></a>
                    <div id="text" class="caption">
                        <h3><strong>O</strong>vacado </h3>
                        <p>$2.50 </p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="thumbnail">
                    <a href="#"><img class="img-responsive menu" src="assets/img/51.jpg"></a>
                    <div id="text" class="caption">
                        <h3 id="water"><strong>W</strong>atermelon </h3>
                        <p id="melon">$10.00 </p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="thumbnail">
                    <a href="#"><img class="img-responsive menu" src="assets/img/m1.jpg"></a>
                    <div id="text" class="caption">
                        <h3><strong>B</strong>anana </h3>
                        <p><strong>$</strong>5.00 </p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="thumbnail">
                    <a href="#"><img class="img-responsive menu" src="assets/img/612.jpg"></a>
                    <div id="text" class="caption">
                        <h3><strong>P</strong>ears </h3>
                        <p><strong>$</strong>6.00 </p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="thumbnail">
                    <a href="#"><img class="img-responsive menu" src="assets/img/60.jpg"></a>
                    <div id="text" class="caption">
                        <h3>Eggplant </h3>
                        <p><strong>$</strong>3.50 </p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="thumbnail">
                    <a href="#"><img class="img-responsive menu" src="assets/img/w8.jpg"></a>
                    <div id="text" class="caption">
                        <h3><strong>Paprika </strong></h3>
                        <p><strong>$2.00 </strong></p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="thumbnail">
                    <a href="#"><img class="img-responsive menu" src="assets/img/w9.jpg"></a>
                    <div id="text" class="caption">
                        <h3><strong>C</strong>arrot </h3>
                        <p><strong>$</strong>8.50 </p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="thumbnail">
                    <a href="#"><img class="img-responsive menu" src="assets/img/w7.jpg"></a>
                    <div id="text" class="caption">
                        <h3><strong>K</strong>ales </h3>
                        <p><strong>$5.00 </strong></p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="thumbnail">
                    <a href="#"><img class="img-responsive menu" src="assets/img/52.jpg"></a>
                    <div id="text" class="caption">
                        <h3 class="granate"><strong>pomegranate</strong> </h3>
                        <p>$6.50 </p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="thumbnail">
                    <a href="#"><img class="img-responsive menu" src="assets/img/59.jpg"></a>
                    <div id="text" class="caption">
                        <h3><strong>Cabbage </strong></h3>
                        <p><strong>$</strong>7.00 </p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="thumbnail">
                    <a href="#"><img class="img-responsive menu" src="assets/img/62.jpg"></a>
                    <div id="text" class="caption">
                        <h3><strong>CowPeas </strong></h3>
                        <p><strong>$4.00 </strong></p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="thumbnail">
                    <a href="#"><img class="img-responsive menu" src="assets/img/74.jpg"></a>
                    <div id="text" class="caption">
                        <h3><strong>C</strong>orjet </h3>
                        <p><strong>$3.00 </strong></p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="thumbnail">
                    <a href="#"><img class="img-responsive menu" src="assets/img/43.jpg"></a>
                    <div id="text" class="caption">
                        <h3 id="straw"><strong>S</strong>trawberry </h3>
                        <p><strong>$7.50 </strong></p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="thumbnail">
                    <a href="#"><img class="img-responsive menu" src="assets/img/o1.jpg"></a>
                    <div id="text" class="caption">
                        <h3><strong>Onion </strong></h3>
                        <p><strong>$1.00 </strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="container-fluid text-center">
        <div class="row">
            <div class="col-sm-4">
                <h1>Contact us</h1>
                <p id="foot"><strong>O</strong>ur address and contact info here.Reach to us any time and we will be at your service immideately with out any inconvinience GREEN GROCERY ONLINE STORE on your way right away</p>
            </div>
            <div class="col-sm-4">
                <h1>Connect </h1>
                <div class="social-links social-icons">
                    <a href="www.facebook.com"> <i class="fa fa-facebook"></i></a>
                    <a href="www.twitter.com"> <i class="fa fa-twitter"></i></a>
                    <a href="www.instagram.com"> <i class="fa fa-instagram"></i></a>
                    <a href="www.youtube.com"> <i class="fa fa-youtube"></i></a>
                    <div>
                        <p class="copy">©2018 Green Grocery online Store. All rights reserved | Design by Nuliet Mutoni </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4"><img class="img-responsive image-footer" src="assets/img/61.jpg"></div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>