<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
<button onclick="document.getElementById('id02').style.display='block'" class="w3-button" style="background-color: #d0112b; border-color: #d0112b;">>Open Modal</button>

<div id="id02" class="w3-modal">
  <div class="w3-modal-content">
    <div class="w3-container">
      <span onclick="document.getElementById('id02').style.display='none'" 
      class="w3-button w3-display-topright">&times;</span>
      <form action="php scripts/removeStaff.php" method="post">
    <p>
        <label for="StaffID">First Name:</label>
        <input type="text" name="StaffID" id="StaffID">
    </p>
    <p>

    </p>
    <input type="submit" value="Submit">
</form>
    </div>
  </div>
</div>



<form action="php scripts/insertStaff.php" method="post">
    <p>
        <label for="firstName">First Name:</label>
        <input type="text" name="first_name" id="firstName">
    </p>
    <p>
        <label for="lastName">Last Name:</label>
        <input type="text" name="last_name" id="lastName">
    </p>
	    <p>
        <label for="address">Address:</label>
        <input type="text" name="address" id="address">
    </p>
	    <p>
        <label for="postcode">Postcode:</label>
        <input type="text" name="postcode" id="postcode">
    </p>
	    <p>
        <label for="position">Position:</label>
        <input type="text" name="position" id="position">
    </p>
	    <p>
        <label for="salary">Salary:</label>
        <input name="salary" id="salary">
    </p>
		    <p>
        <label for="phoneNumber">Phone Number:</label>
        <input type="text" name="phone_number" id="phoneNumber">
    </p>
	
    <p>
        <label for="emailAddress">Email Address:</label>
        <input type="text" name="email" id="emailAddress">
    </p>
    <input type="submit" value="Submit">
</form>
</body>
</html>