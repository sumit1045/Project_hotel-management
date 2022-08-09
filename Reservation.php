<!DOCTYPE html>
<html>
<head>
<title>Reservation</title>
</head>
<?php
	$Fnameerr="";
	$fname="";
	$Lname="";
	$mname="";
	$email="";
	$mobile="";
	$address="";
	$mobileerr="";
	$Lerr="";
	$p="";
	$c="";
	$passerr="";
	$uname="";
	$flag=True;
	
	if(isset($_POST['submit']))
	{
		$fname=$_POST['firstname'];	
		$Lname=$_POST['lastname'];	
		$mname=$_POST['middlename'];
		$email=$_POST['email-id'];
		$mobile=$_POST['mobile-no'];
		$address=$_POST['address']	;
		$p=$_POST['password'];
		$c=$_POST['cpassword'];
		$uname=$_POST['uname'];
		
		if(empty($fname))
		{
			$Fnameerr="Name compulsory";
			$flag=False;
		}
		if(empty($Lname))
		{
			$Lerr="last name compulsory";
			$flag=False;
		}
		if(empty($mobile))
		{
			$mobileerr="Mobile number compulsory";
			$flag=False;
		}
		elseif(!preg_match("^[789]\d{9}$^",$mobile))
			{
				$mobileerr="Enter correct mobile number ";
				$flag=False;	
			}
		
		if($p!=$c)
		{
			$passerr="Enter correct password";
			$flag=False;
		}
	}
	
	
?>
<style>
	input[type=text]{
				margin:7px;
				}
</style>
<body>
	<center>
		<h1>Reservation</h1>

	<form action="" method="post" enctype="multipart/form-data">
		<fieldset>
		First Name:<input type="text" name="firstname"><br>
		Middle Name :<input type="text" name="middlename" ><br>
		Last Name :<input type="text" name="lastname"><br>
		
		 Gender:<input type="radio" name="gender" value="male">Male
		 <input type="radio" name="gender" value="female">Female<br>
		 
		Email Id:<input type="text" name="email-id"><br>
		Mobile No:<input type="text" name="mobile-no" ><br>
		Address:<input type="text" name="address"><br>
		Additional Remark:<input type="text" name="additional remark"><br>
		
		Check In:<input type="text" name="check-in"><br>
		Check Out:<input type="text" name="check-out"><br>
		Rooms.:<input type="text" name="room"><br>
		
		user name:<input type="text" name="uname"><br>
		
		
		password:<input type="password" name="password"  ><br>
		
		confirm password:<input type="password" name="cpassword" ><br>
		
		
		<input name="submit" type="submit" value="submit" >
		<input name="reset" type="button" value="clear">
		</fieldset>
	</form>
	</center>
</body>
</html>

