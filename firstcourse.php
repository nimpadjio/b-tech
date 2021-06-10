<!DOCTYPE html>
<html>
<head>
	<title>Maths</title>

	<style type="text/css">
		body{
			background-color: yellow;
		}

		.email{
			margin-left: 98px;
			width: 400px;
			height: 50px;
		}

		.tel{
			margin-left: 70px;
			width: 400px;
			height: 50px;
		}

		.pwd{
			margin-left: 80px;
			width: 400px;
			height: 50px;
		}

		.cpwd{
			margin-left: 20px;
			width: 400px;
			height: 50px;
		}
		.sup{
			margin-left: 150px;
		}

	</style>
</head>
<body>
<p>
	this is the first course of the year!
</p>


<form>
	<label>Email:</label>
	<input type="text" name="" class="email" required="required" placeholder="">
	<br>
	<label>Telephone:</label>
	<input type="text" name="" required="required" class="tel">
	<br>
	<label>Password</label>
	<input type="text" name="" required="required" class="pwd">
	<br>
	<label>Confirm Password</label>
	<input type="text" name="" required="required" class="cpwd">
	<br>
		
<!--ce qui se trouve ici en bas ce sont des bouttons-->
	<input type="button" name="" value="SignUp"class="sup" onclick="Redirect()"> 
	<!-- <button style="background-color: blue;">sign-up</button> -->
   		
</form>


<script type="text/javascript">
	function Redirect(){
		window.location="Home.php"
	}
</script>

</body>
</html> 