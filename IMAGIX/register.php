<?php include('process.php') ?>
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
  <form method="post" action="register.php" id="register_form">
	<div class="container">
          <div id="title"><h1 id="l1">I</h1>
          <h1 id="l2">M</h1>
          <h1 id="l3">A</h1>
          <h1 id="l4">G</h1>
          <h1 id="l5">I</h1>
          <h1 id="l6">X</h1></div>
		  <p>Please fill in this form to create an account.</p>
          <hr>
  	<div <?php if (isset($email_error)): ?> class="form_error" <?php endif ?> >
		<label for="email"><b>Email<span id="ast">*</span></b></label>
      <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>" required>
      <?php if (isset($email_error)): ?>
      	<span><?php echo $email_error; ?></span>
      <?php endif ?>
  	</div>
  	<div>
	    <label for="psw"><b>Password<span id="ast">*</span></b></label>
  		<input type="password"  placeholder="Password" name="password" id="pass" required>
  	</div>
	  
  	<div>
  		<button type="submit" name="register" id="reg_btn" onclick="validate_password()">Sign Up</button>
  	</div>
	  </div>
  </form>
  
	  </body>
</html>