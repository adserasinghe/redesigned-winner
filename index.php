<?php ?>
<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">   
<link rel="stylesheet" href="style.css"/>
<title>Registeration </title>
</head>  
<body>  
<form method="post" action="conn.php">
  <div class="container">  
  <center><h1> Student Registeration Form</h1> </center>  
  <hr>  
  <label> Name: </label>   
<input type="text" name="name" placeholder= "Name" size="15" required />      
<div>  
<label>   
Course :  
</label>
<select name= course>  
<option value="Course"><p> Course</p></option>  
<option value="ICT Diploma"><p>ICT Diploma</p></option>  
<option value="Automobile Diploma"><p>Automobile Diploma</p></option>  
<option value="NVQ Level4 (Motorcylce)"><p>NVQ Level4 (Motorcylce)</option>  
<option value="NCT">NCT</option>  
<option value="ICT LVL4(Hardware)">ICT LVL4(Hardware)</option>  
<option value="ICT LVL4(Graphic Design)">ICT LVL4(Graphic Design)</option>  
</select>  
</div>  
<div>  
<label>   <!-- HTML form with radio buttons -->

Gender :  
</label><br>
<input type="radio" value="Male" name="gender" checked ><label>Male </label>  
<input type="radio" value="Female" name="gender"><label>Female </label>   
<input type="radio" value="Other" name="gender"><label>Other</label>
</div>  
<label for="phone">   
Phone :  
</label>   
<input type="text" name="phone" placeholder="phone no." size="10"/ required>   
<label>Address :  
<input type="text" name="address" placeholder="Your Address"/ required>  
</textarea> </label> 
 <label for="email">Email: </label>  
 <input type="text" placeholder="Enter Email" name="email" required> 
<button type="submit" class="registerbtn">Register</button>    
</form>  
</body>  
</html> 