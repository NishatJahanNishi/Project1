<!DOCTYPE html>
<html>
<head>
<style>
.dropbtn {
    background-color:#005566;
    border:none;
    color: white;
    padding: 10px 40px;
    text-align: center;
    text-decoration:none;
    font-size: 20px;
    margin: 15px 10px;
    cursor: pointer;
}
.dropbtn1{border:none;}
.dropbtn2{border:none;}
.dropbtn3{border:none;}
.dropbtn4{border:none;}
.dropbtn5{border:none;}
.dropbtn6{border:none;}
.dropdown{
position:relative;
display:inline-block;}
.dropdown-content{
background-color:#006966;
right:0;
border:#13145b;
position:absolute;
min-width:200px;
display:none;
padding:15px 32px;}
.dropdown-content a{
    color:#000034;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
	font-size:20px;
}
.dropdown-content a:hover{background-color:white;}
.dropdown:hover .dropdown-content{
display:block;}
.dropdown:hover .dropbtn{background-color:#9600CC;}


nav1 {
    float:left;
    max-width: 170px;
    margin:10px;
    padding: 6px;
   
}
nav2 {
float:right;
margin:15px;
padding:6px;}

nav1 ul1 {
    list-style-type:square;
    padding: 1px; 
    
}
nav1 ul2{
list-style-type:square;
padding:2px;}
   
nav1 ul1 a {
    text-decoration:none;
    color:black;
}
nav1 ul2 a{
color:black;
text-decoration:none;}
nav2 ul1{list-style-type:square;
padding:5px;
}
nav2 ul1 a{text-decoration:none;
color:black;}
nav2 ul2{list-style-type:square;
padding:2px;}
nav2 ul2 a{text-decoration:none;
color:black;}
article{float:center;}
	
.mySlides {display:inline;
}


.slideshow-container {
  max-width: 10px;
  position:relative;
  margin: auto;
  float:left;
}

.text {
  color:white;
  font-size: 20px;
  padding: 10px 12px;
  position:absolute;
  bottom: 4px;
  width: 100%;
  text-align: center;
}



.dot {
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}
.leftpane {
    width:0px;
	height:0px;
    float: left;
	
	
	
    
}


</style>
</head>
<body bgcolor="white">
<h1 style="color:#000033"><center> GOVERNMENT HIGH SCHOOL </center>
</h1>
<marquee>WHERE NATION ARE BUILD</marquee>
<div class="leftpane">
<h2><img src="schlogo.png" style="width:100px;height:100px;"></h2>
</div>
<h2><center><div class="slideshow-container"></center>
<div class="mySlides">
  
  <center><img src="adddate.jpg" style="width:900px;height:300px;"></center>
  
</div>

<div class="mySlides">
  
  <center><img src="adddate1.jpg" style="width:900px;height:300px;"></center>
  
</div>

<div class="mySlides">
 
  <center><img src="adddate2.jpg" style="width:900px;height:300px;"></center>
  
</div>
</div>
<br>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<br>


<p id="demo"></p>
<script>
var slideIndex = 0;

showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
	}
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1;}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace( "active", "");
    }
    slides[slideIndex-1].style.display = "inline";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides,2000); 
	
}
</script>
</h2>



<div class="dropdown">
<button class="dropbtn dropbtn1 "> HOME </button>
<div class="dropdown-content" style="left:0">
<a href="history.html"> History </a>
<a href="school map.html">School map</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn dropbtn2"> ADMINISTRATION </button>
<div class="dropdown-content" style="left:1px">
<a href="admin.php"> Administrative office</a>
<a href="faculty.php">Faculty</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn dropbtn3"> ADDMISSION </button>
<div class="dropdown-content" style="left:2px">
<a href="addmission date.php">Addmission test date</a>
<a href="teacherjob.php">Teachaer's job vacancy</a>
<a href="event.php">EVENTS</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn dropbtn5"> FACILITIES </button>
<div class="dropdown-content" style="left:4px">
<a href="res.php">Student residence</a>
<a href="teach.php">Teaching system</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn dropbtn4"> BLOG </button>
<div class="dropdown-content" style="left:3px">
<a href="news.html">Newsfeed</a>
<a href="recent.html">Programs</a>
</div>
</div>

<div class="dropdown"> 
<button class="dropbtn dropbtn5">CURRICULUMN</button>
<div class="dropdown-content" style="left:4px">
<a href="more.html">More info</a>
</div>
</div>
<br>
<h1 style="color:#4d1933">Addmission & Aid</h1>

<p>We want to get to know you through your application, to hear your voice and explore your potential. We hope you get to know yourself better through the application process, too.</p>

<p>Whether you decide to apply to Parsons School of Design, Eugene Lang College of Liberal Arts, the College of Performing Arts, The New School for Social Research, the Schools of Public Engagement, or Parsons Paris, you will have the opportunity to explore courses across the colleges that make up our university, crossing disciplines and charting your own unique academic path.</p>

<p>We recognize that the application process might seem challenging; selecting the right school is an important decision. Our admission team is available to help you navigate this critical journey and make a choice that will impact your intellectual and creative potential in profound ways.</p>
<p style="#990066"><b><a href="addmisixtoeight.php">For class six to eight</a></b></p>
</body>
</html>
