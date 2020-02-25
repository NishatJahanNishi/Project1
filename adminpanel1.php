<!DOCTYLE html>
<html>
<style>
div.container {
    width: 100%;
    border: 1px solid gray;
}

 footer {
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
}

nav {
    float: left;
    max-width: 160px;
    margin: 0;
    padding:2em;
}

nav ul {
    list-style-type: none;
    padding: 0;
}
   
nav ul a {
    text-decoration: none;
}

article {
    margin-left: 600px;
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden;
}
</style>
<body bgcolor="white">
<h1 style="color:blue"><center> GOVERNMENT HIGH SCHOOL </center>
</h1>
<h1><center><img src="schlogo.png" style="width:110px;height:110px;"></center></h1>
<marquee style="color:#FF2441">WHERE NATION ARE BULID</marquee>
</br>
<div class="container">
<div class="row">
<div class="col-sm-6">

<div class="panel panel-info">
<nav>
<div class="panel-heading"><h2>ADMIN</h2></div>
<div class="panel-body">
<?php
if(isset($_GET['run']) && $_GET['run']=="faild")
{
echo"your email and pass does not exist";}
?>
<form action="connadmin1.php" method="post">
<div class="form-group">

<ul><label for="name">Email:</label></ul>
<input type="text" name="e" id="Email" placeholder="enter the email">
</br>
<ul><label for="name">Password:</label></ul>
<input type="text" name="p" id="Password" placeholder="enter the pass">
</br>
<ul><button type="submit" class="btn btn-default">SUBMIT</button></ul>
</nav>
</form>
</div>
</div>
</div>
<div class="col-sm-6">

<div class="panel panel-info">
<article>
<div class="panel-heading"><h2>USERS</h2></div>
<div class="panel-body">
<?php
if(isset($_GET['run']) && $_GET['run']=="success")
{
echo"<mark>your reg is succesfully done</mark>";}
?>
<form action="connadmin.php" method="post">
<div class="form-group">

<p><label for="name">Id:</label></p>
<p><input type="text" name="i" id="Id" placeholder="enter the idno"></p></br>
<p><label for="email">Email:</label></p>
<p><input type="text" name="e" id="Email" placeholder="enter the email"></p></br>
<p><label for="pass">Password:</label></p>
<p><input type="password" name="p" id="Password" placeholder="enter the pass"></p></br>
<p><button type="submit" class="btn btn-default">SUBMIT</button></p>
</article>
</form>
</div>
</div>
</div>
<footer>Allrights@reserved:School.com</footer>
</body>
</html>