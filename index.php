<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Payment Form</title>
    <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
            <!-- Font Awesome -->
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
            <!-- Bootstrap core CSS -->
            <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
            <!-- Material Design Bootstrap -->
            <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.1/css/mdb.min.css" rel="stylesheet">
            <!-- JQuery -->
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <!-- Bootstrap tooltips -->
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
            <!-- Bootstrap core JavaScript -->
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.min.js"></script>
            <!-- MDB core JavaScript -->
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.1/js/mdb.min.js"></script>
            <script src = "creditcard.js"></script>
    <style>
            #img1 {
                margin-right:0%;

                width:40%;
                height:110%;
            }
            #img2 {
                margin-right:30%;

                width:10%;
                height:90%;
            }
    </style>
    <style>
#modal-content {
  display: none;
  width:60%;
  position: absolute;
  top:35%;
  background: black;
  opacity: .8;
  left:20%;

  border-radius: 10px;
  animation-name:hjkoj;
  animation-duration: 3s;
animation-iteration-count: infinite;
}
#imge{
  cursor: pointer;
}
#imge:hover{
  opacity:0.6;
  cursor:pointer;
}
.tech{
  float:left;
  width:100%;
  height:700px;
  background: url('images/7.png') no-repeat center;
  margin-top: 80px;
}
.tech1{
  float:left;
  width:100%;
  height:700px;
  background: url('images/8.jpg') no-repeat center;
  margin-top: 80px;
}
#ghjab{
  height:700px;
}
#ghjab1{
  height:700px;
}
#ghjab2{
  height:700px;
}
.helloj{
  margin-top:20px;
  margin-left: 10px;
  font-size:28px;
}
.hellod{
  background-color: black;
  opacity:.7;
  height:150px;
  padding:10px;
  padding-top: 15px;
  border-radius:10px;
  animation-name:hjkoj;
  animation-duration: 3s;
animation-iteration-count: infinite;
}
@keyframes hjkoj {
from{
  background-color: orange;
  opacity:.7;
}
  to{
    background-color: #7D3C98;
    opacity:1;
  }
}
@media screen and (max-width: 480px) {
.tech1{
  display:none;
}
.tech{
  float:left;
  width:100%;
  height:1000px;
  background: url('images/7.png') no-repeat center;
  margin-top: 80px;
}

#modal-content {
  display: none;
  width:70%;
  position: absolute;
  top:35%;
  background: black;
  opacity: .8;
  left:15%;
  padding: 20px;
  border-radius: 40px;
}
.helloj{
  font-size:20px;
}
#ghjab{
  height:450px;
}
#ghjab1{
  height:450px;
}
#ghjab2{
  height:450px;
}
}
</style>
<link rel="stylesheet" href="../css/main.css" >
    <script>
    function testCreditCard () {
  myCardNo = document.getElementById('CardNumber').value;
  myCardType = document.getElementById('cardType').value;

  if (checkCreditCard (myCardNo,myCardType)) {
    alert ("Credit card has a valid format")
  }
  else {alert (ccErrors[ccErrorNo])};
}
    </script>

</head>
<body>
  <section style="margin-top:100px;width:100%;float:left;">



              <!-- Credit Card Payment Form - START -->

<div class="container">
  <div class="row" style="margin-left:0px;">
      <h3 class="text-center">Checkout</h3>

  </div>
        <div class="row">
            <div class="col-xs-10 col-md-8 col-md-offset-8">
                <form role="form" method="post" action="confirm.php">
                        <div class="row">
                                <div class="col-md-7 ">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="input" class="form-control" name="name" required  />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                    <div class="col-md-7 ">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" name="lname" required  />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="col-md-7 ">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" name="address" required  />
                                            </div>
                                        </div>
                                    </div>

                        <div class="row" style="margin-left:0px;">
                            <h3 class="text-center">Payment Details</h3>

                        </div>





                            <div class="row">
                                <div class="col-md-7 mb-2 " style="margin-left:10px;">
                                    <!--<label class="control-label pull-left">Select </label>-->
                                    <select id="cardType" class="form-control" name="cardtype">
                                          <option value="MasterCard">Master Card</option>
                                          <option value="Visa">Visa</option>
                                          <option value="AmEx">American Express</option>
                                          <option value="Discover">Discover</option>
                                     </select>

                                </div>
                            </div>
                            <div class="row">
                                    <div class="col-md-12 mb-3">
                                    <img class="img-responsive cc-img" id="img1" src="http://www.prepbootstrap.com/Content/images/shared/misc/creditcardicons.png">
                                    <img class="img-responsive cc-img"  id="img2" src="dis.jpg">
                            </div>
                            </div>

                            <div class="row">
                                    <div class="col-md-7 mb-2">
                                        <div class="form-group">
                                            <label>Card Number</label>
                                            <input type="text" class="form-control" id="CardNumber" name="cardnumber" onchange="testCreditCard()" required  />
                                        </div>
                                    </div>
                                </div>


                            <div class="row">
                                <div class="col-md-2 mb-1" style="margin-left:10px;">
                                    <div class="form-group">
                                        <label>Expiration</label>
                                            <select class="form-control" name="month">
                                                    <option value="01">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="04">04</option>
                                                    <option value="05">05</option>
                                                    <option value="06">06</option>
                                                    <option value="07">07</option>
                                                    <option value="08">08</option>
                                                    <option value="09">09</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="col-md-2 mb-2" style="margin-left:10px;">
                                        <div class="form-group">
                                            <label>Year</label>
                                                <select class="form-control" name="year">
                                                        <option value="2019">2019</option>
                                                        <option value="2020">2020</option>
                                                        <option value="2021">2021</option>
                                                        <option value="2022">2022</option>
                                                        <option value="2023">2023</option>
                                                        <option value="2024">2024</option>
                                                        <option value="2025">2025</option>
                                                        <option value="2026">2026</option>
                                                        <option value="2027">2027</option>
                                                        <option value="2028">2028</option>
                                                        <option value="2029">2029</option>
                                                        <option value="2030">2030</option>
                                                        <option value="2031">2031</option>
                                                        <option value="2032">2032</option>
                                                </select>
                                        </div>
                                    </div>
                                <div class="col-md-3 mb-2">
                                    <div class="form-group">
                                        <label>cvv</label>
                                        <input type="tel" class="form-control" name="code" required/>
                                    </div>
                                </div>
                            </div>




                        <div class="row">
                            <div class="col-xs-12" style="margin-left:10px;">
                                <button class="btn btn-warning btn-lg btn-block" type="submit" style="margin-left:5%;margin-bottom:20px;">Process payment</button>
                            </div>
                        </div>

                </form>

            </div>
        </div>
    </div>
  </section>
    <!-- Credit Card Payment Form - END -->
<?php include '../footer.php' ?>
<?php include 'nav.php'; ?>
<script src="../script/main.js"></script>


    </body>
    </html>
