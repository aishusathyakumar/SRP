<html>
  <head>
    <title>Example</title>
  </head>
<style>
.bg {
    /* The image used */
    background-image: url("CANDLE.jpg");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}


.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: center;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: white;
}


.topnav a.active {
    background-color:black;
    color: black;
}
</style>
<body >
<div class="topnav">
 	<a class="active" href="first.html" ><font color ="white">KALPAVRIKSHA</form></a>
	</div>
	<div class="bg">
	


   <!-- <iframe src="hindu.txt" width = "500" height="500"> </iframe> -->
<font color = "orange"> <marquee onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 6, 0);">
 <?php  echo nl2br(file_get_contents("/opt/lampp/htdocs/hinduu/hindu.txt"));?></marquee></font>

</div>
 </body>

</html>
