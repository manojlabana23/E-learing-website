<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="minor-project.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>E-Learning Website</title>
</head>
<body>
	<section class="header">
		<table class="line3" border="0" width="100%">
			<tr>
				<td>
					<img class="head" src="education.jpg">
				</td>
				<td>
				    <form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
                     <input type="text" placeholder="Search.." name="search2">
                      <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
				</td>
				<td class="line1"><div class="dropdown">
            <button onclick="myFunction()" class="dropbtn"><i class="fa-solid fa-circle-user"></i></button>
            <div id="myDropdown" class="dropdown-content">
            <a href="profile.php">My Profile</a>
            <a href="logout.php">Logout</a>
          </div>
         </div>
     </td>
				
		</table>
		
		<div class="content">
			<div class="chips-wrapper">
				<div class="chip">
					<p><a class="line8" href="all.html">All</a></p>
				</div>
				<div class="chip">
					<p><a class="line8" href="c.html">C#</a></p>
				</div>
				<div class="chip">
					<p><a class="line8" href="c++.html">C++</a></p>
				</div>
				<div class="chip">
					<p><a class="line8" href="java.html">JAVA</a></p>
				</div>
				<div class="chip">
					<p><a class="line8" href="python.html">PYTHON</a></p>
				</div>
				<div class="chip">
					<p><a class="line8" href="html.html">HTML</a></p>
				</div>
				<div class="chip">
					<p><a class="line8" href="css.html">CSS</a></p>
				</div>
				<div class="chip">
					<p><a class="line8" href="php.html">PHP Script</a></p>
				</div>
				<div class="chip">
					<p><a class="line8" href="javascript.html">Javascript</a></p>
				</div>
				<div class="chip">
					<p><a class="line8" href="angular.html">Angular</a></p>
				</div>
				<div class="chip">
					<p><a class="line8" href="reactjs.html">React</a></p>
				</div>
				<div class="chip">
					<p><a class="line8" href="wordpress.html">Wordpress Plugin</a></p>
				</div>
				<div class="chip">
					<p><a class="line8" href="swift.html">Swift</a></p>
				</div><div class="chip">
					<p><a class="line8" href="sql.html">SQL</p>
				</div><div class="chip">
					<p><a class="line8" href="scala.html">Scala</a></p>
				</div>
			</div>
		</div>
		<div class="example example-cover">
            <a href="java.html"><img src="java.jfif"></a>
            <a href="c++.html"><img src="c++.jfif"></a>
           <a href="c.html"><img src="c.jfif"></a>
    </div>
      <div class="example example-cover">
           <a href="python.html"><img src="python.jfif"></a>
          <a href="html.html"><img src="html.jfif"></a>
          <a href="css.html"><img src="css.jfif"></a>
    </div>

     <div class="example example-cover">
          <a href="php.html"><img src="php.jfif"></a>
          <a href="Javascript.html"><img src="javascript.jfif"></a>
          <a href="angular.html"><img src="angular.jfif"></a>
    </div>
    
    <div class="example example-cover">
          <a href="reactjs.html"><img src="reactjs.jfif"></a>
          <a href="wordpress.html"><img src="wordpress.jfif"></a>
          <a href="swift.html"><img src="swift.jfif"></a>
          
    </div>

     <div class="example example-cover">
     	<a href="sql.html"><img src="sql.jfif"></a>
          <a href="scala.html"><img src="scala.jfif"></a>
    </div>
  </div>
</div>


	</section>
	<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}


</script>
		

</body>
</html>