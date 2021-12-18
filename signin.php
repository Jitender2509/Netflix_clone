<html>
<head>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="js/jquery-3.4.1.min.js"></script>
</head>
<style>
	a .fa-bars:hover{
		color:#e6b800;
		font-size:25px;
		}

	.loginbox{
		border-radius:15px;
		display:none;
		width:500px;
		background:rgba(0,0,0,0.8);
		margin:100px auto;
		padding:35px;
		color:#fff;
		box-shadow: 0 0 20px 2px rgba(0,0,0,0.5);
		}
	.searchbtn{
		color:white;
		font-size:25px;
		}
	.userbtn{
		color:#e6b800;
		font-size: 25px;	
		}
	a .userbutn:hover{
		font-size: 30px;
	}
	/* Modal Content */
	.modal-content {
	  position: relative;
	  background-color: #fefefe;
	  margin: auto;
	  padding: 0;
	  border: 1px solid #888;
	  width: 80%;
	  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
	  -webkit-animation-name: animatetop;
	  -webkit-animation-duration: 0.4s;
	  animation-name: animatetop;
	  animation-duration: 0.4s
	}
	/* The Close Button */
	.close {
	  color: white;
	  float: right;
	  font-size: 28px;
	  font-weight: bold;
	}

	.close:hover, .close:focus {
	  color: #000;
	  text-decoration: none;
	  cursor: pointer;
	}

	.modal-header {
	  padding: 2px 16px;
	  background-color: #e6b800;
	  color: white;
	}

	.modal-body {padding: 2px 16px;}

	

</style>
<body>
	 <?php 
        include "nav.php";
      ?>
<form action="userlogin.php" method="POST">
	<div class="loginbox" style="border-radius:15px;">
		
			<input class="input-box" type="text" name="name" placeholder="Your Name" /><br><br>
			<input class="input-box" type="text" name="mno" placeholder="Mobile No" /><br><br>
			<input class="input-box" type="text" name="email" placeholder="Email" /><br><br>
			<input class="input-box" type="date" name="dob" placeholder="Birthday" /><br><br>
			<input class="input-box" type="password" name="pass" placeholder="Password" style="width:85%;" id="myinput" />
		<span class="eye" style="position: absolute;" onclick="myfunction()">
			<i id="hide" class="fa fa-eye"  style="display:none"></i>
			<i id="show" class="fa fa-eye-slash"></i>
		</span><br><br></b>
			<button name="sub" class="btn" >Sign In</button>&nbsp;
			<button name="login" class="signin__button" href="userlogin.php">Login In</button>
	</div>

	<script>
		function myfunction(){
			var x = document.getElementById("myinput");
			var y = document.getElementById("hide");
			var z = document.getElementById("show");
			if(x.type === 'password')
			{
				x.type="text";
				y.style.display = "block";
				z.style.display = "none";

			}
			else{
				x.type="password";
				y.style.display = "none";
				z.style.display = "block";

			}

		}
	</script>
</form>
</body>
</html>