<html>
   <head>
      <title>ResearchPortal</title>
      <style type=text/css>
         .leftdiv
         {

         }
         .middlediv
         {

         background-color:gray
         }
         .rightdiv
         {

         }
         div{
         padding : 1%;
         color: white;
         background-color: 009900;
         width: 30%;
         border: solid black;
         }
      </style>
	</head>
	<body>
		<?php
      require('connection.php');
			session_start();
			$error='';
			if($_SERVER["REQUEST_METHOD"] == "POST")
			{
				$query = "SELECT * FROM login WHERE ID = 40001713";
				$result = mysqli_query($db,$query);
				if(!$result)
				{
					die("Unable to connect");
				}
				$row = mysqli_fetch_row($result);
				if($row[0] == $_POST['loginid'] && $row[1] == $_POST['password'])
				{
					$_SESSION['sapid'] = $_POST['loginid'];
					header("location:dashboard.php");
				}
				else
				{
					$error = "User Id or Password are incorrect!!!";
				}
			}
		?>
		<div class="leftdiv">
			<img src="./img/UPES_Logo.png" alt="UPES" width="20%" height="24%">
		</div>
		<div class="middlediv">
			<b>Login</b>
            <form action = "" method = "post">
				<label>UserName  :</label><input type = "text" name = "loginid" class = "box"/><br /><br />
				<label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
				<input type = "submit" value = " Submit "/><br />
            </form>
			<?php echo $error; ?>
		</div>
		<div class="rightdiv">
			<h1>GeeksforGeeks</h1>
			<p>How many times were you frustrated while looking out
				for a good collection of programming/algorithm/interview
				questions? What did you expect and what did you get?
				This portal has been created to provide well written,
				well thought and well-explained solutions for selected questions.
			</p>
			<h2>GeeksforGeeks</h2>
			<p>GCET is an entrance test for the extensive classroom programme
			   by GeeksforGeeks to build and enhance Data Structures and Algorithm
			   concepts, mentored by Sandeep Jain (Founder & CEO, GeeksforGeeks).
			   He has 7 years of teaching experience and 6 years of industry experience.
			</p>
		</div>
	</body>
</html>
