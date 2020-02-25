<!DOCTYPE html>
<html>
<head>
<style>
.dropbtn {
    background-color:BlueViolet;
    border:none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration:none;
    font-size: 20px;
    margin: 10px 5px;
    cursor: pointer;
}
.dropbtn1{border:2px solid cyan;}
.dropbtn2{border:2px solid cyan;}
.dropbtn3{border:2px solid cyan;}
.dropbtn4{border:2px solid cyan;}
.dropbtn5{border:2px solid cyan;}
.dropbtn6{border:2px solid cyan;}
.dropdown{
position:relative;
display:inline-block;}
.dropdown-content{
background-color:#9fc6a5;
right:0;
border:#13145b;
position:absolute;
min-width:200px;
display:none;
padding:15px 32px;}
.dropdown-content a{
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
	font-size:30px;
}
.dropdown-content a:hover{background-color:white;}
.dropdown:hover .dropdown-content{
display:block;}
.dropdown:hover .dropbtn{background-color:green;}
.mySlides {display:inline;}


.slideshow-container {
  max-width: 10px;
  position:relative;
  margin: auto;
  float:center;
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

</style>
</head>
<body bgcolor="white">
<h1><center><img src="schlogo.png" style="width:110px;height:110px;"></center></h1>

<h2 style="color:blue"><center> GOVERNMENT HIGH SCHOOL </center>
</h2>


<center><div class="slideshow-container"></center>
<div class="mySlides">
  
  <center><img src="fac.jpg" style="width:1000px;height:400px;"></center>
  <div class="text"><center>SCHOOL'S FRONT VIEW</center></div>
</div>

<div class="mySlides">
  
  <center><img src="fac3.jpg" style="width:1000px;height:400px;"></center>
  <div class="text"><center>ASSEMBLY TIME</center></div>
</div>

<div class="mySlides">
 
  <center><img src="fac4.jpg" style="width:1000px;height:400px;"></center>
  <div class="text"><center>SCHOOL'S STUDENTS</center></div>
</div>
</div>
<br>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

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

<br>

<h1 style="color:brown"><center>FACULTY</center></h1> 

 
<p><b>Government high School of Education:</b></p>
<p>Imagine an education where the faculty's research shapes the teaching community’s knowledge about learning and has been honored at local, national, and global levels. The School of Education currently has 53 full-time faculty members (and 82 part time), of which 100 percent hold a doctorate. Their experience and enthusiasm is then passed along to our students, creating the next generation of knowledgeable teachers, researchers, and school leaders.</p>

<p><b>Academics & Student Life Admissions Research & Action:</b></p>
<p>For the 2016-2017 academic year, School of Education faculty was awarded more than $25 million in research, training, and public service grants and contracts from external sponsors. The largest portion of our funding was received from the federal government including the National Institute of Health and the National Science Foundation. We currently have more than 100 funded grants and research projects</p>
<p><b>Information for:</b></p>
<p><b><a href="selfac.php">Faculties details</a></b></p>


</body>
</html>