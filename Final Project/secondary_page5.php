<html lang="en">
<head>
	<title>PHP Survey and Form</title>
</head>
<body>
	<header>
		<nav class="nav">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="secondary_page1.php">My Tech - Past, Present & Future</a></li>
				<li><a href="secondary_page2.php">My Personal Web Design Journey</a></li>
				<li><a href="secondary_page3.php">History of PHP</a></li>
				<li><a href="secondary_page4.php">How PHP Works</a></li>
				<li><a href="secondary_page5.php">PHP Survey and Forms</a></li>
				<li><a href="secondary_page6.php">Playing With Media</a></li>
			</ul>
		</nav>
	</header>
	
	 
<?php
echo "Here is an example of PHP surveys and forms."; 

?>

<h2>Form/Survey</h2>
<p><span class="myForm">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
First Name: <input type="text" name="firstName" value="<?php echo $firstName;?>">
<span class="myForm">*</span>
<br><br>
Last Name: <input type="text" name="lastName" value="<?php echo $lastName;?>">
<span class="myForm">*</span>
<br><br>
Phone #: <input type="text" name="phone" value="<?php echo $phone;?>">
<span class="myForm">*</span>
<br><br>
Website: <input type="text" name="website" value="<?php echo $website;?>">
<span class="myForm"></span>
<br><br>
Comment: <textarea name="comment" rows="1" cols="20"></textarea>
<br><br>
Gender:
<input type="radio" name="gender" <?php if (isset($gender) && $gender == "female")?> value="female">Female
<input type="radio" name="gender" <?php if (isset($gender) && $gender == "male")?> value="male">Male
<input type="radio" name="gender" <?php if (isset($gender) && $gender == "other")?> value="other">Other  
<span class="myForm">*</span>
<br><br>
<input type="submit" name="submit" value="Submit">  
</form>



</body>
</html>