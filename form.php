<?php>
<head>
<style>


input[type=text], select, textarea {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=number], select, textarea {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=email], select, textarea {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  float: center; 		
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: center;
}

input[type=submit]:hover {
  background-color: #45a049;
}



</style>
</head>
<center> 
<h2>User Registration</h2>
<body bgcolor=#D3D3D3>
<form action="save.php" method="POST">

<label><b>Enter First Name:</b></label><input type="text" name="firstName" ></br>
<label><b>Enter Last Name:</b></label><input type="text" name="lastName" ></br>
<label><b>Enter PhoneNo:</b></label><input type="Number" name="phoneNo" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"></br>
<label><b>Enter Email:</b></label><input type="Email" name="email"></br>
<label><b>Enter Address:</b></label><textarea name="address"></textarea></br></br>
<input type="Submit"> </br>
<hr>

</form>
<hr size=10>
<form action="search.php" method="POST">
<input type="text" name="search">
<input type="submit" value="search">
</form>
<a href="list.php"><h2>View Users </h2></a>
</center>
</body>
</html>