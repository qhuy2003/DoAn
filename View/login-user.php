<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body>
     <?php if (isset($_GET['error'])) { ?>
     	<b style="color: #f00;"><?=$_GET['error']?></b><br>
      <?php } ?>
	  <div class="d-flex justify-content-center align-items-center"
	  style="min-height: 100vh;">
     <form class="p-5 rounded shadow"
	 style="max-width: 30rem; width: 100%" action="php/login.php" method="POST">
	 <h1 class="text-center display-4 pb-5">LOGIN</h1>

     	<label>Email</label><br>
     	<input type="text" name="email" class="form-control"><br>
     	<label>Password</label><br>
     	<input type="password" name="password" class="form-control"><br><br>
     	<button type="submit" class="btn btn-primary">Login</button>
     	<a href="../index.php">Trang chủ</a>
		<a href="registration.php">Sign Up</a>
		
     </form>
	  </div>
</body>
</html>