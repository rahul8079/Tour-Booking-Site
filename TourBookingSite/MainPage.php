<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    body{
background-color:yellow;
background-image:url(https://wallpapercave.com/wp/wp4782897.jpg);
background-size:cover;
}
.a{
color:white;
background-color:#000080;
padding:30px;
text-align:left;
font-family:Trebuchet MS;
font-size:25px;
position:static;
margin-top:-0.7%;
margin-left:0%;
border:3px solid white;
border-bottom-style:none;
border-left-style:none;
border-right-style:none;
max-width:100%;
}

.home{
	position:absolute;
	color:white;
	background-color:#000080;
	width:80px;
	height:70px;
	text-align:center;
	padding-top:20px;
	padding-right:20px;
	padding-left:5px;
	margin-left:5px;
	font-weight:bold;
	cursor:pointer;
}
.gallery{
	position:absolute;
color:white;
background-color:#000080;
margin-left:70px;
width:80px;
height:70px;
padding-top:20px;
padding-right:10px;
font-weight:bold;
text-align:center;
cursor:pointer;
}
.product{
position:absolute;
color:white;
background-color:#000080;
width:130px;
height:70px;
margin-left:140px;
padding-left:12px;
padding-top:20px;
padding-right:50px;
font-weight:bold;
text-align:center;
cursor:pointer;
}
.about{
position:absolute;
color:white;
background-color:#000080;
height:70px;
width:70px;
margin-left:260px;
padding-top:20px;
padding-left:10px;
padding-right:20px;
font-weight:bold;
text-align:center;
cursor:pointer;
}
.sign{
position:absolute;
color:white;
background-color:#ff3333;
height:45px;
width:80px;
margin-top:-4.3%;
margin-left:1300px;
padding-top:12px;
padding-right:10px;
padding-bottom:15px;
padding-left:8px;
font-size: 15px;
font-weight:bold;
text-align:center;
cursor:pointer;
border-radius:5px 5px 5px 5px;
}
.link {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 1;
}
.home:hover{
	background-color:white;
	color:black;
	border-right-style:none;
}
.gallery:hover{
	background-color:white;
	color:black;
}
.product:hover{
	background-color:white;
	color:black;
}
.about:hover{
	background-color:white;
	color:black;
}
img{
	margin:100px;
	margin-left:550px;
}
.search-container{
	margin-top:250px;
	margin-left:380px;
	max-width:100%;
}
.search{
	padding:15px;
	width:35%;
	border-style:solid;
	border-width:4px;
	border-right:0;
	border-color:orange;
	margin:0;
	display:inline-block;
	box-sizing:border-box;
	float:left;
	
}

.Checkin{
	height:8%;
	width:15%;
	border-style:solid;
	border-width:4px;
	border-right:0;
	border-color:orange;
	margin:0;
	display:inline-block;
	box-sizing:border-box;
	float:left;

}
.Checkout{
	height:8%;
	width:15%;
	border-style:solid;
	border-right:0;
	border-width:4px;
	border-color:orange;
	margin:0;
	display:inline-block;
	box-sizing:border-box;
	float:left;
}

.searchButton{
	height:8%;
	width:5%;
	background-color:blue;
	border-style:solid;
	border-width:4px;
	border-color:orange;
	font-size:18px;
	color:white;
	margin:0;
	display:inline-block;
	box-sizing:border-box;
}


</style>
</head>
<body>
<div>
<div class="a">
Booking.com
</div>
<div class="sign">
Sign out
<a href="index.php"><span class="link"></span></a>
</div class="options">
<div style = "margin-left:-0.7%;">
<div class="home">Home<a href="MainPage.php"><span class="link"></span></a></div>
<div class="gallery">Review</div>
<div class="product">Contact Us<a href="Contact.php"><span class="link"></span></a></div>
<div class="about">About<a href="About.php"><span class="link"></span></a></div>
</div>
</div>
<div class="search-container">
    <form action="/action_page.php">
      <input class="search" type="text" placeholder="Where are you going?" name="search">
      <input type="date" class="Checkin">
      <input type="date" class="Checkout">
	  <!--
      <div class="container">                                      
  <div class="dropdown">
    <button class="dpdown" type="button" data-toggle="dropdown">
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">HTML</a></li>
      <li><a href="#">CSS</a></li>
      <li><a href="#">JavaScript</a></li>
    </ul>
  </div>
</div>-->
      <button class="searchButton" type="submit"><i class="fa fa-search"></i></button>
    </form>
</div>


</body>
</html>