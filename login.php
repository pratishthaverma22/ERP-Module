<!DOCTYPE html>
<html>
   <head>
      <title>ResearchPortal</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <style>
			* {
			  box-sizing: border-box;
			}

			.header {
			  background-color:#022251;
			  padding:15px;
			}

			.info {
			  width: 35%;
			  float: left;
			  background-color:#022251;
			  padding:15px;
			  color:white;
			}

			.main {
			  width: 30%;
			  float: left;
			  padding:15px;
			  color:white;
			}
			.box {
			  border:#666666 solid 1px;
			  font-size:14px;
			}
			label {
				font-weight:bold;
				width:100px;
				font-size:20px;
			}
			body{
				bgcolor:#CACFD2;
			}
		</style>
	</head>
	<body background="login1.jpg">
		<?php
      require('connection.php');
      session_start();
			$error='';
			if($_SERVER["REQUEST_METHOD"] == "POST")
			{
				$result  = NULL;
				$login=$_POST["loginid"];
				$query = "SELECT * FROM login WHERE ID = $login";
				$result = mysqli_query($db,$query);
				if(!$result)
				{
					die("Unable to connect");
				}
				$row = mysqli_fetch_row($result);
				if($row[0] == $_POST['loginid'] && $row[1] == $_POST['password'])
				{
					$_SESSION['sapid'] = $_POST['loginid'];
					$_SESSION['desig'] = $row[2];
					$_SESSION['dep'] = $row[3];
					header("location:dashboard.php");
				}
				else
				{
					$error = "User Id or Password are incorrect!!!";
				}
			}
		?>
		<div class="header">
			<img src="./img/UPES_Logo.png" alt="UPES" width="20%" height="10%">
		</div>
		<div class="info"><img src="./img/login.png" alt="RESEACH" width="85%" height="85%"></div>
		<div class="info">
			<h1>My Research Is My Freedom</h1>
			<p>write something</p>
			<h2>My Research Is My Freedom</h2>
			<p>Write Something</p>
		</div>
		<div class="main">
			<center><h2 style="color:yellow">Login Here</h2></center>
            <form action = "" method = "post">
				<label>UserName  :&nbsp;&nbsp;</label><input type = "text" name = "loginid" class = "box"/><br /><br />
				<label>Password&nbsp;&nbsp;  :&nbsp;&nbsp;</label><input type = "password" name = "password" class = "box" /><br/><br />
				<center><input type = "submit" value = " Login"/></center><br />
            </form>
			<?php echo $error; ?>
		</div>
	</body>
</html>
