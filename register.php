<?php
	$ferror="";
	//$flag=true;

	if(isset($_POST['submit']))
	{
		
		if(empty($_POST['fname']))
		{
			$ferror="First name is required";
			$flag=false;
		}
		if(empty($_POST['mname']))
		{
			$merror="Middle name is required";
			$flag=false;
		}
		if(empty($_POST['lname']))
		{
			$lerror="last name is required";
			$flag=false;
		}
		if(empty($_POST['userid']))
		{
			$iderror="UserID is required";
			$flag=false;
		}
		if(empty($_POST['mob']))
		{
			$conerror="Mobile number is required";
			$flag=false;
		}
		if(empty($_POST['add']))
		{
			$aderror="Address is required";
			$flag=false;
		}
		/*if(empty($_POST(mail)))
		{
			$eerror="Email-id is required";
			$flag=false;
		}
		if(empty($_POST(password)))
		{
			$passerror="password is required";
			$flag=false;
		}
		if(empty($))
		{
			$="";
			$flag=false;
		}
		if(empty($))
		{
			$="";
			flag=false;
		}*/
	}
?>
<html>
	<head>
		<style> 
		.container{
				border:1px solid black ;
				border-radius:5px;
				margin:50px;
				padding-left:30px;
				padding-bottom:30px;
				background-image:url("backimage.png");
				height: 80%;
				background-position: center;
				background-repeat: no-repeat;
				background-size: cover;
				color:white;
				font-family:arial;
			}
		
		</style>
	</head>
	
	<body>
		<div class="container">
		<h1 style="color:">Register here....</h1>
		<br><br>
		<form  method="post" action="mypage.php" >
		 
		 <label><b>User Name: </b> </label>
		 <input type = "text" name="fname" placeholder = "Enter your first name" > <?php echo $ferror; ?>
		 <input type = "text" name="mname" placeholder = "Enter your middle name" > <?php echo "$merror"; ?>
		 <input type = "text" name="lname" placeholder = "Enter your last name" > <?php echo "$lerror"; ?>
		 <br><br>
		 <label><b>UseID: </b> </label>
		 <input type = "text" name="userid" placeholder = "Enter user id" required>
		 <br><br>
		 <label><b>Contact number: </b> </label>
		 <input type = "text" name="mob" placeholder = "Enter your mobile number" required>
		 <br><br>
		 Gender:<input type="radio" name="gender" value="male">male
		 <input type="radio" name="gender" value="female">female
		 <br><br>
		 <label><b>Address: </b> </label>
		 <input type = "text" name="add" placeholder = "Full address" required>
		 <br><br>
		 <label><b>Email: </b> </label>
		 <input type = "email" name="mail" placeholder = "Email address" required >
		 <br><br>
		 <label><b>set your password: </b> </label>
		 <input type = "password" name="password" placeholder = "Password" required>
		 <br><br>
		 <label><b>Confirm your password: </b> </label>
		 <input type = "password" name="password" placeholder = "Password" required>
		 <br><br>
		 <button type="submit" name="submit">Submit</button>
		 
		 
		 
		
		</div> 
	<body>
</html>
<?php
//	if(flag==true)
	//{
		//echo "Name          : " .$_POST['fname']." " .$_POST['mname']." ".$_POST['lname']."<br>";
	    //echo "\n Contact number: " .$_POST['mob'] ."<br>";
		//echo "Gender        : " .$_POST['gender'] ."<br>";
		//echo "Address       : " .$_POST['add']."<br>" ;
		//echo "Email         : " .$_POST['mail']."<br>";
	//}
?>
