<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.3.min.js"></script>
<title>Home</title>
<style>
	.btn{
		width:330px;
		height:30px;
		background-color: #99CCFF;
		color: #990033;
		border-radius:20px;
		background:url(http://www.morphballs.com/wp-content/uploads/2015/04/patterns-wallpapers-for-yellow-color-background-light-orange-colour-background-1024x640.jpg);
	}
	.bt{
		width:330px;
		height:30px;
		background-color: #99CCFF;
		color: #990033;
		border-radius:20px;
		background:url(width:330px;
		height:30px;
		background-color: #99CCFF;
		color: #990033;
		border-radius:20px;
		background:url(http://www.morphballs.com/wp-content/uploads/2015/04/patterns-wallpapers-for-yellow-color-background-light-orange-colour-background-1024x640.jpg););
	}

	.sm1{
		width:330px;
		height:30px;
		background-image:url(https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQ01C1cWRAUN4eWKZs2SxVIEMv6bAO31T0ljtTPrWsl_aPRQtvy);
		color: #00FF00;
		border-radius:20px;
	}
	a:link{
		  text-decoration: none;
		color:black;
		
	}
	a:visited {
	  text-decoration: none;
    	color: #9900CC;
	}
	a:hover {
	  text-decoration: none;
    	color: #FF0000;
	}
	a:active {
	  text-decoration: none;
    	color: #993399;
	}
	
</style>
<script>
	$(document).ready(function(){
		$("#m1").click(function(){
			$("#s1").slideToggle("fast");
		});	
	});
	$(document).ready(function(){
		$("#con").click(function(){
			$("#cd").slideToggle();
		});
		
	});
	function mydate(){
		var dt=new Date();
		document.getElementById("tds").innerHTML=dt;
		setTimeout(function(){mydate()},1000);
	}
</script>
</head>

<body onload="mydate()">
	<div style="background:url(https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTBzLo0V3UM4M0z40P_J87uuo2R7ev9PRdmYyfVmx7FoLHKrDtleQ); width:auto; height:100px">	
	</div>
	<div style="border:0px; width:330px; height:600px; background-color: #FF9900; float:left;">
			<button class="btn"><a href="home.html">Home</a></button><br>
			<button id="m1" class="btn" class="sm1" style="width:330px" > APPS </button >
		    <form id="s1" style=" display:none">
			  <button class="sm1"><a href="calculator.html">Calculator</a></button><br>
			  <button class="sm1"><a href="find.html" > Find and replace </button><br>
		    </form>
			<button class="btn"><a href="gallery.html">Gallery</a></button><br>
			<button class="btn"><a href="">About</a></button><br>
			<button class="btn"><a href="login.html">Login</a></button><br>
			<button class="btn" id="con"><a href="">Contact</a></button><br>
			<div style="display:none; background-color:#FFFFFF;" id="cd">
				 <button class="bt"><a href="http://www.facebook.com/kamal.rockz">Facebook</a></button><br>
				 <button class="bt"><a href="http://www.twitter.com/kamalagrawal65">Twitter</a></button><br>
				 <button class="bt"><a href="kamalagrawal65.blogspot.com">Blog</a></button><br>
				 <button class="bt"><a href="mailto:kamalagrawal777@gmail.com">Gmail</a></button><br>  
			</div>
			<blockquote style="margin-top:225px;"><i>"Dream is not what you see at night,it is something that dont let you sleep at night"</i></blockquote>
	</div>
	<div style="float:right; width:1000px; height:40px; background-color:#FF9933">
	<p style="float:right; amrgin:0; padding:0;" id="tds"></p>
	</div>
</body>
</html>
