<html>
<head>
<link rel="stylesheet" type="text/css" href="ih.css">

<style>

kk
{
font-size: 40px;
color:white;
}

body
{
 background-image: url("expback1.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: left top; 
}


#fname
{
 width:225px;
height:44px;
font-size:25px;
margin-left:0px;
margin_top:5px;
}

#lname
{
 width:225px;
height:44px;
font-size:25px;
margin-left:0px;
margin_top:15px;
}

#eid
{
 width:450px;
height:44px;
font-size:25px;
margin-left:0px;
margin_top:5px;
}

#uname
{
 width:450px;
height:44px;
font-size:25px;
margin-left:0px;
margin_top:5px;
}


#pass
{
 width:450px;
height:44px;
font-size:25px;
margin-left:0px;
margin_top:5px;
}

#rpass
{
 width:450px;
height:44px;
font-size:25px;
margin-left:0px;
margin_top:5px;
}

#up
{
 width:150px;
height:44px;
font-size:25px;
margin-left:0px;
margin_top:5px;
}

#Exp
{
width:450px;
height:100px;
font-size:25px;
margin-left:0px;
margin_top:5px;
}


#star
{
width:100px;
height:40px;
font-size:25px;
margin-left:0px;
margin_top:5px;
}

#cno
{
width:450px;
height:40px;
font-size:25px;
margin-left:0px;
margin_top:5px;
}



</style>

<script>
function validateForm() {
    var x = document.forms["signup"]["fname"].value;
    if (x==null || x=="") {
        alert("All Fields are Mandatory");
        return false;
    }

    var x = document.forms["signup"]["lname"].value;
    if (x==null || x=="") {
        alert("All Fields are Mandatory");
        return false;
    }

  var x = document.forms["signup"]["cno"].value;
    var count =x.length;
      var b = isNaN(x);
    if(count!=10)
    {
        alert("Enter a valid mobile no.");
        return false;
    }
 else if(b!=false)
    {
      alert("Invalid mobile no");
      return false;
    }
    
    document.getElementById("demo").innerHTML = "Thank You for Sharing your Experience with us.";

   

}
</script>
</head>
<body>

<table style="width:300px">
<tr>
  <td colspan="3">
<img border="2" src="header-texture.jpg" alt="Indian Holidays" width="1400" height="160">
<h13><a href="newhome.html">
<img border="2" src="logo.png" alt="Indian Holidays" width="120" height="120">
</a></h13>
<h14><ul>
  <li><a href="newhome.html"><b><k>Home</k></b></a></li>
  <li><a href="frame_form.html"><b><k>Enquiry</k></b></a></li>
  <li><a href="contactus.html"><b><k>Contact Us</k></b></a></li>
  <li><a href="about-us.html"><b><k>About Us</k></b></a></li>
  <li><a href="review.html"><b><k>Reviews</k></b></a></li>
</ul></h14></td>
  
</tr>
<tr>
<td colsnap="3">
<br><br>
<kk>Record Your Experience...</kk>
<br><br><br>

<form id="signup" action="insertexp.php" name="signup" method="post">
<input type="text" id="fname" name="fname" placeholder="First Name">
<input type="text" id="lname" name="lname" placeholder="Last Name"><br><br>
<input type="text" id="uname" name="uname" placeholder="Username"><br><br>
<input type="text" id="cno" name="cno" placeholder="Contact No"><br><br>
<h2>Stars:</h2><select name="Stars" id="star">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5" selected>5</option>
</select><br><br>
<input type="text" id="Exp" name="Exp" placeholder="Give your Experience"><br><br>
<input type="submit" id="up" value="Submit" onClick="return validateForm()">
</form>


<p id="demo">Click On Submit to Record Your Experience</p>




</td>
</tr>
</body>
<html>