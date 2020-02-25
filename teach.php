<!DOCTYPE html>
<html>
<head>
<style>

	
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
header, footer {
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
}
</style>
</head>
<body bgcolor="white">
<h1 style="color:blue"><center> GOVERNMENT HIGH SCHOOL </center>
</h1>
<h1><center><img src="schlogo.png" style="width:110px;height:110px;"></center></h1>

<marquee>WHERE NATION ARE BUILD</marquee>


<br>
<center><div class="slideshow-container"></center>
<div class="mySlides">
  
  <center><img src="teach1.jpg" style="width:1000px;height:400px;"></center>
  
</div>

<div class="mySlides">
  
  <center><img src="teach2.jpg" style="width:1000px;height:400px;"></center>

</div>
</div>
<br>
<div style="text-align:center">
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
<header>
   <h1>TEACHING SYSTEM</h1>
</header>
  <article>
<p>The education system offers a rich field of choices for students. There is such an array of schools, programs and locations that the choices may overwhelm students, even those from the RAJSHAHI. As you begin your school search, it’s important to familiarize yourself with the  education system. Understanding the system will help you narrow your choices and develop your education plan.</p>

<p><b>The Educational Structure</b></p>

<p><b>SECONDARY SCHOOL</b></p>

<p>Prior to higher education, students attend  secondary school for a combined total of 6 years. These years are referred to as the six through ten grades.</p>

<p>Around age 10, children begin high school, which is most commonly called “elementary school.” They attend five or six years and then go onto college.</p>

<p>Secondary school consists of two programs: the first is “middle school” or “junior high school” and the second program is “high school.” A diploma or certificate is awarded upon graduation from high school. After graduating high school (12th grade), U.S. students may go on to college or university. College or university study is known as “higher education.”</p>
</article>
<footer>Copyright &copy; School.ac.bd</footer>
</body>
</html>