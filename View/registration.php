<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign Up</title>
</head>
<body>
     <h3>Sign Up</h3>
     <?php if (isset($_GET['error'])) { ?>
     	<b style="color: #f00;"><?=$_GET['error']?></b><br>
      <?php } ?>

      <?php if (isset($_GET['success'])) { ?>
     	<b style="color: #0f0;"><?=$_GET['success']?></b><br>
      <?php } ?>
     
     <form action="php/signup.php" method="POST">
     	<label>Họ </label><br>
     	<input type="text" name="first_name"><br>
     	<label>Tên</label><br>
     	<input type="text" name="last_name"><br>
     	<label>Email</label><br>
     	<input type="text" name="email"><br>
     	<label>Mật khẩu</label><br>
     	<input type="password" name="password"><br>
     	<label>Nhập lại mật khẩu</label><br>
     	<input type="password" name="confirm_password"><br><br>
     	<button type="submit">Sign Up</button>
     	<a href="login-user.php">Login</a>
     </form>
</body>
</html>