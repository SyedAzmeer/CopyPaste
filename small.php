<!DOCTYPE html>
<html>
<head>
<center><img id="banner" src="http://www.calicuttaxi.com/images/banner_04.png" alt="Banner Image" width="1000" height="250"></center>
<body background="http://media.istockphoto.com/photos/abstract-blue-green-technology-and-science-modern-background-picture-id523760376?k=6&m=523760376&s=170667a&w=0&h=aftceF6b8PRPLj5ATpYHvA7a9g-KgxLBOihz9sT_3PM=">

<title>Small</title>
<style type="text/css">

body
{
  width: 1000px;   
  margin: 0 auto; 
  font-family:century Gothic;
  text-align:justify; 
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;

}

.dropdown-content a:hover {background-color: #f1f1f1}

.show {display:block;}
</style>
</head>

<body>


<ul>
 	 <li><a href="index.php">Home</a></li>
	<li><a href="login.php">Login</a></li>
	<li><a href="book.php">Book A Car</a></li>
 	 <li><a href="contactus.php">Contact Us</a></li>
 	 <li class="dropdown">
 	   	<a href="javascript:void(0)" class="dropbtn" onclick="myFunction()">About Us</a>
  	  	<div class="dropdown-content" id="myDropdown">
   		<a href="aboutus.php">Vision And Mission</a>
		<a href="history.php">History</a>
     	 	<a href="founder.php">Founder</a>
	<li><a href="fare.php">Fare Estimator</a></li>
	<li><a href="feedback.php">Feedback</a></li>
	<li><a href="lostPro.php">Lost Property</a></li>
    </div>
  </li>
</ul>

</style>
</head>

 <body>

<h1><center>Book A Car</center></h1>
<form id=order action=form.php >

<center><h2>Small Cars</h2>
<input type="submit" formaction="https://toyota-seohacker.netdna-ssl.com/wp-content/uploads/2015/06/toyota-vios-2015.jpg?x42354" value="Vios"> 
<input type="submit" formaction="https://assets.mbusa.com/vcm/MB/DigitalAssets/Vehicles/Showroom2/2017/2017-E-E300-SPORT-SEDAN-D.png" value="Mercedes">
<input type="submit" formaction="https://www.honda.com.au/content/dam/honda/cars/models/city/2014/assets/VTi-L_with_Sports_Pack.png" value="City">
<input type="submit" formaction="http://wemotorcom.s3-ap-southeast-1.amazonaws.com/blog/wp-content/uploads/2011/08/Proton-Saga-FLX-1.3-13-Executive.jpg" value="Saga Flx">
<input type="submit" formaction="https://upload.wikimedia.org/wikipedia/commons/2/23/2011_Proton_Inspira_2.0P_in_Cyberjaya,_Malaysia_(01).jpg" value="Inspira">

<br>
</br>
<center>
<table border="0">
<tr>
<th>Perodua Myvi </th>
<td>RM 20/km</td>
</tr>

<tr>
<th>Toyota Vios </th>
<td>RM 35/km</td>
</tr>

<tr>
<th>Mercedes Benz</th>
<td>RM 50/km</td>
</tr>

<tr>
<th>Honda City </th>
<td>RM 30/km</td>
</tr>

<tr>
<th>Proton Saga FLX </th>
<td>RM 25/km</td>
</tr>

<tr>
<th>Proton Inspira </th>
<td>RM 30/km</td>
</tr>

</table>

</style>

</head>



<br>
<form name="input" action="home.php" method="get">

</form>

<form name="input" action="book.php" method="get">
<input type="submit" value="Proceed To Payment">
</form>





<br>

<br><br>

<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    for (var d = 0; d < dropdowns.length; d++) {
      var openDropdown = dropdowns[d];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

<!--footer -->

   <footer>

    <div class="wrapper">

<center>
<a href="http://facebook.com"><img src="facebook.png" alt="" width="30"height="30"></a>
<a href="http://twitter.com"><img src="twitter.png" alt="" width="30"height="30"></a>
<a href="http://instagram.com"><img src="insta.png" alt="" width="30"height="30"></a>
<a href="http://linkedin.com"><img src="linkedin.png" alt="" width="30"height="30"></a>
<a href="http://gmail.com"><img src="googleplus.png" alt="" width="30"height="30"></a>
                      </center> 

<br>
 <hr>
    
     <div class="links">
<center>
      � 2016 Taxi Services Co. All Rights Reserved.</div>
                      </center>  
     </ul>
     
    </div>
   </footer>
   <!--footer end-->
  </div>
<hr>
<script type="text/javascript"> Cufon.now(); </script>
<script>
 jQuery(document).ready(function($) {
  $('#form_4').jqTransform({imgPath:'jqtransformplugin/img/'}); 
 });
</script>
</body>
</html>















